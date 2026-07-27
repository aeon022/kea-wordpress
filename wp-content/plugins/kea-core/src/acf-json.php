<?php
// Dateipfad: src/acf-json.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function kea_core_register_acf_json_path(array $paths): array
{
    $paths[] = KEA_CORE_PATH . 'acf-json';

    return $paths;
}

function kea_core_get_acf_json_save_path(string $path): string
{
    return KEA_CORE_PATH . 'acf-json';
}

add_filter('acf/settings/load_json', 'kea_core_register_acf_json_path');
add_filter('acf/settings/save_json', 'kea_core_get_acf_json_save_path');
