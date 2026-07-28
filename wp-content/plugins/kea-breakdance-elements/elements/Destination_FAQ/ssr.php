<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_FAQ/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$destinationId = get_queried_object_id();
$faq = get_post_meta($destinationId, 'kea_destination_faq', true);
$faq = is_array($faq) ? array_filter($faq, static fn ($item): bool => is_array($item) && trim((string) ($item['question'] ?? '')) !== '' && trim((string) ($item['answer'] ?? '')) !== '') : [];

if (get_post_type($destinationId) !== 'kea_destination' || $faq === []) {
    return 1;
}

$content = is_array($propertiesData['content']['content'] ?? null)
    ? $propertiesData['content']['content']
    : (is_array($propertiesData['content'] ?? null) ? $propertiesData['content'] : []);
$heading = trim((string) ($content['heading'] ?? ''));
?>
<?php if ($heading !== '') : ?><h2 class="kea-destination-faq__heading"><?php echo esc_html($heading); ?></h2><?php endif; ?>
<div class="kea-destination-faq__items">
    <?php foreach ($faq as $item) : ?>
        <details class="kea-destination-faq__item"><summary><?php echo esc_html((string) $item['question']); ?></summary><div><?php echo wp_kses_post(wpautop((string) $item['answer'])); ?></div></details>
    <?php endforeach; ?>
</div>
