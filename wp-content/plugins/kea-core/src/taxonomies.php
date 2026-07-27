<?php
// Dateipfad: src/taxonomies.php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function kea_core_register_taxonomies(): void
{
    kea_core_register_language_taxonomy();
    kea_core_register_country_taxonomy();
    kea_core_register_target_group_taxonomy();
    kea_core_register_course_type_taxonomy();
    kea_core_register_age_group_taxonomy();
    kea_core_register_interest_taxonomy();
    kea_core_register_accommodation_type_taxonomy();
}

function kea_core_register_language_taxonomy(): void
{
    register_taxonomy('kea_language', ['kea_destination', 'kea_school', 'kea_program'], [
        'labels' => [
            'name' => 'Sprachen',
            'singular_name' => 'Sprache',
            'add_new_item' => 'Neue Sprache hinzufügen',
            'edit_item' => 'Sprache bearbeiten',
        ],
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => false,
        'rewrite' => [
            'slug' => 'sprache',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_country_taxonomy(): void
{
    register_taxonomy('kea_country', ['kea_destination', 'kea_school'], [
        'labels' => [
            'name' => 'Länder',
            'singular_name' => 'Land',
            'add_new_item' => 'Neues Land hinzufügen',
            'edit_item' => 'Land bearbeiten',
        ],
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'rewrite' => [
            'slug' => 'land',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_target_group_taxonomy(): void
{
    register_taxonomy('kea_target_group', ['kea_destination', 'kea_school', 'kea_program', 'kea_testimonial'], [
        'labels' => [
            'name' => 'Zielgruppen',
            'singular_name' => 'Zielgruppe',
            'add_new_item' => 'Neue Zielgruppe hinzufügen',
            'edit_item' => 'Zielgruppe bearbeiten',
        ],
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'rewrite' => [
            'slug' => 'zielgruppe',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_course_type_taxonomy(): void
{
    register_taxonomy('kea_course_type', ['kea_program'], [
        'labels' => [
            'name' => 'Kursarten',
            'singular_name' => 'Kursart',
            'add_new_item' => 'Neue Kursart hinzufügen',
            'edit_item' => 'Kursart bearbeiten',
        ],
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'rewrite' => [
            'slug' => 'kursart',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_age_group_taxonomy(): void
{
    register_taxonomy('kea_age_group', ['kea_program', 'kea_destination'], [
        'labels' => [
            'name' => 'Altersgruppen',
            'singular_name' => 'Altersgruppe',
            'add_new_item' => 'Neue Altersgruppe hinzufügen',
            'edit_item' => 'Altersgruppe bearbeiten',
        ],
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'rewrite' => [
            'slug' => 'altersgruppe',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_interest_taxonomy(): void
{
    register_taxonomy('kea_interest', ['kea_destination', 'kea_program'], [
        'labels' => [
            'name' => 'Interessen',
            'singular_name' => 'Interesse',
            'add_new_item' => 'Neues Interesse hinzufügen',
            'edit_item' => 'Interesse bearbeiten',
        ],
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => false,
        'rewrite' => [
            'slug' => 'interesse',
            'with_front' => false,
        ],
    ]);
}

function kea_core_register_accommodation_type_taxonomy(): void
{
    register_taxonomy('kea_accommodation_type', ['kea_destination', 'kea_school', 'kea_program'], [
        'labels' => [
            'name' => 'Unterkunftsarten',
            'singular_name' => 'Unterkunftsart',
            'add_new_item' => 'Neue Unterkunftsart hinzufügen',
            'edit_item' => 'Unterkunftsart bearbeiten',
        ],
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'rewrite' => [
            'slug' => 'unterkunft',
            'with_front' => false,
        ],
    ]);
}
