<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapReveal",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapReveal extends \Breakdance\Elements\Element
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
        return 'GSAP Reveal';
    }

    static function className()
    {
        return 'gsap-reveal';
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
        return ['content' => ['content' => null, 'reveal' => ['direction' => 'right', 'duration' => 0.6, 'start_ease' => null, 'end_ease' => null], 'action' => null], 'design' => ['design' => ['start_color' => null, 'middle_color' => '#000000FF', 'end_color' => null]]];
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
        "start_color",
        "Start Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "middle_color",
        "Middle Color",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "end_color",
        "End Color",
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
        "reveal",
        "Reveal",
        [c(
        "direction",
        "Direction",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['value' => 'right', 'text' => 'Right', 'icon' => 'ArrowRightIcon'], ['value' => 'left', 'text' => 'Left', 'icon' => 'ArrowLeftIcon'], ['value' => 'top', 'text' => 'Top', 'icon' => 'ArrowUpIcon'], ['value' => 'bottom', 'text' => 'Bottom', 'icon' => 'ArrowDownIcon']]],
        false,
        false,
        [],
      ), c(
        "duration",
        "Duration",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 10, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "start_ease",
        "Start Ease",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'sine.inOut', 'text' => 'sine.inOut'], ['text' => 'bounce.out', 'value' => 'bounce.out'], ['text' => 'back.out', 'value' => 'back.out']]],
        false,
        false,
        [],
      ), c(
        "end_ease",
        "End Ease",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'sine.inOut', 'text' => 'sine.inOut'], ['text' => 'bounce.out', 'value' => 'bounce.out'], ['text' => 'back.out', 'value' => 'back.out']]],
        false,
        false,
        [],
      ), c(
        "delay",
        "Delay",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 10, 'step' => 0.1]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "content",
        "Content",
        [c(
        "effect",
        "Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'Fade', 'value' => 'fade'], ['value' => 'zoomin', 'text' => 'zoomin'], ['text' => 'zoomout', 'value' => 'zoomout'], ['text' => 'Slide Left', 'value' => 'slideleft'], ['value' => 'slideright', 'text' => 'Slide Right'], ['text' => 'Slide Top', 'value' => 'slidetop'], ['text' => 'Slide Bottom', 'value' => 'slidebottom']]],
        false,
        false,
        [],
      ), c(
        "ease",
        "Ease",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'sine.inOut', 'text' => 'sine.inOut'], ['text' => 'bounce.out', 'value' => 'bounce.out'], ['text' => 'back.out', 'value' => 'back.out']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "action",
        "Action",
        [c(
        "play",
        "Play",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'play pause resume reset', 'text' => 'Always'], ['text' => 'Once', 'value' => 'play none none none'], ['text' => 'Restart On Scroll Back', 'value' => 'restart none restart none']]],
        false,
        false,
        [],
      ), c(
        "disable_on_mobile",
        "Disable On Mobile",
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
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],'title' => 'GSAP',],'1' =>  ['inlineScripts' => ['createRevealAnimation({
        selector: "%%SELECTOR%%",
		{% if content.reveal.direction %}revealDirection:\'{{ content.reveal.direction }}\',{% endif %}
		{% if content.reveal.duration %}revealDuration:{{ content.reveal.duration }},{% endif %}
		{% if design.design.start_color %}startColor:\'{{ design.design.start_color }}\',{% endif %}
		{% if design.design.middle_color %}middleColor:\'{{ design.design.middle_color }}\',{% endif %}
		{% if design.design.end_color %}endColor:\'{{ design.design.end_color }}\',{% endif %}
		{% if content.reveal.start_ease %}startEase:\'{{ content.reveal.start_ease }}\',{% endif %}
		{% if content.reveal.end_ease %}endEase:\'{{ content.reveal.end_ease }}\',{% endif %}
		{% if content.content.effect %}contentEffect:\'{{ content.content.effect }}\',{% endif %}
		{% if content.reveal.duration %}contentDuration:{{ content.reveal.duration }},{% endif %}
		{% if content.content.ease %}contentEase:\'{{ content.content.ease }}\',{% endif %}
		{% if content.action.disable_on_mobile %}disableOnMobile:{{ content.action.disable_on_mobile }},{% endif %}
		{% if content.action.play %}playOnce:"{{ content.action.play }}",{% endif %}
		{% if content.reveal.delay %}delay:{{ content.reveal.delay }},{% endif %}
    });'],'scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/GSAP_Reveal/reveal.min.js'],'builderCondition' => 'false','title' => 'supareveal',],];
    }

    static function settings()
    {
        return ['dependsOnGlobalScripts' => false];
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return [

'onPropertyChange' => [['script' => 'if (window.revealtm%%ID%%) {
	if (window.revealtm%%ID%%.scrollTrigger) {
        window.revealtm%%ID%%.scrollTrigger.kill();
    }
    window.revealtm%%ID%%.kill();
	window.revealtm%%ID%% = null
}
gsap.registerPlugin(ScrollTrigger);

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

window.revealtm%%ID%% = gsap.timeline({
        defaults: {
            ease: \'sine.inOut\',
            duration: {{ content.reveal.duration |default(\'1\') }},
        },
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
            start: "top bottom",
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        }
    });

  window.revealtm%%ID%%.fromTo("%%SELECTOR%% .supa-reveal-overlay", {
            {% if content.reveal.direction is empty or content.reveal.direction == \'right\' %}
            xPercent: -101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'left\' %}
            xPercent: 101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'bottom\' %}
            xPercent: 0,
            yPercent: -101,
            {% elseif content.reveal.direction == \'top\' %}
            xPercent: 0,
            yPercent: 101,
            {% endif %}
            backgroundColor: "{{ design.design.start_color |default(\'black\') }}"
        }, {
            ease: "{{ content.reveal.start_ease |default(\'sine.inOut\') }}",
            delay: "{{ content.reveal.delay |default(\'0\') }}",
			xPercent: 0,
			yPercent: 0,
            backgroundColor: "{{ design.design.middle_color |default(\'black\') }}"
        })
        
        .fromTo("%%SELECTOR%% > *:first-child", {
            autoAlpha: 0,
            {% if content.content.effect == \'zoomin\' %}
            x:0,
            y:0,
			scale:0.8,
			{% elseif content.content.effect == \'zoomout\' %}
			scale:1.2,
            {% elseif content.content.effect == \'slideleft\' %}
			x:-100,
            y:0,
            scale:1,
			{% elseif content.content.effect == \'slideright\' %}
			x:100,
            y:0,
            scale:1,
			{% elseif content.content.effect == \'slidetop\' %}
			x:0,
            y:-100,
            scale:1,
            {% elseif content.content.effect == \'slidebottom\' %}
			x:0,
            y:100,
            scale:1,
			{% endif %}

}, {          
          duration: {% if content.content.effect %}{{ content.reveal.duration |default(\'1\') }}{% else %}0.01{% endif %},
          ease: "{{ content.content.ease |default(\'sine.inOut\') }}",
          scale:1,
          x:0,
          y:0,
          autoAlpha: 1 })

        .to("%%SELECTOR%% .supa-reveal-overlay", {
            ease: "{{ content.reveal.end_ease |default(\'sine.inOut\') }}",
            {% if content.reveal.direction is empty or content.reveal.direction == \'right\' %}
            xPercent: 101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'left\' %}
            xPercent: -101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'bottom\' %}
            xPercent: 0,
            yPercent: 101,
            {% elseif content.reveal.direction == \'top\' %}
            xPercent: 0,
            yPercent: -101,
            {% endif %}
            backgroundColor: "{{ design.design.end_color |default(\'black\') }}"
       },"<");
{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMountedElement' => [['script' => 'if (window.revealtm%%ID%%) {
	if (window.revealtm%%ID%%.scrollTrigger) {
        window.revealtm%%ID%%.scrollTrigger.kill();
    }
    window.revealtm%%ID%%.kill();
	window.revealtm%%ID%% = null
}
gsap.registerPlugin(ScrollTrigger);

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

window.revealtm%%ID%% = gsap.timeline({
        defaults: {
            ease: \'sine.inOut\',
            duration: {{ content.reveal.duration |default(\'1\') }},
        },
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
            start: "top bottom",
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        }
    });

  window.revealtm%%ID%%.fromTo("%%SELECTOR%% .supa-reveal-overlay", {
            {% if content.reveal.direction is empty or content.reveal.direction == \'right\' %}
            xPercent: -101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'left\' %}
            xPercent: 101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'bottom\' %}
            xPercent: 0,
            yPercent: -101,
            {% elseif content.reveal.direction == \'top\' %}
            xPercent: 0,
            yPercent: 101,
            {% endif %}
            backgroundColor: "{{ design.design.start_color |default(\'black\') }}"
        }, {
            ease: "{{ content.reveal.start_ease |default(\'sine.inOut\') }}",
            delay: "{{ content.reveal.delay |default(\'0\') }}",
			xPercent: 0,
			yPercent: 0,
            backgroundColor: "{{ design.design.middle_color |default(\'black\') }}"
        })
        
        .fromTo("%%SELECTOR%% > *:first-child", {
            autoAlpha: 0,
            {% if content.content.effect == \'zoomin\' %}
            x:0,
            y:0,
			scale:0.8,
			{% elseif content.content.effect == \'zoomout\' %}
			scale:1.2,
            {% elseif content.content.effect == \'slideleft\' %}
			x:-100,
            y:0,
            scale:1,
			{% elseif content.content.effect == \'slideright\' %}
			x:100,
            y:0,
            scale:1,
			{% elseif content.content.effect == \'slidetop\' %}
			x:0,
            y:-100,
            scale:1,
            {% elseif content.content.effect == \'slidebottom\' %}
			x:0,
            y:100,
            scale:1,
			{% endif %}

}, {          
          duration: {% if content.content.effect %}{{ content.reveal.duration |default(\'1\') }}{% else %}0.01{% endif %},
          ease: "{{ content.content.ease |default(\'sine.inOut\') }}",
          scale:1,
          x:0,
          y:0,
          autoAlpha: 1 })

        .to("%%SELECTOR%% .supa-reveal-overlay", {
            ease: "{{ content.reveal.end_ease |default(\'sine.inOut\') }}",
            {% if content.reveal.direction is empty or content.reveal.direction == \'right\' %}
            xPercent: 101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'left\' %}
            xPercent: -101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'bottom\' %}
            xPercent: 0,
            yPercent: 101,
            {% elseif content.reveal.direction == \'top\' %}
            xPercent: 0,
            yPercent: -101,
            {% endif %}
            backgroundColor: "{{ design.design.end_color |default(\'black\') }}"
       },"<");
{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMovedElement' => [['script' => 'if (window.revealtm%%ID%%) {
	if (window.revealtm%%ID%%.scrollTrigger) {
        window.revealtm%%ID%%.scrollTrigger.kill();
    }
    window.revealtm%%ID%%.kill();
	window.revealtm%%ID%% = null
}
gsap.registerPlugin(ScrollTrigger);

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

window.revealtm%%ID%% = gsap.timeline({
        defaults: {
            ease: \'sine.inOut\',
            duration: {{ content.reveal.duration |default(\'1\') }},
        },
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
            start: "top bottom",
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        }
    });

  window.revealtm%%ID%%.fromTo("%%SELECTOR%% .supa-reveal-overlay", {
            {% if content.reveal.direction is empty or content.reveal.direction == \'right\' %}
            xPercent: -101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'left\' %}
            xPercent: 101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'bottom\' %}
            xPercent: 0,
            yPercent: -101,
            {% elseif content.reveal.direction == \'top\' %}
            xPercent: 0,
            yPercent: 101,
            {% endif %}
            backgroundColor: "{{ design.design.start_color |default(\'black\') }}"
        }, {
            ease: "{{ content.reveal.start_ease |default(\'sine.inOut\') }}",
            delay: "{{ content.reveal.delay |default(\'0\') }}",
			xPercent: 0,
			yPercent: 0,
            backgroundColor: "{{ design.design.middle_color |default(\'black\') }}"
        })
        
        .fromTo("%%SELECTOR%% > *:first-child", {
            autoAlpha: 0,
            {% if content.content.effect == \'zoomin\' %}
            x:0,
            y:0,
			scale:0.8,
			{% elseif content.content.effect == \'zoomout\' %}
			scale:1.2,
            {% elseif content.content.effect == \'slideleft\' %}
			x:-100,
            y:0,
            scale:1,
			{% elseif content.content.effect == \'slideright\' %}
			x:100,
            y:0,
            scale:1,
			{% elseif content.content.effect == \'slidetop\' %}
			x:0,
            y:-100,
            scale:1,
            {% elseif content.content.effect == \'slidebottom\' %}
			x:0,
            y:100,
            scale:1,
			{% endif %}

}, {          
          duration: {% if content.content.effect %}{{ content.reveal.duration |default(\'1\') }}{% else %}0.01{% endif %},
          ease: "{{ content.content.ease |default(\'sine.inOut\') }}",
          scale:1,
          x:0,
          y:0,
          autoAlpha: 1 })

        .to("%%SELECTOR%% .supa-reveal-overlay", {
            ease: "{{ content.reveal.end_ease |default(\'sine.inOut\') }}",
            {% if content.reveal.direction is empty or content.reveal.direction == \'right\' %}
            xPercent: 101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'left\' %}
            xPercent: -101,
            yPercent: 0,
            {% elseif content.reveal.direction == \'bottom\' %}
            xPercent: 0,
            yPercent: 101,
            {% elseif content.reveal.direction == \'top\' %}
            xPercent: 0,
            yPercent: -101,
            {% endif %}
            backgroundColor: "{{ design.design.end_color |default(\'black\') }}"
       },"<");
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
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 70;
    }

    static function dynamicPropertyPaths()
    {
        return [];
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
