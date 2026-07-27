<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_workflow_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\Workflow",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class Workflow extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="currentColor" fill="none">
    <path opacity="0.4" d="M9 5C9 6.65685 7.65685 8 6 8C4.34315 8 3 6.65685 3 5C3 3.34315 4.34315 2 6 2C7.65685 2 9 3.34315 9 5Z" fill="currentColor" />
    <path opacity="0.4" d="M9 19C9 20.6569 7.65685 22 6 22C4.34315 22 3 20.6569 3 19C3 17.3431 4.34315 16 6 16C7.65685 16 9 17.3431 9 19Z" fill="currentColor" />
    <path d="M9 5C9 6.65685 7.65685 8 6 8C4.34315 8 3 6.65685 3 5C3 3.34315 4.34315 2 6 2C7.65685 2 9 3.34315 9 5Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
    <path d="M21 5C21 6.65685 19.6569 8 18 8C16.3431 8 15 6.65685 15 5C15 3.34315 16.3431 2 18 2C19.6569 2 21 3.34315 21 5Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
    <path d="M9 19C9 20.6569 7.65685 22 6 22C4.34315 22 3 20.6569 3 19C3 17.3431 4.34315 16 6 16C7.65685 16 9 17.3431 9 19Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
    <path d="M6 16V8" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
    <path d="M18 8V11C18 12.1046 17.1046 13 16 13H9C8.06812 13 7.60218 13 7.23463 13.1522C6.74458 13.3552 6.35523 13.7446 6.15224 14.2346C6 14.6022 6 15.0681 6 16" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
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
            return 'Workflow';
        }

        static function className()
        {
            return 'dan-workflow';
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
                    'steps' => [
                        'repeater' => [
                            ['text' => 'Generating'],
                            ['text' => 'Checking'],
                            ['text' => 'Submitting']
                        ]
                    ],
                    'animation' => [
                        'progress_duration' => 1,
                        'line_duration' => 2.75,
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
                    'layout' => [
                        'gap' => ['number' => 8, 'unit' => 'px', 'style' => '8px']
                    ],
                    'badge' => [
                        'gap' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                        'typography' => [
                            'color' => ['breakpoint_base' => '#000000'],
                            'typography' => [
                                'custom' => [
                                    'customTypography' => [
                                        'fontSize' => ['breakpoint_base' => ['number' => 15, 'unit' => 'px', 'style' => '15px']],
                                        'fontWeight' => ['breakpoint_base' => '500']
                                    ]
                                ]
                            ]
                        ],
                        'padding' => [
                            'padding' => [
                                'breakpoint_base' => [
                                    'top' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'right' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'bottom' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'left' => ['number' => 12, 'unit' => 'px', 'style' => '12px']
                                ]
                            ]
                        ],
                        'background' => '#ffffff',
                        'borders' => [
                            'border' => [
                                'breakpoint_base' => [
                                    'top' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'right' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'bottom' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => '#ffffff', 'style' => 'solid'],
                                    'left' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => '#ffffff', 'style' => 'solid']
                                ]
                            ],
                            'radius' => [
                                'breakpoint_base' => [
                                    'all' => ['number' => 999, 'unit' => 'px', 'style' => '999px'],
                                    'topLeft' => ['number' => 999, 'unit' => 'px', 'style' => '999px'],
                                    'topRight' => ['number' => 999, 'unit' => 'px', 'style' => '999px'],
                                    'bottomLeft' => ['number' => 999, 'unit' => 'px', 'style' => '999px'],
                                    'bottomRight' => ['number' => 999, 'unit' => 'px', 'style' => '999px'],
                                    'editMode' => 'all'
                                ]
                            ]
                        ]
                    ],
                    'active_badge' => [
                        'background' => '#000000',
                        'text_color' => '#ffffff',
                        'border_color' => '#000000'
                    ],
                    'progress' => [
                        'color' => '#c2da91',
                        'completed_color' => '#ffffff',
                        'checkmark_color' => '#000000',
                        'size' => ['number' => 20, 'unit' => 'px', 'style' => '20px']
                    ],
                    'line' => [
                        'color' => '#ffffff',
                        'fill_color' => '#000000',
                        'height' => ['number' => 54, 'unit' => 'px', 'style' => '54px'],
                        'width' => ['number' => 2, 'unit' => 'px', 'style' => '2px']
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
                            "gap",
                            "Gap",
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
                        c(
                            "gap",
                            "Gap",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
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
                            "Borders",
                            "borders",
                            ['type' => 'popout']
                        )
                    ],
                    ['type' => 'section', 'layout' => 'vertical'],
                    false,
                    false,
                    []
                ),
                c(
                    "active_badge",
                    "Active Badge",
                    [
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
                            "text_color",
                            "Text Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "border_color",
                            "Border Color",
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
                    "progress",
                    "Progress",
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
                            "completed_color",
                            "Completed Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "checkmark_color",
                            "Checkmark Color",
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
                            "Color",
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
                )
            ];
        }

        static function contentControls()
        {
            return [
                c(
                    "steps",
                    "Steps",
                    [
                        c(
                            "repeater",
                            "Repeater",
                            [
                                c(
                                    "text",
                                    "Text",
                                    [],
                                    ['type' => 'text', 'layout' => 'vertical'],
                                    false,
                                    false,
                                    []
                                )
                            ],
                            [
                                'type' => 'repeater',
                                'layout' => 'vertical',
                                'repeaterOptions' => [
                                    'titleTemplate' => '{text}',
                                    'defaultTitle' => 'Step',
                                    'buttonName' => 'Add step'
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
                            "progress_duration",
                            "Progress Duration (s)",
                            [],
                            [
                                'type' => 'number',
                                'layout' => 'inline',
                                'rangeOptions' => [
                                    'min' => 0.25,
                                    'max' => 5,
                                    'step' => 0.25
                                ]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "line_duration",
                            "Line Duration (s)",
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
                    'title' => 'Dancepad - Workflow',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Workflow/dancepad_workflow.min.js?ver=' . DANCEPAD_VERSION]
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_workflow();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;'
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_workflow();'],
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
                'onPropertyChange' => [['script' => 'dancepad_workflow();']],
                'onCreatedElement' => [['script' => 'dancepad_workflow();']],
                'onMountedElement' => [['script' => 'dancepad_workflow();']],
                'onMovedElement' => [['script' => 'dancepad_workflow();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_workflow();']]
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
                ['name' => 'data-progress-dur', 'template' => '{{ content.animation.progress_duration }}'],
                ['name' => 'data-line-dur', 'template' => '{{ content.animation.line_duration }}'],
                ['name' => 'data-loop', 'template' => '{% if content.animation.loop %}1{% else %}0{% endif %}']
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

