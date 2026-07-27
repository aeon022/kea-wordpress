<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapTimeline3d",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapTimeline3d extends \Breakdance\Elements\Element
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
        return 'GSAP Timeline 3D';
    }

    static function className()
    {
        return 'gsap-timeline3d';
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
        return ['design' => ['transform' => ['perspective' => ['breakpoint_base' => ['number' => 700, 'unit' => 'px', 'style' => '700px']]], 'background' => ['face_top' => ['color' => ['breakpoint_base' => '#BEBEBEFF']], 'face_bottom' => ['color' => ['breakpoint_base' => '#BEBEBEFF']], 'face_left' => ['color' => ['breakpoint_base' => '#DEDEDEFF']], 'face_right' => ['color' => ['breakpoint_base' => '#DEDEDEFF']], 'face_back' => ['color' => ['breakpoint_base' => '#FFFFFFFF']]]], 'content' => ['content' => ['face_top' => true, 'face_bottom' => true, 'face_left' => true, 'face_right' => true, 'face_back' => true, 'reverse_front_back' => false], 'transformation' => ['rotate_x' => ['number' => 0, 'unit' => 'deg', 'style' => '0deg'], 'rotate_y' => ['number' => 0, 'unit' => 'deg', 'style' => '0deg'], 'rotate_z' => ['number' => 0, 'unit' => 'deg', 'style' => '0deg'], 'translate_x' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'translate_y' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'translate_z' => ['number' => 0, 'unit' => 'px', 'style' => '0px'], 'thickness' => ['number' => 50, 'unit' => 'px', 'style' => '50px'], 'perspective' => ['number' => 700, 'unit' => 'px', 'style' => '700px']], 'action' => ['trigger' => ['start_when' => 'top', 'start_position' => ['number' => 100, 'unit' => '%', 'style' => '100%'], 'end_when' => 'bottom', 'end_position' => ['number' => 0, 'unit' => '%', 'style' => '0%']]]]];
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
        "background",
        "Background",
        [getPresetSection(
      "EssentialElements\\background",
      "Face Top",
      "face_top",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Face Bottom",
      "face_bottom",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Face Left",
      "face_left",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Face Right",
      "face_right",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\background",
      "Face Back",
      "face_back",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
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
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
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
        "face_top",
        "Face Top",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "face_bottom",
        "Face Bottom",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "face_left",
        "Face Left",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "face_right",
        "Face Right",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "face_back",
        "Face Back",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "reverse_front_back",
        "Reverse Front Back",
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
        "default_duration",
        "Default Duration",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "default_ease",
        "Default Ease",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'None', 'value' => 'none'], ['value' => 'expo.in', 'text' => 'Expo In'], ['text' => 'Expo Out', 'value' => 'expo.out'], ['text' => 'Expo InOut', 'value' => 'expo.inOut'], ['text' => 'Power1 In', 'value' => 'power1.in'], ['text' => 'Power1 Out', 'value' => 'power1.out'], ['text' => 'Power1 InOut', 'value' => 'power1.inOut'], ['value' => 'power2.in', 'text' => 'Power2 In'], ['text' => 'Power2 Out', 'value' => 'power2.out'], ['text' => 'Power2 InOut', 'value' => 'power2.inOut'], ['text' => 'Power3 In', 'value' => 'power3.in'], ['text' => 'Power3 Out', 'value' => 'power3.out'], ['text' => 'Power3 InOut', 'value' => 'power3.inOut'], ['text' => 'Power4 In', 'value' => 'power4.in'], ['text' => 'Power4 Out', 'value' => 'power4.out'], ['text' => 'Power4 InOut', 'value' => 'power4.inOut'], ['text' => 'Back In', 'value' => 'back.in'], ['text' => 'Back Out', 'value' => 'back.out'], ['text' => 'Back InOut', 'value' => 'back.inOut'], ['text' => 'Elastic In', 'value' => 'elastic.in'], ['text' => 'Elastic Out', 'value' => 'elastic.out'], ['text' => 'Elastic InOut', 'value' => 'elastic.inOut'], ['text' => 'Bounce In', 'value' => 'bounce.in'], ['text' => 'Bounce Out', 'value' => 'bounce.out'], ['text' => 'Bounce InOut', 'value' => 'bounce.inOut']]],
        false,
        false,
        [],
      ), c(
        "repeat_timeline",
        "Repeat Timeline",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "yoyo_timeline",
        "Yoyo Timeline",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "timeline",
        "Timeline",
        [c(
        "type",
        "Type",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => [['text' => 'Fade', 'value' => 'fade'], ['value' => '--rotx', 'text' => 'Rotate X'], ['value' => '--roty', 'text' => 'Rotate Y'], ['value' => '--rotz', 'text' => 'Rotate Z'], ['text' => 'Translate X', 'value' => '--trx'], ['text' => 'Translate Y', 'value' => '--try'], ['text' => 'Translate Z', 'value' => '--trz'], ['text' => 'Scale X', 'value' => '--scalex'], ['text' => 'Scale Y', 'value' => '--scaley'], ['text' => 'Scale Z', 'value' => '--scalez']]],
        false,
        false,
        [],
      ), c(
        "rotation",
        "Rotation",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['deg'], 'defaultType' => 'deg'], 'rangeOptions' => ['min' => -360, 'max' => 360, 'step' => 10], 'condition' => [[['path' => '%%CURRENTPATH%%.type', 'operand' => 'is one of', 'value' => ['--rotx', '--roty', '--rotz']]]]],
        false,
        false,
        [],
      ), c(
        "translate",
        "Translate",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => -500, 'max' => 500, 'step' => 10], 'condition' => [[['path' => '%%CURRENTPATH%%.type', 'operand' => 'is one of', 'value' => ['--trx', '--try', '--trz']]]]],
        false,
        false,
        [],
      ), c(
        "scale",
        "Scale",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.1], 'condition' => [[['path' => '%%CURRENTPATH%%.type', 'operand' => 'is one of', 'value' => ['--scalex', '--scaley', '--scalez']]]]],
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
        "duration",
        "Duration",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "start",
        "Start",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "loop",
        "Loop",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'condition' => [[['path' => '%%CURRENTPATH%%.type', 'operand' => 'not equals', 'value' => 'fade']]]],
        false,
        false,
        [],
      ), c(
        "yoyo",
        "Yoyo",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'condition' => [[['path' => '%%CURRENTPATH%%.type', 'operand' => 'not equals', 'value' => 'fade']]]],
        false,
        false,
        [],
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '{type}', 'defaultTitle' => '', 'buttonName' => '']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "transformation",
        "Transformation",
        [c(
        "rotate_x",
        "Rotate X",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => -180, 'max' => 180, 'step' => 10], 'unitOptions' => ['types' => ['deg'], 'defaultType' => 'deg']],
        false,
        false,
        [],
      ), c(
        "rotate_y",
        "Rotate Y",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => -180, 'max' => 180, 'step' => 10], 'unitOptions' => ['types' => ['deg'], 'defaultType' => 'deg']],
        false,
        false,
        [],
      ), c(
        "rotate_z",
        "Rotate Z",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => -180, 'max' => 180, 'step' => 10], 'unitOptions' => ['types' => ['deg'], 'defaultType' => 'deg']],
        false,
        false,
        [],
      ), c(
        "translate_x",
        "Translate X",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => -500, 'max' => 500, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "translate_y",
        "Translate Y",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => -500, 'max' => 500, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "translate_z",
        "Translate Z",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => -500, 'max' => 500, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "thickness",
        "Thickness",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px'], 'defaultType' => 'px'], 'rangeOptions' => ['min' => 1, 'max' => 100, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "perspective",
        "Perspective",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 400, 'max' => 1200, 'step' => 10], 'unitOptions' => ['types' => ['px'], 'defaultType' => 'px']],
        false,
        false,
        [],
      ), c(
        "origin",
        "Origin",
        [],
        ['type' => 'focus_point', 'layout' => 'vertical', 'focusPointOptions' => ['gridMode' => true]],
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
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],'title' => 'GSAP',],'1' =>  ['inlineScripts' => ['const selector = document.querySelector(\'%%SELECTOR%%\'); if (matchMedia("(prefers-reduced-motion: reduce)").matches) { return; } {% if content.action.disable_on_mobile %} let mm = gsap.matchMedia() mm.add("(min-width: 768px)", () => { {% endif %} window.anim3dtm%%ID%% = gsap.timeline({ {% if content.animation.repeat_timeline %}repeat:-1,{% endif %} {% if content.animation.yoyo_timeline %}yoyo:true,{% endif %} scrollTrigger: { trigger: selector, start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}", end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}", {% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %} toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}", onEnter: () => { gsap.set(selector, { autoAlpha: 1 }); }, onEnterBack: () => { gsap.set(selector, { autoAlpha: 1 }); } }, defaults: { duration:{{ content.animation.default_duration |default(\'1\') }}, ease:"{{ content.animation.default_ease |default(\'power2.out\') }}" } }); {% for item in content.animation.timeline %} {% if item.type == "fade" %} window.anim3dtm%%ID%%.fromTo(selector, { autoAlpha:0, }, { autoAlpha:1, {% if item.ease %}ease:"{{ item.ease }}",{% endif %} {% if item.duration %}duration:{{ item.duration }},{% endif %} }, {{ item.start |default(\'0\') }}); {% endif %} window.anim3dtm%%ID%%.from(selector, { {% if item.type == "--rotx" or item.type == "--roty" or item.type == "--rotz" %} "{{ item.type }}":"{{ item.rotation.style }}", {% endif %} {% if item.type == "--trx" or item.type == "--try" or item.type == "--trz" %} "{{ item.type }}":"{{ item.translate.style }}", {% endif %} {% if item.type == "--scalex" or item.type == "--scaley" or item.type == "--scalez" %} "{{ item.type }}":"{{ item.scale }}", {% endif %} {% if item.ease %}ease:"{{ item.ease }}",{% endif %} {% if item.duration %}duration:{{ item.duration }},{% endif %} {% if item.loop %}repeat:-1,{% endif %} {% if item.yoyo %}yoyo:true,{% endif %} }, {{ item.start |default(\'0\') }}); {% endfor %} {% if content.action.disable_on_mobile %} }); {% endif %}'],'builderCondition' => 'false',],];
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
if (window.anim3dtm%%ID%%) {
    if (window.anim3dtm%%ID%%.scrollTrigger) {
        window.anim3dtm%%ID%%.scrollTrigger.kill();
    }
  window.anim3dtm%%ID%%.kill();
  window.anim3dtm%%ID%% = null;
  selector.style = \'\';
}

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
  
{% endif %}

window.anim3dtm%%ID%% = gsap.timeline({
  {% if content.animation.repeat_timeline %}repeat:-1,{% endif %}
  {% if content.animation.yoyo_timeline %}yoyo:true,{% endif %}
    scrollTrigger: {
        trigger: selector,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        },
     defaults: {
      duration:{{ content.animation.default_duration |default(\'1\') }},
      ease:"{{ content.animation.default_ease |default(\'power2.out\') }}"
     }
});

{% for item in content.animation.timeline %}
{% if item.type == "fade" %}
window.anim3dtm%%ID%%.fromTo(selector, {
autoAlpha:0,
}, {
autoAlpha:1,
{% if item.ease %}ease:"{{ item.ease }}",{% endif %}
{% if item.duration %}duration:{{ item.duration }},{% endif %}
}, {{ item.start |default(\'0\') }});
{% endif %}  
window.anim3dtm%%ID%%.from(selector, {
{% if item.type == "--rotx" or item.type == "--roty" or item.type == "--rotz" %}
"{{ item.type }}":"{{ item.rotation.style }}",
{% endif %}
{% if item.type == "--trx" or item.type == "--try" or item.type == "--trz" %}
"{{ item.type }}":"{{ item.translate.style }}",
{% endif %}
{% if item.type == "--scalex" or item.type == "--scaley" or item.type == "--scalez" %}
"{{ item.type }}":"{{ item.scale }}",
{% endif %}
{% if item.ease %}ease:"{{ item.ease }}",{% endif %}
{% if item.duration %}duration:{{ item.duration }},{% endif %}
{% if item.loop %}repeat:-1,{% endif %}
{% if item.yoyo %}yoyo:true,{% endif %}
}, {{ item.start |default(\'0\') }});
{% endfor %}

{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMovedElement' => [['script' => 'const selector = document.querySelector(\'%%SELECTOR%%\');
gsap.registerPlugin(ScrollTrigger);
if (window.anim3dtm%%ID%%) {
    if (window.anim3dtm%%ID%%.scrollTrigger) {
        window.anim3dtm%%ID%%.scrollTrigger.kill();
    }
  window.anim3dtm%%ID%%.kill();
  window.anim3dtm%%ID%% = null;
  selector.style = \'\';
}

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
  
{% endif %}

window.anim3dtm%%ID%% = gsap.timeline({
  {% if content.animation.repeat_timeline %}repeat:-1,{% endif %}
  {% if content.animation.yoyo_timeline %}yoyo:true,{% endif %}
    scrollTrigger: {
        trigger: selector,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        },
     defaults: {
      duration:{{ content.animation.default_duration |default(\'1\') }},
      ease:"{{ content.animation.default_ease |default(\'power2.out\') }}"
     }
});

{% for item in content.animation.timeline %}
{% if item.type == "fade" %}
window.anim3dtm%%ID%%.fromTo(selector, {
autoAlpha:0,
}, {
autoAlpha:1,
{% if item.ease %}ease:"{{ item.ease }}",{% endif %}
{% if item.duration %}duration:{{ item.duration }},{% endif %}
}, {{ item.start |default(\'0\') }});
{% endif %}  
window.anim3dtm%%ID%%.from(selector, {
{% if item.type == "--rotx" or item.type == "--roty" or item.type == "--rotz" %}
"{{ item.type }}":"{{ item.rotation.style }}",
{% endif %}
{% if item.type == "--trx" or item.type == "--try" or item.type == "--trz" %}
"{{ item.type }}":"{{ item.translate.style }}",
{% endif %}
{% if item.type == "--scalex" or item.type == "--scaley" or item.type == "--scalez" %}
"{{ item.type }}":"{{ item.scale }}",
{% endif %}
{% if item.ease %}ease:"{{ item.ease }}",{% endif %}
{% if item.duration %}duration:{{ item.duration }},{% endif %}
{% if item.loop %}repeat:-1,{% endif %}
{% if item.yoyo %}yoyo:true,{% endif %}
}, {{ item.start |default(\'0\') }});
{% endfor %}

{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMountedElement' => [['script' => 'const selector = document.querySelector(\'%%SELECTOR%%\');
gsap.registerPlugin(ScrollTrigger);
if (window.anim3dtm%%ID%%) {
    if (window.anim3dtm%%ID%%.scrollTrigger) {
        window.anim3dtm%%ID%%.scrollTrigger.kill();
    }
  window.anim3dtm%%ID%%.kill();
  window.anim3dtm%%ID%% = null;
  selector.style = \'\';
}

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
  
{% endif %}

window.anim3dtm%%ID%% = gsap.timeline({
  {% if content.animation.repeat_timeline %}repeat:-1,{% endif %}
  {% if content.animation.yoyo_timeline %}yoyo:true,{% endif %}
    scrollTrigger: {
        trigger: selector,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        },
     defaults: {
      duration:{{ content.animation.default_duration |default(\'1\') }},
      ease:"{{ content.animation.default_ease |default(\'power2.out\') }}"
     }
});

{% for item in content.animation.timeline %}
{% if item.type == "fade" %}
window.anim3dtm%%ID%%.fromTo(selector, {
autoAlpha:0,
}, {
autoAlpha:1,
{% if item.ease %}ease:"{{ item.ease }}",{% endif %}
{% if item.duration %}duration:{{ item.duration }},{% endif %}
}, {{ item.start |default(\'0\') }});
{% endif %}  
window.anim3dtm%%ID%%.from(selector, {
{% if item.type == "--rotx" or item.type == "--roty" or item.type == "--rotz" %}
"{{ item.type }}":"{{ item.rotation.style }}",
{% endif %}
{% if item.type == "--trx" or item.type == "--try" or item.type == "--trz" %}
"{{ item.type }}":"{{ item.translate.style }}",
{% endif %}
{% if item.type == "--scalex" or item.type == "--scaley" or item.type == "--scalez" %}
"{{ item.type }}":"{{ item.scale }}",
{% endif %}
{% if item.ease %}ease:"{{ item.ease }}",{% endif %}
{% if item.duration %}duration:{{ item.duration }},{% endif %}
{% if item.loop %}repeat:-1,{% endif %}
{% if item.yoyo %}yoyo:true,{% endif %}
}, {{ item.start |default(\'0\') }});
{% endfor %}

{% if content.action.disable_on_mobile %} 
});
{% endif %}',
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
        return [['name' => 'Style', 'template' => '--rotx: {{ content.transformation.rotate_x.style |default(\'0\')}};--roty: {{ content.transformation.rotate_y.style |default(\'0\') }};--rotz: {{ content.transformation.rotate_z.style |default(\'0\') }};--trx: {{ content.transformation.translate_x.style |default(\'0\') }};--try: {{ content.transformation.translate_y.style |default(\'0\') }};--trz: {{ content.transformation.translate_z.style |default(\'0\') }};--scalex: 1;--scaley: 1;--scalez: 1;opacity:1;']];
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 110;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'image_url', 'path' => 'design.background.face_bottom.layers[].image'], ['accepts' => 'image_url', 'path' => 'design.background.face_left.layers[].image'], ['accepts' => 'image_url', 'path' => 'design.background.face_back.layers[].image']];
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
