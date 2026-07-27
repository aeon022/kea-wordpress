<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


if(get_option('dan_focus_nav_enable') == 'true'){
  \Breakdance\ElementStudio\registerElementForEditing(
    "Dancepad\\FocusNav",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class FocusNav extends \Breakdance\Elements\Element
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
        return "content.content.tag";
    }

    static function name()
    {
        return 'Focus Nav';
    }

    static function className()
    {
        return 'dan-focus-nav';
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
        return ['content' => ['animation' => ['duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'], 'gsap_easing' => 'power2'], 'morphing_animation' => ['duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'], 'gsap_easing' => 'power2'], 'color_animation' => ['duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'], 'css_easing' => 'ease', 'active_color' => '#fff'], 'display_animation' => ['stagger' => 0.05, 'duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'], 'gsap_easing' => 'sine'], 'content' => ['direction' => 'column', 'event' => 'hover', 'active_item' => 1, 'page_name_as_active_item' => false]], 'design' => ['corners' => ['color' => '#fff', 'thickness' => ['number' => 1, 'unit' => 'px', 'style' => '1px'], 'width' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'height' => ['number' => 8, 'unit' => 'px', 'style' => '8px']], 'focus_items' => ['padding' => ['padding' => ['breakpoint_base' => ['top' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'bottom' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'left' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'right' => ['number' => 20, 'unit' => 'px', 'style' => '20px']]]], 'typography' => ['typography' => ['custom' => ['customTypography' => ['fontWeight' => ['breakpoint_base' => '500'], 'fontSize' => ['breakpoint_base' => ['number' => 20, 'unit' => 'px', 'style' => '20px']]]]], 'color' => ['breakpoint_base' => '#000']]]]];
    }

    static function defaultChildren()
    {
        return [['slug' => 'EssentialElements\Div', 'defaultProperties' => ['meta' => ['friendlyName' => 'Focus Item'], 'settings' => ['advanced' => ['classes' => ['dan-focus-nav__item']]]], 'children' => [['slug' => 'EssentialElements\Text', 'defaultProperties' => ['content' => ['content' => ['text' => 'Home']], 'settings' => ['advanced' => ['classes' => []]]], 'children' => []]]], ['slug' => 'EssentialElements\Div', 'defaultProperties' => ['meta' => ['friendlyName' => 'Focus Item'], 'settings' => ['advanced' => ['classes' => ['dan-focus-nav__item']]]], 'children' => [['slug' => 'EssentialElements\Text', 'defaultProperties' => ['content' => ['content' => ['text' => 'Portfolio']], 'settings' => ['advanced' => ['classes' => []]]], 'children' => []]]], ['slug' => 'EssentialElements\Div', 'defaultProperties' => ['meta' => ['friendlyName' => 'Focus Item'], 'settings' => ['advanced' => ['classes' => ['dan-focus-nav__item']]]], 'children' => [['slug' => 'EssentialElements\Text', 'defaultProperties' => ['content' => ['content' => ['text' => 'Insights']], 'settings' => ['advanced' => ['classes' => []]]], 'children' => []]]]];
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [getPresetSection(
      "EssentialElements\\spacing_margin_all",
      "Margin",
      "margin",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     ), c(
        "focus_items",
        "Focus Items",
        [getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "corners",
        "Corners",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "thickness",
        "Thickness",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', 'custom']]],
        true,
        false,
        [],
      ), c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', 'custom']]],
        true,
        false,
        [],
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', 'custom']]],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      )];
    }

    static function contentControls()
    {
        return [c(
        "content",
        "Content",
        [c(
        "direction",
        "Direction",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'row', 'text' => 'row'], ['text' => 'column', 'value' => 'column']]],
        false,
        false,
        [],
      ), c(
        "event",
        "Event",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'hover', 'text' => 'hover'], ['text' => 'click', 'value' => 'click']]],
        false,
        false,
        [],
      ), c(
        "page_name_as_active_item",
        "Page name as active item",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "active_item",
        "Active item",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "display_animation",
        "Display Animation",
        [c(
        "stagger",
        "Stagger",
        [],
        ['type' => 'number', 'layout' => 'inline'],
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
        "gsap_easing",
        "GSAP easing",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'none', 'text' => 'none'], ['text' => 'power1', 'value' => 'power1'], ['text' => 'power2', 'value' => 'power2'], ['text' => 'power3', 'value' => 'power3'], ['text' => 'power4', 'value' => 'power4'], ['text' => 'back', 'value' => 'back'], ['text' => 'bounce', 'value' => 'bounce'], ['text' => 'circ', 'value' => 'circ'], ['text' => 'elastic', 'value' => 'elastic'], ['text' => 'expo', 'value' => 'expo'], ['text' => 'sine', 'value' => 'sine'], ['text' => 'steps', 'value' => 'steps']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "morphing_animation",
        "Morphing Animation",
        [c(
        "duration",
        "Duration",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 7, 'step' => 0.1], 'unitOptions' => ['types' => ['s']]],
        false,
        false,
        [],
      ), c(
        "gsap_easing",
        "GSAP easing",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'none', 'text' => 'none'], ['text' => 'power1', 'value' => 'power1'], ['text' => 'power2', 'value' => 'power2'], ['text' => 'power3', 'value' => 'power3'], ['text' => 'power4', 'value' => 'power4'], ['text' => 'back', 'value' => 'back'], ['text' => 'bounce', 'value' => 'bounce'], ['text' => 'circ', 'value' => 'circ'], ['text' => 'elastic', 'value' => 'elastic'], ['text' => 'expo', 'value' => 'expo'], ['text' => 'sine', 'value' => 'sine'], ['text' => 'steps', 'value' => 'steps']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "color_animation",
        "Color Animation",
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
            '0' =>  ['title' => 'Dancepad - Focus Nav','scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Focus Nav/dancepad_focus_nav.min.js?ver=' . DANCEPAD_VERSION],],
            '1' =>  ['title' => 'Init Builder','inlineScripts' => ['dancepad_focus_nav();'],'builderCondition' => 'return true;','frontendCondition' => 'return false;',],
            '2' =>  ['title' => 'Init Front','inlineScripts' => ['dancepad_focus_nav();'],'builderCondition' => 'return false;','frontendCondition' => 'return true;',],
            '3' =>  ['title' => 'GSAP','scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%'],]
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

'onPropertyChange' => [['script' => 'dancepad_focus_nav();',
],],

'onCreatedElement' => [['script' => 'dancepad_focus_nav();',
],],

'onMountedElement' => [['script' => 'dancepad_focus_nav();',
],],

'onMovedElement' => [['script' => 'dancepad_focus_nav();',
],],

'onAfterDeletedElement' => [['script' => 'dancepad_focus_nav();',
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
        return [['name' => 'data-flickering', 'template' => '1'], ['name' => 'data-event', 'template' => '{{ content.content.event }}'], ['name' => 'data-display-duration', 'template' => '{{ content.display_animation.duration.style }}'], ['name' => 'data-display-stagger', 'template' => '{{ content.display_animation.stagger }}'], ['name' => 'data-display-ease', 'template' => '{{ content.display_animation.gsap_easing }}'], ['name' => 'data-morphing-duration', 'template' => '{{ content.morphing_animation.duration.style }}'], ['name' => 'data-morphing-ease', 'template' => '{{ content.morphing_animation.gsap_easing }}'], ['name' => 'data-active-item', 'template' => '{{ content.content.active_item }}'], ['name' => 'data-page-name', 'template' => '{% if content.content.page_name_as_active_item %}
    1
    {% else %}
    0
    {% endif %}']];
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