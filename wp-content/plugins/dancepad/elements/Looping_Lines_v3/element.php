<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_looping_lines_v3_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\LoopingLinesV3",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class LoopingLinesV3 extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none"><path opacity="0.4" d="M3 9L14 9.00008" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M3 15H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path opacity="0.4" d="M3 3H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /><path d="M18.5 21V9M18.5 21C17.7998 21 16.4915 19.0057 16 18.5M18.5 21C19.2002 21 20.5085 19.0057 21 18.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg>';
        }

        static function tag()
        {
            return 'div';
        }

        static function tagOptions()
        {
            return ['section', 'article', 'aside', 'header', 'footer', 'main'];
        }

        static function tagControlPath()
        {
            return 'content.content.tag';
        }

        static function name()
        {
            return 'Looping Lines V3';
        }

        static function className()
        {
            return 'dan-looping-lines-v3';
        }

        static function category()
        {
            return 'dancepad_texts';
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
                    'lines' => [
                        'items' => [
                            ['text' => 'Designers'],
                            ['text' => 'Startups'],
                            ['text' => 'Entrepreneurs'],
                        ],
                    ],
                    'animation' => [
                        'blur' => ['number' => 15, 'unit' => 'px', 'style' => '15px'],
                        'loop_duration' => ['number' => 3, 'unit' => 's', 'style' => '3s'],
                        'blur_duration' => ['number' => 0.5, 'unit' => 's', 'style' => '0.5s'],
                        'blur_stagger' => ['number' => 0.03, 'unit' => 's', 'style' => '0.03s'],
                        'blur_easing' => 'power1',
                        'disable_builder' => false,
                    ],
                    'width_animation' => [
                        'expanding_duration' => ['number' => 0.7, 'unit' => 's', 'style' => '0.7s'],
                        'expanding_easing' => 'power3',
                    ],
                ],
                'design' => [
                    'margin' => null,
                    'padding' => null,
                    'prefix_typography' => [
                        'color' => ['breakpoint_base' => '#999999'],
                        'typography' => [
                            'custom' => [
                                'customTypography' => [
                                    'fontSize' => ['breakpoint_base' => ['number' => 23, 'unit' => 'px', 'style' => '23px']],
                                    'fontWeight' => ['breakpoint_base' => '500'],
                                ],
                            ],
                        ],
                    ],
                    'lines_typography' => [
                        'color' => ['breakpoint_base' => '#000000'],
                        'typography' => [
                            'custom' => [
                                'customTypography' => [
                                    'fontSize' => ['breakpoint_base' => ['number' => 23, 'unit' => 'px', 'style' => '23px']],
                                    'fontWeight' => ['breakpoint_base' => '500'],
                                ],
                            ],
                        ],
                    ],
                    'suffix_typography' => [
                        'color' => ['breakpoint_base' => '#999999'],
                        'typography' => [
                            'custom' => [
                                'customTypography' => [
                                    'fontSize' => ['breakpoint_base' => ['number' => 23, 'unit' => 'px', 'style' => '23px']],
                                    'fontWeight' => ['breakpoint_base' => '500'],
                                ],
                            ],
                        ],
                    ],
                ],
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
                    'EssentialElements\\spacing_margin_all',
                    'Margin',
                    'margin',
                    ['type' => 'popout']
                ),
                getPresetSection(
                    'EssentialElements\\spacing_padding_all',
                    'Padding',
                    'padding',
                    ['type' => 'popout']
                ),
                getPresetSection(
                    'EssentialElements\\typography_with_effects_and_align_with_hoverable_everything',
                    'Prefix Typography',
                    'prefix_typography',
                    ['type' => 'popout']
                ),
                getPresetSection(
                    'EssentialElements\\typography_with_effects_and_align_with_hoverable_everything',
                    'Lines Typography',
                    'lines_typography',
                    ['type' => 'popout']
                ),
                getPresetSection(
                    'EssentialElements\\typography_with_effects_and_align_with_hoverable_everything',
                    'Suffix Typography',
                    'suffix_typography',
                    ['type' => 'popout']
                ),
            ];
        }

        static function contentControls()
        {
            return [
                c(
                    'content',
                    'Content',
                    [
                        c(
                            'prefix',
                            'Prefix',
                            [],
                            ['type' => 'text', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            'suffix',
                            'Suffix',
                            [],
                            ['type' => 'text', 'layout' => 'inline'],
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
                    'lines',
                    'Lines',
                    [c(
                            'items',
                            'Lines',
                            [c(
                                    'text',
                                    'Text',
                                    [],
                                    ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['multiline' => true]],
                                    false,
                                    false,
                                    []
                                )],
                            ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '{text}', 'defaultTitle' => 'Line', 'buttonName' => '']],
                            false,
                            false,
                            []
                        )],
                    ['type' => 'section', 'layout' => 'vertical'],
                    false,
                    false,
                    []
                ),
                c(
                    'animation',
                    'Blur Animation',
                    [
                        c(
                            'blur',
                            'Blur',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'loop_duration',
                            'Cycle duration',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']], 'rangeOptions' => ['min' => 0, 'max' => 10, 'step' => 0.1]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'blur_duration',
                            'Blur duration',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']], 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.05]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'blur_stagger',
                            'Blur stagger',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']], 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'blur_easing',
                            'Blur easing',
                            [],
                            ['type' => 'dropdown', 'layout' => 'inline', 'items' => [
                                ['value' => 'power1', 'text' => 'power1'],
                                ['value' => 'power2', 'text' => 'power2'],
                                ['value' => 'power3', 'text' => 'power3'],
                                ['value' => 'power4', 'text' => 'power4'],
                                ['value' => 'back', 'text' => 'back'],
                                ['value' => 'expo', 'text' => 'expo'],
                                ['value' => 'sine', 'text' => 'sine'],
                                ['value' => 'circ', 'text' => 'circ'],
                                ['value' => 'elastic', 'text' => 'elastic'],
                                ['value' => 'steps', 'text' => 'steps'],
                            ]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'disable_builder',
                            'Disable in the Builder',
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
                    'width_animation',
                    'Width Animation',
                    [
                        c(
                            'expanding_duration',
                            'Duration',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']], 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.05]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'expanding_easing',
                            'Easing',
                            [],
                            ['type' => 'dropdown', 'layout' => 'inline', 'items' => [
                                ['value' => 'power1', 'text' => 'power1'],
                                ['value' => 'power2', 'text' => 'power2'],
                                ['value' => 'power3', 'text' => 'power3'],
                                ['value' => 'power4', 'text' => 'power4'],
                                ['value' => 'back', 'text' => 'back'],
                                ['value' => 'expo', 'text' => 'expo'],
                                ['value' => 'sine', 'text' => 'sine'],
                                ['value' => 'circ', 'text' => 'circ'],
                                ['value' => 'elastic', 'text' => 'elastic'],
                                ['value' => 'steps', 'text' => 'steps'],
                            ]],
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
                    'title' => 'Dancepad - Looping Lines v3',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Looping_Lines_v3/dancepad_looping_lines_v3.min.js?ver=' . DANCEPAD_VERSION],
                ],
                '1' => [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_looping_lines_v3();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;',
                ],
                '2' => [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_looping_lines_v3();'],
                    'builderCondition' => 'return false;',
                    'frontendCondition' => 'return true;',
                ],
                '3' => [
                    'title' => 'GSAP',
                    'scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%'],
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
                'onPropertyChange' => [['script' => 'dancepad_looping_lines_v3();']],
                'onCreatedElement' => [['script' => 'dancepad_looping_lines_v3();']],
                'onMountedElement' => [['script' => 'dancepad_looping_lines_v3();']],
                'onMovedElement' => [['script' => 'dancepad_looping_lines_v3();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_looping_lines_v3();']],
            ];
        }

        static function nestingRule()
        {
            return ['type' => 'final'];
        }

        static function spacingBars()
        {
            return false;
        }

        static function attributes()
        {
            return [
                ['name' => 'data-loop-duration', 'template' => '{{ content.animation.loop_duration.style }}'],
                ['name' => 'data-blur-duration', 'template' => '{{ content.animation.blur_duration.style }}'],
                ['name' => 'data-blur-stagger', 'template' => '{{ content.animation.blur_stagger.style }}'],
                ['name' => 'data-blur-easing', 'template' => '{{ content.animation.blur_easing }}'],
                ['name' => 'data-expanding-duration', 'template' => '{{ content.width_animation.expanding_duration.style }}'],
                ['name' => 'data-expanding-easing', 'template' => '{{ content.width_animation.expanding_easing }}'],
                ['name' => 'data-disable-builder', 'template' => '{% if content.animation.disable_builder %}1{% else %}0{% endif %}'],
                ['name' => 'data-lines', 'template' => '{% for item in content.lines.items %}
{{ item.text }}dan11
{% endfor %}'],
                ['name' => 'data-flickering', 'template' => '1'],
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
            return [
                ['accepts' => 'string', 'path' => 'content.content.prefix'],
                ['accepts' => 'string', 'path' => 'content.content.suffix'],
                ['accepts' => 'string', 'path' => 'content.lines.items[].text'],
            ];
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
            return ['content.content.prefix', 'content.content.suffix', 'content.lines.items[].text'];
        }

        static function propertyPathsToSsrElementWhenValueChanges()
        {
            return false;
        }
    }
}
