<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\PrismiumAccordion",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class PrismiumAccordion extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE --><path fill="currentColor" d="M20 20H4q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h10v2H4v12h16v-7h2v7q0 .825-.587 1.413T20 20M6 16h7v-3H6zm0-5h7V8H6zm9 5h3v-5h-3zM4 18V6zm14-9V7h-2V5h2V3h2v2h2v2h-2v2z"/></svg>';
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
        return 'Prismium Accordion';
    }

    static function className()
    {
        return 'Prismium-accordion';
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
        return ['content' => ['content' => ['effect' => 'line-by-line', 'opening_speed' => 500, 'closing_speed' => 350, 'autoclose' => true, 'autoclose_nested' => true, 'scrollto' => false]], 'design' => ['design' => ['padding' => ['number' => 10, 'unit' => 'px', 'style' => '10px'], 'border_radius' => ['number' => 12, 'unit' => 'px', 'style' => '12px'], 'border_width' => ['number' => 2, 'unit' => 'px', 'style' => '2px'], 'border_color' => '#E0E0E0FF', 'button_typography' => ['typography' => ['custom' => ['customTypography' => ['fontWeight' => ['breakpoint_base' => '700'], 'fontSize' => ['breakpoint_base' => ['number' => 1.3, 'unit' => 'rem', 'style' => '1.3rem']]]]]], 'offset' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'gap' => ['number' => 10, 'unit' => 'px', 'style' => '10px']]]];
    }

    static function defaultChildren()
    {
        return [['slug' => 'BreakinElements\PrismiumAccordionContent', 'defaultProperties' => ['content' => ['content' => ['opened' => true]]], 'children' => [['slug' => 'EssentialElements\Text', 'defaultProperties' => ['content' => ['content' => ['text' => 'This is a basic text element.']]], 'children' => []], ['slug' => 'BreakinElements\PrismiumAccordionContent', 'defaultProperties' => null, 'children' => [['slug' => 'EssentialElements\Text', 'defaultProperties' => ['content' => ['content' => ['text' => 'This is a basic text element.']]], 'children' => []]]], ['slug' => 'BreakinElements\PrismiumAccordionContent', 'defaultProperties' => null, 'children' => [['slug' => 'EssentialElements\Text', 'defaultProperties' => ['content' => ['content' => ['text' => 'This is a basic text element.']]], 'children' => []]]]]]];
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "design",
        "Design",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        true,
        true,
        [],
      ), c(
        "background_nested_active",
        "Background Nested Active",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "border_color",
        "Border Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "border_width",
        "Border Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "border_radius",
        "Border Radius",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "padding",
        "Padding",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Button Typography",
      "button_typography",
       ['type' => 'popout']
     ), c(
        "gap",
        "Gap",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "offset",
        "Offset",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "icon_color",
        "Icon Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
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
        "content",
        "Content",
        [],
        ['type' => 'add_registered_children', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "effect",
        "Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'line-by-line', 'text' => 'line-by-line'], ['text' => 'fade-scale', 'value' => 'fade-scale'], ['text' => 'slide', 'value' => 'slide'], ['text' => 'stagger', 'value' => 'stagger'], ['text' => 'wave', 'value' => 'wave'], ['text' => 'flip', 'value' => 'flip'], ['text' => 'zoom', 'value' => 'zoom'], ['text' => 'cascade', 'value' => 'cascade']]],
        false,
        false,
        [],
      ), c(
        "opening_speed",
        "Opening Speed",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "closing_speed",
        "Closing Speed",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "autoclose",
        "Autoclose",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "scrollto",
        "ScrollTo",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
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
        return ['0' =>  ['scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/Prismium_Accordion/prismium-bundle.min.js'],'styles' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/Prismium_Accordion/prismium-bundle.min.css'],],'1' =>  ['inlineScripts' => ['new Prismium(\'%%SELECTOR%% [data-prismium]\', {
{% if content.content.effect %}effect: \'{{ content.content.effect }}\',{% endif %}
speed: {
open: {{ content.content.opening_speed |default(\'500\') }},
close: {{ content.content.closing_speed |default(\'350\') }}
},
autoClose: {{ content.content.autoclose |default(\'0\') }},
scrollTo: {{ content.content.scrollto |default(\'0\') }},
});'],'builderCondition' => 'false',],];
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
        return ["type" => "container-restricted",   ];
    }

    static function spacingBars()
    {
        return false;
    }

    static function attributes()
    {
        return [['name' => 'data-prismium-container', 'template' => '1']];
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 11;
    }

    static function dynamicPropertyPaths()
    {
        return [];
    }

    static function additionalClasses()
    {
        return [['name' => 'prismium', 'template' => 'yes']];
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
