<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if(get_option('dan_pixels_shimmer_card_enable') == 'true'){
    \Breakdance\ElementStudio\registerElementForEditing(
        "Dancepad\\PixelsShimmerCard",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );
    
    class PixelsShimmerCard extends \Breakdance\Elements\Element
    {
        static function uiIcon()
        {
            return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
        <path d="M2 13.3424C2 9.9951 4.73825 6.68726 6.66022 4.77778C7.70404 3.74074 9.29597 3.74074 10.3398 4.77778C12.2617 6.68726 15 9.9951 15 13.3424C15 16.6243 12.5386 20 8.5 20C4.46142 20 2 16.6243 2 13.3424Z" stroke="currentColor" stroke-width="1.5" />
        <path opacity="0.4" d="M15.5 20C19.5386 20 22 16.6243 22 13.3424C22 9.9951 19.2617 6.68726 17.3398 4.77778C16.296 3.74074 14.704 3.74074 13.6602 4.77778" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
    </svg>';
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
            return "content.content.tag";
        }
    
        static function name()
        {
            return 'Pixels Shimmer Card';
        }
    
        static function className()
        {
            return 'dan-pixels-shimmer-card';
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
            return ['design' => ['size' => ['width' => ['breakpoint_base' => ['number' => 300, 'unit' => 'px', 'style' => '300px']], 'height' => ['breakpoint_base' => ['number' => 300, 'unit' => 'px', 'style' => '300px']]], 'layout' => ['display' => ['breakpoint_base' => 'flex'], 'align_items' => ['breakpoint_base' => 'center'], 'justify_content' => ['breakpoint_base' => 'center']], 'background' => ['color' => ['breakpoint_base' => '#888888']], 'borders' => ['border' => ['breakpoint_base' => ['top' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => 'rgba(0, 0, 0, 0.1)', 'style' => 'solid'], 'bottom' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => 'rgba(0, 0, 0, 0.1)', 'style' => 'solid'], 'left' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => 'rgba(0, 0, 0, 0.1)', 'style' => 'solid'], 'right' => ['width' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'color' => 'rgba(0, 0, 0, 0.1)', 'style' => 'solid']]], 'radius' => ['breakpoint_base' => ['all' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'topLeft' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'topRight' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'bottomLeft' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'bottomRight' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'editMode' => 'all']]]], 'content' => ['pixels' => ['colors' => [['color' => '#fef08a'], ['color' => '#fde047'], ['color' => '#eab308']], 'speed' => ['number' => 20, 'unit' => 's', 'style' => '20s'], 'gap' => 3, 'active_color' => '#fef08a'], 'border_animation' => ['active_color' => '#fef08a', 'css_easing' => 'cubic-bezier(0.45,0,0.55,1)', 'speed' => ['number' => 0.8, 'unit' => 's', 'style' => '0.8s'], 'duration' => ['number' => 0.8, 'unit' => 's', 'style' => '0.8s']]]];
        }
    
        static function defaultChildren()
        {
            return [['slug' => 'EssentialElements\Heading', 'defaultProperties' => ['content' => ['content' => ['text' => 'Pixels', 'tags' => 'h3']], 'design' => ['typography' => ['typography' => ['custom' => ['customTypography' => ['fontSize' => ['breakpoint_base' => ['number' => 32, 'unit' => 'px', 'style' => '32px']]]]]]]], 'children' => []]];
        }
    
        static function cssTemplate()
        {
            $template = file_get_contents(__DIR__ . '/css.twig');
            return $template;
        }
    
        static function designControls()
        {
            return [getPresetSection(
          "EssentialElements\\layout",
          "Layout",
          "layout",
           ['type' => 'popout']
         ), getPresetSection(
          "EssentialElements\\spacing_margin_all",
          "Margin",
          "margin",
           ['type' => 'popout']
         ), getPresetSection(
          "EssentialElements\\spacing_padding_all",
          "Padding",
          "padding",
           ['type' => 'popout']
         ), getPresetSection(
          "EssentialElements\\size",
          "Size",
          "size",
           ['type' => 'popout']
         ), getPresetSection(
          "EssentialElements\\background",
          "Background",
          "background",
           ['type' => 'popout']
         ), getPresetSection(
          "EssentialElements\\borders",
          "Borders",
          "borders",
           ['type' => 'popout']
         )];
        }
    
        static function contentControls()
        {
            return [c(
            "pixels",
            "Pixels",
            [c(
            "note",
            "Note",
            [],
            ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'default', 'content' => '<p>Live changes at Pixels controls may require to reload the builder</p>']],
            false,
            false,
            [],
          ), c(
            "colors",
            "Colors",
            [c(
            "color",
            "Color",
            [],
            ['type' => 'color', 'layout' => 'vertical', 'textOptions' => ['multiline' => true]],
            false,
            false,
            [],
          )],
            ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '{text}', 'defaultTitle' => 'List Item', 'buttonName' => '']],
            false,
            false,
            [],
          ), c(
            "speed",
            "Speed",
            [],
            ['type' => 'unit', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 7, 'step' => 0.1], 'unitOptions' => ['types' => ['s']]],
            false,
            false,
            [],
          ), c(
            "gap",
            "Gap",
            [],
            ['type' => 'number', 'layout' => 'inline', 'unitOptions' => ['types' => ['px']]],
            false,
            false,
            [],
          )],
            ['type' => 'section', 'layout' => 'vertical'],
            false,
            false,
            [],
          ), c(
            "border_animation",
            "Border animation",
            [c(
            "active_color",
            "Active color",
            [],
            ['type' => 'color', 'layout' => 'inline'],
            false,
            false,
            [],
          ), c(
            "duration",
            "Duration",
            [],
            ['type' => 'unit', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 7, 'step' => 0.1], 'unitOptions' => ['types' => ['s']]],
            false,
            false,
            [],
          ), c(
            "css_easing",
            "CSS Easing",
            [],
            ['type' => 'text', 'layout' => 'vertical'],
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
                '0' =>  ['title' => 'Dancepad - Pixels Shimmer Card','scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Pixels Shimmer Card/dancepad_pixels_shimmer_card.min.js?ver=' . DANCEPAD_VERSION],],
                '1' =>  ['title' => 'Init Builder','inlineScripts' => ['dancepad_pixels_shimmer_card();'],'builderCondition' => 'return true;','frontendCondition' => 'return false;',],
                '2' =>  ['title' => 'Init Front','inlineScripts' => ['dancepad_pixels_shimmer_card();'],'builderCondition' => 'return false;','frontendCondition' => 'return true;',],];
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
    
    'onPropertyChange' => [['script' => 'dancepad_pixels_shimmer_card();',
    ],],
    
    'onCreatedElement' => [['script' => 'dancepad_pixels_shimmer_card();',
    ],],
    
    'onMountedElement' => [['script' => 'dancepad_pixels_shimmer_card();',
    ],],
    
    'onMovedElement' => [['script' => 'dancepad_pixels_shimmer_card();',
    ],],
    
    'onAfterDeletedElement' => [['script' => 'dancepad_pixels_shimmer_card();',
    ],],];
        }
    
        static function nestingRule()
        {
            return ["type" => "container",   ];
        }
    
        static function spacingBars()
        {
            return false;
        }
    
        static function attributes()
        {
            return [['name' => 'data-flickering', 'template' => '1']];
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
            return [['accepts' => 'image_url', 'path' => 'design.background.layers[].image']];
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