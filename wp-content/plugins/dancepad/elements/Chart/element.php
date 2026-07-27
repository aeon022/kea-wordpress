<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_chart_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\Chart",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class Chart extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
    <path opacity="0.4" d="M4 4.75C4 4.33579 4.33579 4 4.75 4H19.25C19.6642 4 20 4.33579 20 4.75V19.25C20 19.6642 19.6642 20 19.25 20H4.75C4.33579 20 4 19.6642 4 19.25V4.75Z" fill="currentColor"/>
    <path d="M7 15.5L10.1667 12.3333L12.8333 15L17 10.8333" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
            return 'Chart';
        }

        static function className()
        {
            return 'dan-chart';
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
                    'data_points' => [
                        'repeater' => [
                            ['value' => 15],
                            ['value' => 21],
                            ['value' => 12],
                            ['value' => 12],
                            ['value' => 15],
                            ['value' => 9],
                            ['value' => 22],
                            ['value' => 17],
                            ['value' => 25],
                            ['value' => 28],
                            ['value' => 42],
                            ['value' => 45],
                            ['value' => 51],
                            ['value' => 38],
                            ['value' => 42],
                            ['value' => 69],
                            ['value' => 69],
                            ['value' => 79],
                            ['value' => 77],
                            ['value' => 78],
                            ['value' => 70],
                            ['value' => 94],
                            ['value' => 91],
                            ['value' => 99],
                            ['value' => 99],
                            ['value' => 85],
                            ['value' => 95]
                        ]
                    ],
                    'animation' => [
                        'duration' => 8,
                        'loop' => false
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
                    'chart' => [
                        'width' => ['number' => 100, 'unit' => '%', 'style' => '100%'],
                        'line_width' => ['number' => 2.28, 'unit' => 'px', 'style' => '2.28px'],
                        'line_color' => '#2f9e63',
                        'fill_color' => '#c3e4c9'
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
                    "chart",
                    "Chart",
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
                            "line_width",
                            "Line Width",
                            [],
                            [
                                'type' => 'unit',
                                'layout' => 'inline',
                                'unitOptions' => ['types' => ['px']]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "line_color",
                            "Line Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "fill_color",
                            "Fill Color",
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
                )
            ];
        }

        static function contentControls()
        {
            return [
                c(
                    "data_points",
                    "Data Points",
                    [
                        c(
                            "repeater",
                            "Points",
                            [
                                c(
                                    "value",
                                    "Value",
                                    [],
                                    [
                                        'type' => 'number',
                                        'layout' => 'inline',
                                        'rangeOptions' => [
                                            'min' => 0,
                                            'max' => 100,
                                            'step' => 1
                                        ]
                                    ],
                                    false,
                                    false,
                                    []
                                )
                            ],
                            [
                                'type' => 'repeater',
                                'layout' => 'vertical',
                                'repeaterOptions' => [
                                    'titleTemplate' => 'Value {value}',
                                    'defaultTitle' => 'Point',
                                    'buttonName' => 'Add point'
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
                    "animation",
                    "Animation",
                    [
                        c(
                            "duration",
                            "Duration (s)",
                            [],
                            [
                                'type' => 'number',
                                'layout' => 'inline',
                                'rangeOptions' => [
                                    'min' => 1,
                                    'max' => 30,
                                    'step' => 0.5
                                ]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "loop",
                            "Loop",
                            [],
                            ['type' => 'toggle', 'layout' => 'inline'],
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
                    'title' => 'Dancepad - Chart',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Chart/dancepad_chart.min.js?ver=' . DANCEPAD_VERSION]
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_chart();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;'
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_chart();'],
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
                'onPropertyChange' => [['script' => 'dancepad_chart();']],
                'onCreatedElement' => [['script' => 'dancepad_chart();']],
                'onMountedElement' => [['script' => 'dancepad_chart();']],
                'onMovedElement' => [['script' => 'dancepad_chart();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_chart();']]
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
                [
                    'name' => 'data-loop',
                    'template' => '{% if content.animation.loop %}1{% else %}0{% endif %}'
                ],
                [
                    'name' => 'data-values',
                    'template' => '{% for item in content.data_points.repeater %}{{ item.value|default(0) }}{% if not loop.last %},{% endif %}{% endfor %}'
                ]
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

