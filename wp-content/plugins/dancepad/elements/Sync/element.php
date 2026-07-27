<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_sync_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\Sync",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class Sync extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="currentColor" fill="none">
    <path d="M19 8.00019C19.5523 8.00019 20 8.44791 20 9.00019C20 9.55248 19.5523 10.0002 19 10.0002L6.7395 9.99999C6.26801 10.0001 5.80423 10.0002 5.44568 9.94429C5.10422 9.891 4.39991 9.72174 4.10522 8.93662C3.81502 8.16345 4.19563 7.51278 4.39925 7.21405C4.61518 6.89727 4.94149 6.53733 5.27604 6.1683L5.27605 6.16829L5.92887 5.44786C6.27177 5.06928 6.60453 4.7019 6.89751 4.45822C7.16831 4.23298 7.78044 3.79078 8.51516 4.1146C9.24988 4.43843 9.40097 5.217 9.44863 5.5826C9.5002 5.97814 9.5001 6.49214 9.49999 7.0218L9.49998 8.00019H19Z" fill="currentColor" />
    <path opacity="0.4" d="M4.99999 15.9998C4.4477 15.9998 3.99999 15.5521 3.99999 14.9998C3.99999 14.4475 4.4477 13.9998 4.99999 13.9998L17.2605 14C17.732 13.9999 18.1958 13.9998 18.5543 14.0557C18.8958 14.109 19.6001 14.2783 19.8948 15.0634C20.185 15.8365 19.8044 16.4872 19.6008 16.7859C19.3848 17.1027 19.0585 17.4627 18.724 17.8317L18.724 17.8317L18.0711 18.5521C17.7282 18.9307 17.3955 19.2981 17.1025 19.5418C16.8317 19.767 16.2196 20.2092 15.4848 19.8854C14.7501 19.5616 14.599 18.783 14.5514 18.4174C14.4998 18.0219 14.4999 17.5079 14.5 16.9782L14.5 15.9998H4.99999Z" fill="currentColor" />
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
            return 'Sync';
        }

        static function className()
        {
            return 'dan-sync';
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
                        'cloud_logo' => [
                            'id' => -1,
                            'type' => 'external_image',
                            'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/logo-next-bricks.png',
                            'alt' => '',
                            'caption' => ''
                        ],
                        'action_text' => 'Syncing'
                    ],
                    'animation' => [
                        'ripple_duration' => 4.25,
                        'trail_duration' => 4,
                        'spinner_duration' => 2
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
                    'layout' => [
                        'gap_between' => ['number' => 24, 'unit' => 'px', 'style' => '24px']
                    ],
                    'logo' => [
                        'color' => '#716FFF',
                        'size' => ['number' => 28, 'unit' => 'px', 'style' => '28px'],
                        'box_size' => ['number' => 46, 'unit' => 'px', 'style' => '46px'],
                        'box_background' => '#ffffff',
                        'box_borders' => [
                            'border' => [
                                'breakpoint_base' => [
                                    'top' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'right' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'bottom' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'left' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#ffffff', 'style' => 'solid']
                                ]
                            ],
                            'radius' => [
                                'breakpoint_base' => [
                                    'all' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'topLeft' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'topRight' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'bottomLeft' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'bottomRight' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'editMode' => 'all'
                                ]
                            ]
                        ],
                        'box_shadow' => 'none'
                    ],
                    'ripple' => [
                        'color' => '#e0e7ff',
                        'border_width' => ['number' => 2, 'unit' => 'px', 'style' => '2px'],
                        'width' => ['number' => 160, 'unit' => 'px', 'style' => '160px']
                    ],
                    'line' => [
                        'color' => '#716FFF',
                        'path_color' => '#eeeef0',
                        'height' => ['number' => 2, 'unit' => 'px', 'style' => '2px']
                    ],
                    'badge' => [
                        'typography' => [
                            'color' => ['breakpoint_base' => '#1d1d20'],
                            'typography' => [
                                'custom' => [
                                    'customTypography' => [
                                        'fontSize' => ['breakpoint_base' => ['number' => 14, 'unit' => 'px', 'style' => '14px']],
                                        'fontWeight' => ['breakpoint_base' => '500']
                                    ]
                                ]
                            ]
                        ],
                        'padding' => [
                            'padding' => [
                                'breakpoint_base' => [
                                    'top' => ['number' => 4, 'unit' => 'px', 'style' => '4px'],
                                    'right' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'bottom' => ['number' => 4, 'unit' => 'px', 'style' => '4px'],
                                    'left' => ['number' => 12, 'unit' => 'px', 'style' => '12px']
                                ]
                            ]
                        ],
                        'background' => '#ffffff',
                        'borders' => [
                            'border' => [
                                'breakpoint_base' => [
                                    'top' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'right' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'bottom' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'left' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#ffffff', 'style' => 'solid']
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
                        ],
                        'shadow' => 'none'
                    ],
                    'spinner' => [
                        'color' => '#ffffff',
                        'background' => '#1d1d20',
                        'padding' => ['number' => 3, 'unit' => 'px', 'style' => '3px'],
                        'borders' => [
                            'border' => [
                                'breakpoint_base' => [
                                    'top' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#1d1d20', 'style' => 'solid'],
                                    'right' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#1d1d20', 'style' => 'solid'],
                                    'bottom' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#1d1d20', 'style' => 'solid'],
                                    'left' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#1d1d20', 'style' => 'solid']
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
            return file_get_contents(__DIR__ . '/css.twig');
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
                    "layout",
                    "Layout",
                    [
                        c(
                            "gap_between",
                            "Gap Between Items",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
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
                    "logo",
                    "Logo",
                    [
                        c(
                            "color",
                            "Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
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
                            "box_size",
                            "Box Size",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "box_background",
                            "Box Background",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        getPresetSection(
                            "EssentialElements\\borders",
                            "Box Border",
                            "box_borders",
                            ['type' => 'popout']
                        ),
                        c(
                            "box_shadow",
                            "Box Shadow",
                            [],
                            ['type' => 'text', 'layout' => 'vertical'],
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
                    "ripple",
                    "Ripple",
                    [
                        c(
                            "color",
                            "Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "border_width",
                            "Border Width",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "width",
                            "Width",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
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
                    "line",
                    "Line",
                    [
                        c(
                            "color",
                            "Line Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
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
                            "height",
                            "Height",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
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
                    "badge",
                    "Badge",
                    [
                        getPresetSection(
                            "EssentialElements\\typography_with_effects_and_align_with_hoverable_everything",
                            "Typography",
                            "typography",
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            "EssentialElements\\spacing_padding_all",
                            "Padding",
                            "padding",
                            ['type' => 'popout']
                        ),
                        c(
                            "background",
                            "Background",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        getPresetSection(
                            "EssentialElements\\borders",
                            "Border",
                            "borders",
                            ['type' => 'popout']
                        ),
                        c(
                            "shadow",
                            "Box Shadow",
                            [],
                            ['type' => 'text', 'layout' => 'vertical'],
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
                    "spinner",
                    "Spinner",
                    [
                        c(
                            "color",
                            "Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "background",
                            "Background",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "padding",
                            "Padding",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        getPresetSection(
                            "EssentialElements\\borders",
                            "Border",
                            "borders",
                            ['type' => 'popout']
                        )
                    ],
                    ['type' => 'section', 'layout' => 'vertical'],
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
                            "cloud_logo",
                            "Cloud Logo",
                            [],
                            ['type' => 'wpmedia', 'layout' => 'vertical'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "action_text",
                            "Text",
                            [],
                            ['type' => 'text', 'layout' => 'vertical'],
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
                    "animation",
                    "Animation",
                    [
                        c(
                            "ripple_duration",
                            "Ripple Duration (s)",
                            [],
                            [
                                'type' => 'number',
                                'layout' => 'inline',
                                'rangeOptions' => [
                                    'min' => 1,
                                    'max' => 15,
                                    'step' => 0.25
                                ]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "trail_duration",
                            "Trail Duration (s)",
                            [],
                            [
                                'type' => 'number',
                                'layout' => 'inline',
                                'rangeOptions' => [
                                    'min' => 1,
                                    'max' => 15,
                                    'step' => 0.25
                                ]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "spinner_duration",
                            "Spinner Duration (s)",
                            [],
                            [
                                'type' => 'number',
                                'layout' => 'inline',
                                'rangeOptions' => [
                                    'min' => 0.5,
                                    'max' => 10,
                                    'step' => 0.25
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

