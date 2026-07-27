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

        $context[$key] = sanitize_title($raw_value);
    }

    return $context;
}
