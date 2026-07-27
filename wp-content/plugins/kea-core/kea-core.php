<?php
// Dateipfad: kea-core.php

/**
 * Plugin Name: KEA Core
 * Description: Content Types, Taxonomien und Projektlogik für KEA Sprachreisen.
 * Version: 0.1.0
 * Author: ABTEILUNG83
 * Text Domain: kea-core
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

define('KEA_CORE_VERSION', '0.1.0');
define('KEA_CORE_PATH', plugin_dir_path(__FILE__));
define('KEA_CORE_URL', plugin_dir_url(__FILE__));

require_once KEA_CORE_PATH . 'src/post-types.php';
require_once KEA_CORE_PATH . 'src/taxonomies.php';
require_once KEA_CORE_PATH . 'src/admin-columns.php';
require_once KEA_CORE_PATH . 'src/inquiry-context.php';

add_action('init', 'kea_core_register_post_types');
add_action('init', 'kea_core_register_taxonomies');
add_action('init', 'kea_core_register_inquiry_rewrite_tags');

register_activation_hook(__FILE__, 'kea_core_activate');
register_deactivation_hook(__FILE__, 'kea_core_deactivate');

function kea_core_activate(): void
{
    kea_core_register_post_types();
    kea_core_register_taxonomies();
    flush_rewrite_rules();
}

function kea_core_deactivate(): void
{
    flush_rewrite_rules();
}
