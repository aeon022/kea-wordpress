<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Home_Guide/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) { exit; }

$content = is_array($propertiesData['content']['content'] ?? null) ? $propertiesData['content']['content'] : [];
$defaults = \KeaBreakdanceElements\HomeGuide::defaultProperties()['content']['content'];
$value = static fn (string $key, string $fallback = ''): string => trim((string) ($content[$key] ?? $defaults[$key] ?? $fallback));

$audiences = []; $benefits = []; $steps = [];
for ($index = 1; $index <= 4; $index++) { $audiences[] = [$value('audience_' . $index . '_title'), $value('audience_' . $index . '_text'), $value('audience_' . $index . '_url', '/')]; $benefits[] = $value('benefit_' . $index); $steps[] = $value('step_' . $index); }
?>
<section class="kea-home-guide__audiences"><div class="kea-home-guide__head"><p><?php echo esc_html($value('audience_eyebrow')); ?></p><h2><?php echo esc_html($value('audience_title')); ?></h2></div><div class="kea-home-guide__audience-grid"><?php foreach ($audiences as [$title, $text, $url]) : ?><a href="<?php echo esc_url(kea_breakdance_url($url)); ?>"><span><?php echo esc_html($title); ?></span><strong><?php echo esc_html($text); ?></strong><i aria-hidden="true">↗</i></a><?php endforeach; ?></div></section>
<section class="kea-home-guide__why"><div><p><?php echo esc_html($value('why_eyebrow')); ?></p><h2><?php echo esc_html($value('why_title')); ?></h2><p class="kea-home-guide__lead"><?php echo esc_html($value('why_text')); ?></p><a href="<?php echo esc_url(kea_breakdance_url($value('why_url', '/'))); ?>"><?php echo esc_html($value('why_label')); ?> ↗</a></div><ol><?php foreach ($benefits as $index => $benefit) : ?><li><span><?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?></span><?php echo esc_html($benefit); ?></li><?php endforeach; ?></ol></section>
<section class="kea-home-guide__steps"><p><?php echo esc_html($value('steps_eyebrow')); ?></p><h2><?php echo esc_html($value('steps_title')); ?></h2><ol><?php foreach ($steps as $index => $step) : ?><li><span><?php echo esc_html((string) ($index + 1)); ?></span><strong><?php echo esc_html($step); ?></strong></li><?php endforeach; ?></ol></section>
<section class="kea-home-guide__cta"><div><p><?php echo esc_html($value('cta_eyebrow')); ?></p><h2><?php echo esc_html($value('cta_title')); ?></h2></div><a href="<?php echo esc_url(kea_breakdance_url($value('cta_url', '/'))); ?>"><?php echo esc_html($value('cta_label')); ?> ↗</a></section>
