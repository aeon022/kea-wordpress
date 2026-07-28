<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_Hero/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$destinationId = get_queried_object_id();

if ($destinationId <= 0 || !in_array(get_post_type($destinationId), ['kea_destination', 'kea_school', 'kea_program'], true)) {
    return 1;
}

$postType = get_post_type($destinationId);
$content = is_array($propertiesData['content']['content'] ?? null)
    ? $propertiesData['content']['content']
    : (is_array($propertiesData['content'] ?? null) ? $propertiesData['content'] : []);
$relatedSchoolId = $postType === 'kea_program' ? absint(get_post_meta($destinationId, 'kea_program_school', true)) : $destinationId;
$relatedDestinationId = $postType === 'kea_program'
    ? absint(get_post_meta($destinationId, 'kea_program_destination', true))
    : ($postType === 'kea_school' ? absint(get_post_meta($destinationId, 'kea_school_destination', true)) : $destinationId);
$imageId = $postType === 'kea_destination'
    ? absint(get_post_meta($destinationId, 'kea_destination_hero_image', true))
    : absint((get_post_meta($relatedSchoolId, 'kea_school_gallery', true)[0] ?? 0));
$imageUrl = $imageId > 0 ? wp_get_attachment_image_url($imageId, 'full') : '';
$logoId = $postType === 'kea_destination' ? 0 : absint(get_post_meta($relatedSchoolId, 'kea_school_logo', true));
$introField = $postType === 'kea_destination' ? 'kea_destination_intro' : ($postType === 'kea_school' ? 'kea_school_intro' : 'kea_program_intro');
$intro = trim((string) get_post_meta($destinationId, $introField, true));
$terms = array_merge(
    get_the_terms($relatedDestinationId, 'kea_country') ?: [],
    get_the_terms($relatedDestinationId, 'kea_language') ?: []
);
$context = $postType === 'kea_program'
    ? ['program' => get_post_field('post_name', $destinationId), 'school' => get_post_field('post_name', $relatedSchoolId), 'destination' => get_post_field('post_name', $relatedDestinationId)]
    : ($postType === 'kea_school'
    ? ['school' => get_post_field('post_name', $destinationId), 'destination' => get_post_field('post_name', $relatedDestinationId)]
    : ['destination' => get_post_field('post_name', $destinationId)]);
$inquiryUrl = function_exists('kea_get_inquiry_url')
    ? kea_get_inquiry_url($context)
    : add_query_arg($context, home_url('/anfrage/'));
$ctaLabel = trim((string) ($content['cta_label'] ?? 'Kostenlos beraten lassen'));
?>
<?php if ($imageUrl !== '') : ?>
    <div class="kea-destination-hero__image" style="background-image:url('<?php echo esc_url($imageUrl); ?>')" aria-hidden="true"></div>
<?php endif; ?>
<div class="kea-destination-hero__veil"></div>
<div class="kea-destination-hero__content">
    <?php if ($logoId > 0) : ?>
        <div class="kea-destination-hero__logo"><?php echo wp_get_attachment_image($logoId, 'medium', false, ['loading' => 'eager']); ?></div>
    <?php endif; ?>
    <?php if ($terms !== []) : ?>
        <p class="kea-destination-hero__eyebrow"><?php echo esc_html(implode(' · ', wp_list_pluck($terms, 'name'))); ?></p>
    <?php endif; ?>
    <h1 class="kea-destination-hero__title"><?php echo esc_html(get_the_title($destinationId)); ?></h1>
    <?php if ($intro !== '') : ?>
        <p class="kea-destination-hero__intro"><?php echo esc_html($intro); ?></p>
    <?php endif; ?>
    <?php if ($ctaLabel !== '') : ?>
        <a class="kea-destination-hero__cta" href="<?php echo esc_url($inquiryUrl); ?>"><?php echo esc_html($ctaLabel); ?></a>
    <?php endif; ?>
</div>
