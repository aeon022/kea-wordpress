<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (get_option('dan_video_tabs_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\VideoTabs",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class VideoTabs extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none"><path opacity="0.4" d="M13.0537 3.25C14.1865 3.24998 15.1123 3.24996 15.8431 3.34822C16.6071 3.45093 17.2694 3.67321 17.7981 4.2019C18.3268 4.7306 18.5491 5.39294 18.6518 6.15689C18.75 6.88775 18.75 7.81348 18.75 8.94631V15.0537C18.75 16.1865 18.75 17.1123 18.6518 17.8431C18.5491 18.6071 18.3268 19.2694 17.7981 19.7981C17.2694 20.3268 16.6071 20.5491 15.8431 20.6518C15.1123 20.75 14.1865 20.75 13.0537 20.75H13.0537H10.9463H10.9463C9.81347 20.75 8.88774 20.75 8.15689 20.6518C7.39294 20.5491 6.7306 20.3268 6.2019 19.7981C5.67321 19.2694 5.45093 18.6071 5.34822 17.8431C5.24996 17.1123 5.24998 16.1865 5.25 15.0537V15.0537V8.94631V8.94629C5.24998 7.81346 5.24996 6.88774 5.34822 6.15689C5.45093 5.39294 5.67321 4.7306 6.2019 4.2019C6.7306 3.67321 7.39293 3.45093 8.15689 3.34822C8.88774 3.24996 9.81346 3.24998 10.9463 3.25H10.9463H13.0537H13.0537Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 6.5C1.25 6.08579 1.58579 5.75 2 5.75C3.24264 5.75 4.25 6.75736 4.25 8V16C4.25 17.2426 3.24264 18.25 2 18.25C1.58579 18.25 1.25 17.9142 1.25 17.5C1.25 17.0858 1.58579 16.75 2 16.75C2.41421 16.75 2.75 16.4142 2.75 16V8C2.75 7.58579 2.41421 7.25 2 7.25C1.58579 7.25 1.25 6.91421 1.25 6.5Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M19.75 8C19.75 6.75736 20.7574 5.75 22 5.75C22.4142 5.75 22.75 6.08579 22.75 6.5C22.75 6.91421 22.4142 7.25 22 7.25C21.5858 7.25 21.25 7.58579 21.25 8V16C21.25 16.4142 21.5858 16.75 22 16.75C22.4142 16.75 22.75 17.0858 22.75 17.5C22.75 17.9142 22.4142 18.25 22 18.25C20.7574 18.25 19.75 17.2426 19.75 16V8Z" fill="currentColor" /></svg>';
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
            return 'Video Tabs';
        }

        static function className()
        {
            return 'dan-video-tabs';
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

        static function cssTemplate()
        {
            return file_get_contents(__DIR__ . '/css.twig');
        }

        static function defaultProperties()
        {
            return [
                'design' => [
                    'layout' => [
                        'display' => ['breakpoint_base' => 'flex'],
                    ],
                    'video_tabs' => [
                        'gap' => ['number' => 20, 'unit' => 'px', 'style' => '20px'],
                        'width' => ['number' => 100, 'unit' => '%', 'style' => '100%'],
                        'max_width' => ['number' => 1200, 'unit' => 'px', 'style' => '1200px'],
                    ],
                    'nav_items' => [
                        'padding' => [
                            'padding' => [
                                'breakpoint_base' => [
                                    'top' => ['number' => 10, 'unit' => 'px', 'style' => '10px'],
                                    'right' => ['number' => 20, 'unit' => 'px', 'style' => '20px'],
                                    'bottom' => ['number' => 10, 'unit' => 'px', 'style' => '10px'],
                                    'left' => ['number' => 20, 'unit' => 'px', 'style' => '20px'],
                                ],
                            ],
                        ],
                        'gap' => ['number' => 5, 'unit' => 'px', 'style' => '5px'],
                        'borders' => [
                            'border' => ['breakpoint_base' => []],
                            'radius' => [
                                'breakpoint_base' => [
                                    'all' => ['number' => 5, 'unit' => 'px', 'style' => '5px'],
                                    'topLeft' => ['number' => 5, 'unit' => 'px', 'style' => '5px'],
                                    'topRight' => ['number' => 5, 'unit' => 'px', 'style' => '5px'],
                                    'bottomLeft' => ['number' => 5, 'unit' => 'px', 'style' => '5px'],
                                    'bottomRight' => ['number' => 5, 'unit' => 'px', 'style' => '5px'],
                                    'editMode' => 'all',
                                ],
                            ],
                        ],
                        'box_shadow' => ['style' => ''],
                        'background' => ['color' => ['breakpoint_base' => '#f5f5f5']],
                        'typography' => [
                            'color' => ['breakpoint_base' => '#000000'],
                            'typography' => [
                                'custom' => [
                                    'customTypography' => [
                                        'fontSize' => ['breakpoint_base' => ['number' => 16, 'unit' => 'px', 'style' => '16px']],
                                        'fontWeight' => ['breakpoint_base' => '500'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'nav_items_active' => [
                        'hover_background' => ['color' => ['breakpoint_base' => '#000000']],
                        'hover_color' => '#ffffff',
                        'active_background' => ['color' => ['breakpoint_base' => '#000000']],
                        'active_color' => '#ffffff',
                        'transition_duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'],
                        'transition_easing' => 'ease',
                    ],
                    'progress_bar' => [
                        'width' => ['number' => 100, 'unit' => '%', 'style' => '100%'],
                        'height' => ['number' => 3, 'unit' => 'px', 'style' => '3px'],
                        'progress_background' => ['color' => ['breakpoint_base' => '#ffffff']],
                        'path_background' => ['color' => ['breakpoint_base' => '#cccccc']],
                        'border' => [
                            'border' => ['breakpoint_base' => []],
                            'radius' => [
                                'breakpoint_base' => [
                                    'all' => ['number' => 100, 'unit' => 'px', 'style' => '100px'],
                                    'topLeft' => ['number' => 100, 'unit' => 'px', 'style' => '100px'],
                                    'topRight' => ['number' => 100, 'unit' => 'px', 'style' => '100px'],
                                    'bottomLeft' => ['number' => 100, 'unit' => 'px', 'style' => '100px'],
                                    'bottomRight' => ['number' => 100, 'unit' => 'px', 'style' => '100px'],
                                    'editMode' => 'all',
                                ],
                            ],
                        ],
                        'box_shadow' => ['style' => ''],
                    ],
                    'progress_transition' => [
                        'duration' => ['number' => 0.1, 'unit' => 's', 'style' => '0.1s'],
                        'easing' => 'linear',
                    ],
                    'path_animation' => [
                        'hover_background' => ['color' => ['breakpoint_base' => '#555555']],
                        'active_background' => ['color' => ['breakpoint_base' => '#555555']],
                        'duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'],
                        'easing' => 'ease',
                    ],
                    'videos_wrapper' => [
                        'background' => ['color' => ['breakpoint_base' => '#000000']],
                        'border' => [
                            'border' => ['breakpoint_base' => []],
                            'radius' => [
                                'breakpoint_base' => [
                                    'all' => ['number' => 16, 'unit' => 'px', 'style' => '16px'],
                                    'topLeft' => ['number' => 16, 'unit' => 'px', 'style' => '16px'],
                                    'topRight' => ['number' => 16, 'unit' => 'px', 'style' => '16px'],
                                    'bottomLeft' => ['number' => 16, 'unit' => 'px', 'style' => '16px'],
                                    'bottomRight' => ['number' => 16, 'unit' => 'px', 'style' => '16px'],
                                    'editMode' => 'all',
                                ],
                            ],
                        ],
                        'box_shadow' => ['style' => ''],
                    ],
                ],
                'content' => [],
            ];
        }

        static function defaultChildren()
        {
            return [
                [
                    'slug' => 'EssentialElements\\Div',
                    'defaultProperties' => [
                        'meta' => ['friendlyName' => 'Nav'],
                        'settings' => [
                            'advanced' => [
                                'classes' => ['dan-video-tabs__nav'],
                            ],
                        ],
                        'design' => [
                            'layout' => [
                                'display' => ['breakpoint_base' => 'flex'],
                                'flex_direction' => ['breakpoint_base' => 'column'],
                                'gap' => ['breakpoint_base' => ['number' => 20, 'unit' => 'px', 'style' => '20px']],
                            ],
                        ],
                    ],
                    'children' => [
                        [
                            'slug' => 'EssentialElements\\Div',
                            'defaultProperties' => [
                                'meta' => ['friendlyName' => 'Nav Item'],
                                'settings' => [
                                    'advanced' => [
                                        'classes' => ['dan-video-tabs__nav-item'],
                                        'attributes' => [
                                            ['name' => 'tabindex', 'value' => '0'],
                                        ],
                                    ],
                                ],
                                'design' => [
                                    'layout' => [
                                        'display' => ['breakpoint_base' => 'flex'],
                                        'flex_direction' => ['breakpoint_base' => 'column'],
                                        'gap' => ['breakpoint_base' => ['number' => 8, 'unit' => 'px', 'style' => '8px']],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Heading',
                                    'defaultProperties' => [
                                        'content' => [
                                            'content' => [
                                                'text' => 'Video 1',
                                                'tag' => 'span',
                                            ],
                                        ],
                                    ],
                                    'children' => [],
                                ],
                                [
                                    'slug' => 'EssentialElements\\Div',
                                    'defaultProperties' => [
                                        'meta' => ['friendlyName' => 'Progress Bar'],
                                        'settings' => [
                                            'advanced' => [
                                                'classes' => ['dan-video-tabs__progress-bar'],
                                            ],
                                        ],
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
                                        'classes' => ['dan-video-tabs__nav-item'],
                                        'attributes' => [
                                            ['name' => 'tabindex', 'value' => '0'],
                                        ],
                                    ],
                                ],
                                'design' => [
                                    'layout' => [
                                        'display' => ['breakpoint_base' => 'flex'],
                                        'flex_direction' => ['breakpoint_base' => 'column'],
                                        'gap' => ['breakpoint_base' => ['number' => 8, 'unit' => 'px', 'style' => '8px']],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Heading',
                                    'defaultProperties' => [
                                        'content' => [
                                            'content' => [
                                                'text' => 'Video 2',
                                                'tag' => 'span',
                                            ],
                                        ],
                                    ],
                                    'children' => [],
                                ],
                                [
                                    'slug' => 'EssentialElements\\Div',
                                    'defaultProperties' => [
                                        'meta' => ['friendlyName' => 'Progress Bar'],
                                        'settings' => [
                                            'advanced' => [
                                                'classes' => ['dan-video-tabs__progress-bar'],
                                            ],
                                        ],
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
                                        'classes' => ['dan-video-tabs__nav-item'],
                                        'attributes' => [
                                            ['name' => 'tabindex', 'value' => '0'],
                                        ],
                                    ],
                                ],
                                'design' => [
                                    'layout' => [
                                        'display' => ['breakpoint_base' => 'flex'],
                                        'flex_direction' => ['breakpoint_base' => 'column'],
                                        'gap' => ['breakpoint_base' => ['number' => 8, 'unit' => 'px', 'style' => '8px']],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Heading',
                                    'defaultProperties' => [
                                        'content' => [
                                            'content' => [
                                                'text' => 'Video 3',
                                                'tag' => 'span',
                                            ],
                                        ],
                                    ],
                                    'children' => [],
                                ],
                                [
                                    'slug' => 'EssentialElements\\Div',
                                    'defaultProperties' => [
                                        'meta' => ['friendlyName' => 'Progress Bar'],
                                        'settings' => [
                                            'advanced' => [
                                                'classes' => ['dan-video-tabs__progress-bar'],
                                            ],
                                        ],
                                    ],
                                    'children' => [],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'slug' => 'EssentialElements\\Div',
                    'defaultProperties' => [
                        'meta' => ['friendlyName' => 'Videos'],
                        'settings' => [
                            'advanced' => [
                                'classes' => ['dan-video-tabs__videos'],
                            ],
                        ],
                        'design' => [
                            'layout' => [
                                'display' => ['breakpoint_base' => 'flex'],
                            ],
                        ],
                    ],
                    'children' => [
                        [
                            'slug' => 'EssentialElements\\Div',
                            'defaultProperties' => [
                                'meta' => ['friendlyName' => 'Video Item'],
                                'settings' => [
                                    'advanced' => [
                                        'classes' => ['dan-video-tabs__video-item'],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Video',
                                    'defaultProperties' => [
                                        'content' => [
                                            'video' => [
                                                'video' => [
                                                    'url' => 'https://figpress.io/wp-content/uploads/2024/09/Prepare-your-design.mp4',
                                                    'mime' => 'video/mp4',
                                                    'embedUrl' => 'https://figpress.io/wp-content/uploads/2024/09/Prepare-your-design.mp4',
                                                    'format' => 'video',
                                                    'type' => 'video',
                                                    'source' => 'local',
                                                ],
                                                'video_dynamic_meta' => null,
                                            ],
                                            'video_options' => [
                                                'autoplay' => true,
                                                'loop' => true,
                                                'muted' => true,
                                            ],
                                        ],
                                    ],
                                    'children' => [],
                                ],
                            ],
                        ],
                        [
                            'slug' => 'EssentialElements\\Div',
                            'defaultProperties' => [
                                'meta' => ['friendlyName' => 'Video Item'],
                                'settings' => [
                                    'advanced' => [
                                        'classes' => ['dan-video-tabs__video-item'],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Video',
                                    'defaultProperties' => [
                                        'content' => [
                                            'video' => [
                                                'video' => [
                                                    'url' => 'https://figpress.io/wp-content/uploads/2024/09/Copy-your-design.mp4',
                                                    'mime' => 'video/mp4',
                                                    'embedUrl' => 'https://figpress.io/wp-content/uploads/2024/09/Copy-your-design.mp4',
                                                    'format' => 'video',
                                                    'type' => 'video',
                                                    'source' => 'local',
                                                ],
                                                'video_dynamic_meta' => null,
                                            ],
                                            'video_options' => [
                                                'autoplay' => true,
                                                'loop' => true,
                                                'muted' => true,
                                            ],
                                        ],
                                    ],
                                    'children' => [],
                                ],
                            ],
                        ],
                        [
                            'slug' => 'EssentialElements\\Div',
                            'defaultProperties' => [
                                'meta' => ['friendlyName' => 'Video Item'],
                                'settings' => [
                                    'advanced' => [
                                        'classes' => ['dan-video-tabs__video-item'],
                                    ],
                                ],
                            ],
                            'children' => [
                                [
                                    'slug' => 'EssentialElements\\Video',
                                    'defaultProperties' => [
                                        'content' => [
                                            'video' => [
                                                'video' => [
                                                    'url' => 'https://figpress.io/wp-content/uploads/2024/09/Paste-your-design.mp4',
                                                    'mime' => 'video/mp4',
                                                    'embedUrl' => 'https://figpress.io/wp-content/uploads/2024/09/Paste-your-design.mp4',
                                                    'format' => 'video',
                                                    'type' => 'video',
                                                    'source' => 'local',
                                                ],
                                                'video_dynamic_meta' => null,
                                            ],
                                            'video_options' => [
                                                'autoplay' => true,
                                                'loop' => true,
                                                'muted' => true,
                                            ],
                                        ],
                                    ],
                                    'children' => [],
                                ],
                            ],
                        ],
                    ],
                ],
            ];
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
                    'EssentialElements\\layout',
                    'Layout',
                    'layout',
                    ['type' => 'popout']
                ),
                getPresetSection(
                    'EssentialElements\\size',
                    'Size',
                    'size',
                    ['type' => 'popout']
                ),
                getPresetSection(
                    'EssentialElements\\background',
                    'Background',
                    'background',
                    ['type' => 'popout']
                ),
                getPresetSection(
                    'EssentialElements\\borders',
                    'Border',
                    'border',
                    ['type' => 'popout']
                ),
                c(
                    'video_tabs',
                    'Video Tabs',
                    [
                        c(
                            'direction',
                            'Direction',
                            [],
                            ['type' => 'dropdown', 'layout' => 'inline', 'items' => [
                                ['value' => 'row', 'text' => 'Horizontal'],
                                ['value' => 'column', 'text' => 'Vertical'],
                            ]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'gap',
                            'Gap',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', 'em', 'rem', '%']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'width',
                            'Width',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'max_width',
                            'Max Width',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw']]],
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
                        c(
                            'gap',
                            'Gap',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', 'em', 'rem']]],
                            false,
                            false,
                            []
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
                            'EssentialElements\\background',
                            'Background',
                            'background',
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            'EssentialElements\\typography_with_effects_and_align_with_hoverable_everything',
                            'Typography',
                            'typography',
                            ['type' => 'popout']
                        ),
                    ],
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    'nav_items_active',
                    'Nav Items Active',
                    [
                        getPresetSection(
                            'EssentialElements\\background',
                            'Hover Background',
                            'hover_background',
                            ['type' => 'popout']
                        ),
                        c(
                            'hover_color',
                            'Hover Color',
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        getPresetSection(
                            'EssentialElements\\background',
                            'Active Background',
                            'active_background',
                            ['type' => 'popout']
                        ),
                        c(
                            'active_color',
                            'Active Color',
                            [],
                            ['type' => 'color', 'layout' => 'inline'],
                            false,
                            false,
                            []
                        ),
                        c(
                            'transition_duration',
                            'Transition Duration',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['s']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'transition_easing',
                            'CSS Easing',
                            [],
                            ['type' => 'text', 'layout' => 'vertical'],
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
                    'progress_bar',
                    'Progress Bar',
                    [
                        c(
                            'width',
                            'Width',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw']]],
                            false,
                            false,
                            []
                        ),
                        c(
                            'height',
                            'Height',
                            [],
                            ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', 'em', 'rem']]],
                            false,
                            false,
                            []
                        ),
                        getPresetSection(
                            'EssentialElements\\background',
                            'Progress Background',
                            'progress_background',
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            'EssentialElements\\background',
                            'Path Background',
                            'path_background',
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            'EssentialElements\\borders',
                            'Border',
                            'border',
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
                    'progress_transition',
                    'Progress',
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
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    'path_animation',
                    'Path Animations',
                    [
                        getPresetSection(
                            'EssentialElements\\background',
                            'Hover Background',
                            'hover_background',
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            'EssentialElements\\background',
                            'Active Background',
                            'active_background',
                            ['type' => 'popout']
                        ),
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
                    ['type' => 'section'],
                    false,
                    false,
                    []
                ),
                c(
                    'videos_wrapper',
                    'Videos Wrapper',
                    [
                        getPresetSection(
                            'EssentialElements\\background',
                            'Background',
                            'background',
                            ['type' => 'popout']
                        ),
                        getPresetSection(
                            'EssentialElements\\borders',
                            'Border',
                            'border',
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
            ];
        }

        static function contentControls()
        {
            return [];
        }

        static function settingsControls()
        {
            return [];
        }

        static function dependencies()
        {
            return [
                [
                    'title' => 'Dancepad - Video Tabs',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Video_Tabs/dancepad_video_tabs.min.js?ver=' . DANCEPAD_VERSION],
                ],
                [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_video_tabs();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;',
                ],
                [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_video_tabs();'],
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
                'onPropertyChange' => [
                    ['script' => 'dancepad_video_tabs();'],
                ],
                'onCreatedElement' => [
                    ['script' => 'dancepad_video_tabs();'],
                ],
                'onMountedElement' => [
                    ['script' => 'dancepad_video_tabs();'],
                ],
                'onMovedElement' => [
                    ['script' => 'dancepad_video_tabs();'],
                ],
                'onAfterDeletedElement' => [
                    ['script' => 'dancepad_video_tabs();'],
                ],
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
                ['accepts' => 'image_url', 'path' => 'design.nav_items.background.layers[].image'],
                ['accepts' => 'image_url', 'path' => 'design.nav_items_active.hover_background.layers[].image'],
                ['accepts' => 'image_url', 'path' => 'design.nav_items_active.active_background.layers[].image'],
                ['accepts' => 'image_url', 'path' => 'design.progress_bar.progress_background.layers[].image'],
                ['accepts' => 'image_url', 'path' => 'design.progress_bar.path_background.layers[].image'],
                ['accepts' => 'image_url', 'path' => 'design.videos_wrapper.background.layers[].image'],
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
            return [
                'design.video_tabs.direction',
                'design.video_tabs.gap',
                'design.nav_items.gap',
                'design.nav_items_active.transition_easing',
                'design.progress_transition.easing',
                'design.path_animation.easing',
            ];
        }

        static function propertyPathsToSsrElementWhenValueChanges()
        {
            return false;
        }
    }
}
