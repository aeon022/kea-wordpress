<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapPathText",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapPathText extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g data-name="Layer 2"> <g data-name="flash"> <rect width="24" height="24" opacity="0"></rect> <path d="M11.11 23a1 1 0 0 1-.34-.06 1 1 0 0 1-.65-1.05l.77-7.09H5a1 1 0 0 1-.83-1.56l7.89-11.8a1 1 0 0 1 1.17-.38 1 1 0 0 1 .65 1l-.77 7.14H19a1 1 0 0 1 .83 1.56l-7.89 11.8a1 1 0 0 1-.83.44z"></path> </g> </g> </g></svg>';
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
        return 'GSAP Path Text';
    }

    static function className()
    {
        return 'gsap-pathtext';
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
        return ['content' => ['content' => ['text' => 'Breakin\' Elements is so much fun !!!', 'start_offset' => ['number' => 100, 'unit' => '%', 'style' => '100%'], 'end_offset' => ['number' => 0, 'unit' => '%', 'style' => '0%'], 'show_path' => false, 'stroke_width' => null, 'path' => 'wave1', 'flip_vertically' => false, 'alignment' => null, 'overflow' => true], 'action' => ['scroll_sync' => 2, 'play' => 'play pause resume reset', 'trigger' => ['start_when' => 'top', 'start_position' => ['number' => 100, 'unit' => '%', 'style' => '100%'], 'end_when' => 'bottom', 'end_position' => ['number' => 0, 'unit' => '%', 'style' => '0%']], 'disable_on_mobile' => false], 'animation' => ['duration' => null, 'ease' => 'none', 'loop' => false, 'yoyo' => false, 'yoyo_ease' => false]], 'design' => ['design' => ['typography' => ['typography' => ['custom' => ['customTypography' => ['fontSize' => ['breakpoint_base' => ['number' => 29, 'unit' => 'px', 'style' => '29px']], 'advanced' => ['textTransform' => ['breakpoint_base' => null], 'letterSpacing' => ['breakpoint_base' => ['number' => 3, 'unit' => 'px', 'style' => '3px']]], 'fontWeight' => ['breakpoint_base' => '600'], 'fontFamily' => ['breakpoint_base' => 'gfont-poppins']]]], 'color' => ['breakpoint_base' => '#B59191FF']], 'width' => ['number' => 100, 'unit' => '%', 'style' => '100%'], 'height' => ['number' => 200, 'unit' => 'px', 'style' => '200px']], 'typography' => ['color' => null, 'typography' => ['custom' => ['customTypography' => ['fontSize' => ['breakpoint_base' => ['number' => 40, 'unit' => 'px', 'style' => '40px']], 'fontWeight' => ['breakpoint_base' => '700']]]]], 'container' => ['width' => ['breakpoint_base' => ['number' => 100, 'unit' => '%', 'style' => '100%']], 'height' => ['breakpoint_base' => ['number' => 300, 'unit' => 'px', 'style' => '300px']]], 'path' => ['stroke_width' => 2]]];
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
        "height",
        "Height",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), c(
        "path",
        "Path",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "stroke_dasharray",
        "Stroke Dasharray",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "alignment",
        "Alignment",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'baseline', 'text' => 'Baseline'], ['text' => 'Middle', 'value' => 'middle'], ['text' => 'Hanging', 'value' => 'hanging']]],
        false,
        false,
        [],
      ), c(
        "stroke_width",
        "Stroke Width",
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
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "path",
        "Path",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => [['value' => 'wave1', 'text' => 'Wave 1'], ['value' => 'wave2', 'text' => 'Wave 2'], ['value' => 'wave3', 'text' => 'Wave 3'], ['value' => 'wave4', 'text' => 'Wave 4'], ['value' => 'wave5', 'text' => 'Wave 5'], ['value' => 'wave6', 'text' => 'Wave 6'], ['value' => 'line1', 'text' => 'Line 1'], ['text' => 'Waves', 'value' => 'waves']]],
        false,
        false,
        [],
      ), c(
        "flip_vertically",
        "Flip Vertically",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "start_offset",
        "Start Offset",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "end_offset",
        "End Offset",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "show_path",
        "Show Path",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "overflow",
        "Overflow",
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
      ), c(
        "animation",
        "Animation",
        [c(
        "duration",
        "Duration",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 10, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "ease",
        "Ease",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'None', 'value' => 'none'], ['value' => 'expo.in', 'text' => 'Expo In'], ['text' => 'Expo Out', 'value' => 'expo.out'], ['text' => 'Expo InOut', 'value' => 'expo.inOut'], ['text' => 'Power1 In', 'value' => 'power1.in'], ['text' => 'Power1 Out', 'value' => 'power1.out'], ['text' => 'Power1 InOut', 'value' => 'power1.inOut'], ['value' => 'power2.in', 'text' => 'Power2 In'], ['text' => 'Power2 Out', 'value' => 'power2.out'], ['text' => 'Power2 InOut', 'value' => 'power2.inOut'], ['text' => 'Power3 In', 'value' => 'power3.in'], ['text' => 'Power3 Out', 'value' => 'power3.out'], ['text' => 'Power3 InOut', 'value' => 'power3.inOut'], ['text' => 'Power4 In', 'value' => 'power4.in'], ['text' => 'Power4 Out', 'value' => 'power4.out'], ['text' => 'Power4 InOut', 'value' => 'power4.inOut'], ['text' => 'Back In', 'value' => 'back.in'], ['text' => 'Back Out', 'value' => 'back.out'], ['text' => 'Back InOut', 'value' => 'back.inOut'], ['text' => 'Elastic In', 'value' => 'elastic.in'], ['text' => 'Elastic Out', 'value' => 'elastic.out'], ['text' => 'Elastic InOut', 'value' => 'elastic.inOut'], ['text' => 'Bounce In', 'value' => 'bounce.in'], ['text' => 'Bounce Out', 'value' => 'bounce.out'], ['text' => 'Bounce InOut', 'value' => 'bounce.inOut']]],
        false,
        false,
        [],
      ), c(
        "loop",
        "Loop",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "yoyo",
        "Yoyo",
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
      ), getPresetSection(
      "BreakinElements\\gsap-action",
      "Action",
      "action",
       ['type' => 'popout']
     )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['title' => 'GSAP','scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],],'1' =>  ['inlineScripts' => ['const selector = document.querySelector(\'%%SELECTOR%%\'); if (matchMedia("(prefers-reduced-motion: reduce)").matches) { gsap.set("#path%%ID%%", { attr: { startOffset: "50%" } }); return; } gsap.registerPlugin(ScrollTrigger); {% if content.action.disable_on_mobile %} let mm = gsap.matchMedia() mm.add("(min-width: 768px)", () => { {% endif %} window.pathtext%%ID%% = gsap.timeline({ scrollTrigger: { trigger: selector, start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}", end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}", {% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %} toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}", onEnter: () => { gsap.set(selector, { autoAlpha: 1 }); }, onEnterBack: () => { gsap.set(selector, { autoAlpha: 1 }); } } }); window.pathtext%%ID%%.fromTo("#path%%ID%%", { attr:{ startOffset:"{{ content.content.start_offset.style |default(\'50%\') }}" }, },{ attr:{ startOffset:"{{ content.content.end_offset.style |default(\'50%\') }}" }, duration:{{ content.animation.duration |default(\'1\')}}, ease:"{{ content.animation.ease |default(\'power1\') }}", {% if content.animation.loop %}repeat:-1,{% endif %} {% if content.animation.yoyo %}yoyo:true,{% endif %} {% if content.animation.yoyo_ease %}yoyoEase:true,{% endif %} }); {% if content.action.disable_on_mobile %} }); {% endif %}'],'builderCondition' => 'false',],];
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

'onPropertyChange' => [['script' => 'const selector = document.querySelector(\'%%SELECTOR%%\');
gsap.registerPlugin(ScrollTrigger);

// Kill existing timeline and scrolltrigger
if (window.pathtext%%ID%%) {
    if (window.pathtext%%ID%%.scrollTrigger) {
        window.pathtext%%ID%%.scrollTrigger.kill();
    }
  window.pathtext%%ID%%.kill();
  window.pathtext%%ID%% = null;
}

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {  
{% endif %}

window.pathtext%%ID%% = gsap.timeline({
scrollTrigger: {
trigger: selector,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
{% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
}
}); 
window.pathtext%%ID%%.fromTo("#path%%ID%%",
{ attr:{	startOffset:"{{ content.content.start_offset.style |default(\'50%\') }}" },
},{
 attr:{	startOffset:"{{ content.content.end_offset.style |default(\'50%\') }}" },
 duration:{{ content.animation.duration |default(\'1\')}},
 ease:"{{ content.animation.ease  |default(\'power1\') }}",
{% if content.animation.loop %}repeat:-1,{% endif %}
{% if content.animation.yoyo %}yoyo:true,{% endif %}
{% if content.animation.yoyo_ease  %}yoyoEase:true,{% endif %}
// repeat:1, yoyo:true, yoyoEase:true
});

{% if content.action.disable_on_mobile %} 
});
{% endif %}
',
],],

'onMountedElement' => [['script' => 'const selector = document.querySelector(\'%%SELECTOR%%\');
gsap.registerPlugin(ScrollTrigger);

// Kill existing timeline and scrolltrigger
if (window.pathtext%%ID%%) {
    if (window.pathtext%%ID%%.scrollTrigger) {
        window.pathtext%%ID%%.scrollTrigger.kill();
    }
  window.pathtext%%ID%%.kill();
  window.pathtext%%ID%% = null;
}

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {  
{% endif %}

window.pathtext%%ID%% = gsap.timeline({
scrollTrigger: {
trigger: selector,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
{% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
}
}); 
window.pathtext%%ID%%.fromTo("#path%%ID%%",
{ attr:{	startOffset:"{{ content.content.start_offset.style |default(\'50%\') }}" },
},{
 attr:{	startOffset:"{{ content.content.end_offset.style |default(\'50%\') }}" },
 duration:{{ content.animation.duration |default(\'1\')}},
 ease:"{{ content.animation.ease  |default(\'power1\') }}",
{% if content.animation.loop %}repeat:-1,{% endif %}
{% if content.animation.yoyo %}yoyo:true,{% endif %}
{% if content.animation.yoyo_ease  %}yoyoEase:true,{% endif %}
// repeat:1, yoyo:true, yoyoEase:true
});

{% if content.action.disable_on_mobile %} 
});
{% endif %}
',
],],

'onMovedElement' => [['script' => 'const selector = document.querySelector(\'%%SELECTOR%%\');
gsap.registerPlugin(ScrollTrigger);

// Kill existing timeline and scrolltrigger
if (window.pathtext%%ID%%) {
    if (window.pathtext%%ID%%.scrollTrigger) {
        window.pathtext%%ID%%.scrollTrigger.kill();
    }
  window.pathtext%%ID%%.kill();
  window.pathtext%%ID%% = null;
}

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {  
{% endif %}

window.pathtext%%ID%% = gsap.timeline({
scrollTrigger: {
trigger: selector,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
{% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
}
}); 
window.pathtext%%ID%%.fromTo("#path%%ID%%",
{ attr:{	startOffset:"{{ content.content.start_offset.style |default(\'50%\') }}" },
},{
 attr:{	startOffset:"{{ content.content.end_offset.style |default(\'50%\') }}" },
 duration:{{ content.animation.duration |default(\'1\')}},
 ease:"{{ content.animation.ease  |default(\'power1\') }}",
{% if content.animation.loop %}repeat:-1,{% endif %}
{% if content.animation.yoyo %}yoyo:true,{% endif %}
{% if content.animation.yoyo_ease  %}yoyoEase:true,{% endif %}
// repeat:1, yoyo:true, yoyoEase:true
});

{% if content.action.disable_on_mobile %} 
});
{% endif %}
',
],],];
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
        return 130;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'string', 'path' => 'content.content.text']];
    }

    static function additionalClasses()
    {
        return [['name' => 'visible', 'template' => '{% if not isBuilder %}
true
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
