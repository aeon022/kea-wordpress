<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_glossy_logo_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\GlossyLogo",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class GlossyLogo extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
    <path opacity="0.4" d="M3.75 7C3.75 5.48122 4.98122 4.25 6.5 4.25H17.5C19.0188 4.25 20.25 5.48122 20.25 7V17C20.25 18.5188 19.0188 19.75 17.5 19.75H6.5C4.98122 19.75 3.75 18.5188 3.75 17V7Z" fill="currentColor"/>
    <path d="M7 15.5C7 15.0858 7.33579 14.75 7.75 14.75H16.25C16.6642 14.75 17 15.0858 17 15.5C17 15.9142 16.6642 16.25 16.25 16.25H7.75C7.33579 16.25 7 15.9142 7 15.5ZM7.75 8.25C7.33579 8.25 7 8.58579 7 9C7 9.41421 7.33579 9.75 7.75 9.75H16.25C16.6642 9.75 17 9.41421 17 9C17 8.58579 16.6642 8.25 16.25 8.25H7.75ZM7 12.25C7 11.8358 7.33579 11.5 7.75 11.5H13.75C14.1642 11.5 14.5 11.8358 14.5 12.25C14.5 12.6642 14.1642 13 13.75 13H7.75C7.33579 13 7 12.6642 7 12.25Z" fill="currentColor"/>
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
            return 'Glossy Logo';
        }

        static function className()
        {
            return 'dan-glossy-logo';
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
                    'content' => [
                        'source' => [
                            'id' => -1,
                            'type' => 'external_image',
                            'url' => 'https://workers.paper.design/file-assets/01K2KEX78Z34EZ86R69T4CGNNX/01K4PRJY7A6KB5V1PXMR92Q9F4.png',
                            'alt' => '',
                            'caption' => ''
                        ]
                    ],
                    'colors' => [
                        'bg_color' => '#000000',
                        'palette_count' => 7,
                        'color_1' => '#11206a',
                        'color_2' => '#1f3ba2',
                        'color_3' => '#2f63e7',
                        'color_4' => '#6bd7ff',
                        'color_5' => '#ffe679',
                        'color_6' => '#ff991e',
                        'color_7' => '#ff4c00',
                        'color_8' => '#ff4c00'
                    ],
                    'shader' => [
                        'speed' => 1,
                        'contour' => 0.5,
                        'angle' => 0,
                        'noise' => 0.05,
                        'inner_glow' => 0.5,
                        'outer_glow' => 0.5,
                        'scale' => 0.75
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
                        'width' => ['breakpoint_base' => ['number' => 600, 'unit' => 'px', 'style' => '600px']],
                        'height' => ['breakpoint_base' => ['number' => 400, 'unit' => 'px', 'style' => '400px']]
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
                            "source",
                            "Source",
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
                            "palette_count",
                            "Palette Size",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 2, 'max' => 8, 'step' => 1]],
                            false,
                            false,
                            []
                        ),
                        c("color_1", "Color 1", [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                        c("color_2", "Color 2", [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                        c("color_3", "Color 3", [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                        c("color_4", "Color 4", [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                        c("color_5", "Color 5", [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                        c("color_6", "Color 6", [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                        c("color_7", "Color 7", [], ['type' => 'color', 'layout' => 'inline'], false, false, []),
                        c("color_8", "Color 8", [], ['type' => 'color', 'layout' => 'inline'], false, false, [])
                    ],
                    ['type' => 'section', 'layout' => 'vertical'],
                    false,
                    false,
                    []
                ),
                c(
                    "shader",
                    "Shader",
                    [
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
                            "contour",
                            "Contour",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "angle",
                            "Angle",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 360, 'step' => 1]],
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
                        ),
                        c(
                            "inner_glow",
                            "Glow In",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "outer_glow",
                            "Glow Out",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            "scale",
                            "Scale",
                            [],
                            ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0.1, 'max' => 2, 'step' => 0.05]],
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
                    'title' => 'Dancepad - Glossy Logo',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Glossy_Logo/dancepad_glossy_logo.min.js?ver=' . DANCEPAD_VERSION]
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_glossy_logo();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;'
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_glossy_logo();'],
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
                'onPropertyChange' => [['script' => 'dancepad_glossy_logo();']],
                'onCreatedElement' => [['script' => 'dancepad_glossy_logo();']],
                'onMountedElement' => [['script' => 'dancepad_glossy_logo();']],
                'onMovedElement' => [['script' => 'dancepad_glossy_logo();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_glossy_logo();']]
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
                ['name' => 'data-image', 'template' => '{{ content.content.source.url|default("https://workers.paper.design/file-assets/01K2KEX78Z34EZ86R69T4CGNNX/01K4PRJY7A6KB5V1PXMR92Q9F4.png") }}'],
                ['name' => 'data-speed', 'template' => '{{ content.shader.speed }}'],
                ['name' => 'data-contour', 'template' => '{{ content.shader.contour }}'],
                ['name' => 'data-angle', 'template' => '{{ content.shader.angle }}'],
                ['name' => 'data-noise', 'template' => '{{ content.shader.noise }}'],
                ['name' => 'data-inner-glow', 'template' => '{{ content.shader.inner_glow }}'],
                ['name' => 'data-outer-glow', 'template' => '{{ content.shader.outer_glow }}'],
                ['name' => 'data-scale', 'template' => '{{ content.shader.scale }}'],
                ['name' => 'data-colors', 'template' => '{% for i in 1..8 %}{% if i <= content.colors.palette_count %}{{ attribute(content.colors, "color_" ~ i) }}{% if i < content.colors.palette_count %}|{% endif %}{% endif %}{% endfor %}'],
                ['name' => 'data-bg-color', 'template' => '{{ content.colors.bg_color }}'],
                ['name' => 'data-palette-count', 'template' => '{{ content.colors.palette_count }}']
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
