<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/kea-breakdance-elements.php
declare(strict_types=1);

/**
 * Plugin Name: KEA Breakdance Elements
 * Description: Eigene dynamische Elemente für die KEA-Ausgabe in Breakdance.
 * Version: 0.4.5
 * Requires Plugins: breakdance
 * Requires PHP: 8.2
 */

if (!defined('ABSPATH')) {
    exit;
}

define('KEA_BREAKDANCE_ELEMENTS_VERSION', '0.4.5');

add_action('breakdance_loaded', static function (): void {
    \Breakdance\ElementStudio\registerSaveLocation(
        \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'KeaBreakdanceElements',
        'element',
        'KEA',
        false,
        true
    );

    \Breakdance\Elements\ElementCategoriesController::getInstance()->registerCategory(
        'kea',
        'KEA'
    );
}, 9);
