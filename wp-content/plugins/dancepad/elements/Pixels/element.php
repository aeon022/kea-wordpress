<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_pixels_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\Pixels",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class Pixels extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
    <path opacity="0.4" d="M3.75 3.75H10.5V10.5H3.75V3.75ZM13.5 3.75H20.25V10.5H13.5V3.75ZM3.75 13.5H10.5V20.25H3.75V13.5ZM13.5 13.5H20.25V20.25H13.5V13.5Z" fill="currentColor"/>
    <path d="M10.5 10.5H13.5V13.5H10.5V10.5Z" fill="currentColor"/>
</svg>';
        }

        static function tag()
        {
            return 'div';
        }

        static function tagOptions()
        {
            return ['section', 'footer', 'header', 'nav', 'aside', 'article', 'main'];
        }

        static function tagControlPath()
        {
            return false;
        }

        static function name()
        {
            return 'Pixels';
        }

        static function className()
        {
            return 'dan-pixels';
        }

        static function category()
        {
            return 'dancepad_backgrounds';
        }

        static function badge()
        {
            return ['backgroundColor' => 'var(--gray500)', 'textColor' => 'var(--white)', 'label' => 'DP'];
        }

        static function slug()
        {
            return __CLASS__;
        }

        static function template()
        {
            return file_get_contents(__DIR__ . '/html.twig');
        }

        static function defaultCss()
        {
            return file_get_contents(__DIR__ . '/default.css');
        }

        static function defaultProperties()
        {
            return [
                'content' => [
                    'colors' => [
                        'bg_color' => '#000000',
                        'color' => '#03a9f4'
                    ],
                    'settings' => [
                        'shape' => 'square',
                        'pixel_size' => 5,
                        'pattern_scale' => 2,
                        'pattern_density' => 1,
                        'pixel_jitter' => 0,
                        'edge_fade' => 0.5,
                        'side_fade' => 0,
                        'speed' => 0.5,
                        'noise_amount' => 0
                    ],
                    'ripples' => [
                        'enable_ripples' => true,
                        'ripple_speed' => 0.3,
                        'ripple_thickness' => 0.1,
                        'ripple_intensity' => 1
                    ]
                ],
                'design' => [
                    'layout' => [
                        'display' => ['breakpoint_base' => 'flex'],
                        'flex_direction' => ['breakpoint_base' => 'column'],
                        'align_items' => ['breakpoint_base' => 'center'],
                        'justify_content' => ['breakpoint_base' => 'center']
                    ],
                    'margin' => [
                        'margin' => [
                            'breakpoint_base' => [
                                'top' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'right' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'bottom' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'left' => ['number' => 0, 'unit' => 'px', 'style' => '0px']
                            ]
                        ]
                    ],
                    'padding' => [
                        'padding' => [
                            'breakpoint_base' => [
                                'top' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'right' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'bottom' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'left' => ['number' => 0, 'unit' => 'px', 'style' => '0px']
                            ]
                        ]
                    ],
                    'size' => [
                        'width' => ['breakpoint_base' => ['number' => 100, 'unit' => '%', 'style' => '100%']],
                        'height' => ['breakpoint_base' => ['number' => 500, 'unit' => 'px', 'style' => '500px']]
                    ],
                    'borders' => [
                        'border' => [
                            'breakpoint_base' => [
                                'top' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => 'transparent', 'style' => 'solid'],
                                'right' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => 'transparent', 'style' => 'solid'],
                                'bottom' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => 'transparent', 'style' => 'solid'],
                                'left' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => 'transparent', 'style' => 'solid']
                            ]
                        ],
                        'radius' => [
                            'breakpoint_base' => [
                                'all' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'topLeft' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'topRight' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'bottomLeft' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'bottomRight' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                'editMode' => 'all'
                            ]
                        ]
                    ],
                    'background' => [
                        'color' => ['breakpoint_base' => '#000000']
                    ]
                ]
            ];
        }

        static function defaultChildren()
        {
            return [
                [
                    'slug' => 'EssentialElements\Heading',
                    'defaultProperties' => [
                        'content' => [
                            'content' => [
                                'text' => 'Pixels',
                                'tags' => 'h3'
                            ]
                        ],
                        'design' => [
                            'typography' => [
                                'color' => ['breakpoint_base' => '#ffffff']
                            ]
                        ]
                    ],
                    'children' => []
                ]
            ];
        }

        static function cssTemplate()
        {
            return file_get_contents(__DIR__ . '/css.twig');
        }

        static function designControls()
        {
            return [
                getPresetSection(
                    "EssentialElements\\layout",
                    "Layout",
                    "layout",
                    ['type' => 'popout']
                ),
                getPresetSection(
                    "EssentialElements\\spacing_margin_all",
                    "Margin",
                    "margin",
                    ['type' => 'popout']
                ),
                getPresetSection(
                    "EssentialElements\\spacing_padding_all",
                    "Padding",
                    "padding",
                    ['type' => 'popout']
                ),
                getPresetSection(
                    "EssentialElements\\size",
                    "Size",
                    "size",
                    ['type' => 'popout']
                ),
                getPresetSection(
                    "EssentialElements\\borders",
                    "Borders",
                    "borders",
                    ['type' => 'popout']
                ),
                getPresetSection(
                    "EssentialElements\\background",
                    "Background",
                    "background",
                    ['type' => 'popout']
                )
            ];
        }

        static function contentControls()
        {
            return [
                c(
                    "colors",
                    "Colors",
                    [
                        c(
                            "bg_color",
                            "Background",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "color",
                            "Pixel Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        )
                    ],
                    ['type' => 'section', 'layout' => 'vertical'],
                    false,
                    false,
                    []
                ),
                c(
                    "settings",
                    "Settings",
                    [
                        c(
                            "shape",
                            "Shape",
                            [],
                            [
                                'type' => 'dropdown',
                                'layout' => 'inline',
                                'items' => [
                                    ['value' => 'square', 'text' => 'Square'],
                                    ['value' => 'circle', 'text' => 'Circle'],
                                    ['value' => 'triangle', 'text' => 'Triangle'],
                                    ['value' => 'diamond', 'text' => 'Diamond']
                                ]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "pixel_size",
                            "Pixel Size",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 20, 'step' => 1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "pattern_scale",
                            "Pattern Scale",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0.1, 'max' => 10, 'step' => 0.1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "pattern_density",
                            "Pattern Density",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.01]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "pixel_jitter",
                            "Pixel Jitter",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "edge_fade",
                            "Edge Fade (Vertical)",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "side_fade",
                            "Edge Fade (Horizontal)",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "speed",
                            "Speed",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "noise_amount",
                            "Noise",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
                            false,
                            false,
                            []
                        )
                    ],
                    ['type' => 'section', 'layout' => 'vertical'],
                    false,
                    false,
                    []
                ),
                c(
                    "ripples",
                    "Ripples",
                    [
                        c(
                            "enable_ripples",
                            "Enable Ripples",
                            [],
                            ['type' => 'toggle', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "ripple_speed",
                            "Speed",
                            [],
                            [
                                'type' => 'number',
                                'layout' => 'inline',
                                'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.01],
                                'condition' => [[['path' => 'content.ripples.enable_ripples', 'operand' => 'equals', 'value' => true]]]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "ripple_thickness",
                            "Thickness",
                            [],
                            [
                                'type' => 'number',
                                'layout' => 'inline',
                                'rangeOptions' => ['min' => 0.01, 'max' => 1, 'step' => 0.01],
                                'condition' => [[['path' => 'content.ripples.enable_ripples', 'operand' => 'equals', 'value' => true]]]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "ripple_intensity",
                            "Intensity",
                            [],
                            [
                                'type' => 'number',
                                'layout' => 'inline',
                                'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.1],
                                'condition' => [[['path' => 'content.ripples.enable_ripples', 'operand' => 'equals', 'value' => true]]]
                            ],
                            false,
                            false,
                            []
                        )
                    ],
                    ['type' => 'section', 'layout' => 'vertical'],
                    false,
                    false,
                    []
                )
            ];
        }

        static function settingsControls()
        {
            return [];
        }

        static function dependencies()
        {
            return [
                '0' => [
                    'title' => 'Dancepad - Pixels',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Pixels/dancepad_pixels.min.js?ver=' . DANCEPAD_VERSION]
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_pixels();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;'
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_pixels();'],
                    'builderCondition' => 'return false;',
                    'frontendCondition' => 'return true;'
                ]
            ];
        }

        static function settings()
        {
            return ['disableAI' => false];
        }

        static function addPanelRules()
        {
            return false;
        }

        static public function actions()
        {
            return [
                'onPropertyChange' => [['script' => 'dancepad_pixels();']],
                'onCreatedElement' => [['script' => 'dancepad_pixels();']],
                'onMountedElement' => [['script' => 'dancepad_pixels();']],
                'onMovedElement' => [['script' => 'dancepad_pixels();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_pixels();']]
            ];
        }

        static function nestingRule()
        {
            return ["type" => "container"];
        }

        static function spacingBars()
        {
            return false;
        }

        static function attributes()
        {
            return [
                ['name' => 'data-flickering', 'template' => '1'],
                ['name' => 'data-color', 'template' => '{{ content.colors.color }}'],
                ['name' => 'data-shape', 'template' => '{{ content.settings.shape }}'],
                ['name' => 'data-pixel-size', 'template' => '{{ content.settings.pixel_size }}'],
                ['name' => 'data-scale', 'template' => '{{ content.settings.pattern_scale }}'],
                ['name' => 'data-density', 'template' => '{{ content.settings.pattern_density }}'],
                ['name' => 'data-jitter', 'template' => '{{ content.settings.pixel_jitter }}'],
                ['name' => 'data-edge-fade', 'template' => '{{ content.settings.edge_fade }}'],
                ['name' => 'data-side-fade', 'template' => '{{ content.settings.side_fade }}'],
                ['name' => 'data-speed', 'template' => '{{ content.settings.speed }}'],
                ['name' => 'data-noise', 'template' => '{{ content.settings.noise_amount }}'],
                ['name' => 'data-ripples', 'template' => '{% if content.ripples.enable_ripples %}1{% else %}0{% endif %}'],
                ['name' => 'data-ripple-speed', 'template' => '{{ content.ripples.ripple_speed }}'],
                ['name' => 'data-ripple-thickness', 'template' => '{{ content.ripples.ripple_thickness }}'],
                ['name' => 'data-ripple-intensity', 'template' => '{{ content.ripples.ripple_intensity }}']
            ];
        }

        static function experimental()
        {
            return false;
        }

        static function order()
        {
            return 0;
        }

        static function dynamicPropertyPaths()
        {
            return false;
        }

        static function additionalClasses()
        {
            return false;
        }

        static function projectManagement()
        {
            return false;
        }

        static function propertyPathsToWhitelistInFlatProps()
        {
            return false;
        }

        static function propertyPathsToSsrElementWhenValueChanges()
        {
            return false;
        }
    }
}
