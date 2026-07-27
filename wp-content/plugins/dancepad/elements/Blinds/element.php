<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_blinds_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\Blinds",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class Blinds extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
    <path opacity="0.4" d="M3.75 5.5C3.75 4.11929 4.86929 3 6.25 3H17.75C19.1307 3 20.25 4.11929 20.25 5.5V18.5C20.25 19.8807 19.1307 21 17.75 21H6.25C4.86929 21 3.75 19.8807 3.75 18.5V5.5Z" fill="currentColor"/>
    <path d="M8 5V19M12 5V19M16 5V19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
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
            return 'Blinds';
        }

        static function className()
        {
            return 'dan-blinds';
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
                        'gradient_colors' => [
                            ['color' => '#FF9FFC'],
                            ['color' => '#0099FE']
                        ],
                        'mix_blend_mode' => 'lighten'
                    ],
                    'settings' => [
                        'angle' => 0,
                        'mirror_gradient' => false,
                        'shine_direction' => 'left',
                        'distort_amount' => 0,
                        'blind_count' => 16,
                        'blind_min_width' => 60,
                        'noise' => 0.3
                    ],
                    'spotlight' => [
                        'radius' => 0.5,
                        'softness' => 1,
                        'opacity' => 1,
                        'mouse_dampening' => 0.15
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
                                'text' => 'Blinds',
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
                            "gradient_colors",
                            "Gradient Colors",
                            [
                                c(
                                    "color",
                                    "Color",
                                    [],
                                    ['type' => 'color', 'layout' => 'inline'],
                                    false,
                                    false,
                                    []
                                )
                            ],
                            [
                                'type' => 'repeater',
                                'layout' => 'vertical',
                                'repeaterOptions' => [
                                    'titleTemplate' => '{color}',
                                    'defaultTitle' => 'Color',
                                    'buttonName' => 'Add color'
                                ]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "mix_blend_mode",
                            "Mix Blend Mode",
                            [],
                            [
                                'type' => 'dropdown',
                                'layout' => 'inline',
                                'items' => [
                                    ['value' => 'normal', 'text' => 'Normal'],
                                    ['value' => 'multiply', 'text' => 'Multiply'],
                                    ['value' => 'screen', 'text' => 'Screen'],
                                    ['value' => 'overlay', 'text' => 'Overlay'],
                                    ['value' => 'darken', 'text' => 'Darken'],
                                    ['value' => 'lighten', 'text' => 'Lighten'],
                                    ['value' => 'color-dodge', 'text' => 'Color Dodge'],
                                    ['value' => 'color-burn', 'text' => 'Color Burn'],
                                    ['value' => 'hard-light', 'text' => 'Hard Light'],
                                    ['value' => 'soft-light', 'text' => 'Soft Light'],
                                    ['value' => 'difference', 'text' => 'Difference'],
                                    ['value' => 'exclusion', 'text' => 'Exclusion'],
                                    ['value' => 'hue', 'text' => 'Hue'],
                                    ['value' => 'saturation', 'text' => 'Saturation'],
                                    ['value' => 'color', 'text' => 'Color'],
                                    ['value' => 'luminosity', 'text' => 'Luminosity']
                                ]
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
                ),
                c(
                    "settings",
                    "Settings",
                    [
                        c(
                            "angle",
                            "Angle",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => -180, 'max' => 180, 'step' => 1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "mirror_gradient",
                            "Mirror Gradient",
                            [],
                            ['type' => 'toggle', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "shine_direction",
                            "Shine Direction",
                            [],
                            [
                                'type' => 'dropdown',
                                'layout' => 'inline',
                                'items' => [
                                    ['value' => 'left', 'text' => 'Left'],
                                    ['value' => 'right', 'text' => 'Right']
                                ]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "distort_amount",
                            "Distort",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 10, 'step' => 0.1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "blind_count",
                            "Blind Count",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 100, 'step' => 1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "blind_min_width",
                            "Blind Min Width",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 500, 'step' => 1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "noise",
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
                    "spotlight",
                    "Spotlight",
                    [
                        c(
                            "radius",
                            "Radius",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 3, 'step' => 0.01]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "softness",
                            "Softness",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.01]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "opacity",
                            "Opacity",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.01]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "mouse_dampening",
                            "Mouse Dampening",
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
                    'title' => 'Dancepad - Blinds',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Blinds/dancepad_blinds.min.js?ver=' . DANCEPAD_VERSION]
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_blinds();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;'
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_blinds();'],
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
                'onPropertyChange' => [['script' => 'dancepad_blinds();']],
                'onCreatedElement' => [['script' => 'dancepad_blinds();']],
                'onMountedElement' => [['script' => 'dancepad_blinds();']],
                'onMovedElement' => [['script' => 'dancepad_blinds();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_blinds();']]
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
                ['name' => 'data-colors', 'template' => '{% for item in content.colors.gradient_colors %}{{ item.color }}{% if not loop.last %}|{% endif %}{% endfor %}'],
                ['name' => 'data-angle', 'template' => '{{ content.settings.angle }}'],
                ['name' => 'data-noise', 'template' => '{{ content.settings.noise }}'],
                ['name' => 'data-blind-count', 'template' => '{{ content.settings.blind_count }}'],
                ['name' => 'data-blind-min-width', 'template' => '{{ content.settings.blind_min_width }}'],
                ['name' => 'data-mirror', 'template' => '{% if content.settings.mirror_gradient %}1{% else %}0{% endif %}'],
                ['name' => 'data-shine', 'template' => '{{ content.settings.shine_direction }}'],
                ['name' => 'data-distort', 'template' => '{{ content.settings.distort_amount }}'],
                ['name' => 'data-spot-radius', 'template' => '{{ content.spotlight.radius }}'],
                ['name' => 'data-spot-softness', 'template' => '{{ content.spotlight.softness }}'],
                ['name' => 'data-spot-opacity', 'template' => '{{ content.spotlight.opacity }}'],
                ['name' => 'data-mouse-damp', 'template' => '{{ content.spotlight.mouse_dampening }}'],
                ['name' => 'data-blend', 'template' => '{{ content.colors.mix_blend_mode }}']
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
