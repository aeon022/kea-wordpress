<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_Content/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$destinationId = get_queried_object_id();

if ($destinationId <= 0 || !in_array(get_post_type($destinationId), ['kea_destination', 'kea_school', 'kea_program'], true)) {
    return 1;
}

$content = is_array($propertiesData['content']['content'] ?? null)
    ? $propertiesData['content']['content']
    : (is_array($propertiesData['content'] ?? null) ? $propertiesData['content'] : []);
$sections = get_post_type($destinationId) === 'kea_program' ? [
    [$content['character_heading'] ?? 'Starttermine', get_post_meta($destinationId, 'kea_program_start_dates', true)],
    [$content['recommendation_heading'] ?? 'Enthalten', get_post_meta($destinationId, 'kea_program_included', true)],
    [$content['accommodation_heading'] ?? 'Nicht enthalten', get_post_meta($destinationId, 'kea_program_not_included', true)],
    [$content['travel_heading'] ?? 'Preis-Hinweis', get_post_meta($destinationId, 'kea_program_price_note', true)],
] : (get_post_type($destinationId) === 'kea_school' ? [
    [$content['character_heading'] ?? 'Lage', get_post_meta($destinationId, 'kea_school_location_note', true)],
    [$content['recommendation_heading'] ?? 'KEA-Einschätzung', get_post_meta($destinationId, 'kea_school_kea_assessment', true)],
    [$content['accommodation_heading'] ?? 'Ausstattung', get_post_meta($destinationId, 'kea_school_facilities', true)],
] : [
    [$content['character_heading'] ?? 'Warum dieses Reiseziel?', get_post_meta($destinationId, 'kea_destination_character', true)],
    [$content['recommendation_heading'] ?? 'KEA-Empfehlung', get_post_meta($destinationId, 'kea_destination_kea_recommendation', true)],
    [$content['accommodation_heading'] ?? 'Unterkunft', get_post_meta($destinationId, 'kea_destination_accommodation_note', true)],
    [$content['travel_heading'] ?? 'Anreise', get_post_meta($destinationId, 'kea_destination_travel_note', true)],
]);
$sections = array_filter($sections, static fn (array $section): bool => trim((string) $section[1]) !== '');

if ($sections === []) {
    return 1;
}
?>
<div class="kea-destination-content__grid">
    <?php foreach ($sections as [$heading, $body]) : ?>
        <article class="kea-destination-content__item">
            <?php if (trim((string) $heading) !== '') : ?>
                <h2><?php echo esc_html((string) $heading); ?></h2>
            <?php endif; ?>
            <div class="kea-destination-content__body"><?php echo wp_kses_post(wpautop((string) $body)); ?></div>
        </article>
    <?php endforeach; ?>
</div>
