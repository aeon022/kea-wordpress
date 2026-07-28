<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_Testimonials/ssr.php
declare(strict_types=1);
if (!defined('ABSPATH')) { exit; }
$destinationId = get_queried_object_id();
if (get_post_type($destinationId) !== 'kea_destination') { return 1; }
$testimonials = get_posts(['post_type' => 'kea_testimonial', 'post_status' => 'publish', 'posts_per_page' => 3, 'meta_key' => 'kea_testimonial_destination', 'meta_value' => $destinationId, 'no_found_rows' => true]);
if ($testimonials === []) { return 1; }
$content = is_array($propertiesData['content']['content'] ?? null)
    ? $propertiesData['content']['content']
    : (is_array($propertiesData['content'] ?? null) ? $propertiesData['content'] : []);
$heading = trim((string) ($content['heading'] ?? ''));
?>
<?php if ($heading !== '') : ?><h2 class="kea-destination-testimonials__heading"><?php echo esc_html($heading); ?></h2><?php endif; ?>
<div class="kea-destination-testimonials__list"><?php foreach ($testimonials as $testimonial) : $quote = trim((string) get_post_meta($testimonial->ID, 'kea_testimonial_quote', true)); if ($quote === '') { continue; } ?><blockquote><p>„<?php echo esc_html($quote); ?>“</p><footer><?php echo esc_html((string) (get_post_meta($testimonial->ID, 'kea_testimonial_person_name', true) ?: $testimonial->post_title)); ?></footer></blockquote><?php endforeach; ?></div>
