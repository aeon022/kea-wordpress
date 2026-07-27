<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_looping_logos_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\LoopingLogos",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class LoopingLogos extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
    <path opacity="0.4" d="M3.75 7C3.75 5.61929 4.86929 4.5 6.25 4.5H17.75C19.1307 4.5 20.25 5.61929 20.25 7V17C20.25 18.3807 19.1307 19.5 17.75 19.5H6.25C4.86929 19.5 3.75 18.3807 3.75 17V7Z" fill="currentColor"/>
    <path d="M7.5 8.5C7.5 8.08579 7.83579 7.75 8.25 7.75H10.75C11.1642 7.75 11.5 8.08579 11.5 8.5V10.5C11.5 10.9142 11.1642 11.25 10.75 11.25H8.25C7.83579 11.25 7.5 10.9142 7.5 10.5V8.5ZM12.5 8.5C12.5 8.08579 12.8358 7.75 13.25 7.75H15.75C16.1642 7.75 16.5 8.08579 16.5 8.5V10.5C16.5 10.9142 16.1642 11.25 15.75 11.25H13.25C12.8358 11.25 12.5 10.9142 12.5 10.5V8.5ZM7.5 13.5C7.5 13.0858 7.83579 12.75 8.25 12.75H10.75C11.1642 12.75 11.5 13.0858 11.5 13.5V15.5C11.5 15.9142 11.1642 16.25 10.75 16.25H8.25C7.83579 16.25 7.5 15.9142 7.5 15.5V13.5Z" fill="currentColor"/>
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
            return 'Looping Logos';
        }

        static function className()
        {
            return 'dan-looping-logos';
        }

        static function category()
        {
            return 'dancepad_medias';
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
                    'logos' => [
                        'repeater' => [
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/Frame-3.svg', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/Frame-8.svg', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/Frame-15.svg', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/Frame-18.svg', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/Frame.svg', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/Frame-16.svg', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/Frame-11.svg', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/Frame-1.svg', 'alt' => '', 'caption' => '']],
                            ['image' => ['id' => -1, 'type' => 'external_image', 'url' => 'https://nextbricks.io/wp-content/uploads/2024/07/Frame-17.svg', 'alt' => '', 'caption' => '']]
                        ]
                    ],
                    'settings' => [
                        'logos_per_loop' => 3
                    ],
                    'animation' => [
                        'interval' => 2500,
                        'stagger' => 0.13,
                        'translate_y' => 40,
                        'blur' => 5
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
                    'style' => [
                        'logo_height' => ['number' => 50, 'unit' => 'px', 'style' => '50px'],
                        'gap' => ['number' => 40, 'unit' => 'px', 'style' => '40px']
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
                    "style",
                    "Style",
                    [
                        c(
                            "logo_height",
                            "Logo Height",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "gap",
                            "Gap",
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
                )
            ];
        }

        static function contentControls()
        {
            return [
                c(
                    "logos",
                    "Logos",
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
                                    'titleTemplate' => 'Logo',
                                    'defaultTitle' => 'Logo',
                                    'buttonName' => 'Add logo'
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
                            "logos_per_loop",
                            "Logos per Loop",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 12, 'step' => 1]],
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
                            "interval",
                            "Interval (ms)",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 500, 'max' => 10000, 'step' => 100]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "stagger",
                            "Stagger (s)",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "translate_y",
                            "Translate Y (px)",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 200, 'step' => 1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "blur",
                            "Blur (px)",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 30, 'step' => 0.5]],
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
                    'title' => 'Dancepad - Looping Logos',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Looping_Logos/dancepad_looping_logos.min.js?ver=' . DANCEPAD_VERSION]
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_looping_logos();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;'
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_looping_logos();'],
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
                'onPropertyChange' => [['script' => 'dancepad_looping_logos();']],
                'onCreatedElement' => [['script' => 'dancepad_looping_logos();']],
                'onMountedElement' => [['script' => 'dancepad_looping_logos();']],
                'onMovedElement' => [['script' => 'dancepad_looping_logos();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_looping_logos();']]
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
                ['name' => 'data-interval', 'template' => '{{ content.animation.interval }}'],
                ['name' => 'data-stagger', 'template' => '{{ content.animation.stagger }}']
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
