<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_CTA/ssr.php
declare(strict_types=1);
if (!defined('ABSPATH')) { exit; }
$destinationId = get_queried_object_id();
if (!in_array(get_post_type($destinationId), ['kea_destination', 'kea_school', 'kea_program'], true)) { return 1; }
$content = is_array($propertiesData['content']['content'] ?? null)
    ? $propertiesData['content']['content']
    : (is_array($propertiesData['content'] ?? null) ? $propertiesData['content'] : []);
$context = get_post_type($destinationId) === 'kea_program'
    ? ['program' => get_post_field('post_name', $destinationId), 'school' => get_post_field('post_name', absint(get_post_meta($destinationId, 'kea_program_school', true))), 'destination' => get_post_field('post_name', absint(get_post_meta($destinationId, 'kea_program_destination', true)))]
    : (get_post_type($destinationId) === 'kea_school'
    ? ['school' => get_post_field('post_name', $destinationId), 'destination' => get_post_field('post_name', absint(get_post_meta($destinationId, 'kea_school_destination', true)))]
    : ['destination' => get_post_field('post_name', $destinationId)]);
$url = function_exists('kea_get_inquiry_url') ? kea_get_inquiry_url($context) : add_query_arg($context, home_url('/anfrage/'));
?><div class="kea-destination-cta__inner"><h2><?php echo esc_html((string) ($content['heading'] ?? '')); ?></h2><p><?php echo esc_html((string) ($content['text'] ?? '')); ?></p><a href="<?php echo esc_url($url); ?>"><?php echo esc_html((string) ($content['label'] ?? '')); ?></a></div>
