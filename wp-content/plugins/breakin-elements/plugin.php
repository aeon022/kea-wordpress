<?php

/**
 * Plugin Name:       Breakin' Elements
 * Description:       Weird & Experimental elements made for Breakdance Builder
 * Requires at least: 6.3.0
 * Requires PHP:      8.0
 * Version:           1.15
 * Author:            THOMAS MICHAEL aka SUPAMIKE
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       breakin_elements
 * Website:           https://breakin.supadezign.com/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$plugin_prefix = 'BREAKINELEMENTS';

// Extract the version number
$plugin_data = get_file_data(__FILE__, ['Version' => 'Version']);

// Plugin Constants
define($plugin_prefix . '_DIR', plugin_basename(__DIR__));
define($plugin_prefix . '_BASE', plugin_basename(__FILE__));
define($plugin_prefix . '_PATH', plugin_dir_path(__FILE__));
define($plugin_prefix . '_VER', $plugin_data['Version']);
define($plugin_prefix . '_CACHE_KEY', 'breakin_elements-cache-key-for-plugin');
define($plugin_prefix . '_REMOTE_URL', 'https://breakin.supadezign.com/wp-content/plugins/hoster/inc/secure-download.php?file=json&download=29&token=7843521d1d026693807b21319d2d24af3567e270aaf7019547d55c466587d4fe');

require constant($plugin_prefix . '_PATH') . 'inc/update.php';

	new BREAKINELEMENTS_DPUpdateChecker(
		constant($plugin_prefix . '_BASE'),
		constant($plugin_prefix . '_VER'),
		constant($plugin_prefix . '_CACHE_KEY'),
		constant($plugin_prefix . '_REMOTE_URL'),
	);

// Load the actual plugin code from the external file
require_once plugin_dir_path(__FILE__) . 'breakin.php';