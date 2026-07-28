<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_List/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) { exit; }

$content = is_array($propertiesData['content']['content'] ?? null) ? $propertiesData['content']['content'] : [];
$content['more_label'] = $content['more_label'] ?? 'Alle Reiseziele';
$content['more_url'] = $content['more_url'] ?? '/reiseziele/';
$content['filter_label'] = $content['filter_label'] ?? 'Reiseziele filtern';
$content['language_label'] = $content['language_label'] ?? 'Sprache';
$content['country_label'] = $content['country_label'] ?? 'Land';
$content['reset_label'] = $content['reset_label'] ?? 'Alle anzeigen';
$ids = array_values(array_filter(array_map('absint', preg_split('/[^0-9]+/', (string) ($content['ids'] ?? '')) ?: [])));
$isArchive = is_post_type_archive('kea_destination');
$filters = [];
foreach (['language' => 'kea_language', 'country' => 'kea_country'] as $key => $taxonomy) {
    $rawValue = $_GET[$key] ?? '';
    $slug = is_string($rawValue) ? sanitize_title(wp_unslash($rawValue)) : '';
    if ($slug !== '' && term_exists($slug, $taxonomy)) {
        $filters[$taxonomy] = $slug;
    }
}
$queryArgs = ['post_type' => 'kea_destination', 'post_status' => 'publish', 'posts_per_page' => $isArchive ? -1 : max(1, min(12, absint($content['limit'] ?? 6))), 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true];
if ($ids !== []) { $queryArgs['post__in'] = $ids; $queryArgs['orderby'] = 'post__in'; }
if ($filters !== []) { $queryArgs['tax_query'] = array_map(static fn(string $taxonomy, string $slug): array => ['taxonomy' => $taxonomy, 'field' => 'slug', 'terms' => $slug], array_keys($filters), $filters); }
$query = new \WP_Query($queryArgs);
$languages = $isArchive ? get_terms(['taxonomy' => 'kea_language', 'hide_empty' => true]) : [];
$countries = $isArchive ? get_terms(['taxonomy' => 'kea_country', 'hide_empty' => true]) : [];
?>
<header class="kea-destination-list__header"><div><?php if (($content['eyebrow'] ?? '') !== '') : ?><p><?php echo esc_html((string) $content['eyebrow']); ?></p><?php endif; ?><h2><?php echo esc_html((string) ($content['title'] ?? '')); ?></h2></div><?php if (($content['intro'] ?? '') !== '') : ?><div><?php echo esc_html((string) $content['intro']); ?></div><?php endif; ?></header>
<?php if ($isArchive) : ?><form class="kea-destination-list__filters" method="get" action="<?php echo esc_url((string) get_post_type_archive_link('kea_destination')); ?>"><p><?php echo esc_html((string) $content['filter_label']); ?></p><label><span><?php echo esc_html((string) $content['language_label']); ?></span><select name="language"><option value="">Alle Sprachen</option><?php foreach (is_array($languages) ? $languages : [] as $term) : ?><option value="<?php echo esc_attr($term->slug); ?>"<?php selected($filters['kea_language'] ?? '', $term->slug); ?>><?php echo esc_html($term->name); ?></option><?php endforeach; ?></select></label><label><span><?php echo esc_html((string) $content['country_label']); ?></span><select name="country"><option value="">Alle Länder</option><?php foreach (is_array($countries) ? $countries : [] as $term) : ?><option value="<?php echo esc_attr($term->slug); ?>"<?php selected($filters['kea_country'] ?? '', $term->slug); ?>><?php echo esc_html($term->name); ?></option><?php endforeach; ?></select></label><button type="submit">Filtern</button><?php if ($filters !== []) : ?><a href="<?php echo esc_url((string) get_post_type_archive_link('kea_destination')); ?>"><?php echo esc_html((string) $content['reset_label']); ?></a><?php endif; ?></form><?php endif; ?>
<?php if ($query->have_posts()) : ?><div class="kea-destination-list__grid"><?php while ($query->have_posts()) : $query->the_post(); $id=get_the_ID(); $imageId=absint(get_post_meta($id,'kea_destination_hero_image',true)) ?: get_post_thumbnail_id($id); $countries=get_the_terms($id,'kea_country'); $languages=get_the_terms($id,'kea_language'); ?><a class="kea-destination-list__card<?php echo $imageId ? '' : ' kea-destination-list__card--no-image'; ?>" href="<?php the_permalink(); ?>"><?php if ($imageId) : ?><?php echo wp_get_attachment_image($imageId, 'large', false, ['loading' => 'lazy']); ?><?php endif; ?><span class="kea-destination-list__shade"></span><span class="kea-destination-list__content"><span class="kea-destination-list__meta"><?php echo esc_html(implode(' · ', array_filter([is_array($countries) ? implode(', ', wp_list_pluck($countries,'name')) : '', is_array($languages) ? implode(', ', wp_list_pluck($languages,'name')) : '']))); ?></span><strong><?php the_title(); ?></strong><span>Ort entdecken ↗</span></span></a><?php endwhile; ?></div><?php if (!$isArchive && ($content['more_label'] ?? '') !== '' && ($content['more_url'] ?? '') !== '') : ?><p class="kea-destination-list__more"><a href="<?php echo esc_url((string) $content['more_url']); ?>"><?php echo esc_html((string) $content['more_label']); ?> ↗</a></p><?php endif; ?><?php endif; wp_reset_postdata(); ?>
<?php if ($isArchive && !$query->have_posts()) : ?><p class="kea-destination-list__empty">Keine Reiseziele gefunden. <a href="<?php echo esc_url((string) get_post_type_archive_link('kea_destination')); ?>"><?php echo esc_html((string) $content['reset_label']); ?></a></p><?php endif; ?>
