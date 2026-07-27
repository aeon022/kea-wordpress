<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapSliceImage",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapSliceImage extends \Breakdance\Elements\Element
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
        return 'GSAP Slice Image';
    }

    static function className()
    {
        return 'gsap-slice-image';
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
        return ['content' => ['content' => ['image' => null, 'aspect_ratio' => null, 'slice_row' => 4, 'slice_col' => 4, 'gap' => null], 'animation' => ['stagger' => 0.05, 'duration' => 1, 'ease' => 'power2.out', 'stagger_from' => 'random', 'effect' => 'zoomin'], 'custom_effect' => null, 'action' => ['trigger' => ['start_when' => 'top', 'start_position' => ['number' => 100, 'unit' => '%', 'style' => '100%'], 'end_when' => 'bottom', 'end_position' => ['number' => 0, 'unit' => '%', 'style' => '0%']]]], 'design' => ['design' => ['width' => ['number' => 500, 'unit' => 'px', 'style' => '500px'], 'height' => null, 'aspect_ratio' => '1/1', 'custom_aspect_ratio' => null]]];
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
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1200, 'step' => 10]],
        false,
        false,
        [],
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1200, 'step' => 10], 'unitOptions' => ['types' => ['px']]],
        false,
        false,
        [],
      ), c(
        "aspect_ratio",
        "Aspect Ratio",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => '1/1', 'text' => '1/1'], ['text' => '4/3', 'value' => '4/3'], ['text' => '16/9', 'value' => '16/9'], ['text' => '2/1', 'value' => '2/1'], ['text' => '3/4', 'value' => '3/4'], ['text' => '9/16', 'value' => '9/16'], ['text' => '1/2', 'value' => '1/2'], ['text' => 'custom', 'value' => 'custom']]],
        false,
        false,
        [],
      ), c(
        "custom_aspect_ratio",
        "Custom Aspect Ratio",
        [],
        ['type' => 'text', 'layout' => 'inline', 'condition' => [[['path' => 'design.design.aspect_ratio', 'operand' => 'equals', 'value' => 'custom']]]],
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
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['image'], 'multiple' => false]],
        false,
        false,
        [],
      ), c(
        "slice_row",
        "Slice Row",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 10, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "slice_col",
        "Slice Col",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 10, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "gap",
        "Gap",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), getPresetSection(
      "BreakinElements\\gsap-animation",
      "Animation",
      "animation",
       ['type' => 'popout']
     ), getPresetSection(
      "BreakinElements\\gsap-custom-effect",
      "Custom Effect",
      "custom_effect",
       ['condition' => [[['path' => 'content.animation.effect', 'operand' => 'equals', 'value' => 'customeffect']]], 'type' => 'popout']
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
        return ['0' =>  ['title' => 'GSAP','scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],],'1' =>  ['scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/GSAP_Slice_Image/gsapsliceimage.min.js'],'inlineScripts' => ['const sliceAnimation = createSliceAnimation("%%SELECTOR%%", {
    {% if content.action.disable_on_mobile %}
    disableOnMobile: true,
    {% endif %}
    {% if content.action.play %}
    toggleActions: "{{ content.action.play }}",
    {% endif %}
     start: "{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
    end: "{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
{% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}
  scrub: {{ content.action.scroll_sync }},{% endif %}
    {% if content.animation.effect %}
    effect: "{{ content.animation.effect }}",
    {% endif %}
    {% if content.animation.duration or content.animation.duration == 0 %}
    duration: {{ content.animation.duration }},
    {% endif %}
    {% if content.animation.delay %}
    delay: {{ content.animation.delay }},
    {% endif %}
    {% if content.animation.ease %}
    ease: "{{ content.animation.ease }}",
    {% endif %}
    {% if content.animation.stagger %}
    stagger: {{ content.animation.stagger }},
    {% endif %}
    {% if content.animation.stagger_from %}
    staggerFrom: "{{ content.animation.stagger_from }}",
    {% endif %}
    {% if content.animation.effect == \'customeffect\' %}
    customEffect: {
        {% if content.custom_effect.random_values.random_x %}
        randomX: [{{ content.custom_effect.random_values.random_x[0] }}, {{ content.custom_effect.random_values.random_x[1] }}],
        {% endif %}
        {% if content.custom_effect.x.style %}
        x: "{{ content.custom_effect.x.style }}",
        {% endif %}
        {% if content.custom_effect.random_values.random_y %}
        randomY: [{{ content.custom_effect.random_values.random_y[0] }}, {{ content.custom_effect.random_values.random_y[1] }}],
        {% endif %}
        {% if content.custom_effect.y.style %}
        y: "{{ content.custom_effect.y.style }}",
        {% endif %}
        {% if content.custom_effect.random_values.random_scale %}
        randomScale: [{{ content.custom_effect.random_values.random_scale[0] }}, {{ content.custom_effect.random_values.random_scale[1] }}],
        {% endif %}
        {% if content.custom_effect.scale %}
        scale: {{ content.custom_effect.scale }},
        {% endif %}
        {% if content.custom_effect.random_values.random_rotation_x %}
        randomRotationX: [{{ content.custom_effect.random_values.random_rotation_x[0] }}, {{ content.custom_effect.random_values.random_rotation_x[1] }}],
        {% endif %}
        {% if content.custom_effect.rotation_x %}
        rotationX: {{ content.custom_effect.rotation_x }},
        {% endif %}
        {% if content.custom_effect.random_values.random_rotation_y %}
        randomRotationY: [{{ content.custom_effect.random_values.random_rotation_y[0] }}, {{ content.custom_effect.random_values.random_rotation_y[1] }}],
        {% endif %}
        {% if content.custom_effect.rotation_y %}
        rotationY: {{ content.custom_effect.rotation_y }},
        {% endif %}
        {% if content.custom_effect.random_values.random_rotation_z %}
        randomRotationZ: [{{ content.custom_effect.random_values.random_rotation_z[0] }}, {{ content.custom_effect.random_values.random_rotation_z[1] }}],
        {% endif %}
        {% if content.custom_effect.rotation_z %}
        rotationZ: {{ content.custom_effect.rotation_z }},
        {% endif %}
        {% if content.custom_effect.perspective.style %}
        perspective: "{{ content.custom_effect.perspective.style }}",
        {% endif %}
        {% if content.custom_effect.transform_origin.x and content.custom_effect.transform_origin.y %}
        transformOriginX: {{ content.custom_effect.transform_origin.x }},
        transformOriginY: {{ content.custom_effect.transform_origin.y }},
        {% endif %}
    }
    {% endif %}
});
'],'builderCondition' => 'false',],];
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

'onPropertyChange' => [['script' => 'gsap.registerPlugin(ScrollTrigger);
{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

if (window.slicetm%%ID%%) {
    if (window.slicetm%%ID%%.scrollTrigger) {
        window.slicetm%%ID%%.scrollTrigger.kill();
    }
  window.slicetm%%ID%%.kill();
  window.slicetm%%ID%% = null;
}
       
window.slicetm%%ID%% = gsap.timeline({
        defaults: {
            ease: \'sine.inOut\',
            duration:1,
        },
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        }
});

window.slicetm%%ID%%.fromTo("%%SELECTOR%% .sliced", {
        autoAlpha: 0,
		{% if not content.animation.effect or content.animation.effect == \'fade\' %}

		{% elseif content.animation.effect == \'Slidedown\' %}
		y: -100,
		{% elseif content.animation.effect == \'slideup\' %}
		y: 100,
		{% elseif content.animation.effect == \'slideleft\' %}
		x: -100,
		{% elseif content.animation.effect == \'slideright\' %}
		x: 100,
		{% elseif content.animation.effect == \'zoomin\' %}
		scale: 0,
		{% elseif content.animation.effect == \'zoomout\' %}
		scale: 2,
		{% elseif content.animation.effect == \'customeffect\' %}
		
 		{% if content.custom_effect.random_values.random_x %}
        x: "random({{ content.custom_effect.random_values.random_x[0]}}, {{ content.custom_effect.random_values.random_x[1] }}, 10)",
 		{% else %}
   		x:"{{ content.custom_effect.x.style |default(\'0\') }}",
  		{% endif %}
        {% if content.custom_effect.random_values.random_y %}
        y: "random({{ content.custom_effect.random_values.random_y[0]}}, {{ content.custom_effect.random_values.random_y[1] }}, 10)",
 		{% else %}
   		y:"{{ content.custom_effect.y.style |default(\'0\') }}",
  		{% endif %}

		{% if content.custom_effect.random_values.random_scale %}
        scale: "random({{ content.custom_effect.random_values.random_scale[0]}}, {{ content.custom_effect.random_values.random_scale[1] }},0.1)",
 		{% else %}
   		scale:{{ content.custom_effect.scale |default(\'1\') }},
  		{% endif %}
          
		{% if content.custom_effect.random_values.random_rotation_x %}
        rotateX: "random({{ content.custom_effect.random_values.random_rotation_x[0]}}, {{ content.custom_effect.random_values.random_rotation_x[1] }}, 10)",
 		{% else %}
   		rotateX:{{ content.custom_effect.rotation_x |default(\'0\') }},
  		{% endif %}          
          
		{% if content.custom_effect.random_values.random_rotation_y %}
        rotateY: "random({{ content.custom_effect.random_values.random_rotation_y[0]}}, {{ content.custom_effect.random_values.random_rotation_y[1] }}, 10)",
 		{% else %}
   		rotateY:{{ content.custom_effect.rotation_y |default(\'0\') }},
  		{% endif %}        
          
		{% if content.custom_effect.random_values.random_rotation_z %}
        rotateZ: "random({{ content.custom_effect.random_values.random_rotation_z[0]}}, {{ content.custom_effect.random_values.random_rotation_z[1] }}, 10)",
 		{% else %}
   		rotateZ:{{ content.custom_effect.rotation_z |default(\'0\') }},
  		{% endif %}

        transformPerspective:"{{ content.custom_effect.perspective.style |default(\'0\') }}",
        transformOrigin: "{{ content.custom_effect.transform_origin.x |default(\'50\') }}% {{ content.custom_effect.transform_origin.y |default(\'50\') }}%"
		{% endif %} 
}, {
	duration: {{ content.animation.duration |default(\'1\') }},
    delay: {{ content.animation.delay |default(\'0\') }},
	autoAlpha:1,
	x:0,
  	y:0,
    scale:1,
    rotateX:0,
    rotateY:0,
    rotateZ:0,
	ease: "{{ content.animation.ease |default(\'power2.out\')}}",
	stagger: {
        each: {{ content.animation.stagger |default(\'0\') }},
        from: "{{ content.animation.stagger_from |default(\'start\') }}",
	}
});
{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMountedElement' => [['script' => 'gsap.registerPlugin(ScrollTrigger);
{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

if (window.slicetm%%ID%%) {
    if (window.slicetm%%ID%%.scrollTrigger) {
        window.slicetm%%ID%%.scrollTrigger.kill();
    }
  window.slicetm%%ID%%.kill();
  window.slicetm%%ID%% = null;
}
       
window.slicetm%%ID%% = gsap.timeline({
        defaults: {
            ease: \'sine.inOut\',
            duration:1,
        },
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        }
});

window.slicetm%%ID%%.fromTo("%%SELECTOR%% .sliced", {
        autoAlpha: 0,
		{% if not content.animation.effect or content.animation.effect == \'fade\' %}

		{% elseif content.animation.effect == \'Slidedown\' %}
		y: -100,
		{% elseif content.animation.effect == \'slideup\' %}
		y: 100,
		{% elseif content.animation.effect == \'slideleft\' %}
		x: -100,
		{% elseif content.animation.effect == \'slideright\' %}
		x: 100,
		{% elseif content.animation.effect == \'zoomin\' %}
		scale: 0,
		{% elseif content.animation.effect == \'zoomout\' %}
		scale: 2,
		{% elseif content.animation.effect == \'customeffect\' %}
		
 		{% if content.custom_effect.random_values.random_x %}
        x: "random({{ content.custom_effect.random_values.random_x[0]}}, {{ content.custom_effect.random_values.random_x[1] }}, 10)",
 		{% else %}
   		x:"{{ content.custom_effect.x.style |default(\'0\') }}",
  		{% endif %}
        {% if content.custom_effect.random_values.random_y %}
        y: "random({{ content.custom_effect.random_values.random_y[0]}}, {{ content.custom_effect.random_values.random_y[1] }}, 10)",
 		{% else %}
   		y:"{{ content.custom_effect.y.style |default(\'0\') }}",
  		{% endif %}

		{% if content.custom_effect.random_values.random_scale %}
        scale: "random({{ content.custom_effect.random_values.random_scale[0]}}, {{ content.custom_effect.random_values.random_scale[1] }},0.1)",
 		{% else %}
   		scale:{{ content.custom_effect.scale |default(\'1\') }},
  		{% endif %}
          
		{% if content.custom_effect.random_values.random_rotation_x %}
        rotateX: "random({{ content.custom_effect.random_values.random_rotation_x[0]}}, {{ content.custom_effect.random_values.random_rotation_x[1] }}, 10)",
 		{% else %}
   		rotateX:{{ content.custom_effect.rotation_x |default(\'0\') }},
  		{% endif %}          
          
		{% if content.custom_effect.random_values.random_rotation_y %}
        rotateY: "random({{ content.custom_effect.random_values.random_rotation_y[0]}}, {{ content.custom_effect.random_values.random_rotation_y[1] }}, 10)",
 		{% else %}
   		rotateY:{{ content.custom_effect.rotation_y |default(\'0\') }},
  		{% endif %}        
          
		{% if content.custom_effect.random_values.random_rotation_z %}
        rotateZ: "random({{ content.custom_effect.random_values.random_rotation_z[0]}}, {{ content.custom_effect.random_values.random_rotation_z[1] }}, 10)",
 		{% else %}
   		rotateZ:{{ content.custom_effect.rotation_z |default(\'0\') }},
  		{% endif %}

        transformPerspective:"{{ content.custom_effect.perspective.style |default(\'0\') }}",
        transformOrigin: "{{ content.custom_effect.transform_origin.x |default(\'50\') }}% {{ content.custom_effect.transform_origin.y |default(\'50\') }}%"
		{% endif %} 
}, {
	duration: {{ content.animation.duration |default(\'1\') }},
    delay: {{ content.animation.delay |default(\'0\') }},
	autoAlpha:1,
	x:0,
  	y:0,
    scale:1,
    rotateX:0,
    rotateY:0,
    rotateZ:0,
	ease: "{{ content.animation.ease |default(\'power2.out\')}}",
	stagger: {
        each: {{ content.animation.stagger |default(\'0\') }},
        from: "{{ content.animation.stagger_from |default(\'start\') }}",
	}
});
{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMovedElement' => [['script' => 'gsap.registerPlugin(ScrollTrigger);
{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

if (window.slicetm%%ID%%) {
    if (window.slicetm%%ID%%.scrollTrigger) {
        window.slicetm%%ID%%.scrollTrigger.kill();
    }
  window.slicetm%%ID%%.kill();
  window.slicetm%%ID%% = null;
}
       
window.slicetm%%ID%% = gsap.timeline({
        defaults: {
            ease: \'sine.inOut\',
            duration:1,
        },
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        }
});

window.slicetm%%ID%%.fromTo("%%SELECTOR%% .sliced", {
        autoAlpha: 0,
		{% if not content.animation.effect or content.animation.effect == \'fade\' %}

		{% elseif content.animation.effect == \'Slidedown\' %}
		y: -100,
		{% elseif content.animation.effect == \'slideup\' %}
		y: 100,
		{% elseif content.animation.effect == \'slideleft\' %}
		x: -100,
		{% elseif content.animation.effect == \'slideright\' %}
		x: 100,
		{% elseif content.animation.effect == \'zoomin\' %}
		scale: 0,
		{% elseif content.animation.effect == \'zoomout\' %}
		scale: 2,
		{% elseif content.animation.effect == \'customeffect\' %}
		
 		{% if content.custom_effect.random_values.random_x %}
        x: "random({{ content.custom_effect.random_values.random_x[0]}}, {{ content.custom_effect.random_values.random_x[1] }}, 10)",
 		{% else %}
   		x:"{{ content.custom_effect.x.style |default(\'0\') }}",
  		{% endif %}
        {% if content.custom_effect.random_values.random_y %}
        y: "random({{ content.custom_effect.random_values.random_y[0]}}, {{ content.custom_effect.random_values.random_y[1] }}, 10)",
 		{% else %}
   		y:"{{ content.custom_effect.y.style |default(\'0\') }}",
  		{% endif %}

		{% if content.custom_effect.random_values.random_scale %}
        scale: "random({{ content.custom_effect.random_values.random_scale[0]}}, {{ content.custom_effect.random_values.random_scale[1] }},0.1)",
 		{% else %}
   		scale:{{ content.custom_effect.scale |default(\'1\') }},
  		{% endif %}
          
		{% if content.custom_effect.random_values.random_rotation_x %}
        rotateX: "random({{ content.custom_effect.random_values.random_rotation_x[0]}}, {{ content.custom_effect.random_values.random_rotation_x[1] }}, 10)",
 		{% else %}
   		rotateX:{{ content.custom_effect.rotation_x |default(\'0\') }},
  		{% endif %}          
          
		{% if content.custom_effect.random_values.random_rotation_y %}
        rotateY: "random({{ content.custom_effect.random_values.random_rotation_y[0]}}, {{ content.custom_effect.random_values.random_rotation_y[1] }}, 10)",
 		{% else %}
   		rotateY:{{ content.custom_effect.rotation_y |default(\'0\') }},
  		{% endif %}        
          
		{% if content.custom_effect.random_values.random_rotation_z %}
        rotateZ: "random({{ content.custom_effect.random_values.random_rotation_z[0]}}, {{ content.custom_effect.random_values.random_rotation_z[1] }}, 10)",
 		{% else %}
   		rotateZ:{{ content.custom_effect.rotation_z |default(\'0\') }},
  		{% endif %}

        transformPerspective:"{{ content.custom_effect.perspective.style |default(\'0\') }}",
        transformOrigin: "{{ content.custom_effect.transform_origin.x |default(\'50\') }}% {{ content.custom_effect.transform_origin.y |default(\'50\') }}%"
		{% endif %} 
}, {
	duration: {{ content.animation.duration |default(\'1\') }},
    delay: {{ content.animation.delay |default(\'0\') }},
	autoAlpha:1,
	x:0,
  	y:0,
    scale:1,
    rotateX:0,
    rotateY:0,
    rotateZ:0,
	ease: "{{ content.animation.ease |default(\'power2.out\')}}",
	stagger: {
        each: {{ content.animation.stagger |default(\'0\') }},
        from: "{{ content.animation.stagger_from |default(\'start\') }}",
	}
});
{% if content.action.disable_on_mobile %} 
});
{% endif %}',
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
        return 100;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'image_url', 'path' => 'content.content.background.layers[].image'], ['accepts' => 'image_url', 'path' => 'content.content.image']];
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
        return ['content.content.background.image', 'content.content.background.overlay.image', 'content.content.background.image_settings.unset_image_at', 'content.content.background.image_settings.size', 'content.content.background.image_settings.height', 'content.content.background.image_settings.repeat', 'content.content.background.image_settings.position', 'content.content.background.image_settings.left', 'content.content.background.image_settings.top', 'content.content.background.image_settings.attachment', 'content.content.background.image_settings.custom_position', 'content.content.background.image_settings.width', 'content.content.background.overlay.image_settings.custom_position', 'content.content.background.image_size', 'content.content.background.overlay.image_size', 'content.content.background.overlay.type', 'content.content.background.image_settings'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
