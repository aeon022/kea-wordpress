<?php
// Dateipfad: wp-content/plugins/kea-core/src/search.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function kea_core_get_search_collection_post_type(string $term): string
{
    $map = [
        'reiseziel'      => 'kea_destination',
        'reiseziele'     => 'kea_destination',
        'partnerschule'  => 'kea_school',
        'partnerschulen' => 'kea_school',
        'programm'       => 'kea_program',
        'programme'      => 'kea_program',
        'erfahrung'      => 'kea_testimonial',
        'erfahrungen'    => 'kea_testimonial',
    ];

    $slug = sanitize_title($term);
    return $map[$slug] ?? '';
}

function kea_core_route_collection_search(\WP_Query $query): void
{
    if (is_admin() || !$query->is_main_query() || !$query->is_search()) {
        return;
    }

    $postType = kea_core_get_search_collection_post_type((string) $query->get('s'));
    if ($postType === '') {
        return;
    }

    $query->set('post_type', $postType);
    $query->set('s', '');
    $query->set('posts_per_page', -1);
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
}
