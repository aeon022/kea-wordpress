<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if(get_option('dan_gooey_nav_enable') == 'true'){
  \Breakdance\ElementStudio\registerElementForEditing(
    "Dancepad\\GooeyNav",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GooeyNav extends \Breakdance\Elements\Element
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
        return 'Gooey Nav';
    }

    static function className()
    {
        return 'dan-gooey-nav';
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
        return ['design' => ['padding' => ['padding' => ['breakpoint_base' => ['left' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'right' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'top' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'bottom' => ['number' => 20, 'unit' => 'px', 'style' => '20px']]]], 'dimensions' => ['width' => ['number' => 100, 'unit' => '%', 'style' => '100%'], 'height' => ['number' => 'auto', 'unit' => 'custom', 'style' => 'auto'], 'gap' => ['number' => 12, 'unit' => 'px', 'style' => '12px']], 'direction' => ['direction' => 'row', 'switch_direction_at' => ['number' => 768, 'unit' => 'px', 'style' => '768px']], 'nav_items' => ['padding' => ['padding' => ['breakpoint_base' => ['left' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'right' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'top' => ['number' => 10, 'unit' => 'px', 'style' => '10px'], 'bottom' => ['number' => 10, 'unit' => 'px', 'style' => '10px']]]], 'background' => ['color' => ['breakpoint_base' => '#333333']], 'borders' => ['radius' => ['breakpoint_base' => ['all' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'topLeft' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'topRight' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'bottomLeft' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'bottomRight' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'editMode' => 'all']]], 'typography' => ['color' => ['breakpoint_base' => '#fff'], 'typography' => ['custom' => ['customTypography' => ['fontSize' => ['breakpoint_base' => ['number' => 16, 'unit' => 'px', 'style' => '16px']], 'fontWeight' => ['breakpoint_base' => '500']]]]]], 'gooey_items' => ['typography' => ['color' => ['breakpoint_base' => '#fff'], 'typography' => ['custom' => ['customTypography' => ['fontSize' => ['breakpoint_base' => ['number' => 16, 'unit' => 'px', 'style' => '16px']], 'fontWeight' => ['breakpoint_base' => '500']]]]], 'borders' => ['radius' => ['breakpoint_base' => ['all' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'topLeft' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'topRight' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'bottomLeft' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'bottomRight' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'editMode' => 'all']]], 'background' => ['color' => ['breakpoint_base' => '#333333']], 'padding' => ['padding' => ['breakpoint_base' => ['top' => ['number' => 10, 'unit' => 'px', 'style' => '10px'], 'bottom' => ['number' => 10, 'unit' => 'px', 'style' => '10px'], 'left' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'right' => ['number' => 20, 'unit' => 'px', 'style' => '20px']]]]]], 'content' => ['animation' => ['merge_distance' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'duration' => ['number' => 0.5, 'unit' => 's', 'style' => '0.5s'], 'css_easing' => 'ease']]];
    }

    static function defaultChildren()
    {
        return [['slug' => 'EssentialElements\Div', 'defaultProperties' => ['meta' => ['friendlyName' => 'Gooey Item'], 'settings' => ['advanced' => ['classes' => ['dan-gooey-nav__item']]]], 'children' => [['slug' => 'EssentialElements\Text', 'defaultProperties' => ['content' => ['content' => ['text' => 'Home']], 'design' => ['typography' => ['color' => ['breakpoint_base' => '#fff']]]], 'children' => []]]], ['slug' => 'EssentialElements\Div', 'defaultProperties' => ['meta' => ['friendlyName' => 'Gooey Item'], 'settings' => ['advanced' => ['classes' => ['dan-gooey-nav__item']]]], 'children' => [['slug' => 'EssentialElements\Text', 'defaultProperties' => ['content' => ['content' => ['text' => 'Portfolio']], 'design' => ['typography' => ['color' => ['breakpoint_base' => '#fff']]]], 'children' => []]]], ['slug' => 'EssentialElements\Div', 'defaultProperties' => ['meta' => ['friendlyName' => 'Gooey Item'], 'settings' => ['advanced' => ['classes' => ['dan-gooey-nav__item']]]], 'children' => [['slug' => 'EssentialElements\Text', 'defaultProperties' => ['content' => ['content' => ['text' => 'Insights']], 'design' => ['typography' => ['color' => ['breakpoint_base' => '#fff']]]], 'children' => []]]]];
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
        "dimensions",
        "Dimensions",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        true,
        false,
        [],
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        true,
        false,
        [],
      ), c(
        "gap",
        "Gap",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "direction",
        "Direction",
        [c(
        "direction",
        "Direction",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'row', 'text' => 'row'], ['text' => 'column', 'value' => 'column']]],
        false,
        false,
        [],
      ), c(
        "note",
        "Note",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'default', 'content' => '<p>Select a breakpoint to determine at which pixel to switch direction.</p>']],
        false,
        false,
        [],
      ), c(
        "switch_direction_at",
        "Switch direction at",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px']]],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "gooey_items",
        "Gooey Items",
        [getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
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
        "animation",
        "Animation",
        [c(
        "merge_distance",
        "Merge distance",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
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
        return ["type" => "container",   ];
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
        return [['accepts' => 'image_url', 'path' => 'design.nav_items.background.layers[].image']];
    }

    static function additionalClasses()
    {
        return [['name' => 'dan-gooey-nav--horizontal', 'template' => '{% if design.direction.direction == \'row\' %}
      yes
    {% endif %}'], ['name' => 'dan-gooey-nav--vertical', 'template' => '{% if design.direction.direction == \'column\' %}
      yes
    {% endif %}']];
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