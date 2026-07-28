<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_Gallery/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$destinationId = get_queried_object_id();
$field = get_post_type($destinationId) === 'kea_school' ? 'kea_school_gallery' : 'kea_destination_gallery';
$imageIds = get_post_meta($destinationId, $field, true);
$imageIds = is_array($imageIds) ? array_filter(array_map('absint', $imageIds)) : [];

if (!in_array(get_post_type($destinationId), ['kea_destination', 'kea_school'], true) || $imageIds === []) {
    return 1;
}

$content = is_array($propertiesData['content']['content'] ?? null)
    ? $propertiesData['content']['content']
    : (is_array($propertiesData['content'] ?? null) ? $propertiesData['content'] : []);
$heading = trim((string) ($content['heading'] ?? ''));
?>
<?php if ($heading !== '') : ?><h2 class="kea-destination-gallery__heading"><?php echo esc_html($heading); ?></h2><?php endif; ?>
<div class="kea-destination-gallery__grid">
    <?php foreach ($imageIds as $imageId) : ?>
        <figure class="kea-destination-gallery__item"><?php echo wp_get_attachment_image($imageId, 'large', false, ['loading' => 'lazy']); ?></figure>
    <?php endforeach; ?>
</div>
