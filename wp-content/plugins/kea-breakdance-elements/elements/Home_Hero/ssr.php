<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Home_Hero/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) { exit; }

$content = is_array($propertiesData['content']['content'] ?? null) ? $propertiesData['content']['content'] : [];
$imageId = absint($content['image_id'] ?? 0);
$imageUrl = $imageId ? wp_get_attachment_image_url($imageId, 'full') : '';
$title = trim((string) ($content['title'] ?? ''));
?>
<div class="kea-home-hero__image"<?php if ($imageUrl) : ?> style="background-image:url('<?php echo esc_url($imageUrl); ?>')"<?php endif; ?>></div>
<div class="kea-home-hero__veil"></div>
<div class="kea-home-hero__content">
    <?php if (($content['eyebrow'] ?? '') !== '') : ?><p class="kea-home-hero__eyebrow"><?php echo esc_html((string) $content['eyebrow']); ?></p><?php endif; ?>
    <?php if ($title !== '') : ?><h1><?php echo esc_html($title); ?></h1><?php endif; ?>
    <?php if (($content['text'] ?? '') !== '') : ?><p class="kea-home-hero__text"><?php echo esc_html((string) $content['text']); ?></p><?php endif; ?>
    <div class="kea-home-hero__actions">
        <a class="kea-home-hero__primary" href="<?php echo esc_url((string) ($content['primary_url'] ?? '/reiseziele/')); ?>"><?php echo esc_html((string) ($content['primary_label'] ?? 'Reiseziele entdecken')); ?></a>
        <a class="kea-home-hero__secondary" href="<?php echo esc_url((string) ($content['secondary_url'] ?? '/anfrage/')); ?>"><?php echo esc_html((string) ($content['secondary_label'] ?? 'Beratung')); ?></a>
    </div>
</div>
