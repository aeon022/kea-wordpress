<?php
// Dateipfad: src/admin-columns.php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

add_filter('manage_kea_destination_posts_columns', 'kea_core_destination_columns');
add_action('manage_kea_destination_posts_custom_column', 'kea_core_destination_column_content', 10, 2);

function kea_core_destination_columns(array $columns): array
{
    $new_columns = [];

    foreach ($columns as $key => $label) {
        $new_columns[$key] = $label;

        if ($key === 'title') {
            $new_columns['kea_country'] = 'Land';
            $new_columns['kea_language'] = 'Sprache';
            $new_columns['kea_target_group'] = 'Zielgruppen';
        }
    }

    return $new_columns;
}

function kea_core_destination_column_content(string $column, int $post_id): void
{
    if (!in_array($column, ['kea_country', 'kea_language', 'kea_target_group'], true)) {
        return;
    }

    $terms = get_the_terms($post_id, $column);

    if (empty($terms) || is_wp_error($terms)) {
        echo '—';
        return;
    }

    $term_names = array_map(
        static fn(WP_Term $term): string => esc_html($term->name),
        $terms
    );

    echo implode(', ', $term_names);
}
