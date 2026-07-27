<?php

namespace Dancepad;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if(get_option('dan_dynamic_island_enable') == 'true'){
  \Breakdance\ElementStudio\registerElementForEditing(
    "Dancepad\\DynamicIsland",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class DynamicIsland extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" color="#cacaca" fill="none">
        <path d="M12.0839 3.25006C12.4647 3.24965 12.7932 3.24931 13.0823 3.32678C13.8588 3.53483 14.4653 4.14132 14.6733 4.91777C14.7508 5.20692 14.7505 5.53544 14.7501 5.91623V18.084C14.7505 18.4648 14.7508 18.7933 14.6733 19.0825C14.4653 19.8589 13.8588 20.4654 13.0823 20.6735C12.7932 20.7509 12.4647 20.7506 12.0839 20.7502C11.7031 20.7506 11.2068 20.7509 10.9177 20.6735C10.1412 20.4654 9.53471 19.8589 9.32666 19.0825C9.24918 18.7933 9.24953 18.4648 9.24994 18.084V5.91623C9.24953 5.53544 9.24918 5.20692 9.32666 4.91777C9.53471 4.14132 10.1412 3.53483 10.9177 3.32678C11.2068 3.24931 11.7031 3.24965 12.0839 3.25006Z" fill="currentColor" />
        <path opacity="0.4" d="M19.0839 3.25006C19.4647 3.24965 19.7932 3.24931 20.0823 3.32678C20.8588 3.53483 21.4653 4.14132 21.6733 4.91777C21.7508 5.20692 21.7505 5.53544 21.7501 5.91623V8.084C21.7505 8.46479 21.7508 8.79331 21.6733 9.08246C21.4653 9.85892 20.8588 10.4654 20.0823 10.6734C19.7932 10.7509 19.2969 10.7506 18.9161 10.7502C18.5353 10.7506 18.2068 10.7509 17.9177 10.6734C17.1412 10.4654 16.5347 9.85892 16.3267 9.08246C16.2492 8.79331 16.2495 8.46479 16.2499 8.084V5.91623C16.2495 5.53544 16.2492 5.20692 16.3267 4.91777C16.5347 4.14132 17.1412 3.53483 17.9177 3.32678C18.2068 3.24931 18.7031 3.24965 19.0839 3.25006Z" fill="currentColor" />
        <path opacity="0.4" d="M5.08388 3.25006C5.46467 3.24965 5.79319 3.24931 6.08234 3.32678C6.85879 3.53483 7.46528 4.14132 7.67333 4.91777C7.7508 5.20692 7.75046 5.53544 7.75005 5.91623V12.084C7.75046 12.4648 7.7508 12.7933 7.67333 13.0825C7.46528 13.8589 6.85879 14.4654 6.08234 14.6734C5.79319 14.7509 5.46468 14.7506 5.08389 14.7502H5.08388C4.70309 14.7506 4.2068 14.7509 3.91765 14.6734C3.14119 14.4654 2.53471 13.8589 2.32666 13.0825C2.24918 12.7933 2.24953 12.4648 2.24994 12.084V5.91623C2.24953 5.53544 2.24918 5.20692 2.32666 4.91777C2.53471 4.14132 3.14119 3.53483 3.91765 3.32678C4.2068 3.24931 4.70308 3.24965 5.08388 3.25006Z" fill="currentColor" />
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
        return 'Dynamic Island';
    }

    static function className()
    {
        return 'dan-dynamic-island';
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
        return ['content' => ['overlay' => ['gsap_easing' => 'power3', 'duration' => ['number' => 0.5, 'unit' => 's', 'style' => '0.5s'], 'background' => 'rgba(255, 255, 255, 0.3)', 'zindex' => 30, 'blur' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'fade_duration' => ['number' => 0.5, 'unit' => 's', 'style' => '0.5s'], 'fade_gsap_easing' => 'power3'], 'links_wrapper' => ['duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'], 'fade_duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s'], 'fade_gsap_easing' => 'power3', 'gap' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'padding' => ['padding' => ['breakpoint_base' => ['top' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'left' => ['number' => 16, 'unit' => 'px', 'style' => '16px'], 'right' => ['number' => 16, 'unit' => 'px', 'style' => '16px'], 'bottom' => ['number' => 16, 'unit' => 'px', 'style' => '16px']]]]], 'texts' => ['title' => 'Nature Landscape', 'typography' => ['color' => ['breakpoint_base' => '#fff'], 'typography' => ['custom' => ['customTypography' => ['fontWeight' => ['breakpoint_base' => '500'], 'fontSize' => ['breakpoint_base' => ['number' => 15, 'unit' => 'px', 'style' => '15px']]]]]], 'title_typography' => ['color' => ['breakpoint_base' => '#fff'], 'typography' => ['custom' => ['customTypography' => ['fontWeight' => ['breakpoint_base' => '500'], 'fontSize' => ['breakpoint_base' => ['number' => 15, 'unit' => 'px', 'style' => '15px']]]]]], 'percentage_typography' => ['color' => ['breakpoint_base' => '#fff'], 'typography' => ['custom' => ['customTypography' => ['fontSize' => ['breakpoint_base' => ['number' => 14, 'unit' => 'px', 'style' => '14px']]]]]], 'links_typography' => ['color' => ['breakpoint_base' => '#999'], 'typography' => ['custom' => ['customTypography' => ['fontSize' => ['breakpoint_base' => ['number' => 14, 'unit' => 'px', 'style' => '14px']]]]]], 'links_hover_color' => '#fff', 'links_hover_ease' => 'ease', 'links_hover_duration' => ['number' => 0.2, 'unit' => 's', 'style' => '0.2s']], 'progress' => ['background_color' => '#333333', 'color' => '#fff', 'dimensions' => ['number' => 28, 'unit' => 'px', 'style' => '28px'], 'thickness' => ['number' => 10, 'unit' => 'px', 'style' => '10px'], 'css_easing' => 'none', 'duration' => ['number' => 0.3, 'unit' => 's', 'style' => '0.3s']], 'island_header' => ['padding' => ['padding' => ['breakpoint_base' => ['top' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'bottom' => ['number' => 8, 'unit' => 'px', 'style' => '8px'], 'left' => ['number' => 16, 'unit' => 'px', 'style' => '16px'], 'right' => ['number' => 16, 'unit' => 'px', 'style' => '16px']]]], 'gap' => ['number' => 8, 'unit' => 'px', 'style' => '8px']], 'island' => ['position' => 'fixed', 'zindex' => 40, 'top' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'left' => ['number' => 50, 'unit' => '%', 'style' => '50%'], 'width' => ['number' => 240, 'unit' => 'px', 'style' => '240px'], 'expanded_width' => ['number' => 320, 'unit' => 'px', 'style' => '320px'], 'expanded_gsap_easing' => 'back', 'background' => '#1a1a1a', 'borders' => ['radius' => ['breakpoint_base' => ['all' => ['number' => 22, 'unit' => 'px', 'style' => '22px'], 'topLeft' => ['number' => 22, 'unit' => 'px', 'style' => '22px'], 'topRight' => ['number' => 22, 'unit' => 'px', 'style' => '22px'], 'bottomLeft' => ['number' => 22, 'unit' => 'px', 'style' => '22px'], 'bottomRight' => ['number' => 22, 'unit' => 'px', 'style' => '22px'], 'editMode' => 'all']]], 'expanded_duration' => ['number' => 0.5, 'unit' => 's', 'style' => '0.5s']], 'settings' => ['toc_selector' => 'h2', 'scroll_margin_top' => ['number' => 20, 'unit' => 'px', 'style' => '20px'], 'direction' => 'column', 'open_at_breakdance' => false]]];
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
        return [];
    }

    static function contentControls()
    {
        return [c(
        "settings",
        "Settings",
        [c(
        "note",
        "Note",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'default', 'content' => '<p>Dynamic Island creates a TOC inside it with the elements that match the following TOC Selector.<br>It is also a nestable element so you can place any elements at it.<br>You can combine both approaches or leave TOC Selector empty if you dont require it.</p><p>Be sure that the elements targeted at TOC Selector have an id defined so that the user can scroll to them when clicking their link.</p>']],
        false,
        false,
        [],
      ), c(
        "toc_selector",
        "TOC Selector",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'placeholder' => '.class, #id, tag...'],
        false,
        false,
        [],
      ), c(
        "note",
        "Note",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'default', 'content' => '<p>The space left at the TOC Selector targets when scrolling to them.</p>']],
        false,
        false,
        [],
      ), c(
        "scroll_margin_top",
        "Scroll Margin Top",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        false,
        false,
        [],
      ), c(
        "note",
        "Note",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'default', 'content' => '<p>To place the TOC before the nested elements (Column) or the other way around (Column Reverse).<br>You may need to refresh the builder after changing the direction.</p>']],
        false,
        false,
        [],
      ), c(
        "direction",
        "Direction",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'column', 'text' => 'Column'], ['text' => 'Column Reverse', 'value' => 'column-reverse']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "island",
        "Island",
        [c(
        "position",
        "Position",
        [],
        ['type' => 'text', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "zindex",
        "zIndex",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "top",
        "Top",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        false,
        false,
        [],
      ), c(
        "left",
        "Left",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        false,
        false,
        [],
      ), c(
        "note",
        "Note",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'default', 'content' => '<p>A defined width is recommended for animations to work smoothly.</p>']],
        false,
        false,
        [],
      ), c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        false,
        false,
        [],
      ), c(
        "expanded_width",
        "Expanded Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        false,
        false,
        [],
      ), c(
        "expanded_duration",
        "Expanded Duration",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 7, 'step' => 0.1], 'unitOptions' => ['types' => ['s']]],
        false,
        false,
        [],
      ), c(
        "expanded_gsap_easing",
        "Expanded GSAP easing",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'none', 'text' => 'none'], ['text' => 'power1', 'value' => 'power1'], ['text' => 'power2', 'value' => 'power2'], ['text' => 'power3', 'value' => 'power3'], ['text' => 'power4', 'value' => 'power4'], ['text' => 'back', 'value' => 'back'], ['text' => 'bounce', 'value' => 'bounce'], ['text' => 'circ', 'value' => 'circ'], ['text' => 'elastic', 'value' => 'elastic'], ['text' => 'expo', 'value' => 'expo'], ['text' => 'sine', 'value' => 'sine'], ['text' => 'steps', 'value' => 'steps']]],
        false,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "island_header",
        "Island Header",
        [getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     ), c(
        "gap",
        "Gap",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "progress",
        "Progress",
        [c(
        "dimensions",
        "Dimensions",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        false,
        false,
        [],
      ), c(
        "thickness",
        "Thickness",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        false,
        false,
        [],
      ), c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "background_color",
        "Background Color",
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
      ), c(
        "texts",
        "Texts",
        [c(
        "title",
        "Title",
        [],
        ['type' => 'text', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Title Typography",
      "title_typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Percentage Typography",
      "percentage_typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Links Typography",
      "links_typography",
       ['type' => 'popout']
     ), c(
        "links_hover_color",
        "Links Hover Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "links_hover_duration",
        "Links Hover Duration",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 7, 'step' => 0.1], 'unitOptions' => ['types' => ['s']]],
        false,
        false,
        [],
      ), c(
        "links_hover_ease",
        "Links Hover Ease",
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
      ), c(
        "links_wrapper",
        "Links Wrapper",
        [getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     ), c(
        "gap",
        "Gap",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%', 'vw', 'custom']]],
        false,
        false,
        [],
      ), c(
        "fade_duration",
        "Fade Duration",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 7, 'step' => 0.1], 'unitOptions' => ['types' => ['s']]],
        false,
        false,
        [],
      ), c(
        "fade_gsap_easing",
        "Fade GSAP easing",
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
        "overlay",
        "Overlay",
        [c(
        "zindex",
        "zIndex",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "blur",
        "Blur",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px']]],
        false,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "fade_duration",
        "Fade Duration",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 7, 'step' => 0.1], 'unitOptions' => ['types' => ['s']]],
        false,
        false,
        [],
      ), c(
        "fade_gsap_easing",
        "Fade GSAP easing",
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
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return [
            '0' =>  ['title' => 'Dancepad - Dynamic Island','scripts' => [DANCEPAD_PLUGIN_URL . 'elements/Dynamic Island/dancepad_dynamic_island.min.js?ver=' . DANCEPAD_VERSION],],
            '1' =>  ['title' => 'Init Builder','inlineScripts' => ['dancepad_dynamic_island();'],'builderCondition' => 'return true;','frontendCondition' => 'return false;',],
            '2' =>  ['title' => 'Init Front','inlineScripts' => ['dancepad_dynamic_island();'],'builderCondition' => 'return false;','frontendCondition' => 'return true;',],
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

'onPropertyChange' => [['script' => 'dancepad_dynamic_island();',
],],

'onCreatedElement' => [['script' => 'dancepad_dynamic_island();',
],],

'onMountedElement' => [['script' => 'dancepad_dynamic_island();',
],],

'onMovedElement' => [['script' => 'dancepad_dynamic_island();',
],],

'onAfterDeletedElement' => [['script' => 'dancepad_dynamic_island();',
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
        return [['name' => 'data-flickering', 'template' => '1'], ['name' => 'data-open-at-builder', 'template' => '{% if content.settings.open_at_breakdance %}
    1
    {% else %}
    0
    {% endif %}'], ['name' => 'data-selector', 'template' => '{{ content.settings.toc_selector }}'], ['name' => 'data-scroll-margin-top', 'template' => '{{ content.settings.scroll_margin_top.style }}'], ['name' => 'data-expand-width', 'template' => '{{ content.island.expanded_width.style }}'], ['name' => 'data-dimensions-duration', 'template' => '{{ content.island.expanded_duration.style }}'], ['name' => 'data-dimensions-ease', 'template' => '{{ content.island.expanded_gsap_easing }}'], ['name' => 'data-overlay-opacity-duration', 'template' => '{{ content.overlay.fade_duration.style }}'], ['name' => 'data-overlay-opacity-ease', 'template' => '{{ content.overlay.fade_gsap_easing }}'], ['name' => 'data-links-container-opacity-duration', 'template' => '{{ content.links_wrapper.fade_duration.style }}'], ['name' => 'data-links-container-opacity-ease', 'template' => '{{ content.links_wrapper.fade_gsap_easing }}'], ['name' => 'data-links-wrapper-direction', 'template' => '{{ content.settings.direction }}']];
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
        return [['accepts' => 'string', 'path' => 'content.content.text'], ['accepts' => 'string', 'path' => 'content.texts.title']];
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