<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapLoop",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapLoop extends \Breakdance\Elements\Element
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
        return 'GSAP Loop';
    }

    static function className()
    {
        return 'gsap-loop';
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
        return ['content' => ['animation' => ['x' => 0, 'y' => 0, 'rotation' => 0, 'speed_x' => 1, 'speed_y' => 1, 'speed_scale' => 1, 'speed_rotation' => 1]]];
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
        return [getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "animation",
        "Animation",
        [c(
        "x",
        "X",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => -100, 'max' => 100, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "y",
        "Y",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => -100, 'max' => 100, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "rotation",
        "Rotation",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => -360, 'max' => 360, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "scale",
        "Scale",
        [],
        ['type' => 'slider', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "speed_x",
        "Speed X",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "speed_y",
        "Speed Y",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "speed_scale",
        "Speed Scale",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "speed_rotation",
        "Speed Rotation",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "horizontal_effect",
        "Horizontal Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'sine.inOut', 'text' => 'Float'], ['text' => 'Bounce', 'value' => 'sine.out'], ['text' => 'Double Bounce', 'value' => 'bounce.in'], ['value' => 'power4.inOut', 'text' => 'Strong'], ['text' => 'Elastic', 'value' => 'elastic.inOut']]],
        false,
        false,
        [],
      ), c(
        "vertical_effect",
        "Vertical Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'sine.inOut', 'text' => 'Float'], ['text' => 'Bounce', 'value' => 'sine.out'], ['text' => 'Double Bounce', 'value' => 'bounce.in'], ['value' => 'power4.inOut', 'text' => 'Strong'], ['text' => 'Elastic', 'value' => 'elastic.inOut']]],
        false,
        false,
        [],
      ), c(
        "scale_effect",
        "Scale Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'sine.inOut', 'text' => 'Float'], ['text' => 'Bounce', 'value' => 'sine.out'], ['text' => 'Double Bounce', 'value' => 'bounce.in'], ['value' => 'power4.inOut', 'text' => 'Strong'], ['value' => 'elastic.inOut', 'text' => 'Elastic']]],
        false,
        false,
        [],
      ), c(
        "rotation_effect",
        "Rotation Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'sine.inOut', 'text' => 'Float'], ['text' => 'Bounce', 'value' => 'sine.out'], ['text' => 'Double Bounce', 'value' => 'bounce.in'], ['value' => 'power4.inOut', 'text' => 'Strong'], ['text' => 'Elastic', 'value' => 'elastic.inOut']]],
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
        return ['0' =>  ['title' => 'GSAP','scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],],'1' =>  ['scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/GSAP_Loop/gsaploop.min.js'],'inlineScripts' => ['createFloatingAnimation(\'%%SELECTOR%%\', {
    {% if content.action.disable_on_mobile %}
    disableOnMobile: {{ content.action.disable_on_mobile }},
    {% endif %}
    {% if content.animation.x %}
    x: {{ content.animation.x }},
    {% endif %}
    {% if content.animation.y %}
    y: {{ content.animation.y }},
    {% endif %}
    {% if content.animation.rotation %}
    rotation: {{ content.animation.rotation }},
    {% endif %}
    {% if content.animation.speed_x %}
    speed_x: {{ content.animation.speed_x }},
    {% endif %}
    {% if content.animation.speed_y %}
    speed_y: {{ content.animation.speed_y }},
    {% endif %}
    {% if content.animation.speed_rotation %}
    speed_rotation: {{ content.animation.speed_rotation }},
    {% endif %}
    {% if content.animation.speed_scale %}
    speed_scale: {{ content.animation.speed_scale }},
    {% endif %}
    {% if content.animation.horizontal_effect %}
    horizontal_effect: \'{{ content.animation.horizontal_effect }}\',
    {% endif %}
    {% if content.animation.vertical_effect %}
    vertical_effect: \'{{ content.animation.vertical_effect }}\',
    {% endif %}
    {% if content.animation.scale[0] %}
    scale_start: {{ content.animation.scale[0] }},
    {% endif %}
    {% if content.animation.scale[1] %}
    scale_end: {{ content.animation.scale[1] }},
    {% endif %}
    {% if content.animation.scale_effect %}
    scale_effect: \'{{ content.animation.scale_effect }}\',
    {% endif %}
    {% if content.animation.rotation_effect %}
    rotation_effect: \'{{ content.animation.rotation_effect }}\',
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

if (window.floatingtm%%ID%%) {
    if (window.floatingtm%%ID%%.scrollTrigger) {
        window.floatingtm%%ID%%.scrollTrigger.kill();
    }
    window.floatingtm%%ID%%.kill();
    window.floatingtm%%ID%% = null;
}
    const xpos = {{ content.animation.x |default(\'0\') }};
    const ypos = {{ content.animation.y |default(\'0\') }};
    const rot = {{ content.animation.rotation |default(\'0\') }};
    const speedx = {{ content.animation.speed_x  |default(\'1\') }};
    const speedy = {{ content.animation.speed_y |default(\'1\') }};
    const speedrot = {{ content.animation.speed_rotation |default(\'1\') }};
	const speedscale = {{ content.animation.speed_scale |default(\'1\') }}
    const selector = \'%%SELECTOR%% > :first-child\';

window.floatingtm%%ID%% = gsap.timeline({
        defaults: {
            ease: \'{{ content.animation.horizontal_effect |default(\'sine.inOut\')}}\',
            repeat: -1,
            yoyo: true,
        },
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
            start: "top bottom",
            toggleActions: "play pause resume reset"
        }
    });

    floatingtm%%ID%%.fromTo(selector,{ x: -xpos/2 }, {
            x: xpos/2,
            duration: speedx,
            ease: \'{{ content.animation.horizontal_effect |default(\'sine.inOut\')}}\',
        }, 0)
        .fromTo(selector, { y: -ypos/2 }, {
            y: ypos/2,
            duration: speedy,
            ease: \'{{ content.animation.vertical_effect |default(\'sine.inOut\')}}\',
        }, 0)
		.fromTo(selector, { scale:{{ content.animation.scale[0] |default(\'1\') }} }, {
            scale:{{ content.animation.scale[1] |default(\'1\') }},
            duration: speedscale,
            ease: \'{{ content.animation.scale_effect |default(\'sine.inOut\')}}\',
        }, 0)
		.fromTo(selector, { rotation: -rot/2 }, {
            rotation: rot/2,
            duration: speedrot,
            ease: \'{{ content.animation.rotation_effect |default(\'sine.inOut\')}}\',
        }, 0);
{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMountedElement' => [['script' => 'gsap.registerPlugin(ScrollTrigger);
{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

if (window.floatingtm%%ID%%) {
    if (window.floatingtm%%ID%%.scrollTrigger) {
        window.floatingtm%%ID%%.scrollTrigger.kill();
    }
    window.floatingtm%%ID%%.kill();
    window.floatingtm%%ID%% = null;
}
    const xpos = {{ content.animation.x |default(\'0\') }};
    const ypos = {{ content.animation.y |default(\'0\') }};
    const rot = {{ content.animation.rotation |default(\'0\') }};
    const speedx = {{ content.animation.speed_x  |default(\'1\') }};
    const speedy = {{ content.animation.speed_y |default(\'1\') }};
    const speedrot = {{ content.animation.speed_rotation |default(\'1\') }};
	const speedscale = {{ content.animation.speed_scale |default(\'1\') }}
    const selector = \'%%SELECTOR%% > :first-child\';

window.floatingtm%%ID%% = gsap.timeline({
        defaults: {
            ease: \'{{ content.animation.horizontal_effect |default(\'sine.inOut\')}}\',
            repeat: -1,
            yoyo: true,
        },
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
            start: "top bottom",
            toggleActions: "play pause resume reset"
        }
    });

    floatingtm%%ID%%.fromTo(selector,{ x: -xpos/2 }, {
            x: xpos/2,
            duration: speedx,
            ease: \'{{ content.animation.horizontal_effect |default(\'sine.inOut\')}}\',
        }, 0)
        .fromTo(selector, { y: -ypos/2 }, {
            y: ypos/2,
            duration: speedy,
            ease: \'{{ content.animation.vertical_effect |default(\'sine.inOut\')}}\',
        }, 0)
		.fromTo(selector, { scale:{{ content.animation.scale[0] |default(\'1\') }} }, {
            scale:{{ content.animation.scale[1] |default(\'1\') }},
            duration: speedscale,
            ease: \'{{ content.animation.scale_effect |default(\'sine.inOut\')}}\',
        }, 0)
		.fromTo(selector, { rotation: -rot/2 }, {
            rotation: rot/2,
            duration: speedrot,
            ease: \'{{ content.animation.rotation_effect |default(\'sine.inOut\')}}\',
        }, 0);
{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMovedElement' => [['script' => 'gsap.registerPlugin(ScrollTrigger);
{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

if (window.floatingtm%%ID%%) {
    if (window.floatingtm%%ID%%.scrollTrigger) {
        window.floatingtm%%ID%%.scrollTrigger.kill();
    }
    window.floatingtm%%ID%%.kill();
    window.floatingtm%%ID%% = null;
}
    const xpos = {{ content.animation.x |default(\'0\') }};
    const ypos = {{ content.animation.y |default(\'0\') }};
    const rot = {{ content.animation.rotation |default(\'0\') }};
    const speedx = {{ content.animation.speed_x  |default(\'1\') }};
    const speedy = {{ content.animation.speed_y |default(\'1\') }};
    const speedrot = {{ content.animation.speed_rotation |default(\'1\') }};
	const speedscale = {{ content.animation.speed_scale |default(\'1\') }}
    const selector = \'%%SELECTOR%% > :first-child\';

window.floatingtm%%ID%% = gsap.timeline({
        defaults: {
            ease: \'{{ content.animation.horizontal_effect |default(\'sine.inOut\')}}\',
            repeat: -1,
            yoyo: true,
        },
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
            start: "top bottom",
            toggleActions: "play pause resume reset"
        }
    });

    floatingtm%%ID%%.fromTo(selector,{ x: -xpos/2 }, {
            x: xpos/2,
            duration: speedx,
            ease: \'{{ content.animation.horizontal_effect |default(\'sine.inOut\')}}\',
        }, 0)
        .fromTo(selector, { y: -ypos/2 }, {
            y: ypos/2,
            duration: speedy,
            ease: \'{{ content.animation.vertical_effect |default(\'sine.inOut\')}}\',
        }, 0)
		.fromTo(selector, { scale:{{ content.animation.scale[0] |default(\'1\') }} }, {
            scale:{{ content.animation.scale[1] |default(\'1\') }},
            duration: speedscale,
            ease: \'{{ content.animation.scale_effect |default(\'sine.inOut\')}}\',
        }, 0)
		.fromTo(selector, { rotation: -rot/2 }, {
            rotation: rot/2,
            duration: speedrot,
            ease: \'{{ content.animation.rotation_effect |default(\'sine.inOut\')}}\',
        }, 0);
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
        return 50;
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
