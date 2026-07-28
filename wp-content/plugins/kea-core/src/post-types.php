<?php
// Dateipfad: src/post-types.php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function kea_core_register_post_types(): void
{
    kea_core_register_destination_post_type();
    kea_core_register_school_post_type();
    kea_core_register_program_post_type();
    kea_core_register_testimonial_post_type();
    kea_core_register_team_post_type();
}

function kea_core_register_destination_post_type(): void
{
    register_post_type('kea_destination', [
        'labels' => [
            'name' => 'Reiseziele',
            'singular_name' => 'Reiseziel',
            'add_new_item' => 'Neues Reiseziel hinzufügen',
            'edit_item' => 'Reiseziel bearbeiten',
            'new_item' => 'Neues Reiseziel',
            'view_item' => 'Reiseziel ansehen',
            'search_items' => 'Reiseziele suchen',
            'not_found' => 'Keine Reiseziele gefunden',
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-location-alt',
        'supports' => ['title', 'thumbnail', 'revisions'],
        'has_archive' => 'reiseziele',
        'rewrite' => [
            'slug' => 'reiseziele',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_school_post_type(): void
{
    register_post_type('kea_school', [
        'labels' => [
            'name' => 'Partnerschulen',
            'singular_name' => 'Partnerschule',
            'add_new_item' => 'Neue Partnerschule hinzufügen',
            'edit_item' => 'Partnerschule bearbeiten',
            'new_item' => 'Neue Partnerschule',
            'view_item' => 'Partnerschule ansehen',
            'search_items' => 'Partnerschulen suchen',
            'not_found' => 'Keine Partnerschulen gefunden',
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title', 'thumbnail', 'revisions'],
        'has_archive' => 'partnerschulen',
        'rewrite' => [
            'slug' => 'partnerschulen',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_program_post_type(): void
{
    register_post_type('kea_program', [
        'labels' => [
            'name' => 'Programme',
            'singular_name' => 'Programm',
            'add_new_item' => 'Neues Programm hinzufügen',
            'edit_item' => 'Programm bearbeiten',
            'new_item' => 'Neues Programm',
            'view_item' => 'Programm ansehen',
            'search_items' => 'Programme suchen',
            'not_found' => 'Keine Programme gefunden',
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'supports' => ['title', 'thumbnail', 'revisions'],
        'has_archive' => 'programme',
        'rewrite' => [
            'slug' => 'programme',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_testimonial_post_type(): void
{
    register_post_type('kea_testimonial', [
        'labels' => [
            'name' => 'Erfahrungen',
            'singular_name' => 'Erfahrung',
            'add_new_item' => 'Neue Erfahrung hinzufügen',
            'edit_item' => 'Erfahrung bearbeiten',
            'new_item' => 'Neue Erfahrung',
            'view_item' => 'Erfahrung ansehen',
            'search_items' => 'Erfahrungen suchen',
            'not_found' => 'Keine Erfahrungen gefunden',
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => ['title', 'thumbnail', 'revisions'],
        'has_archive' => 'erfahrungen',
        'rewrite' => [
            'slug' => 'erfahrungen',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_team_post_type(): void
{
    register_post_type('kea_team_member', [
        'labels' => [
            'name' => 'Team',
            'singular_name' => 'Teammitglied',
            'add_new_item' => 'Neues Teammitglied hinzufügen',
            'edit_item' => 'Teammitglied bearbeiten',
            'new_item' => 'Neues Teammitglied',
            'view_item' => 'Teammitglied ansehen',
            'search_items' => 'Team durchsuchen',
            'not_found' => 'Keine Teammitglieder gefunden',
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-businessperson',
        'supports' => ['title', 'thumbnail', 'revisions'],
        'has_archive' => false,
        'rewrite' => [
            'slug' => 'team',
            'with_front' => false,
        ],
    ]);
}
