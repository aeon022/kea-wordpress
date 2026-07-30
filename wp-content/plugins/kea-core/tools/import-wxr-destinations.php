<?php
// Dateipfad: tools/import-wxr-destinations.php
declare(strict_types=1);

if (PHP_SAPI !== 'cli') {
    exit(1);
}

$project_root = '/Users/gweiher/Sites/kea-wordpress';
$xml_path = $project_root . '/data/keasprachreisen.WordPress.2026-07-27.xml';
$apply = in_array('--apply', $argv, true);

if (!is_file($xml_path)) {
    fwrite(STDERR, "XML-Export nicht gefunden.\n");
    exit(1);
}

require_once $project_root . '/wp-load.php';

if (!post_type_exists('kea_destination')) {
    fwrite(STDERR, "KEA Core ist nicht aktiv.\n");
    exit(1);
}

$xml = simplexml_load_file($xml_path);

if (!$xml instanceof SimpleXMLElement) {
    fwrite(STDERR, "XML-Export ist ungültig.\n");
    exit(1);
}

$namespaces = $xml->getNamespaces(true);
$wordpress_namespace = $namespaces['wp'];
$content_namespace = $namespaces['content'];
$attachments = kea_wxr_collect_attachments($xml, $wordpress_namespace);
$destinations = [];

foreach ($xml->channel->item as $item) {
    $wordpress = $item->children($wordpress_namespace);

    if ((string) $wordpress->post_type !== 'gallery' || (string) $wordpress->status !== 'publish') {
        continue;
    }

    $title = trim((string) $item->title);
    $destination = kea_wxr_destination_data($title);

    if ($destination === null || isset($destinations[$destination['slug']])) {
        continue;
    }

    $body = (string) $item->children($content_namespace)->encoded;
    $thumbnail_id = 0;

    foreach ($wordpress->postmeta as $meta) {
        if ((string) $meta->meta_key === '_thumbnail_id') {
            $thumbnail_id = absint((string) $meta->meta_value);
            break;
        }
    }

    $destinations[$destination['slug']] = [
        ...$destination,
        'source_id' => (int) $wordpress->post_id,
        'content' => kea_wxr_clean_content($body),
        'image_ids' => array_unique(array_filter([$thumbnail_id, ...kea_wxr_extract_image_ids($body)])),
        'language' => kea_wxr_language($item),
    ];
}

$created = 0;
$updated = 0;
$skipped = 0;
$missing_images = 0;

foreach ($destinations as $destination) {
    $existing = get_page_by_path($destination['slug'], OBJECT, 'kea_destination');

    if ($existing instanceof WP_Post && (int) get_post_meta($existing->ID, '_kea_wxr_source_id', true) !== $destination['source_id']) {
        $skipped++;
        echo "Übersprungen: {$destination['title']} (existiert bereits)\n";
        continue;
    }

    if (!$apply) {
        echo "Vorschau: {$destination['title']} ({$destination['language']}, {$destination['country']})\n";
        continue;
    }

    $is_update = $existing instanceof WP_Post;
    $post_id = $is_update
        ? $existing->ID
        : wp_insert_post([
            'post_type' => 'kea_destination',
            'post_status' => 'publish',
            'post_title' => $destination['title'],
            'post_name' => $destination['slug'],
            'post_content' => $destination['content'],
            'post_excerpt' => wp_trim_words(wp_strip_all_tags($destination['content']), 40, ' …'),
        ], true);

    if (is_wp_error($post_id)) {
        fwrite(STDERR, "Fehler bei {$destination['title']}: {$post_id->get_error_message()}\n");
        continue;
    }

    kea_wxr_assign_term((int) $post_id, 'kea_language', $destination['language']);
    kea_wxr_assign_term((int) $post_id, 'kea_country', $destination['country']);
    update_post_meta((int) $post_id, 'kea_destination_intro', wp_trim_words(wp_strip_all_tags($destination['content']), 40, ' …'));
    update_post_meta((int) $post_id, '_kea_wxr_source_id', $destination['source_id']);

    $media_ids = [];
    foreach ($destination['image_ids'] as $source_id) {
        $media_id = kea_wxr_find_local_attachment($attachments[$source_id] ?? '');

        if ($media_id === 0) {
            $missing_images++;
            echo "Medienreferenz fehlt: " . ($attachments[$source_id] ?? "ID {$source_id}") . "\n";
            continue;
        }

        $media_ids[] = $media_id;
    }

    $media_ids = array_values(array_unique($media_ids));

    if ($media_ids !== []) {
        set_post_thumbnail((int) $post_id, $media_ids[0]);
        update_post_meta((int) $post_id, 'kea_destination_hero_image', $media_ids[0]);
        update_post_meta((int) $post_id, 'kea_destination_gallery', $media_ids);
    }

    if ($is_update) {
        $updated++;
    } else {
        $created++;
    }

    echo ($is_update ? 'Aktualisiert: ' : 'Importiert: ') . $destination['title'] . "\n";
}

echo sprintf("%s abgeschlossen: %d importiert, %d aktualisiert, %d übersprungen, %d Medien nicht zugeordnet.\n", $apply ? 'Import' : 'Vorschau', $created, $updated, $skipped, $missing_images);

function kea_wxr_collect_attachments(SimpleXMLElement $xml, string $wordpress_namespace): array
{
    $attachments = [];

    foreach ($xml->channel->item as $item) {
        $wordpress = $item->children($wordpress_namespace);

        if ((string) $wordpress->post_type === 'attachment') {
            $attachments[(int) $wordpress->post_id] = (string) $wordpress->attachment_url;
        }
    }

    return $attachments;
}

function kea_wxr_destination_data(string $title): ?array
{
    $destinations = [
        'Englisch in Hastings' => ['title' => 'Hastings', 'slug' => 'hastings', 'country' => 'Großbritannien'],
        'Mailand' => ['title' => 'Mailand', 'slug' => 'mailand', 'country' => 'Italien'],
        'Barcelona' => ['title' => 'Barcelona', 'slug' => 'barcelona', 'country' => 'Spanien'],
        'Otranto' => ['title' => 'Otranto', 'slug' => 'otranto', 'country' => 'Italien'],
        'Brighton & Hove' => ['title' => 'Brighton', 'slug' => 'brighton', 'country' => 'Großbritannien'],
        'Cambridge' => ['title' => 'Cambridge', 'slug' => 'cambridge', 'country' => 'Großbritannien'],
        'Canterbury' => ['title' => 'Canterbury', 'slug' => 'canterbury', 'country' => 'Großbritannien'],
        'Cork' => ['title' => 'Cork', 'slug' => 'cork', 'country' => 'Irland'],
        'Dublin' => ['title' => 'Dublin', 'slug' => 'dublin', 'country' => 'Irland'],
        'Edinburgh' => ['title' => 'Edinburgh', 'slug' => 'edinburgh', 'country' => 'Großbritannien'],
        'Exeter' => ['title' => 'Exeter', 'slug' => 'exeter', 'country' => 'Großbritannien'],
        'Galway' => ['title' => 'Galway', 'slug' => 'galway', 'country' => 'Irland'],
        'London' => ['title' => 'London', 'slug' => 'london', 'country' => 'Großbritannien'],
        'Malta' => ['title' => 'Malta', 'slug' => 'malta', 'country' => 'Malta'],
        'Oxford' => ['title' => 'Oxford', 'slug' => 'oxford', 'country' => 'Großbritannien'],
        'Scarborough' => ['title' => 'Scarborough', 'slug' => 'scarborough', 'country' => 'Großbritannien'],
        'Englisch in Portsmouth' => ['title' => 'Portsmouth', 'slug' => 'portsmouth', 'country' => 'Großbritannien'],
        'Bordeaux' => ['title' => 'Bordeaux', 'slug' => 'bordeaux', 'country' => 'Frankreich'],
        'Paris' => ['title' => 'Paris', 'slug' => 'paris', 'country' => 'Frankreich'],
        'Nizza' => ['title' => 'Nizza', 'slug' => 'nizza', 'country' => 'Frankreich'],
        'Rouen' => ['title' => 'Rouen', 'slug' => 'rouen', 'country' => 'Frankreich'],
        'Vichy' => ['title' => 'Vichy', 'slug' => 'vichy', 'country' => 'Frankreich'],
        'Französisch in Nizza' => ['title' => 'Nizza', 'slug' => 'nizza', 'country' => 'Frankreich'],
        'Spanisch in Almuñécar' => ['title' => 'Almuñécar', 'slug' => 'almunecar', 'country' => 'Spanien'],
        'Broadstairs' => ['title' => 'Broadstairs', 'slug' => 'broadstairs', 'country' => 'Großbritannien'],
        'Englisch in Bury St Edmunds' => ['title' => 'Bury St Edmunds', 'slug' => 'bury-st-edmunds', 'country' => 'Großbritannien'],
        'Bury St Edmunds' => ['title' => 'Bury St Edmunds', 'slug' => 'bury-st-edmunds', 'country' => 'Großbritannien'],
        'Florenz' => ['title' => 'Florenz', 'slug' => 'florenz', 'country' => 'Italien'],
        'Triest' => ['title' => 'Triest', 'slug' => 'triest', 'country' => 'Italien'],
        'Granada' => ['title' => 'Granada', 'slug' => 'granada', 'country' => 'Spanien'],
        'Rom' => ['title' => 'Rom', 'slug' => 'rom', 'country' => 'Italien'],
        'Málaga' => ['title' => 'Málaga', 'slug' => 'malaga', 'country' => 'Spanien'],
        'Segovia' => ['title' => 'Segovia', 'slug' => 'segovia', 'country' => 'Spanien'],
    ];

    return $destinations[$title] ?? null;
}

function kea_wxr_clean_content(string $content): string
{
    $content = preg_replace('/\[(?:\/)?(?:vc|wpb|arrowpress)_[^\]]*\]/i', '', $content) ?? '';
    $content = preg_replace('/\]{2,}\s*$/', '', $content) ?? '';

    return trim(wp_kses_post(str_replace('&nbsp;', ' ', $content)));
}

function kea_wxr_extract_image_ids(string $content): array
{
    preg_match_all('/\[(?:vc_media_grid|vc_single_image)[^\]]*(?:include|image)="([0-9,]+)"[^\]]*\]/', $content, $matches);

    return array_map('absint', array_filter(explode(',', implode(',', $matches[1] ?? []))));
}

function kea_wxr_language(SimpleXMLElement $item): string
{
    foreach ($item->category as $category) {
        $slug = (string) $category['nicename'];

        if (str_starts_with($slug, 'englisch')) {
            return 'Englisch';
        }

        if (str_starts_with($slug, 'spanisch')) {
            return 'Spanisch';
        }

        if (str_starts_with($slug, 'franzoesisch')) {
            return 'Französisch';
        }

        if (str_starts_with($slug, 'italienisch')) {
            return 'Italienisch';
        }
    }

    return 'Englisch';
}

function kea_wxr_assign_term(int $post_id, string $taxonomy, string $term_name): void
{
    $term = term_exists($term_name, $taxonomy);

    if ($term === null || $term === 0) {
        $term = wp_insert_term($term_name, $taxonomy);
    }

    if (is_wp_error($term)) {
        return;
    }

    wp_set_object_terms($post_id, [(int) (is_array($term) ? $term['term_id'] : $term)], $taxonomy, false);
}

function kea_wxr_find_local_attachment(string $source_url): int
{
    global $wpdb;

    $filename = wp_basename((string) wp_parse_url($source_url, PHP_URL_PATH));

    if ($filename === '') {
        return 0;
    }

    $attachment_id = $wpdb->get_var($wpdb->prepare(
        "SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key = '_wp_attached_file' AND meta_value LIKE %s LIMIT 1",
        '%' . $wpdb->esc_like($filename)
    ));

    return absint($attachment_id);
}
