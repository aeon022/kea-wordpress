<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_List/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) { exit; }

$content = is_array($propertiesData['content']['content'] ?? null) ? $propertiesData['content']['content'] : [];
$ids = array_values(array_filter(array_map('absint', preg_split('/[^0-9]+/', (string) ($content['ids'] ?? '')) ?: [])));
$queryArgs = ['post_type' => 'kea_destination', 'post_status' => 'publish', 'posts_per_page' => max(1, min(12, absint($content['limit'] ?? 6))), 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true];
if ($ids !== []) { $queryArgs['post__in'] = $ids; $queryArgs['orderby'] = 'post__in'; }
$query = new \WP_Query($queryArgs);
?>
<header class="kea-destination-list__header"><div><?php if (($content['eyebrow'] ?? '') !== '') : ?><p><?php echo esc_html((string) $content['eyebrow']); ?></p><?php endif; ?><h2><?php echo esc_html((string) ($content['title'] ?? '')); ?></h2></div><?php if (($content['intro'] ?? '') !== '') : ?><div><?php echo esc_html((string) $content['intro']); ?></div><?php endif; ?></header>
<?php if ($query->have_posts()) : ?><div class="kea-destination-list__grid"><?php while ($query->have_posts()) : $query->the_post(); $id=get_the_ID(); $imageId=absint(get_post_meta($id,'kea_destination_hero_image',true)) ?: get_post_thumbnail_id($id); $countries=get_the_terms($id,'kea_country'); $languages=get_the_terms($id,'kea_language'); ?><a class="kea-destination-list__card" href="<?php the_permalink(); ?>"><?php if ($imageId) : ?><?php echo wp_get_attachment_image($imageId, 'large', false, ['loading' => 'lazy']); ?><?php endif; ?><span class="kea-destination-list__shade"></span><span class="kea-destination-list__content"><span class="kea-destination-list__meta"><?php echo esc_html(implode(' · ', array_filter([is_array($countries) ? implode(', ', wp_list_pluck($countries,'name')) : '', is_array($languages) ? implode(', ', wp_list_pluck($languages,'name')) : '']))); ?></span><strong><?php the_title(); ?></strong><span>Ort entdecken ↗</span></span></a><?php endwhile; ?></div><?php endif; wp_reset_postdata(); ?>
