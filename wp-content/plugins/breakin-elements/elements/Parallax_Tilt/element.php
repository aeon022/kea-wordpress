<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\ParallaxTilt",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class ParallaxTilt extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.5 12c0-2.488 0-3.732.672-4.615q.11-.146.236-.277c.764-.802 1.975-.977 4.395-1.33l2.36-.342c3.413-.496 5.12-.744 6.229.234c1.108.977 1.108 2.732 1.108 6.24v.18c0 3.508 0 5.262-1.108 6.24s-2.816.73-6.23.234l-2.359-.343c-2.42-.352-3.63-.528-4.395-1.33a3 3 0 0 1-.236-.276C4.5 15.731 4.5 14.488 4.5 12M12 22V2M2 12h20" color="currentColor"/></svg>';
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
        return 'Parallax Tilt';
    }

    static function className()
    {
        return 'supa-tilt';
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
        return ['content' => ['content' => ['activeoffset' => null, 'alwaysactive' => false, 'rotate' => true, 'shadow' => true, 'highlight' => true, 'duration' => 300, 'eventel' => null, 'rotate_invert' => false, 'rotate_x_max' => 15, 'rotate_y_max' => 15, 'scale_on_hover' => 50]], 'design' => ['spacing' => null, 'shadow' => null, 'layout_v2' => null, 'container' => null]];
    }

    static function defaultChildren()
    {
        return [['slug' => 'EssentialElements\Image', 'defaultProperties' => ['content' => ['content' => ['image' => null, 'size' => 'medium_large', 'image_dynamic_meta' => null]], 'design' => ['borders' => null], 'settings' => ['advanced' => ['attributes' => [['name' => 'data-atropos-offset', 'value' => '-5']]]]], 'children' => []], ['slug' => 'EssentialElements\Heading', 'defaultProperties' => ['content' => ['content' => ['text' => 'Parallax Tilt Effect', 'tags' => 'h2']], 'settings' => ['advanced' => ['wrapper' => ['layout' => ['advanced' => ['position' => ['position' => ['breakpoint_base' => 'absolute']]]]], 'attributes' => [['name' => 'data-atropos-offset', 'value' => '5']]]], 'design' => ['typography' => ['color' => ['breakpoint_base' => '#FFFFFFFF']]]], 'children' => []]];
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
        "shadow",
        "Shadow",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "offset",
        "Offset",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "scale",
        "Scale",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 2, 'step' => 0.1]],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "highlight",
        "Highlight",
        [c(
        "opacity",
        "Opacity",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "radius",
        "Radius",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1], 'unitOptions' => ['types' => ['%'], 'defaultType' => '%']],
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
        return [c(
        "content",
        "Content",
        [c(
        "scale_on_hover",
        "Scale On Hover",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 200, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "alwaysactive",
        "alwaysActive",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "duration",
        "duration",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1000, 'step' => 10]],
        false,
        false,
        [],
      ), c(
        "rotate",
        "rotate",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "rotate_invert",
        "Rotate Invert",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "shadow",
        "shadow",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "highlight",
        "highlight",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "rotate_x_max",
        "Rotate X Max",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 45, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "rotate_y_max",
        "Rotate Y Max",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 45, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "eventel",
        "eventEl",
        [],
        ['type' => 'text', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "info",
        "info",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'info', 'content' => '<p>To add a parallax effect, add the attribute "<strong>data-atropos-offset"</strong> to any child element, with a value between -100 to 100</p>']],
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
        return ['0' =>  ['scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/Parallax_Tilt/atropos.min.js'],'styles' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/Parallax_Tilt/atropos.min.css'],'inlineScripts' => ['window.myAtropos%%ID%% = Atropos({
    el: \'%%SELECTOR%%\',
    {% if content.content.eventel %}eventsEl: \'{{ content.content.eventel }}\',{% endif %}
    {% if content.content.scale_on_hover %}activeOffset: {{ content.content.scale_on_hover }},{% endif %}
    {% if content.content.alwaysactive %}alwaysActive:true,{% endif %}
    {% if content.content.duration %}duration: {{ content.content.duration }},{% endif %}
    {% if not content.content.rotate %}rotate:false,{% endif %}
    {% if content.content.rotate_invert %}rotateXInvert:true, rotateYInvert:true,{% endif %}
    {% if not content.content.shadow %}shadow:false,{% endif %}
    {% if not content.content.highlight %}highlight:false,{% endif %}
    {% if design.shadow.offset %}shadowOffset:{{ design.shadow.offset }},{% endif %}
    {% if design.shadow.scale %}shadowScale:{{ design.shadow.scale }},{% endif %}
    {% if content.content.rotate_x_max %}rotateXMax:{{ content.content.rotate_x_max }},{% endif %}
    {% if content.content.rotate_y_max %}rotateYMax:{{ content.content.rotate_y_max }},{% endif %}
});'],],];
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
        return [

'onPropertyChange' => [['script' => 'if (window.myAtropos%%ID%%) {
    window.myAtropos%%ID%%.destroy();
}
const element = document.querySelector(\'%%SELECTOR%%\');
const shadowElement = element.querySelector(\'.atropos-shadow\');
if (shadowElement) {
  shadowElement.remove();
}

window.myAtropos%%ID%% = Atropos({
    el: \'%%SELECTOR%%\',
    {% if content.content.eventel %}eventsEl: \'{{ content.content.eventel }}\',{% endif %}
    {% if content.content.scale_on_hover %}activeOffset: {{ content.content.scale_on_hover }},{% endif %}
    {% if content.content.alwaysactive %}alwaysActive:true,{% endif %}
    {% if content.content.duration %}duration: {{ content.content.duration }},{% endif %}
    {% if not content.content.rotate %}rotate:false,{% endif %}
    {% if content.content.rotate_invert %}rotateXInvert:true, rotateYInvert:true,{% endif %}
    {% if not content.content.shadow %}shadow:false,{% endif %}
    {% if not content.content.highlight %}highlight:false,{% endif %}
    {% if design.shadow.offset %}shadowOffset:{{ design.shadow.offset }},{% endif %}
    {% if design.shadow.scale %}shadowScale:{{ design.shadow.scale }},{% endif %}
    {% if content.content.rotate_x_max %}rotateXMax:{{ content.content.rotate_x_max }},{% endif %}
    {% if content.content.rotate_y_max %}rotateYMax:{{ content.content.rotate_y_max }},{% endif %}    
});',
],],

'onMountedElement' => [['script' => 'if (window.myAtropos%%ID%%) {
    window.myAtropos%%ID%%.destroy();
}
const element = document.querySelector(\'%%SELECTOR%%\');
const shadowElement = element.querySelector(\'.atropos-shadow\');
if (shadowElement) {
  shadowElement.remove();
}

window.myAtropos%%ID%% = Atropos({
    el: \'%%SELECTOR%%\',
    {% if content.content.eventel %}eventsEl: \'{{ content.content.eventel }}\',{% endif %}
    {% if content.content.scale_on_hover %}activeOffset: {{ content.content.scale_on_hover }},{% endif %}
    {% if content.content.alwaysactive %}alwaysActive:true,{% endif %}
    {% if content.content.duration %}duration: {{ content.content.duration }},{% endif %}
    {% if not content.content.rotate %}rotate:false,{% endif %}
    {% if content.content.rotate_invert %}rotateXInvert:true, rotateYInvert:true,{% endif %}
    {% if not content.content.shadow %}shadow:false,{% endif %}
    {% if not content.content.highlight %}highlight:false,{% endif %}
    {% if design.shadow.offset %}shadowOffset:{{ design.shadow.offset }},{% endif %}
    {% if design.shadow.scale %}shadowScale:{{ design.shadow.scale }},{% endif %}
    {% if content.content.rotate_x_max %}rotateXMax:{{ content.content.rotate_x_max }},{% endif %}
    {% if content.content.rotate_y_max %}rotateYMax:{{ content.content.rotate_y_max }},{% endif %}    
});',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "container",   ];
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
        return 40;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'string', 'path' => 'content.content.eventel']];
    }

    static function additionalClasses()
    {
        return [['name' => 'atropos', 'template' => 'yes']];
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.layout_v2.layout', 'design.layout_v2.h_vertical_at', 'design.layout_v2.h_alignment_when_vertical', 'design.layout_v2.a_display'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
