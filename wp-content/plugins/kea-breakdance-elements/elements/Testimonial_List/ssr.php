<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Testimonial_List/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$content = is_array($propertiesData['content']['content'] ?? null)
    ? $propertiesData['content']['content']
    : (is_array($propertiesData['content'] ?? null) ? $propertiesData['content'] : []);
$testimonials = get_posts([
    'post_type' => 'kea_testimonial',
    'post_status' => 'publish',
    'posts_per_page' => max(1, min(24, absint($content['limit'] ?? 12))),
    'orderby' => 'date',
    'order' => 'DESC',
    'no_found_rows' => true,
]);

if ($testimonials === []) {
    return 1;
}
?>
<header class="kea-testimonial-list__header">
    <?php if (($content['eyebrow'] ?? '') !== '') : ?><p><?php echo esc_html((string) $content['eyebrow']); ?></p><?php endif; ?>
    <?php if (($content['title'] ?? '') !== '') : ?><h1><?php echo esc_html((string) $content['title']); ?></h1><?php endif; ?>
    <?php if (($content['intro'] ?? '') !== '') : ?><div><?php echo esc_html((string) $content['intro']); ?></div><?php endif; ?>
</header>
<div class="kea-testimonial-list__grid">
    <?php foreach ($testimonials as $testimonial) :
        $quote = trim((string) get_post_meta($testimonial->ID, 'kea_testimonial_quote', true));
        if ($quote === '') { continue; }
        $name = trim((string) get_post_meta($testimonial->ID, 'kea_testimonial_person_name', true)) ?: $testimonial->post_title;
        $destinationId = absint(get_post_meta($testimonial->ID, 'kea_testimonial_destination', true));
        $year = absint(get_post_meta($testimonial->ID, 'kea_testimonial_year', true));
        $portraitId = absint(get_post_meta($testimonial->ID, 'kea_testimonial_portrait', true));
    ?>
        <article>
            <?php if ($portraitId) : ?><div class="kea-testimonial-list__portrait"><?php echo wp_get_attachment_image($portraitId, 'medium', false, ['loading' => 'lazy']); ?></div><?php endif; ?>
            <blockquote>„<?php echo esc_html($quote); ?>“</blockquote>
            <p><strong><?php echo esc_html($name); ?></strong><?php if ($destinationId || $year) : ?><span><?php echo esc_html(implode(' · ', array_filter([$destinationId ? get_the_title($destinationId) : '', $year ? (string) $year : '']))); ?></span><?php endif; ?></p>
        </article>
    <?php endforeach; ?>
</div>
