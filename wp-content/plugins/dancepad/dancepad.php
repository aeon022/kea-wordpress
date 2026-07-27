<?php

/**
 * Plugin Name: Dancepad
 * Plugin URI: https://dancepad.io/
 * Description: Beautiful elements designed for Breakdance.
 * Author: Jose Tamu
 * Author URI: https://www.josetamu.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Version: 2.2.0
 * Requires PHP: 7.4
 * Requires at least: 4.7
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define('DANCEPAD_VERSION', '2.2.0');
define('DANCEPAD_FILE', __FILE__);
define('DANCEPAD_FILE_NAME', plugin_basename(__FILE__));
define('DANCEPAD_PLUGIN_URL', plugin_dir_url(__FILE__));
define('DANCEPAD_PLUGIN_DIR', plugin_dir_path(__FILE__));
 
require_once DANCEPAD_PLUGIN_DIR . 'initialize.php';
new Dancepad\Initialize();