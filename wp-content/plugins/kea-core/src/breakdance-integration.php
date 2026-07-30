<?php
// Dateipfad: src/breakdance-integration.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

add_action('breakdance_register_elements', 'kea_core_register_native_breakdance_elements');

function kea_core_register_native_breakdance_elements(): void
{
    $element_files = [
        KEA_CORE_PATH . 'breakdance-elements/KeaReiseMatch/element.php',
    ];

    foreach ($element_files as $file) {
        if (file_exists($file)) {
            require_once $file;
        }
    }
}
