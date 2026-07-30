<?php
// Dateipfad: kea-core.php

/**
 * Plugin Name: KEA Core
 * Description: Content Types, Taxonomien und Projektlogik für KEA Sprachreisen.
 * Version: 0.2.5
 * Author: ABTEILUNG83
 * Text Domain: kea-core
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

define('KEA_CORE_VERSION', '0.2.5');
define('KEA_CORE_PATH', plugin_dir_path(__FILE__));
define('KEA_CORE_URL', plugin_dir_url(__FILE__));

require_once KEA_CORE_PATH . 'src/post-types.php';
require_once KEA_CORE_PATH . 'src/taxonomies.php';
require_once KEA_CORE_PATH . 'src/admin-columns.php';
require_once KEA_CORE_PATH . 'src/inquiry-context.php';
require_once KEA_CORE_PATH . 'src/acf-json.php';
require_once KEA_CORE_PATH . 'src/frontend-accessibility.php';
require_once KEA_CORE_PATH . 'src/search.php';
require_once KEA_CORE_PATH . 'src/seo.php';
require_once KEA_CORE_PATH . 'src/admin-info.php';

add_action('init', 'kea_core_register_post_types');
add_action('init', 'kea_core_register_taxonomies');
add_action('init', 'kea_core_register_inquiry_rewrite_tags');
add_action('wp_head', 'kea_core_render_seo_head_tags', 1);
add_filter('pre_handle_404', 'kea_core_keep_empty_magazine_categories', 10, 2);
add_filter('gettext', 'kea_core_translate_breakdance_ui', 10, 3);
add_action('pre_get_posts', 'kea_core_route_collection_search');

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
