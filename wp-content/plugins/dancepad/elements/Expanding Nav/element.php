<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_expanding_nav_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\ExpandingNav",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class ExpandingNav extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">     <path d="M1.25 12.0312C1.25 9.82211 3.04086 8.03125 5.25 8.03125C7.45914 8.03125 9.25 9.82211 9.25 12.0312C9.25 14.2404 7.45914 16.0312 5.25 16.0312C3.04086 16.0312 1.25 14.2404 1.25 12.0312Z" fill="currentColor" />     <path opacity="0.4" d="M10.75 11.9981C10.75 11.4458 11.1977 10.9981 11.75 10.9981L17.75 10.9981L17.75 9.66797C17.7498 9.52243 17.7495 9.31039 17.7754 9.1299C17.8038 8.93271 17.9119 8.41537 18.4273 8.15257C18.939 7.89172 19.3882 8.11758 19.5564 8.2184C19.7069 8.30862 19.864 8.44005 19.9705 8.52916L19.9971 8.55139C20.4458 8.9256 21.0713 9.46884 21.5923 10.0057C21.8506 10.272 22.1074 10.5612 22.3067 10.845C22.4064 10.9871 22.5074 11.1497 22.5868 11.3252C22.6614 11.4901 22.75 11.7378 22.75 12.0312C22.75 12.3246 22.6614 12.5724 22.5868 12.7373C22.5074 12.9128 22.4065 13.0754 22.3067 13.2174C22.1074 13.5013 21.8506 13.7905 21.5923 14.0567C21.0714 14.5936 20.4458 15.1369 19.9971 15.5111L19.9705 15.5333C19.864 15.6224 19.7069 15.7539 19.5564 15.8441C19.3882 15.9449 18.939 16.1708 18.4274 15.9099C17.9119 15.6471 17.8038 15.1298 17.7754 14.9326C17.7495 14.7521 17.7498 14.5401 17.75 14.3945L17.75 12.9981H11.75C11.1977 12.9981 10.75 12.5504 10.75 11.9981Z" fill="currentColor" /> </svg>';
        }

        static function tag()
        {
            return 'nav';
        }

        static function tagOptions()
        {
            return [];
        }

        static function tagControlPath()
        {
            return 'content.content.tag';
        }

        static function name()
        {
            return 'Expanding Nav';
        }

        static function className()
        {
            return 'dan-expanding-nav';
        }

        static function category()
        {
            return 'dancepad_menus';
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
                'design' => [
                    'margin' => ['margin' => ['breakpoint_base' => []]],
                    'nav_container' => [
                        'padding' => [
                            'padding' => [
                                'breakpoint_base' => [
                                    'top' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'right' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'bottom' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'left' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                ],
                            ],
                        ],
                        'gap' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                    ],
                    'expanding_content' => [
                        'background' => ['color' => ['breakpoint_base' => '#000000']],
                        'borders' => [
                            'radius' => [
                                'breakpoint_base' => [
                                    'all' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'topLeft' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'topRight' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'bottomLeft' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'bottomRight' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'editMode' => 'all',
                                ],
                            ],
                        ],
                        'box_shadow' => ['style' => ''],
                    ],
                    'nav_items' => [
                        'padding' => [
                            'padding' => [
                                'breakpoint_base' => [
                                    'top' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'right' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                    'bottom' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'left' => ['number' => 12, 'unit' => 'px', 'style' => '12px'],
                                ],
                            ],
                        ],
                        'borders' => [
                            'radius' => [
                                'breakpoint_base' => [
                                    'all' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'topLeft' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'topRight' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'bottomLeft' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'bottomRight' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                    'editMode' => 'all',
                                ],
                            ],
                        ],
                        'box_shadow' => ['style' => ''],
                        'typography' => [
                            'color' => ['breakpoint_base' => '#ffffff'],
                            'typography' => [
                                'custom' => [
                                    'customTypography' => [
                                        'fontSize' => ['breakpoint_base' => ['number' => 16, 'unit' => 'px', 'style' => '16px']],
                                        'fontWeight' => ['breakpoint_base' => '500'],
                                    ],
                                ],
                            ],
                        ],
                        'transition' => [
                            'duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'],
                            'easing' => 'ease',
                        ],
                    ],
                    'nav_items_active' => [
                        'color' => '#000000',
                        'background' => ['color' => ['breakpoint_base' => '#ffffff']],
                    ],
                    'expanding_items' => [
                        'padding' => ['padding' => ['breakpoint_base' => []]],
                    ],
                ],
                'content' => [
                    'settings' => [
                        'open_in_builder' => false,
                    ],
                    'animation' => [
                        'expanding_from' => 'top',
                        'horizontal_offset' => ['number' => 0, 'unit' => 'px', 'style' => '0px'],
                        'expanding_duration' => ['number' => 0.6, 'unit' => 's', 'style' => '0.6s'],
                        'expanding_easing' => 'cubic-bezier(0.34, 1.56, 0.64, 1)',
                        'fade_duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'],
                        'fade_easing' => 'ease',
                    ],
                ],
            ];
        }

        static function defaultChildren()
        {
            return [
                [
                    'slug' => 'EssentialElements\\Div',
                    'defaultProperties' => [
                        'meta' => ['friendlyName' => 'Nav Item'],
                        'settings' => [
                            'advanced' => [
                                'classes' => ['dan-expanding-nav__nav-item'],
                                'attributes' => [
                                    ['name' => 'tabindex', 'value' => '0'],
                                ],
                            ],
                        ],
                    ],
                    'children' => [
                        [
                            'slug' => 'EssentialElements\\Text',
                            'defaultProperties' => [
                                'content' => ['content' => ['text' => 'Home']],
                            ],
                            'children' => [],
                        ],
                    ],
                ],
                [
                    'slug' => 'EssentialElements\\Div',
                    'defaultProperties' => [
                        'meta' => ['friendlyName' => 'Nav Item'],
                        'settings' => [
                            'advanced' => [
                                'classes' => ['dan-expanding-nav__nav-item'],
                                'attributes' => [
                                    ['name' => 'tabindex', 'value' => '0'],
                                ],
                            ],
                        ],
                    ],
                    'children' => [
                        [
                            'slug' => 'EssentialElements\\Text',
                            'defaultProperties' => [
                                'content' => ['content' => ['text' => 'About']],
                            ],
                            'children' => [],
                        ],
                    ],
                ],
                [
                    'slug' => 'EssentialElements\\Div',
                    'defaultProperties' => [
                        'meta' => ['friendlyName' => 'Nav Item'],
                        'settings' => [
                            'advanced' => [
                                'classes' => ['dan-expanding-nav__nav-item'],
                                'attributes' => [
                                    ['name' => 'tabindex', 'value' => '0'],
                                ],
                            ],
                        ],
                    ],
                    'children' => [
                        [
                            'slug' => 'EssentialElements\\Text',
                            'defaultProperties' => [
                                'content' => ['content' => ['text' => 'Contact']],
                            ],
                            'children' => [],
                        ],
                    ],
                ],
                [
                    'slug' => 'EssentialElements\\Div',
                    'defaultProperties' => [
                        'meta' => ['friendlyName' => 'Nav Item'],
                        'settings' => [
                            'advanced' => [
                                'classes' => ['dan-expanding-nav__nav-item'],
                                'attributes' => [
                                    ['name' => 'tabindex', 'value' => '0'],
                                ],
                            ],
                        ],
                    ],
                    'children' => [
                        [
                            'slug' => 'EssentialElements\\Text',
                            'defaultProperties' => [
                                'content' => ['content' => ['text' => 'Services']],
                            ],
                            'children' => [],
                        ],
                    ],
                ],
                [
                    'slug' => 'EssentialElements\\Div',
                    'defaultProperties' => [
                        'meta' => ['friendlyName' => 'Expanding Content'],
                        'settings' => [
                            'advanced' => [
                                'classes' => ['dan-expanding-nav__expanding-content'],
                            ],
                        ],
                    ],
                    'children' => [
                        [
                            'slug' => 'EssentialElements\\Div',
                            'defaultProperties' => [
                                'meta' => ['friendlyName' => 'Expanding Item'],
                                'settings' => [
                                    'advanced' => [
                                        'classes' => ['dan-expanding-nav__expanding-content-item'],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Text',
                                    'defaultProperties' => [
                                        'content' => ['content' => ['text' => 'Home']],
                                        'design' => ['typography' => ['color' => ['breakpoint_base' => '#ffffff']]],
                                    ],
                                    'children' => [],
                                ],
                            ],
                        ],
                        [
                            'slug' => 'EssentialElements\\Div',
                            'defaultProperties' => [
                                'meta' => ['friendlyName' => 'Expanding Item'],
                                'settings' => [
                                    'advanced' => [
                                        'classes' => ['dan-expanding-nav__expanding-content-item'],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Text',
                                    'defaultProperties' => [
                                        'content' => ['content' => ['text' => 'About']],
                                        'design' => ['typography' => ['color' => ['breakpoint_base' => '#ffffff']]],
                                    ],
                                    'children' => [],
                                ],
                            ],
                        ],
                        [
                            'slug' => 'EssentialElements\\Div',
                            'defaultProperties' => [
                                'meta' => ['friendlyName' => 'Expanding Item'],
                                'settings' => [
                                    'advanced' => [
                                        'classes' => ['dan-expanding-nav__expanding-content-item'],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Text',
                                    'defaultProperties' => [
                                        'content' => ['content' => ['text' => 'Contact']],
                                        'design' => ['typography' => ['color' => ['breakpoint_base' => '#ffffff']]],
                                    ],
                                    'children' => [],
                                ],
                            ],
                        ],
                        [
                            'slug' => 'EssentialElements\\Div',
                            'defaultProperties' => [
                                'meta' => ['friendlyName' => 'Expanding Item'],
                                'settings' => [
                                    'advanced' => [
                                        'classes' => ['dan-expanding-nav__expanding-content-item'],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Text',
                                    'defaultProperties' => [
                                        'content' => ['content' => ['text' => 'Services']],
                                        'design' => ['typography' => ['color' => ['breakpoint_base' => '#ffffff']]],
                                    ],
                                    'children' => [],
                                ],
                            ],
                        ],
                    ],
                ],
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
                    'EssentialElements\\spacing_margin_all',
                    'Margin',
                    'margin',
                    ['type' => 'popout']
                ),
                c(
                    'nav_container',
                    'Nav Container',
                    [
                        getPresetSection(
                            'EssentialElements\\spacing_padding_all',
                            'Padding',
                            'padding',
                            ['type' => 'popout']
                        ),
                        c(
                            'gap',
                            'Gap',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
                            false,
                            false,
                            []
                        ),
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    'expanding_content',
                    'Expanding Content',
                    [
                        getPresetSection(
                            'EssentialElements\\background',
                            'Background',
                            'background',
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            'EssentialElements\\borders',
                            'Borders',
                            'borders',
                            ['type' => 'popout']
                        ),
                        c(
                            'box_shadow',
                            'Box Shadow',
                            [],
                            ['type' => 'shadow', 'layout' => 'vertical'],
                            false,
                            false,
                            []
                        ),
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    'nav_items',
                    'Nav Items',
                    [
                        getPresetSection(
                            'EssentialElements\\spacing_padding_all',
                            'Padding',
                            'padding',
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            'EssentialElements\\borders',
                            'Borders',
                            'borders',
                            ['type' => 'popout']
                        ),
                        c(
                            'box_shadow',
                            'Box Shadow',
                            [],
                            ['type' => 'shadow', 'layout' => 'vertical'],
                            false,
                            false,
                            []
                        ),
                        getPresetSection(
                            'EssentialElements\\typography',
                            'Typography',
                            'typography',
                            ['type' => 'popout']
                        ),
                        c(
                            'transition',
                            'Transition',
                            [
                                c(
                                    'duration',
                                    'Duration',
                                    [],
                                    ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']]],
                                    false,
                                    false,
                                    []
                                ),
                                c(
                                    'easing',
                                    'CSS Easing',
                                    [],
                                    ['type' => 'text', 'layout' => 'vertical'],
                                    false,
                                    false,
                                    []
                                ),
                            ],
                            ['type' => 'section', 'layout' => 'vertical'],
                            false,
                            false,
                            []
                        ),
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    'nav_items_active',
                    'Active Nav Items',
                    [
                        c(
                            'color',
                            'Text Color',
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        getPresetSection(
                            'EssentialElements\\background',
                            'Background',
                            'background',
                            ['type' => 'popout']
                        ),
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    'expanding_items',
                    'Expanding Items',
                    [
                        getPresetSection(
                            'EssentialElements\\spacing_padding_all',
                            'Padding',
                            'padding',
                            ['type' => 'popout']
                        ),
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
            ];
        }

        static function contentControls()
        {
            return [
                c(
                    'settings',
                    'Settings',
                    [
                        c(
                            'note',
                            'Note',
                            [],
                            ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'default', 'content' => '<p>Each expanding item can be styled individually from its own element settings.</p>']],
                            false,
                            false,
                            []
                        ),
                        c(
                            'open_in_builder',
                            'Open in Builder',
                            [],
                            ['type' => 'toggle', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                    ],
                    ['type' => 'section', 'layout' => 'vertical'],
                    false,
                    false,
                    []
                ),
                c(
                    'animation',
                    'Animation',
                    [
                        c(
                            'expanding_from',
                            'Expanding From',
                            [],
                            ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'top', 'text' => 'Top'], ['value' => 'bottom', 'text' => 'Bottom']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'horizontal_offset',
                            'Horizontal Offset',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'expanding_duration',
                            'Expanding Duration',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'expanding_easing',
                            'Expanding CSS Easing',
                            [],
                            ['type' => 'text', 'layout' => 'vertical'],
                            false,
                            false,
                            []
                        ),
                        c(
                            'fade_duration',
                            'Fade Duration',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'fade_easing',
                            'Fade CSS Easing',
                            [],
                            ['type' => 'text', 'layout' => 'vertical'],
                            false,
                            false,
                            []
                        ),
                    ],
                    ['type' => 'section', 'layout' => 'vertical'],
                    false,
                    false,
                    []
                ),
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
                    'title' => 'Dancepad - Expanding Nav',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Expanding Nav/dancepad_expanding_nav.min.js?ver=' . DANCEPAD_VERSION],
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_expanding_nav();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;',
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_expanding_nav();'],
                    'builderCondition' => 'return false;',
                    'frontendCondition' => 'return true;',
                ],
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
                'onPropertyChange' => [['script' => 'dancepad_expanding_nav();']],
                'onCreatedElement' => [['script' => 'dancepad_expanding_nav();']],
                'onMountedElement' => [['script' => 'dancepad_expanding_nav();']],
                'onMovedElement' => [['script' => 'dancepad_expanding_nav();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_expanding_nav();']],
            ];
        }

        static function nestingRule()
        {
            return ['type' => 'container'];
        }

        static function spacingBars()
        {
            return false;
        }

        static function attributes()
        {
            return [
                ['name' => 'data-flickering', 'template' => '1'],
                ['name' => 'data-open-in-builder', 'template' => '{% if content.settings.open_in_builder %}1{% else %}0{% endif %}'],
                ['name' => 'data-from', 'template' => '{{ content.animation.expanding_from }}'],
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
            return [];
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
