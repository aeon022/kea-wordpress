<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_portfolio_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\Portfolio",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class Portfolio extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
    <path opacity="0.4" d="M3.75 7C3.75 5.61929 4.86929 4.5 6.25 4.5H17.75C19.1307 4.5 20.25 5.61929 20.25 7V17C20.25 18.3807 19.1307 19.5 17.75 19.5H6.25C4.86929 19.5 3.75 18.3807 3.75 17V7Z" fill="currentColor"/>
    <path d="M7 8.75C7 8.33579 7.33579 8 7.75 8H16.25C16.6642 8 17 8.33579 17 8.75C17 9.16421 16.6642 9.5 16.25 9.5H7.75C7.33579 9.5 7 9.16421 7 8.75ZM7 12C7 11.5858 7.33579 11.25 7.75 11.25H16.25C16.6642 11.25 17 11.5858 17 12C17 12.4142 16.6642 12.75 16.25 12.75H7.75C7.33579 12.75 7 12.4142 7 12ZM7 15.25C7 14.8358 7.33579 14.5 7.75 14.5H13.25C13.6642 14.5 14 14.8358 14 15.25C14 15.6642 13.6642 16 13.25 16H7.75C7.33579 16 7 15.6642 7 15.25Z" fill="currentColor"/>
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
            return 'Portfolio';
        }

        static function className()
        {
            return 'dan-portfolio';
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
                    'projects' => [
                        'repeater' => [
                            [
                                'title' => 'Architect Dreams',
                                'date' => '2023',
                                'image' => [
                                    'id' => -1,
                                    'type' => 'external_image',
                                    'url' => 'https://cdn.cosmos.so/010fe28e-5c4f-46f7-a445-488da0b17001?format=jpeg',
                                    'alt' => '',
                                    'caption' => ''
                                ],
                                'link' => [
                                    'type' => 'url',
                                    'url' => '',
                                    'openInNewTab' => false
                                ]
                            ],
                            [
                                'title' => 'Visual Language',
                                'date' => '2024',
                                'image' => [
                                    'id' => -1,
                                    'type' => 'external_image',
                                    'url' => 'https://cdn.cosmos.so/e37fcbc9-72b7-4dc8-a3d2-439599f01eb4?format=jpeg',
                                    'alt' => '',
                                    'caption' => ''
                                ],
                                'link' => [
                                    'type' => 'url',
                                    'url' => '',
                                    'openInNewTab' => false
                                ]
                            ],
                            [
                                'title' => 'Liminal Spaces',
                                'date' => '2024',
                                'image' => [
                                    'id' => -1,
                                    'type' => 'external_image',
                                    'url' => 'https://cdn.cosmos.so/59cab26d-fb1b-4838-8047-6f33e3898ceb?format=jpeg',
                                    'alt' => '',
                                    'caption' => ''
                                ],
                                'link' => [
                                    'type' => 'url',
                                    'url' => '',
                                    'openInNewTab' => false
                                ]
                            ],
                            [
                                'title' => 'Accidental Album',
                                'date' => '2025',
                                'image' => [
                                    'id' => -1,
                                    'type' => 'external_image',
                                    'url' => 'https://cdn.cosmos.so/7bd89b48-e281-4526-a959-be1140886c5f?format=jpeg',
                                    'alt' => '',
                                    'caption' => ''
                                ],
                                'link' => [
                                    'type' => 'url',
                                    'url' => '',
                                    'openInNewTab' => false
                                ]
                            ]
                        ]
                    ],
                    'background_image' => [
                        'hover_opacity' => 1,
                        'initial_scale' => 1.2,
                        'end_scale' => 1
                    ],
                    'noise' => [
                        'enabled' => true,
                        'opacity' => 0.9,
                        'speed' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s']
                    ],
                    'animation' => [
                        'fill_in_duration' => ['number' => 0.2, 'unit' => 's', 'style' => '0.2s'],
                        'fill_out_duration' => ['number' => 0.8, 'unit' => 's', 'style' => '0.8s'],
                        'zoom_duration' => ['number' => 0.8, 'unit' => 's', 'style' => '0.8s']
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
                    'container' => [
                        'size' => [
                            'width' => ['breakpoint_base' => ['number' => 100, 'unit' => '%', 'style' => '100%']],
                            'height' => ['breakpoint_base' => ['number' => 100, 'unit' => 'vh', 'style' => '100vh']]
                        ],
                        'padding' => [
                            'padding' => [
                                'breakpoint_base' => [
                                    'top' => ['number' => 20, 'unit' => 'px', 'style' => '20px'],
                                    'right' => ['number' => 20, 'unit' => 'px', 'style' => '20px'],
                                    'bottom' => ['number' => 20, 'unit' => 'px', 'style' => '20px'],
                                    'left' => ['number' => 20, 'unit' => 'px', 'style' => '20px']
                                ]
                            ]
                        ],
                        'background' => [
                            'color' => ['breakpoint_base' => '#1a1917']
                        ]
                    ],
                    'items_container' => [
                        'max_width' => ['number' => 1000, 'unit' => 'px', 'style' => '1000px']
                    ],
                    'project_item' => [
                        'title_tag' => 'span',
                        'gap' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                        'hover_fill' => '#f8f5f2',
                        'padding' => [
                            'padding' => [
                                'breakpoint_base' => [
                                    'top' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'right' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                                    'bottom' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'left' => ['number' => 0, 'unit' => 'px', 'style' => '0px']
                                ]
                            ]
                        ],
                        'border' => [
                            'border' => [
                                'breakpoint_base' => [
                                    'top' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => 'rgba(248, 245, 242, 0.1)', 'style' => 'solid'],
                                    'right' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => 'rgba(248, 245, 242, 0.1)', 'style' => 'solid'],
                                    'bottom' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => 'rgba(248, 245, 242, 0.1)', 'style' => 'solid'],
                                    'left' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => 'rgba(248, 245, 242, 0.1)', 'style' => 'solid']
                                ]
                            ]
                        ]
                    ],
                    'title' => [
                        'typography' => [
                            'color' => ['breakpoint_base' => '#f8f5f2'],
                            'typography' => [
                                'custom' => [
                                    'customTypography' => [
                                        'fontSize' => ['breakpoint_base' => ['number' => 29, 'unit' => 'px', 'style' => '29px']],
                                        'fontWeight' => ['breakpoint_base' => '700']
                                    ]
                                ]
                            ]
                        ]
                    ],
                    'date' => [
                        'typography' => [
                            'color' => ['breakpoint_base' => '#f8f5f2'],
                            'typography' => [
                                'custom' => [
                                    'customTypography' => [
                                        'fontSize' => ['breakpoint_base' => ['number' => 29, 'unit' => 'px', 'style' => '29px']],
                                        'fontWeight' => ['breakpoint_base' => '700']
                                    ]
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
                    "container",
                    "Container",
                    [
                        getPresetSection(
                            "EssentialElements\\size",
                            "Size",
                            "size",
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            "EssentialElements\\spacing_padding_all",
                            "Padding",
                            "padding",
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            "EssentialElements\\background",
                            "Background",
                            "background",
                            ['type' => 'popout']
                        )
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    "items_container",
                    "Items Container",
                    [
                        c(
                            "max_width",
                            "Max Width",
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
                    "project_item",
                    "Project Item",
                    [
                        getPresetSection(
                            "EssentialElements\\spacing_padding_all",
                            "Padding",
                            "padding",
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            "EssentialElements\\borders",
                            "Border",
                            "border",
                            ['type' => 'popout']
                        ),
                        c(
                            "gap",
                            "Gap",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "hover_fill",
                            "Hover Fill Color",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "title_tag",
                            "Title Tag",
                            [],
                            [
                                'type' => 'dropdown',
                                'layout' => 'inline',
                                'items' => [
                                    ['value' => 'span', 'text' => 'span'],
                                    ['value' => 'h1', 'text' => 'h1'],
                                    ['value' => 'h2', 'text' => 'h2'],
                                    ['value' => 'h3', 'text' => 'h3'],
                                    ['value' => 'h4', 'text' => 'h4'],
                                    ['value' => 'h5', 'text' => 'h5'],
                                    ['value' => 'h6', 'text' => 'h6'],
                                    ['value' => 'p', 'text' => 'p'],
                                    ['value' => 'div', 'text' => 'div']
                                ]
                            ],
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
                    "title",
                    "Title",
                    [
                        getPresetSection(
                            "EssentialElements\\typography_with_effects_and_align",
                            "Typography",
                            "typography",
                            ['type' => 'popout']
                        )
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    "date",
                    "Date",
                    [
                        getPresetSection(
                            "EssentialElements\\typography_with_effects_and_align",
                            "Typography",
                            "typography",
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
                    "projects",
                    "Projects",
                    [
                        c(
                            "repeater",
                            "Repeater",
                            [
                                c(
                                    "title",
                                    "Title",
                                    [],
                                    ['type' => 'text', 'layout' => 'vertical'],
                                    false,
                                    false,
                                    []
                                ),
                                c(
                                    "date",
                                    "Date",
                                    [],
                                    ['type' => 'text', 'layout' => 'inline'],
                                    false,
                                    false,
                                    []
                                ),
                                c(
                                    "image",
                                    "Image",
                                    [],
                                    ['type' => 'wpmedia', 'layout' => 'vertical'],
                                    false,
                                    false,
                                    []
                                ),
                                c(
                                    "link",
                                    "Link",
                                    [],
                                    ['type' => 'link', 'layout' => 'vertical'],
                                    false,
                                    false,
                                    []
                                )
                            ],
                            [
                                'type' => 'repeater',
                                'layout' => 'vertical',
                                'repeaterOptions' => [
                                    'titleTemplate' => '{title}',
                                    'defaultTitle' => 'Project',
                                    'buttonName' => 'Add project'
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
                    "background_image",
                    "Background Image",
                    [
                        c(
                            "hover_opacity",
                            "Hover Opacity",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.05]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "initial_scale",
                            "Initial Scale",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0.2, 'max' => 3, 'step' => 0.05]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "end_scale",
                            "End Scale",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0.2, 'max' => 3, 'step' => 0.05]],
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
                    "noise",
                    "Noise Overlay",
                    [
                        c(
                            "enabled",
                            "Enable Noise",
                            [],
                            ['type' => 'toggle', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "opacity",
                            "Noise Opacity",
                            [],
                            [
                                'type' => 'number',
                                'layout' => 'inline',
                                'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.05],
                                'condition' => [[['path' => 'content.noise.enabled', 'operand' => 'is set', 'value' => '']]]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "speed",
                            "Noise Speed",
                            [],
                            [
                                'type' => 'unit',
                                'layout' => 'inline',
                                'unitOptions' => ['types' => ['s']],
                                'condition' => [[['path' => 'content.noise.enabled', 'operand' => 'is set', 'value' => '']]]
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
                            "fill_in_duration",
                            "Hover Fill In Duration",
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "fill_out_duration",
                            "Hover Fill Out Duration",
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "zoom_duration",
                            "Zoom Duration",
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']]],
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
                    'title' => 'Dancepad - Portfolio',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Portfolio/dancepad_portfolio.min.js?ver=' . DANCEPAD_VERSION]
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_portfolio();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;'
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_portfolio();'],
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
                'onPropertyChange' => [['script' => 'dancepad_portfolio();']],
                'onCreatedElement' => [['script' => 'dancepad_portfolio();']],
                'onMountedElement' => [['script' => 'dancepad_portfolio();']],
                'onMovedElement' => [['script' => 'dancepad_portfolio();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_portfolio();']]
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
                ['name' => 'data-bg-opacity', 'template' => '{{ content.background_image.hover_opacity }}'],
                ['name' => 'data-bg-scale', 'template' => '{{ content.background_image.initial_scale }}'],
                ['name' => 'data-bg-scale-end', 'template' => '{{ content.background_image.end_scale }}']
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
            return ['content.content.text'];
        }

        static function propertyPathsToSsrElementWhenValueChanges()
        {
            return false;
        }
    }
}
