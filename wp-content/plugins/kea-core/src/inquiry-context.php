<?php
// Dateipfad: src/inquiry-context.php

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function kea_core_register_inquiry_rewrite_tags(): void
{
    add_rewrite_tag('%kea_destination%', '([^&]+)');
    add_rewrite_tag('%kea_program%', '([^&]+)');
    add_rewrite_tag('%kea_school%', '([^&]+)');
}

function kea_get_inquiry_url(array $context = []): string
{
    $allowed_keys = [
        'destination',
        'program',
        'school',
    ];

    $query_args = [];

    foreach ($allowed_keys as $key) {
        if (!isset($context[$key]) || !is_string($context[$key])) {
            continue;
        }

        $value = sanitize_title($context[$key]);

        if ($value === '') {
            continue;
        }

        if (!kea_core_is_published_inquiry_context($key, $value)) {
            continue;
        }

        $query_args[$key] = $value;
    }

    return add_query_arg($query_args, home_url('/anfrage/'));
}

function kea_get_current_inquiry_context(): array
{
    $context = [];

    foreach (['destination', 'program', 'school'] as $key) {
        $raw_value = filter_input(INPUT_GET, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if (!is_string($raw_value) || $raw_value === '') {
            continue;
        }

        $slug = sanitize_title($raw_value);

        if (!kea_core_is_published_inquiry_context($key, $slug)) {
            continue;
        }

        $context[$key] = $slug;
    }

    return $context;
}

function kea_core_is_published_inquiry_context(string $key, string $slug): bool
{
    $post_types = [
        'destination' => 'kea_destination',
        'program' => 'kea_program',
        'school' => 'kea_school',
    ];

    if ($slug === '' || !isset($post_types[$key])) {
        return false;
    }

    $post = get_page_by_path($slug, OBJECT, $post_types[$key]);

    return $post instanceof WP_Post && $post->post_status === 'publish';
}

/**
 * Prüft den dynamisch aus der URL übernommenen Anfragekontext erneut beim Versand.
 */
function kea_core_validate_inquiry_form_context(WP_Error $errors, array $field): WP_Error
{
    $key = (string) ($field['advanced']['id'] ?? '');

    if (!in_array($key, ['destination', 'school', 'program'], true)) {
        return $errors;
    }

    $value = $field['value'] ?? '';

    if ($value === '') {
        return $errors;
    }

    if (!is_string($value) || !kea_core_is_published_inquiry_context($key, sanitize_title($value))) {
        $errors->add('invalid_inquiry_context', __('Der übernommene Anfragekontext ist nicht mehr verfügbar. Bitte rufe die Angebotsseite erneut auf.', 'kea-core'));
    }

    return $errors;
}

add_filter('breakdance_form_validate_field', 'kea_core_validate_inquiry_form_context', 10, 2);
