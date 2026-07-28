<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_Facts/ssr.php
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
$facts = get_post_type($destinationId) === 'kea_program' ? [
    [$content['best_season_label'] ?? 'Lektionen', ($value = absint(get_post_meta($destinationId, 'kea_program_lessons_per_week', true))) > 0 ? sprintf('%d Lektionen/Woche', $value) : ''],
    [$content['min_duration_label'] ?? 'Dauer', get_post_meta($destinationId, 'kea_program_duration', true)],
    [$content['accommodation_label'] ?? 'Sprachniveau', get_post_meta($destinationId, 'kea_program_language_level', true)],
    [$content['travel_label'] ?? 'Mindestalter', ($value = absint(get_post_meta($destinationId, 'kea_program_min_age', true))) > 0 ? sprintf('ab %d Jahren', $value) : ''],
] : (get_post_type($destinationId) === 'kea_school' ? [
    [$content['best_season_label'] ?? 'Gruppengröße', ($value = absint(get_post_meta($destinationId, 'kea_school_group_size', true))) > 0 ? sprintf('Ø %d Personen', $value) : ''],
    [$content['min_duration_label'] ?? 'Mindestalter', ($value = absint(get_post_meta($destinationId, 'kea_school_min_age', true))) > 0 ? sprintf('ab %d Jahren', $value) : ''],
    [$content['accommodation_label'] ?? 'Akkreditierungen', get_post_meta($destinationId, 'kea_school_accreditations', true)],
] : [
    [$content['best_season_label'] ?? 'Beste Reisezeit', get_post_meta($destinationId, 'kea_destination_best_season', true)],
    [$content['min_duration_label'] ?? 'Mindestdauer', get_post_meta($destinationId, 'kea_destination_min_duration', true)],
    [$content['accommodation_label'] ?? 'Unterkunft', get_post_meta($destinationId, 'kea_destination_accommodation_note', true)],
    [$content['travel_label'] ?? 'Anreise', get_post_meta($destinationId, 'kea_destination_travel_note', true)],
]);
$facts = array_filter($facts, static fn (array $fact): bool => trim((string) $fact[1]) !== '');

if ($facts === []) {
    return 1;
}
?>
<?php if (trim((string) ($content['heading'] ?? '')) !== '') : ?>
    <h2 class="kea-destination-facts__heading"><?php echo esc_html((string) $content['heading']); ?></h2>
<?php endif; ?>
<dl class="kea-destination-facts__list">
    <?php foreach ($facts as [$label, $value]) : ?>
        <div class="kea-destination-facts__item">
            <dt><?php echo esc_html((string) $label); ?></dt>
            <dd><?php echo esc_html((string) $value); ?></dd>
        </div>
    <?php endforeach; ?>
</dl>
