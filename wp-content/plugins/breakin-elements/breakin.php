<?php

namespace BreakinElements;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function display_missing_dependency_notice() {
    ?>
    <div class="notice notice-error">
        <p>
            <b>Breakin' Elements:</b> Breakdance must be installed. <a href="https://breakdance.com/" target="_blank">Download Now</a>
        </p>
    </div>
    <?php
}


if (!defined('__BREAKDANCE_PLUGIN_FILE__')){
	add_action('admin_notices', '\BreakinElements\display_missing_dependency_notice');
    return;
}

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(dirname(__FILE__)) . '/elements',
        'BreakinElements',
        'element',
        'Breakin Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(dirname(__FILE__)) . '/macros',
        'BreakinElements',
        'macro',
        'Breakin Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(dirname(__FILE__)) . '/presets',
        'BreakinElements',
        'preset',
        'Breakin Presets',
        false,
    );
},
    // register elements before loading them
    9
);

define("BREAKIN_ELEMENTS_PLUGIN_URL", plugin_dir_url(dirname(__FILE__) . '/plugin.php'));
\Breakdance\Elements\ElementCategoriesController::getInstance()->registerCategory( "breakin elements", "Breakin' Elements" );

add_action('breakdance_reusable_dependencies_urls', function ($urls) {
   $urls['gsap'] = BREAKIN_ELEMENTS_PLUGIN_URL.'dependencies/gsap.min.js';
   $urls['scrollTrigger'] = BREAKIN_ELEMENTS_PLUGIN_URL.'dependencies/ScrollTrigger.min.js';
   return $urls;
}, 9999);
