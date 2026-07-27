<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapPerspective",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapPerspective extends \Breakdance\Elements\Element
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
        return 'GSAP Perspective';
    }

    static function className()
    {
        return 'gsap-perspective';
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
        return ['content' => ['perspective' => ['thickness' => ['number' => 100, 'unit' => 'px', 'style' => '100px'], 'perspective' => ['number' => 700, 'unit' => 'px', 'style' => '700px'], 'position' => null], 'content' => ['face_top' => true, 'face_bottom' => true, 'face_left' => true, 'face_right' => true, 'face_back' => false, 'perspective' => 'front', 'child_in_the_middle' => false], 'animation' => ['animated' => false, 'ease' => 'elastic.out', 'duration' => 0.8], 'action' => ['trigger' => ['start_when' => 'top', 'start_position' => ['number' => 85, 'unit' => '%', 'style' => '85%'], 'end_when' => 'bottom', 'end_position' => ['number' => 15, 'unit' => '%', 'style' => '15%']], 'play' => 'play reverse play reverse', 'scroll_sync' => null]], 'design' => ['background' => ['face_top' => '#D0D0D0FF', 'face_bottom' => '#D0D0D0FF', 'face_left' => '#A0A0A0FF', 'face_right' => '#A0A0A0FF', 'face_back' => '#989898FF']]];
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
        [c(
        "face_top",
        "Face Top",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "face_bottom",
        "Face Bottom",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "face_left",
        "Face Left",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "face_right",
        "Face Right",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), c(
        "face_back",
        "Face Back",
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
        "perspective",
        "Perspective",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['text' => 'Front', 'value' => 'front'], ['text' => 'Back', 'value' => 'back']]],
        false,
        false,
        [],
      ), c(
        "z_index",
        "Z-Index",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "perspective",
        "Perspective",
        [c(
        "thickness",
        "Thickness",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 200, 'step' => 1], 'unitOptions' => ['types' => ['px'], 'defaultType' => 'px']],
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
        "position",
        "Position",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['value' => 'left', 'text' => 'Left'], ['text' => 'Center', 'value' => 'center'], ['text' => 'Right', 'value' => 'right']]],
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
        "animated",
        "Animated",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "duration",
        "Duration",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.1]],
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
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), getPresetSection(
      "BreakinElements\\gsap-action",
      "Action",
      "action",
       ['condition' => [[['path' => 'content.animation.animated', 'operand' => 'is set', 'value' => '']]], 'type' => 'popout']
     )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],'title' => 'GSAP',],'1' =>  ['inlineScripts' => ['const selector = document.querySelector(\'%%SELECTOR%%\'); if (matchMedia("(prefers-reduced-motion: reduce)").matches) { return; } const pos = "{{ content.perspective.position |default(\'center\') }}"; window.perspectivetm%%ID%% = gsap.timeline({ scrollTrigger: { trigger: selector, scrub: 0 } }); window.perspectivetm%%ID%%.fromTo(selector, { perspectiveOrigin: pos+" -100%" }, { perspectiveOrigin: pos+" 200%", ease: "none", }); {% if content.action.disable_on_mobile %} let mm = gsap.matchMedia() mm.add("(min-width: 768px)", () => { {% endif %} {% if content.animation.animated %} window.animperspectivetm%%ID%% = gsap.timeline({ scrollTrigger: { trigger: selector, start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}", end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}", {% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %} toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}" } }); window.animperspectivetm%%ID%%.from(selector, { "--thickness":"1px", ease: "{{ content.animation.ease |default(\'power2\') }}", duration:{{ content.animation.duration |default(\'1\')}}, }); {% else %} gsap.set(selector, { "--thickness":"{{ content.perspective.thickness.style |default(\'0\') }}" }); {% endif %} {% if content.action.disable_on_mobile %} }); {% endif %}'],'builderCondition' => 'false',],];
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

if (window.perspectivetm%%ID%%) {
    window.perspectivetm%%ID%%.kill();
    if (window.perspectivetm%%ID%%.scrollTrigger) {
        window.perspectivetm%%ID%%.scrollTrigger.kill();
    }
    selector.style = \'\';
	window.perspectivetm%%ID%% = null;
}
if (window.animperspectivetm%%ID%%) {
	window.animperspectivetm%%ID%%.kill();
    if (window.animperspectivetm%%ID%%.scrollTrigger) {
        window.animperspectivetm%%ID%%.scrollTrigger.kill();
    }
}
const pos = "{{ content.perspective.position |default(\'center\') }}";

window.perspectivetm%%ID%% = gsap.timeline({
scrollTrigger: {
trigger: selector,
scrub: 0
}
}); 
window.perspectivetm%%ID%%.fromTo(selector, {
        perspectiveOrigin: pos+" -100%" 
    }, {
        perspectiveOrigin: pos+" 200%",
        ease: "none",
    });

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {  
{% endif %}
{% if content.animation.animated %}
window.animperspectivetm%%ID%% = gsap.timeline({
scrollTrigger: {
trigger: selector,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
{% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
}
});
  
window.animperspectivetm%%ID%%.from(selector, {
"--thickness":"1px",
ease: "{{ content.animation.ease |default(\'power2\') }}",
duration:{{ content.animation.duration |default(\'1\')}},
});
{% else %}
gsap.set(selector, { "--thickness":"{{ content.perspective.thickness.style |default(\'0\') }}" });
{% endif %}

{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMountedElement' => [['script' => 'const selector = document.querySelector(\'%%SELECTOR%%\');
gsap.registerPlugin(ScrollTrigger);

if (window.perspectivetm%%ID%%) {
    window.perspectivetm%%ID%%.kill();
    if (window.perspectivetm%%ID%%.scrollTrigger) {
        window.perspectivetm%%ID%%.scrollTrigger.kill();
    }
    selector.style = \'\';
	window.perspectivetm%%ID%% = null;
}
if (window.animperspectivetm%%ID%%) {
	window.animperspectivetm%%ID%%.kill();
    if (window.animperspectivetm%%ID%%.scrollTrigger) {
        window.animperspectivetm%%ID%%.scrollTrigger.kill();
    }
}
const pos = "{{ content.perspective.position |default(\'center\') }}";

window.perspectivetm%%ID%% = gsap.timeline({
scrollTrigger: {
trigger: selector,
scrub: 0
}
}); 
window.perspectivetm%%ID%%.fromTo(selector, {
        perspectiveOrigin: pos+" -100%" 
    }, {
        perspectiveOrigin: pos+" 200%",
        ease: "none",
    });

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {  
{% endif %}
{% if content.animation.animated %}
window.animperspectivetm%%ID%% = gsap.timeline({
scrollTrigger: {
trigger: selector,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
{% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
}
});
  
window.animperspectivetm%%ID%%.from(selector, {
"--thickness":"1px",
ease: "{{ content.animation.ease |default(\'power2\') }}",
duration:{{ content.animation.duration |default(\'1\')}},
});
{% else %}
gsap.set(selector, { "--thickness":"{{ content.perspective.thickness.style |default(\'0\') }}" });
{% endif %}

{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMovedElement' => [['script' => 'const selector = document.querySelector(\'%%SELECTOR%%\');
gsap.registerPlugin(ScrollTrigger);

if (window.perspectivetm%%ID%%) {
    window.perspectivetm%%ID%%.kill();
    if (window.perspectivetm%%ID%%.scrollTrigger) {
        window.perspectivetm%%ID%%.scrollTrigger.kill();
    }
    selector.style = \'\';
	window.perspectivetm%%ID%% = null;
}
if (window.animperspectivetm%%ID%%) {
	window.animperspectivetm%%ID%%.kill();
    if (window.animperspectivetm%%ID%%.scrollTrigger) {
        window.animperspectivetm%%ID%%.scrollTrigger.kill();
    }
}
const pos = "{{ content.perspective.position |default(\'center\') }}";

window.perspectivetm%%ID%% = gsap.timeline({
scrollTrigger: {
trigger: selector,
scrub: 0
}
}); 
window.perspectivetm%%ID%%.fromTo(selector, {
        perspectiveOrigin: pos+" -100%" 
    }, {
        perspectiveOrigin: pos+" 200%",
        ease: "none",
    });

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {  
{% endif %}
{% if content.animation.animated %}
window.animperspectivetm%%ID%% = gsap.timeline({
scrollTrigger: {
trigger: selector,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
{% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
}
});
  
window.animperspectivetm%%ID%%.from(selector, {
"--thickness":"1px",
ease: "{{ content.animation.ease |default(\'power2\') }}",
duration:{{ content.animation.duration |default(\'1\')}},
});
{% else %}
gsap.set(selector, { "--thickness":"{{ content.perspective.thickness.style |default(\'0\') }}" });
{% endif %}

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
        return [['name' => 'style', 'template' => '{% if content.content.perspective == \'back\' %}--inv:-1;{% else %}--inv:1;{% endif %} --thickness: {{ content.perspective.thickness.style |default(\'0px\') }};--half: calc( var(--thickness) / 2); --trz:calc( var(--half) * var(--inv));']];
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 120;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'image_url', 'path' => 'design.background.face_left.layers[].image'], ['accepts' => 'image_url', 'path' => 'design.background.face_back.layers[].image'], ['accepts' => 'image_url', 'path' => 'design.background.face_top.layers[].image'], ['accepts' => 'image_url', 'path' => 'design.background.face_bottom.layers[].image']];
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
