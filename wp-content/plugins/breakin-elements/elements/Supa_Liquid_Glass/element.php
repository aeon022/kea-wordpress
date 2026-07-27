<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\SupaLiquidGlass",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class SupaLiquidGlass extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><!-- Icon from IconPark Outline by ByteDance - https://github.com/bytedance/IconPark/blob/master/LICENSE --><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4"><circle cx="24" cy="24" r="20"/><path stroke-linecap="round" d="M24 44c-5.523 0-10-4.477-10-10s4.477-10 10-10s10-4.477 10-10S29.523 4 24 4"/><path stroke-linecap="round" d="M44 24c0 5.523-4.477 10-10 10s-10-4.477-10-10s-4.477-10-10-10S4 18.477 4 24"/></g></svg>';
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
        return 'Supa Liquid Glass';
    }

    static function className()
    {
        return 'supa-liquid-glass';
    }

    static function category()
    {
        return 'breakin elements';
    }

    static function badge()
    {
        return false;
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
        return ['design' => ['borders' => ['radius' => ['breakpoint_base' => ['all' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'topLeft' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'topRight' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'bottomLeft' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'bottomRight' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'editMode' => 'all']]], 'container' => ['padding' => null, 'borders' => ['radius' => null, 'inset_shadow' => ['shadows' => [['color' => '#FFFFFF75', 'x' => '0', 'y' => '0', 'blur' => '5', 'spread' => '0', 'position' => 'outset']], 'style' => '0px 0px 5px 0px #FFFFFF75'], 'shadow' => ['shadows' => [['color' => '#00000036', 'x' => '0', 'y' => '6', 'blur' => '6', 'spread' => '0', 'position' => 'outset'], ['color' => '#00000014', 'x' => '0', 'y' => '0', 'blur' => '20', 'spread' => '0', 'position' => 'outset']], 'style' => '0px 6px 6px 0px #00000036, 0px 0px 20px 0px #00000014']], 'tint' => '#FFFFFF26', 'inset_shadow' => null, 'borders_without_shadows' => ['radius' => ['breakpoint_base' => ['all' => ['number' => 50, 'unit' => 'px', 'style' => '50px'], 'topLeft' => ['number' => 50, 'unit' => 'px', 'style' => '50px'], 'topRight' => ['number' => 50, 'unit' => 'px', 'style' => '50px'], 'bottomLeft' => ['number' => 50, 'unit' => 'px', 'style' => '50px'], 'bottomRight' => ['number' => 50, 'unit' => 'px', 'style' => '50px'], 'editMode' => 'all']]], 'width' => null], 'distortion' => ['seed' => 5], 'layout_v2' => null, 'mobile' => ['disable_on' => null]]];
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
        return [getPresetSection(
      "EssentialElements\\LayoutV2",
      "Layout",
      "layout_v2",
       ['type' => 'popout']
     ), c(
        "container",
        "Container",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
        
      ), c(
        "tint",
        "Tint",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
        
      ), c(
        "borders",
        "Borders",
        [c(
        "radius",
        "Radius",
        [],
        ['type' => 'border_radius', 'layout' => 'inline'],
        false,
        false,
        [],
        
      ), c(
        "styling",
        "Styling",
        [],
        ['type' => 'border_complex', 'layout' => 'vertical'],
        false,
        false,
        [],
        
      ), c(
        "shadow",
        "Shadow",
        [],
        ['type' => 'shadow', 'layout' => 'vertical'],
        false,
        false,
        [],
        
      ), c(
        "inset_shadow",
        "Inset Shadow",
        [],
        ['type' => 'shadow', 'layout' => 'vertical'],
        false,
        false,
        [],
        
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
        
      ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
        
      ), c(
        "distortion",
        "Distortion",
        [c(
        "seed",
        "Seed",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 20, 'step' => 1]],
        false,
        false,
        [],
        
      )],
        ['type' => 'section'],
        false,
        false,
        [],
        
      ), c(
        "mobile",
        "Mobile",
        [c(
        "disable_on",
        "Disable on",
        [],
        ['type' => 'breakpoint_dropdown', 'layout' => 'inline', 'breakpointOptions' => ['enableNever' => true]],
        false,
        false,
        [],
        
      )],
        ['type' => 'section'],
        false,
        false,
        [],
        
      ), getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )];
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
        return false;
    }

    static function settings()
    {
        return false;
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
        return ['type' => 'container'];
    }

    static function spacingBars()
    {
        return [['cssProperty' => 'margin-top', 'location' => 'outside-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], ['cssProperty' => 'margin-bottom', 'location' => 'outside-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function availableIn()
    {
        return ['breakdance'];
    }


    static function order()
    {
        return 42;
    }

    static function dynamicPropertyPaths()
    {
        return false;
    }

    static function additionalClasses()
    {
        return [['name' => 'liquidGlass-wrapper', 'template' => 'yes']];
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.layout_v2.layout', 'design.layout_v2.h_vertical_at', 'design.layout_v2.h_alignment_when_vertical', 'design.layout_v2.a_display', 'design.mobile.disable_on'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
