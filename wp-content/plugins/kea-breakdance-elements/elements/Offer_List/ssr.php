<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Offer_List/ssr.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$content = is_array($propertiesData['content'] ?? null) ? $propertiesData['content'] : [];
$source = is_array($content['source'] ?? null) ? $content['source'] : [];
$heading = is_array($content['heading'] ?? null) ? $content['heading'] : [];

$isProgramList = ($source['content_type'] ?? 'program') === 'program';
$postType = $isProgramList ? 'kea_program' : 'kea_school';
$destinationMetaKey = $isProgramList ? 'kea_program_destination' : 'kea_school_destination';
$limit = max(1, min(24, absint($source['limit'] ?? 6)));

$queryArgs = [
    'post_type' => $postType,
    'post_status' => 'publish',
    'posts_per_page' => $limit,
    'orderby' => 'menu_order title',
    'order' => 'ASC',
    'no_found_rows' => true,
];

if (($source['scope'] ?? 'current_destination') === 'current_destination') {
    $destinationId = get_queried_object_id();

    if ($destinationId > 0 && get_post_type($destinationId) === 'kea_destination') {
        $queryArgs['meta_query'] = [[
            'key' => $destinationMetaKey,
            'value' => $destinationId,
            'compare' => '=',
        ]];
    } else {
        $queryArgs['post__in'] = [0];
    }
}

$query = new \WP_Query($queryArgs);
$eyebrow = trim((string) ($heading['eyebrow'] ?? ''));
$title = trim((string) ($heading['title'] ?? ''));
$intro = trim((string) ($heading['intro'] ?? ''));
$emptyMessage = trim((string) ($heading['empty_message'] ?? ''));
?>
<div class="kea-offer-list__header">
    <div>
        <?php if ($eyebrow !== '') : ?>
            <span class="kea-offer-list__eyebrow"><?php echo esc_html($eyebrow); ?></span>
        <?php endif; ?>
        <?php if ($title !== '') : ?>
            <h2 class="kea-offer-list__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>
    </div>
    <?php if ($intro !== '') : ?>
        <p class="kea-offer-list__intro"><?php echo esc_html($intro); ?></p>
    <?php endif; ?>
</div>

<?php if ($query->have_posts()) : ?>
    <div class="kea-offer-list__items">
        <?php $index = 1; ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php
            $postId = get_the_ID();
            $summary = $isProgramList
                ? (string) get_post_meta($postId, 'kea_program_intro', true)
                : (string) get_post_meta($postId, 'kea_school_intro', true);
            $facts = [];

            if ($isProgramList) {
                $schoolId = absint(get_post_meta($postId, 'kea_program_school', true));
                $courseTypes = get_the_terms($postId, 'kea_course_type');
                $lessons = absint(get_post_meta($postId, 'kea_program_lessons_per_week', true));
                $duration = trim((string) get_post_meta($postId, 'kea_program_duration', true));

                if ($schoolId > 0 && get_post_status($schoolId) === 'publish') {
                    $facts[] = get_the_title($schoolId);
                }

                if (is_array($courseTypes) && $courseTypes !== []) {
                    $facts[] = implode(', ', wp_list_pluck($courseTypes, 'name'));
                }

                if ($lessons > 0) {
                    $facts[] = sprintf('%d Lektionen/Woche', $lessons);
                } elseif ($duration !== '') {
                    $facts[] = $duration;
                }
            } else {
                $groupSize = absint(get_post_meta($postId, 'kea_school_group_size', true));
                $minAge = absint(get_post_meta($postId, 'kea_school_min_age', true));

                if ($groupSize > 0) {
                    $facts[] = sprintf('Ø %d Personen', $groupSize);
                }

                if ($minAge > 0) {
                    $facts[] = sprintf('ab %d Jahren', $minAge);
                }
            }
            ?>
            <a class="kea-offer-list__item" href="<?php echo esc_url(get_permalink()); ?>">
                <span class="kea-offer-list__index"><?php echo esc_html(str_pad((string) $index, 2, '0', STR_PAD_LEFT)); ?></span>
                <span>
                    <strong class="kea-offer-list__name"><?php the_title(); ?></strong>
                    <?php if ($summary !== '') : ?>
                        <span class="kea-offer-list__text"><?php echo esc_html(wp_trim_words(wp_strip_all_tags($summary), 24)); ?></span>
                    <?php endif; ?>
                </span>
                <?php if ($facts !== []) : ?>
                    <span class="kea-offer-list__meta">
                        <?php foreach ($facts as $fact) : ?>
                            <span><?php echo esc_html($fact); ?></span>
                        <?php endforeach; ?>
                    </span>
                <?php else : ?>
                    <span></span>
                <?php endif; ?>
                <span class="kea-offer-list__arrow" aria-hidden="true">↗</span>
            </a>
            <?php $index++; ?>
        <?php endwhile; ?>
    </div>
<?php elseif ($emptyMessage !== '') : ?>
    <p class="kea-offer-list__empty"><?php echo esc_html($emptyMessage); ?></p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
