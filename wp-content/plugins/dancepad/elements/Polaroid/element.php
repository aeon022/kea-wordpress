<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_polaroid_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\Polaroid",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class Polaroid extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
        <path d="M6.25 4.75C6.25 3.2298 7.48343 1.998 9.00363 2L15.0036 2.00791C16.521 2.00991 17.75 3.24054 17.75 4.75791L17.75 18.7474C17.75 20.2661 16.5188 21.4974 15 21.4974H9C7.48122 21.4974 6.25 20.2661 6.25 18.7474V4.75Z" fill="currentColor" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.8944 6.30056C23.1414 6.79454 22.9412 7.39522 22.4472 7.6422L21.5528 8.08942C21.214 8.25881 21 8.60507 21 8.98385V14.5117C21 14.8905 21.214 15.2367 21.5528 15.4061L22.4472 15.8534C22.9412 16.1003 23.1414 16.701 22.8944 17.195C22.6474 17.689 22.0468 17.8892 21.5528 17.6422L20.6584 17.195C19.642 16.6868 19 15.648 19 14.5117V8.98385C19 7.84753 19.642 6.80874 20.6584 6.30056L21.5528 5.85335C22.0468 5.60636 22.6474 5.80659 22.8944 6.30056Z" fill="currentColor" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.10579 6.30056C1.35278 5.80659 1.95345 5.60636 2.44743 5.85335L3.34186 6.30056C4.35821 6.80874 5.00022 7.84753 5.00022 8.98385V14.5117C5.00022 15.648 4.35821 16.6868 3.34186 17.195L2.44743 17.6422C1.95345 17.8892 1.35278 17.689 1.10579 17.195C0.858803 16.701 1.05903 16.1003 1.55301 15.8534L2.44743 15.4061C2.78622 15.2367 3.00022 14.8905 3.00022 14.5117V8.98385C3.00022 8.60507 2.78622 8.25881 2.44743 8.08942L1.55301 7.6422C1.05903 7.39522 0.858803 6.79454 1.10579 6.30056Z" fill="currentColor" />
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
            return 'Polaroid';
        }

        static function className()
        {
            return 'dan-polaroid';
        }

        static function category()
        {
            return 'dancepad_sliders';
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
                    'cards' => [
                        'repeater' => [
                            [
                                'image' => [
                                    'id' => -1,
                                    'type' => 'external_image',
                                    'url' => 'https://oxyfolio.com/wp-content/uploads/2025/04/14-1-scaled.jpg',
                                    'alt' => '',
                                    'caption' => ''
                                ]
                            ],
                            [
                                'image' => [
                                    'id' => -1,
                                    'type' => 'external_image',
                                    'url' => 'https://oxyfolio.com/wp-content/uploads/2025/04/24-scaled.jpg',
                                    'alt' => '',
                                    'caption' => ''
                                ]
                            ],
                            [
                                'image' => [
                                    'id' => -1,
                                    'type' => 'external_image',
                                    'url' => 'https://oxyfolio.com/wp-content/uploads/2025/04/74-scaled.jpg',
                                    'alt' => '',
                                    'caption' => ''
                                ]
                            ],
                            [
                                'image' => [
                                    'id' => -1,
                                    'type' => 'external_image',
                                    'url' => 'https://oxyfolio.com/wp-content/uploads/2025/04/83-scaled.jpg',
                                    'alt' => '',
                                    'caption' => ''
                                ]
                            ]
                        ]
                    ],
                    'interaction' => [
                        'sensitivity' => 200,
                        'rotation' => 4
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
                    'card_style' => [
                        'width' => ['number' => 220, 'unit' => 'px', 'style' => '220px'],
                        'height' => ['number' => 220, 'unit' => 'px', 'style' => '220px'],
                        'border' => [
                            'border' => [
                                'breakpoint_base' => [
                                    'top' => ['width' => ['number' => 5, 'unit' => 'px', 'style' => '5px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'right' => ['width' => ['number' => 5, 'unit' => 'px', 'style' => '5px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'bottom' => ['width' => ['number' => 5, 'unit' => 'px', 'style' => '5px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'left' => ['width' => ['number' => 5, 'unit' => 'px', 'style' => '5px'], 'color' => '#ffffff', 'style' => 'solid']
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
                    "card_style",
                    "Card Style",
                    [
                        c(
                            "width",
                            "Width",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
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
                )
            ];
        }

        static function contentControls()
        {
            return [
                c(
                    "cards",
                    "Cards",
                    [
                        c(
                            "repeater",
                            "Repeater",
                            [
                                c(
                                    "image",
                                    "Image",
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
                                    'titleTemplate' => 'Card',
                                    'defaultTitle' => 'Card',
                                    'buttonName' => 'Add card'
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
                    "interaction",
                    "Interaction",
                    [
                        c(
                            "sensitivity",
                            "Drag Sensitivity",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 50, 'max' => 500, 'step' => 10]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "rotation",
                            "Rotation Spread",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 20, 'step' => 1]],
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
                    'title' => 'Dancepad - Polaroid',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Polaroid/dancepad_polaroid.min.js?ver=' . DANCEPAD_VERSION]
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_polaroid();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;'
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_polaroid();'],
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
                'onPropertyChange' => [['script' => 'dancepad_polaroid();']],
                'onCreatedElement' => [['script' => 'dancepad_polaroid();']],
                'onMountedElement' => [['script' => 'dancepad_polaroid();']],
                'onMovedElement' => [['script' => 'dancepad_polaroid();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_polaroid();']]
            ];
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
            return [
                ['name' => 'data-flickering', 'template' => '1'],
                ['name' => 'data-sensitivity', 'template' => '{{ content.interaction.sensitivity }}'],
                ['name' => 'data-rotation', 'template' => '{{ content.interaction.rotation }}']
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
