<?php

namespace Dancepad;

use function Breakdance\Elements\c;

if (get_option('dan_sticky_footer_enable') == 'true') {
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\StickyFooter",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );

    class StickyFooter extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="none" color="#cacaca"><rect x="3" y="4" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><rect x="3" y="17" width="18" height="3" fill="currentColor"/></svg>';
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
            return 'Sticky Footer';
        }

        static function className()
        {
            return 'dan-sticky-footer';
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

        static function cssTemplate()
        {
            return file_get_contents(__DIR__ . '/css.twig');
        }

        static function defaultProperties()
        {
            return false;
        }

        static function defaultChildren()
        {
            return [[
                'slug' => 'EssentialElements\\Div',
                'defaultProperties' => [
                    'meta' => ['friendlyName' => 'Content'],
                    'settings' => ['advanced' => ['classes' => ['dan-sticky-footer__wrapper']]],
                    'design' => [
                        'background' => ['color' => '#000000'],
                        'layout_v2' => [
                            'layout' => 'vertical',
                            'v_align' => ['breakpoint_base' => 'center'],
                            'v_vertical_align' => ['breakpoint_base' => 'center'],
                        ],
                    ],
                ],
                'children' => [[
                    'slug' => 'EssentialElements\\Text',
                    'defaultProperties' => [
                        'content' => ['content' => ['text' => 'Sticky Footer']],
                        'design' => [
                            'typography' => [
                                'color' => ['breakpoint_base' => '#ffffff'],
                                'typography' => [
                                    'custom' => [
                                        'customTypography' => [
                                            'fontSize' => ['breakpoint_base' => ['number' => 64, 'unit' => 'px', 'style' => '64px']],
                                        ],
                                    ],
                                ],
                            ],
                            'spacing' => [
                                'wrapper' => [
                                    'margin_top' => ['breakpoint_base' => ['number' => 100, 'unit' => 'px', 'style' => '100px']],
                                    'margin_bottom' => ['breakpoint_base' => ['number' => 100, 'unit' => 'px', 'style' => '100px']],
                                ],
                            ],
                            'text_align' => ['breakpoint_base' => 'center'],
                        ],
                    ],
                    'children' => [],
                ]],
            ]];
        }

        static function designControls()
        {
            return [];
        }

        static function contentControls()
        {
            return [c(
            'content',
            'Content',
            [c(
            'note',
            'Note',
            [],
            ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'default', 'content' => '<p>All your content to be affected by the Sticky Footer has to be placed inside the Content block.</p>']],
            false,
            false,
            [],
          )],
            ['type' => 'section', 'layout' => 'vertical'],
            false,
            false,
            [],
          )];
        }

        static function settingsControls()
        {
            return [];
        }

        static function dependencies()
        {
            return [
                '0' =>  [
                    'title' => 'Dancepad - Sticky Footer',
                    'scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Sticky_Footer/dancepad_sticky_footer.min.js?ver=' . DANCEPAD_VERSION],
                ],
                '1' =>  [
                    'title' => 'Init Builder',
                    'inlineScripts' => ['dancepad_sticky_footer();'],
                    'builderCondition' => 'return true;',
                    'frontendCondition' => 'return false;',
                ],
                '2' =>  [
                    'title' => 'Init Front',
                    'inlineScripts' => ['dancepad_sticky_footer();'],
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
                'onPropertyChange' => [['script' => 'dancepad_sticky_footer();']],
                'onCreatedElement' => [['script' => 'dancepad_sticky_footer();']],
                'onMountedElement' => [['script' => 'dancepad_sticky_footer();']],
                'onMovedElement' => [['script' => 'dancepad_sticky_footer();']],
                'onAfterDeletedElement' => [['script' => 'dancepad_sticky_footer();']],
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
