<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_orbit_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\Orbit",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class Orbit extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
    <path opacity="0.4" d="M12 3.75C7.44365 3.75 3.75 7.44365 3.75 12C3.75 16.5563 7.44365 20.25 12 20.25C16.5563 20.25 20.25 16.5563 20.25 12C20.25 7.44365 16.5563 3.75 12 3.75Z" fill="currentColor"/>
    <path d="M12 6.5C8.96243 6.5 6.5 8.96243 6.5 12C6.5 15.0376 8.96243 17.5 12 17.5C15.0376 17.5 17.5 15.0376 17.5 12C17.5 8.96243 15.0376 6.5 12 6.5ZM5 12C5 8.13401 8.13401 5 12 5C15.866 5 19 8.13401 19 12C19 15.866 15.866 19 12 19C8.13401 19 5 15.866 5 12Z" fill="currentColor"/>
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
            return 'Orbit';
        }

        static function className()
        {
            return 'dan-orbit';
        }

        static function category()
        {
            return 'dancepad_cores';
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
                    'content' => [
                        'logo' => [
                            'id' => -1,
                            'type' => 'external_image',
                            'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/logo-next-bricks.png',
                            'alt' => '',
                            'caption' => ''
                        ]
                    ],
                    'icons' => [
                        'items' => [
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/logo-next-bricks.png', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/logo-next-bricks.png', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/logo-next-bricks.png', 'alt' => '', 'caption' => '']]
                        ]
                    ],
                    'rings' => [
                        'ring_count' => 8
                    ]
                ],
                'design' => [
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
                    'orbit' => [
                        'size' => ['number' => 328, 'unit' => 'px', 'style' => '328px'],
                        'orbit_diameter' => ['number' => 240, 'unit' => 'px', 'style' => '240px'],
                        'item_size' => ['number' => 48, 'unit' => 'px', 'style' => '48px']
                    ],
                    'item' => [
                        'background' => [
                            'color' => ['breakpoint_base' => 'rgba(39, 39, 42, 1)']
                        ],
                        'border' => [
                            'border' => [
                                'breakpoint_base' => [
                                    'top' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => 'rgba(84, 84, 89, 0.65)', 'style' => 'solid'],
                                    'right' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => 'rgba(84, 84, 89, 0.65)', 'style' => 'solid'],
                                    'bottom' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => 'rgba(84, 84, 89, 0.65)', 'style' => 'solid'],
                                    'left' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => 'rgba(84, 84, 89, 0.65)', 'style' => 'solid']
                                ]
                            ],
                            'radius' => [
                                'breakpoint_base' => [
                                    'all' => ['number' => 9999, 'unit' => 'px', 'style' => '9999px'],
                                    'topLeft' => ['number' => 9999, 'unit' => 'px', 'style' => '9999px'],
                                    'topRight' => ['number' => 9999, 'unit' => 'px', 'style' => '9999px'],
                                    'bottomLeft' => ['number' => 9999, 'unit' => 'px', 'style' => '9999px'],
                                    'bottomRight' => ['number' => 9999, 'unit' => 'px', 'style' => '9999px'],
                                    'editMode' => 'all'
                                ]
                            ]
                        ]
                    ],
                    'rings' => [
                        'ring_start' => ['number' => 104, 'unit' => 'px', 'style' => '104px'],
                        'ring_gap' => ['number' => 32, 'unit' => 'px', 'style' => '32px'],
                        'path_color' => 'rgba(235, 235, 255, 0.06)',
                        'ring_color_1' => 'rgba(158, 122, 255, 0.35)',
                        'ring_color_2' => 'rgba(254, 139, 187, 0.7)',
                        'ring_color_3' => '#ffbd7a',
                        'gradient_opacity' => 0.25
                    ],
                    'animation' => [
                        'gradient_speed' => 10,
                        'orbit_speed' => 80
                    ]
                ]
            ];
        }

        static function defaultChildren()
        {
            return false;
        }

        static function cssTemplate()
        {
            $template = file_get_contents(__DIR__ . '/css.twig');
            return $template;
        }

        static function designControls()
        {
            return [
                getPresetSection(
                    "EssentialElements\\spacing_margin_all",
                    "Margin",
                    "margin",
                    ['type' => 'popout']
                ),
                c(
                    "orbit",
                    "Orbit",
                    [
                        c(
                            "size",
                            "Size",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "orbit_diameter",
                            "Orbit Diameter",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "item_size",
                            "Items Size",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        )
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    "item",
                    "Items",
                    [
                        getPresetSection(
                            "EssentialElements\\background",
                            "Background",
                            "background",
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            "EssentialElements\\borders",
                            "Border",
                            "border",
                            ['type' => 'popout']
                        )
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    "rings",
                    "Rings",
                    [
                        c(
                            "ring_start",
                            "First Ring Size",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "ring_gap",
                            "Gap",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "path_color",
                            "Path Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "ring_color_1",
                            "Gradient Color 1",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "ring_color_2",
                            "Gradient Color 2",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "ring_color_3",
                            "Gradient Color 3",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "gradient_opacity",
                            "Opacity",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.05]],
                            false,
                            false,
                            []
                        )
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    "animation",
                    "Animation",
                    [
                        c(
                            "gradient_speed",
                            "Gradient Speed (s)",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 60, 'step' => 1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "orbit_speed",
                            "Orbit Speed (s)",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 5, 'max' => 200, 'step' => 5]],
                            false,
                            false,
                            []
                        )
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                )
            ];
        }

        static function contentControls()
        {
            return [
                c(
                    "content",
                    "Content",
                    [
                        c(
                            "logo",
                            "Logo",
                            [],
                            ['type' => 'wpmedia', 'layout' => 'vertical'],
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
                    "icons",
                    "Icons",
                    [
                        c(
                            "items",
                            "Items",
                            [
                                c(
                                    "image",
                                    "Icon",
                                    [],
                                    ['type' => 'wpmedia', 'layout' => 'vertical'],
                                    false,
                                    false,
                                    []
                                )
                            ],
                            [
                                'type' => 'repeater',
                                'layout' => 'vertical',
                                'repeaterOptions' => [
                                    'titleTemplate' => 'Icon',
                                    'defaultTitle' => 'Icon',
                                    'buttonName' => 'Add icon'
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
                    "rings",
                    "Rings",
                    [
                        c(
                            "ring_count",
                            "Number",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 16, 'step' => 1]],
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
            return false;
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
            return false;
        }

        static function nestingRule()
        {
            return ["type" => "final"];
        }

        static function spacingBars()
        {
            return false;
        }

        static function attributes()
        {
            return false;
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
