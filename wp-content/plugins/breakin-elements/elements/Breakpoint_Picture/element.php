<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\BreakpointPicture",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class BreakpointPicture extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 13.438C2 9.666 2 7.78 3.172 6.609S6.229 5.438 10 5.438h4c3.771 0 5.657 0 6.828 1.171S22 9.666 22 13.438c0 3.77 0 5.656-1.172 6.828S17.771 21.438 14 21.438h-4c-3.771 0-5.657 0-6.828-1.172S2 17.209 2 13.438Z"/><path d="M3.988 6c.112-.931.347-1.574.837-2.063C5.765 3 7.279 3 10.307 3h3.211c3.028 0 4.541 0 5.482.937c.49.489.725 1.132.837 2.063" opacity=".5"/><circle cx="17.5" cy="9.938" r="1.5" opacity=".5"/><path stroke-linecap="round" d="m2 13.938l1.752-1.533a2.3 2.3 0 0 1 3.14.105l4.29 4.29a2 2 0 0 0 2.564.221l.299-.21a3 3 0 0 1 3.731.226l3.224 2.9" opacity=".5"/></g></svg>';
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
        return 'Breakpoint Picture';
    }

    static function className()
    {
        return 'breakpointpicture';
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
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => '1/1', 'text' => '1:1'], ['text' => '4:3', 'value' => '4/3'], ['text' => '3:2', 'value' => '3/2'], ['text' => '16:9', 'value' => '16/9'], ['text' => '8:5', 'value' => '8/5'], ['text' => 'Auto', 'value' => 'auto'], ['text' => 'Custom', 'value' => 'custom']]],
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
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'cover', 'text' => 'Cover'], ['text' => 'Contain', 'value' => 'contain'], ['text' => 'Fill', 'value' => 'fill'], ['text' => 'None', 'value' => 'none']]],
        true,
        false,
        [],
      ), c(
        "object_position",
        "Object Position",
        [],
        ['type' => 'focus_point', 'layout' => 'vertical', 'condition' => [[['path' => 'design.image.object_fit', 'operand' => 'is set', 'value' => '']]], 'focusPointOptions' => ['gridMode' => true]],
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
        false,
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
        "content",
        "Content",
        [c(
        "image_desktop",
        "Image Desktop",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false]],
        false,
        false,
        [],
      ), c(
        "image_desktop_size",
        "Image Desktop Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'vertical', 'mediaSizeOptions' => ['imagePropertyPath' => 'content.content.image_desktop', 'disableSrcset' => true]],
        false,
        false,
        [],
      ), c(
        "image_tablet_landcape",
        "Image Tablet Landcape",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false]],
        false,
        false,
        [],
      ), c(
        "image_tablet_landcape_size",
        "Image Tablet Landcape Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'vertical', 'mediaSizeOptions' => ['imagePropertyPath' => 'content.content.image_tablet_landcape', 'disableSrcset' => true]],
        false,
        false,
        [],
      ), c(
        "image_portrait",
        "Image Portrait",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false]],
        false,
        false,
        [],
      ), c(
        "image_portrait_size",
        "Image Portrait Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'vertical', 'mediaSizeOptions' => ['imagePropertyPath' => 'content.content.image_portrait', 'disableSrcset' => true]],
        false,
        false,
        [],
      ), c(
        "image_phone_landscape",
        "Image Phone Landscape",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false]],
        false,
        false,
        [],
      ), c(
        "image_phone_landscape_size",
        "Image Phone Landscape Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'vertical', 'mediaSizeOptions' => ['imagePropertyPath' => 'content.content.image_phone_landscape', 'disableSrcset' => true]],
        false,
        false,
        [],
      ), c(
        "image_phone_portrait",
        "Image Phone Portrait",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false]],
        false,
        false,
        [],
      ), c(
        "image_phone_portrait_size",
        "Image Phone Portrait Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'vertical', 'mediaSizeOptions' => ['imagePropertyPath' => 'content.content.image_phone_portrait', 'disableSrcset' => true]],
        false,
        false,
        [],
      ), c(
        "lazy_load",
        "Lazy Load",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "alt",
        "Alt",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'from_media_library', 'text' => 'Media Library'], ['text' => 'Custom', 'value' => 'custom'], ['text' => 'Decorative', 'value' => 'Decorative']]],
        false,
        false,
        [],
      ), c(
        "custom_alt",
        "Custom Alt",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'condition' => [[['path' => 'content.content.alt', 'operand' => 'equals', 'value' => 'custom']]]],
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
        return ['alwaysHide' => true];
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
        return 5;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'image_url', 'path' => 'content.content.image_portrait'], ['accepts' => 'image_url', 'path' => 'content.content.image_desktop'], ['accepts' => 'image_url', 'path' => 'content.content.image_tablet_landcape'], ['accepts' => 'image_url', 'path' => 'content.content.image_phone_landscape'], ['accepts' => 'image_url', 'path' => 'content.content.image_phone_portrait'], ['accepts' => 'string', 'path' => 'content.content.custom_alt']];
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
