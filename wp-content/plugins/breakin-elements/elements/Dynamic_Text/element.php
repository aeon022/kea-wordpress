<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\DynamicText",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class DynamicText extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="m20.5 18l-3 3v-2H5v-2h12.5v-2zm-10.37-8h3.75L12 4.97zm2.62-7l4.75 11h-2.08l-.92-2.19h-5L8.58 14H6.5l4.75-11z"/></svg>';
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
        return "content.content.tags";
    }

    static function name()
    {
        return 'Dynamic Text';
    }

    static function className()
    {
        return 'supa-dynamictext';
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
        return ['content' => ['content' => ['texts' => [['text' => 'Breakin\' Elements'], ['text' => '[breakdance_dynamic field=\'date\' format=\'Custom\' custom_format=\'Y\']', 'text_dynamic_meta' => ['field' => ['category' => 'Utility', 'subcategory' => '', 'label' => 'Current Date', 'slug' => 'date', 'returnTypes' => ['string'], 'defaultAttributes' => ['format' => 'F j, Y'], 'controls' => [['slug' => 'format', 'label' => 'Format', 'children' => [], 'options' => ['0' => [['text' => 'Custom', 'value' => 'Custom'], ['text' => 'Human', 'value' => 'Human']], 'type' => 'dropdown', 'layout' => 'vertical', 'items' => [['text' => 'Default', 'value' => ''], ['text' => 'September 2, 2024', 'value' => 'F j, Y'], ['text' => '2024-09-02', 'value' => 'Y-m-d'], ['text' => '09/02/2024', 'value' => 'm/d/Y'], ['text' => '02/09/2024', 'value' => 'd/m/Y'], ['text' => 'Custom', 'value' => 'Custom'], ['text' => 'Human', 'value' => 'Human']]], 'enableMediaQueries' => false, 'enableHover' => false, 'keywords' => []], ['slug' => 'custom_format', 'label' => 'Custom Format', 'children' => [], 'options' => ['type' => 'text', 'layout' => 'vertical', 'condition' => ['path' => 'attributes.format', 'operand' => 'equals', 'value' => 'Custom']], 'enableMediaQueries' => false, 'enableHover' => false, 'keywords' => []], ['slug' => 'advanced', 'label' => 'Advanced', 'children' => [['slug' => 'beforeContent', 'label' => 'Prepend', 'children' => [], 'options' => ['type' => 'text', 'layout' => 'vertical'], 'enableMediaQueries' => false, 'enableHover' => false, 'keywords' => []], ['slug' => 'afterContent', 'label' => 'Append', 'children' => [], 'options' => ['type' => 'text', 'layout' => 'vertical'], 'enableMediaQueries' => false, 'enableHover' => false, 'keywords' => []], ['slug' => 'truncate', 'label' => 'Limit Characters', 'children' => [], 'options' => ['type' => 'number', 'layout' => 'vertical'], 'enableMediaQueries' => false, 'enableHover' => false, 'keywords' => []], ['slug' => 'fallback', 'label' => 'Fallback', 'children' => [], 'options' => ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['multiline' => false]], 'enableMediaQueries' => false, 'enableHover' => false, 'keywords' => []]], 'options' => ['type' => 'section', 'sectionOptions' => ['type' => 'popout']], 'enableMediaQueries' => false, 'enableHover' => false]], 'proOnly' => true], 'shortcode' => '[breakdance_dynamic field=\'date\' format=\'Custom\' custom_format=\'Y\']', 'attributes' => ['format' => 'Custom', 'custom_format' => 'Y']]]], 'tags' => null]], 'design' => ['design' => null]];
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
        return [c(
        "design",
        "Design",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1200, 'step' => 1]],
        true,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography_with_hoverable_color",
      "Link Typography",
      "link_typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Wrap Typography",
      "wrap_typography",
       ['type' => 'popout']
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
        return [c(
        "content",
        "Content",
        [c(
        "texts",
        "Texts",
        [c(
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['multiline' => true, 'format' => 'html']],
        false,
        false,
        [],
      ), c(
        "link",
        "Link",
        [],
        ['type' => 'link', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "wrapped",
        "Wrapped",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '{text}', 'defaultTitle' => '', 'buttonName' => 'Add Text']],
        false,
        false,
        [],
      ), c(
        "tags",
        "Tags",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'div', 'text' => 'div'], ['text' => 'span', 'value' => 'span'], ['text' => 'p', 'value' => 'p'], ['text' => 'h1', 'value' => 'h1'], ['text' => 'h2', 'value' => 'h2'], ['text' => 'h3', 'value' => 'h3'], ['text' => 'h4', 'value' => 'h4'], ['text' => 'h5', 'value' => 'h5'], ['text' => 'h6', 'value' => 'h6']]],
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
        return ["type" => "final",   ];
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

    static function order()
    {
        return 10;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'string', 'path' => 'content.content.texts[].text']];
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
