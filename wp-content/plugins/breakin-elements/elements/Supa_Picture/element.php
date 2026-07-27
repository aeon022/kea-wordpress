<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\SupaPicture",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class SupaPicture extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36"><!-- Icon from Clarity by VMware - https://github.com/vmware/clarity-assets/blob/master/LICENSE --><path fill="currentColor" d="M30.14 3a1 1 0 0 0-1-1h-22a1 1 0 0 0-1 1v1h24Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="currentColor" d="M32.12 7a1 1 0 0 0-1-1h-26a1 1 0 0 0-1 1v1h28Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="currentColor" d="M32.12 10H3.88A1.88 1.88 0 0 0 2 11.88v18.24A1.88 1.88 0 0 0 3.88 32h28.24A1.88 1.88 0 0 0 34 30.12V11.88A1.88 1.88 0 0 0 32.12 10M8.56 13.45a3 3 0 1 1-3 3a3 3 0 0 1 3-3M30 28H6l7.46-7.47a.71.71 0 0 1 1 0l3.68 3.68L23.21 19a.71.71 0 0 1 1 0L30 24.79Z" class="clr-i-solid clr-i-solid-path-3"/><path fill="none" d="M0 0h36v36H0z"/></svg>';
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
        return 'Supa Picture';
    }

    static function className()
    {
        return 'supa-picture';
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
        return false;
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
        "image",
        "Image",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
        
      ), c(
        "max_width",
        "Max Width",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
        
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
        
      ), c(
        "aspect_ratio",
        "Aspect Ratio",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => '1', 'text' => '1/1'], ['text' => '4/3', 'value' => '4/3'], ['text' => '16/9', 'value' => '16/9'], ['text' => '3/4', 'value' => '3/4'], ['text' => '9/16', 'value' => '9/16'], ['text' => 'Auto', 'value' => 'auto'], ['text' => 'Custom', 'value' => 'custom']]],
        true,
        false,
        [],
        
      ), c(
        "custom_ratio",
        "Custom Ratio",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        true,
        false,
        [],
        
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        true,
        false,
        [],
        
      )],
        ['type' => 'section', 'layout' => 'inline', 'condition' => [[['path' => 'design.image.aspect_ratio', 'operand' => 'equals', 'value' => 'custom']]], 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
        
      ), c(
        "object_fit",
        "Object Fit",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'cover', 'text' => 'Cover'], ['text' => 'Contain', 'value' => 'contain'], ['text' => 'Fill', 'value' => 'fill'], ['text' => 'None', 'value' => 'none']], 'condition' => [[['path' => 'design.image.height', 'operand' => 'is set', 'value' => '']], [['path' => 'design.image.aspect_ratio', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
        
      ), c(
        "object_position",
        "Object Position",
        [],
        ['type' => 'focus_point', 'layout' => 'vertical', 'focusPointOptions' => ['gridMode' => true], 'condition' => [[['path' => 'design.image.object_fit', 'operand' => 'is set', 'value' => '']]]],
        true,
        false,
        [],
        
      )],
        ['type' => 'section'],
        false,
        false,
        [],
        
      ), c(
        "effects",
        "Effects",
        [c(
        "opacity",
        "Opacity",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.05]],
        true,
        true,
        [],
        
      ), getPresetSection(
      "EssentialElements\\filter",
      "Filter",
      "filter",
       ['type' => 'popout']
     ), c(
        "transition_duration",
        "Transition Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['ms'], 'defaultType' => 'ms'], 'rangeOptions' => ['min' => 0, 'max' => 6000, 'step' => 50]],
        false,
        false,
        [],
        
      ), c(
        "blend_mode",
        "Blend Mode",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'normal', 'text' => 'normal'], ['text' => 'multiply', 'value' => 'multiply'], ['text' => 'screen', 'value' => 'screen'], ['text' => 'overlay', 'value' => 'overlay'], ['text' => 'darken', 'value' => 'darken'], ['text' => 'lighten', 'value' => 'lighten'], ['text' => 'color-dodge', 'value' => 'color-dodge'], ['text' => 'color-burn', 'value' => 'color-burn'], ['text' => 'hard-light', 'value' => 'hard-light'], ['text' => 'soft-light', 'value' => 'soft-light'], ['text' => 'difference', 'value' => 'difference'], ['text' => 'exclusion', 'value' => 'exclusion'], ['text' => 'hue', 'value' => 'hue'], ['text' => 'saturation', 'value' => 'saturation'], ['text' => 'color', 'value' => 'color'], ['text' => 'luminosity', 'value' => 'luminosity']]],
        false,
        false,
        [],
        
      )],
        ['type' => 'section'],
        false,
        false,
        [],
        
      ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
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
        "picture",
        "Picture",
        [c(
        "desktop_image",
        "Desktop Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false]],
        false,
        false,
        [],
        ['accepts' => 'image_url', 'proOnly' => false]
      ), c(
        "image_size",
        "Image Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'vertical', 'mediaSizeOptions' => ['imagePropertyPath' => 'content.picture.desktop_image', 'disableSrcset' => true]],
        false,
        false,
        [],
        
      ), c(
        "alt",
        "Alt",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'from_media_library', 'text' => 'Media Library'], ['text' => 'Custom', 'value' => 'custom'], ['text' => 'Decorative', 'value' => 'decorative']]],
        false,
        false,
        [],
        
      ), c(
        "custom_alt",
        "Custom Alt",
        [],
        ['type' => 'text', 'layout' => 'inline', 'condition' => [[['path' => 'content.picture.alt', 'operand' => 'equals', 'value' => 'custom']]]],
        false,
        false,
        [],
        ['accepts' => 'string', 'proOnly' => false]
      ), c(
        "lazy_load",
        "Lazy Load",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
        
      ), c(
        "set_html_width_height",
        "Set HTML Width & Height",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
        
      ), c(
        "width",
        "Width",
        [],
        ['type' => 'number', 'layout' => 'inline', 'condition' => [[['path' => 'content.picture.set_html_width_height', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
        
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'number', 'layout' => 'inline', 'condition' => [[['path' => 'content.picture.set_html_width_height', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
        
      ), c(
        "breakpoint_images",
        "Breakpoint Images",
        [c(
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false]],
        false,
        false,
        [],
        ['accepts' => 'image_url', 'proOnly' => false]
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'vertical', 'mediaSizeOptions' => ['imagePropertyPath' => '%%CURRENTPATH%%.image', 'disableSrcset' => true]],
        false,
        false,
        [],
        
      ), c(
        "breakpoint",
        "Breakpoint",
        [],
        ['type' => 'breakpoint_dropdown', 'layout' => 'vertical'],
        false,
        false,
        [],
        
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '{breakpoint}', 'defaultTitle' => '', 'buttonName' => 'Add Image']],
        false,
        false,
        [],
        
      ), c(
        "important",
        "important",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'warning', 'content' => '<p>Arrange the images in order from the smallest to the largest breakpoint, excluding the Desktop breakpoint.</p>']],
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
        return ['disableRootHtmlTag' => true];
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
        return ['type' => 'final'];
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
        return 4;
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
