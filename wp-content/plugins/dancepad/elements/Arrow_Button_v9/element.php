<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_arrow_button_v9_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\ArrowButtonV9",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class ArrowButtonV9 extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">     <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4635 1.37373C15.3214 1.24999 13.8818 1.24999 12.0453 1.25H11.9547C10.1182 1.24999 8.67861 1.24999 7.53648 1.37373C6.37094 1.50001 5.42656 1.76232 4.62024 2.34815C4.13209 2.70281 3.70281 3.13209 3.34815 3.62024C2.76232 4.42656 2.50001 5.37094 2.37373 6.53648C2.24999 7.67861 2.24999 9.11822 2.25 10.9548V13.0453C2.24999 14.8818 2.24999 16.3214 2.37373 17.4635C2.50001 18.6291 2.76232 19.5734 3.34815 20.3798C3.70281 20.8679 4.13209 21.2972 4.62024 21.6518C5.42656 22.2377 6.37094 22.5 7.53648 22.6263C8.67859 22.75 10.1182 22.75 11.9547 22.75H12.0453C13.8818 22.75 15.3214 22.75 16.4635 22.6263C17.6291 22.5 18.5734 22.2377 19.3798 21.6518C19.8679 21.2972 20.2972 20.8679 20.6518 20.3798C21.2377 19.5734 21.5 18.6291 21.6263 17.4635C21.75 16.3214 21.75 14.8818 21.75 13.0453V10.9547C21.75 9.11824 21.75 7.67859 21.6263 6.53648C21.5 5.37094 21.2377 4.42656 20.6518 3.62024C20.2972 3.13209 19.8679 2.70281 19.3798 2.34815C18.5734 1.76232 17.6291 1.50001 16.4635 1.37373ZM7 7C7 6.44772 7.44772 6 8 6H16C16.5523 6 17 6.44772 17 7C17 7.55228 16.5523 8 16 8H8C7.44772 8 7 7.55228 7 7ZM9.5 12C9.5 11.4477 9.94772 11 10.5 11H13.5C14.0523 11 14.5 11.4477 14.5 12C14.5 12.5523 14.0523 13 13.5 13H10.5C9.94772 13 9.5 12.5523 9.5 12Z" fill="currentColor" /> </svg>';
        }

        static function tag()
        {
            return 'div';
        }

        static function tagOptions()
        {
            return [];
        }

        static function tagControlPath()
        {
            return false;
        }

        static function name()
        {
            return 'Arrow Button v9';
        }

        static function className()
        {
            return 'dan-arrow-button-v9';
        }

        static function category()
        {
            return 'dancepad_buttons';
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
                        'label' => 'Book a demo',
                        'tag' => 'button',
                        'custom_tag' => 'button',
                        'link' => []
                    ],
                    'interaction' => [
                        'arrow_duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'],
                        'arrow_easing' => 'ease',
                        'track_height' => ['number' => 16, 'unit' => 'px', 'style' => '16px'],
                        'track_duration' => ['number' => 2, 'unit' => 's', 'style' => '2s'],
                        'track_easing' => 'linear'
                    ],
                    'accessibility' => [
                        'aria_label' => ''
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
                    'typography' => [
                        'color' => ['breakpoint_base' => '#ffffff'],
                        'typography' => [
                            'custom' => [
                                'customTypography' => [
                                    'fontSize' => ['breakpoint_base' => ['number' => 14, 'unit' => 'px', 'style' => '14px']],
                                    'fontWeight' => ['breakpoint_base' => '500'],
                                    'advanced' => [
                                        'lineHeight' => ['breakpoint_base' => ['number' => 20, 'unit' => 'px', 'style' => '20px']]
                                    ]
                                ]
                            ]
                        ]
                    ],
                    'label_padding' => [
                        'padding' => [
                            'breakpoint_base' => [
                                'top' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                'right' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                'bottom' => ['number' => 8, 'unit' => 'px', 'style' => '8px'],
                                'left' => ['number' => 8, 'unit' => 'px', 'style' => '8px']
                            ]
                        ]
                    ],
                    'button' => [
                        'background' => '#212631',
                        'borders' => [
                            'border' => [
                                'breakpoint_base' => [
                                    'top' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#212631', 'style' => 'solid'],
                                    'right' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#212631', 'style' => 'solid'],
                                    'bottom' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#212631', 'style' => 'solid'],
                                    'left' => ['width' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'color' => '#212631', 'style' => 'solid']
                                ]
                            ],
                            'radius' => [
                                'breakpoint_base' => [
                                    'all' => ['number' => 6, 'unit' => 'px', 'style' => '6px'],
                                    'topLeft' => ['number' => 6, 'unit' => 'px', 'style' => '6px'],
                                    'topRight' => ['number' => 6, 'unit' => 'px', 'style' => '6px'],
                                    'bottomLeft' => ['number' => 6, 'unit' => 'px', 'style' => '6px'],
                                    'bottomRight' => ['number' => 6, 'unit' => 'px', 'style' => '6px'],
                                    'editMode' => 'all'
                                ]
                            ]
                        ]
                    ],
                    'arrow' => [
                        'inset' => ['number' => 2, 'unit' => 'px', 'style' => '2px'],
                        'width' => ['number' => 48, 'unit' => 'px', 'style' => '48px'],
                        'radius' => ['number' => 4, 'unit' => 'px', 'style' => '4px'],
                        'fill' => '#d2ff00',
                        'highlight' => 'rgba(255, 255, 255, 0.32)',
                        'shadow' => '0px 1px 1px -0.5px rgba(11, 21, 34, 0.24), 0px 3px 3px -1.5px rgba(11, 21, 34, 0.24), 0px 6px 6px -3px rgba(11, 21, 34, 0.24), 0px 12px 12px -6px rgba(11, 21, 34, 0.32), 0px 24px 24px -12px rgba(11, 21, 34, 0.24), 0px 32px 32px -16px rgba(11, 21, 34, 0.24), 0px 0.5px 0.5px 0px rgba(255, 255, 255, 0.40) inset, 0px 1px 2px 0px rgba(255, 255, 255, 0.32) inset'
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
                getPresetSection(
                    "EssentialElements\\typography_with_effects_and_align_with_hoverable_everything",
                    "Typography",
                    "typography",
                    ['type' => 'popout']
                ),
                getPresetSection(
                    "EssentialElements\\spacing_padding_all",
                    "Label Padding",
                    "label_padding",
                    ['type' => 'popout']
                ),
                c(
                    "button",
                    "Button",
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
                    "arrow",
                    "Arrow",
                    [
                        c(
                            "inset",
                            "Inset",
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
                        ),
                        c(
                            "radius",
                            "Radius",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "fill",
                            "Fill",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "highlight",
                            "Highlight",
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "shadow",
                            "Shadow",
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
                            "label",
                            "Label",
                            [],
                            ['type' => 'text', 'layout' => 'vertical'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "tag",
                            "HTML Tag",
                            [],
                            [
                                'type' => 'dropdown',
                                'layout' => 'inline',
                                'items' => [
                                    ['value' => 'button', 'text' => 'button'],
                                    ['value' => 'div', 'text' => 'div'],
                                    ['value' => 'span', 'text' => 'span'],
                                    ['value' => 'custom', 'text' => 'custom']
                                ]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "custom_tag",
                            "Custom Tag",
                            [],
                            ['type' => 'text', 'layout' => 'inline'],
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
                            "arrow_duration",
                            "Arrow Duration",
                            [],
                            [
                                'type' => 'unit',
                                'layout' => 'inline',
                                'unitOptions' => ['types' => ['s']]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "arrow_easing",
                            "Arrow CSS Easing",
                            [],
                            ['type' => 'text', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "track_height",
                            "Track Height",
                            [],
                            ['type' => 'unit', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            "track_duration",
                            "Track Duration",
                            [],
                            [
                                'type' => 'unit',
                                'layout' => 'inline',
                                'unitOptions' => ['types' => ['s']]
                            ],
                            false,
                            false,
                            []
                        ),
                        c(
                            "track_easing",
                            "Track CSS Easing",
                            [],
                            ['type' => 'text', 'layout' => 'inline'],
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
                    "accessibility",
                    "Accessibility",
                    [
                        c(
                            "aria_label",
                            "ARIA Label",
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

