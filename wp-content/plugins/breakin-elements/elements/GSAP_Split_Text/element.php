<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapSplitText",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapSplitText extends \Breakdance\Elements\Element
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
        return "content.content.tag";
    }

    static function name()
    {
        return 'GSAP Split Text';
    }

    static function className()
    {
        return 'gsap-split-text';
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
        return ['content' => ['content' => ['text' => 'Breakin\' Elements', 'tag' => 'h1', 'split' => 'char', 'overflow_effect' => null], 'animation' => ['duration' => 1, 'stagger' => 0.04, 'stagger_from' => 'start', 'effect' => 'Slidedown', 'ease' => 'back.out'], 'action' => ['trigger' => ['start_when' => 'top', 'start_position' => ['number' => 100, 'unit' => '%', 'style' => '100%'], 'end_when' => 'bottom', 'end_position' => ['number' => 0, 'unit' => '%', 'style' => '0%']]], 'custom_effect' => ['x' => ['number' => 400, 'unit' => 'px', 'style' => '400px'], 'rotation_x' => 360, 'perspective' => ['number' => 400, 'unit' => 'px', 'style' => '400px'], 'y' => ['number' => 0, 'unit' => '%', 'style' => '0%'], 'scale' => 1, 'rotation_y' => 0, 'rotation_z' => 0]], 'design' => ['design' => ['typography' => null, 'end_color' => null]]];
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
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1198]],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
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
        "content",
        "Content",
        [c(
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['format' => 'html']],
        false,
        false,
        [],
      ), c(
        "tag",
        "Tag",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'h1', 'text' => 'h1'], ['text' => 'h2', 'value' => 'h2'], ['text' => 'h3', 'value' => 'h3'], ['text' => 'h4', 'value' => 'h4'], ['text' => 'h5', 'value' => 'h5'], ['text' => 'h6', 'value' => 'h6'], ['text' => 'div', 'value' => 'div'], ['text' => 'span', 'value' => 'span'], ['text' => 'p', 'value' => 'p']]],
        false,
        false,
        [],
      ), c(
        "split",
        "Split",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['value' => 'char', 'text' => 'Char'], ['text' => 'Word', 'value' => 'word']]],
        false,
        false,
        [],
      ), c(
        "overflow_effect",
        "Overflow Effect",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['value' => 'visible', 'text' => 'Visible'], ['text' => 'Hidden', 'value' => 'hidden']]],
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
        return ['0' =>  ['title' => 'GSAP','scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],],'1' =>  ['scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/GSAP_Split_Text/gsapsplittext.min.js'],'inlineScripts' => ['initializeAnimation(\'%%SELECTOR%%\', {
    disableOnMobile: {% if content.action.disable_on_mobile %}true{% else %}false{% endif %},
    {% if content.action.play %}actions: \'{{ content.action.play }}\',{% endif %}
    {% if content.content.overflow_effect %}overflowEffect: \'{{ content.content.overflow_effect }}\',{% endif %}
    {% if content.content.split %}splitType: \'{{ content.content.split }}\',{% endif %}
    {% if content.animation.effect %}animationEffect: \'{{ content.animation.effect }}\',{% endif %}
    {% if content.animation.duration or content.animation.duration == 0 %}animationDuration: {{ content.animation.duration }},{% endif %}
    {% if content.animation.delay %}animationDelay: {{ content.animation.delay }},{% endif %}
    {% if content.animation.ease %}animationEase: \'{{ content.animation.ease }}\',{% endif %}
    {% if content.animation.stagger %}animationStagger: {{ content.animation.stagger }},{% endif %}
    {% if content.animation.stagger_from %}animationStaggerFrom: \'{{ content.animation.stagger_from }}\',{% endif %}
    start: "{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
    end: "{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
{% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %}
  scrub: {{ content.action.scroll_sync }},{% endif %}
    customEffect: {
        {% if content.custom_effect.random_values.random_x %}
        x: "random({{ content.custom_effect.random_values.random_x[0] }}, {{ content.custom_effect.random_values.random_x[1] }}, 10)",
        {% else %}
        x: \'{{ content.custom_effect.x.style |default(\'0\') }}\',
        {% endif %}
        {% if content.custom_effect.random_values.random_y %}
        y: "random({{ content.custom_effect.random_values.random_y[0] }}, {{ content.custom_effect.random_values.random_y[1] }}, 10)",
        {% else %}
        y: \'{{ content.custom_effect.y.style |default(\'0\') }}\',
        {% endif %}
        {% if content.custom_effect.random_values.random_scale %}
        scale: "random({{ content.custom_effect.random_values.random_scale[0] }}, {{ content.custom_effect.random_values.random_scale[1] }}, 0.1)",
        {% else %}
        scale: {{ content.custom_effect.scale |default(\'1\') }},
        {% endif %}
        {% if content.custom_effect.random_values.random_rotation_x %}
        rotationX: "random({{ content.custom_effect.random_values.random_rotation_x[0] }}, {{ content.custom_effect.random_values.random_rotation_x[1] }}, 10)",
        {% else %}
        rotationX: {{ content.custom_effect.rotation_x |default(\'0\') }},
        {% endif %}
        {% if content.custom_effect.random_values.random_rotation_y %}
        rotationY: "random({{ content.custom_effect.random_values.random_rotation_y[0] }}, {{ content.custom_effect.random_values.random_rotation_y[1] }}, 10)",
        {% else %}
        rotationY: {{ content.custom_effect.rotation_y |default(\'0\') }},
        {% endif %}
        {% if content.custom_effect.random_values.random_rotation_z %}
        rotationZ: "random({{ content.custom_effect.random_values.random_rotation_z[0] }}, {{ content.custom_effect.random_values.random_rotation_z[1] }}, 10)",
        {% else %}
        rotationZ: {{ content.custom_effect.rotation_z |default(\'0\') }},
        {% endif %}
        {% if content.custom_effect.perspective.style %}transformPerspective: \'{{ content.custom_effect.perspective.style }}\',{% endif %}
    {% if content.custom_effect.transform_origin.x or content.custom_effect.transform_origin.y %}
    transformOriginX: "{{ content.custom_effect.transform_origin.x | default(\'50\') }}",
    transformOriginY: "{{ content.custom_effect.transform_origin.y | default(\'50\') }}"
    {% endif %}
    },
    {% if design.design.end_color %}endColor: \'{{ design.design.end_color }}\'{% endif %}
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
function splitTextIntoSpans(options = {}) {
    const { wrapWords = false, wrapChars = false, splitType = \'{{ content.content.split | default(\'char\')}}\' } = options;

    // Select the element with the data-text attribute
    const element = document.querySelector(\'%%SELECTOR%%\');

   if (!element) {
        console.error(\'Element not found\');
        return;
    }
    
    if (!element.hasAttribute(\'data-text\')) {
        console.log(\'data-text attribute not found. Keeping original content.\');
        return;
    }
    
    const text = element.getAttribute(\'data-text\');
    
    element.innerHTML = \'\';
    
    const words = text.split(\' \');
    
     words.forEach((word, index) => {
        if (splitType === \'word\' && !wrapWords) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            element.appendChild(wordSpan);
        } else if (splitType === \'word\' && wrapWords) {
            const wordContainer = document.createElement(\'span\');
            wordContainer.classList.add(\'wordwrap\');
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            wordContainer.appendChild(wordSpan);
            element.appendChild(wordContainer);
        } else if (splitType === \'char\' && !wrapChars) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            word.split(\'\').forEach(char => {
                const charSpan = document.createElement(\'span\');
                charSpan.classList.add(\'char\');
                charSpan.textContent = char;
                charSpan.setAttribute(\'data-char\', char);
                wordSpan.appendChild(charSpan);
            });
            element.appendChild(wordSpan);
        } else if (splitType === \'char\' && wrapChars) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            word.split(\'\').forEach(char => {
                const charContainer = document.createElement(\'span\');
                charContainer.classList.add(\'charwrap\');
                const charSpan = document.createElement(\'span\');
                charSpan.classList.add(\'char\');
                charSpan.textContent = char;
                charSpan.setAttribute(\'data-char\', char);
                charContainer.appendChild(charSpan);
                wordSpan.appendChild(charContainer);
            });
            element.appendChild(wordSpan);
        }
        
        if (index < words.length - 1) {
            const whitespace = document.createElement(\'span\');
            whitespace.classList.add(\'whitespace\');
            whitespace.innerHTML = \' \';
            element.appendChild(whitespace);
        }
    });
}

splitTextIntoSpans({ {% if content.content.overflow_effect == \'hidden\' %} wrapWords: true, wrapChars: true, splitType: \'{{ content.content.split |default(\'char\') }}\' {% endif %} });

                                                                                                            

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
  
{% endif %}

const heading%%ID%% = document.querySelector(\'%%SELECTOR%%\');

if (heading%%ID%%) {
if (heading%%ID%%.headinganimtm) {
        // Kill the ScrollTrigger associated with the timeline
        if (heading%%ID%%.headinganimtm.scrollTrigger) {
            heading%%ID%%.headinganimtm.scrollTrigger.kill();
        }
        
        // Kill the timeline itself
        heading%%ID%%.headinganimtm.kill();
    }
    const letters = heading%%ID%%.querySelectorAll(\'span.{{ content.content.split |default(\'char\') }}\');
    const headinganimtm = gsap.timeline({
        scrollTrigger: {
            trigger: heading%%ID%%,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        },
    });

    headinganimtm.fromTo(letters, {
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
        {% if design.design.end_color %}color: "{{ design.design.end_color }}",{% endif %}
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

    heading%%ID%%.headinganimtm = headinganimtm;
}

{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMountedElement' => [['script' => 'gsap.registerPlugin(ScrollTrigger);
function splitTextIntoSpans(options = {}) {
    const { wrapWords = false, wrapChars = false, splitType = \'{{ content.content.split | default(\'char\')}}\' } = options;

    // Select the element with the data-text attribute
    const element = document.querySelector(\'%%SELECTOR%%\');

   if (!element) {
        console.error(\'Element not found\');
        return;
    }
    
    if (!element.hasAttribute(\'data-text\')) {
        console.log(\'data-text attribute not found. Keeping original content.\');
        return;
    }
    
    const text = element.getAttribute(\'data-text\');
    
    element.innerHTML = \'\';
    
    const words = text.split(\' \');
    
     words.forEach((word, index) => {
        if (splitType === \'word\' && !wrapWords) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            element.appendChild(wordSpan);
        } else if (splitType === \'word\' && wrapWords) {
            const wordContainer = document.createElement(\'span\');
            wordContainer.classList.add(\'wordwrap\');
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            wordContainer.appendChild(wordSpan);
            element.appendChild(wordContainer);
        } else if (splitType === \'char\' && !wrapChars) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            word.split(\'\').forEach(char => {
                const charSpan = document.createElement(\'span\');
                charSpan.classList.add(\'char\');
                charSpan.textContent = char;
                charSpan.setAttribute(\'data-char\', char);
                wordSpan.appendChild(charSpan);
            });
            element.appendChild(wordSpan);
        } else if (splitType === \'char\' && wrapChars) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            word.split(\'\').forEach(char => {
                const charContainer = document.createElement(\'span\');
                charContainer.classList.add(\'charwrap\');
                const charSpan = document.createElement(\'span\');
                charSpan.classList.add(\'char\');
                charSpan.textContent = char;
                charSpan.setAttribute(\'data-char\', char);
                charContainer.appendChild(charSpan);
                wordSpan.appendChild(charContainer);
            });
            element.appendChild(wordSpan);
        }
        
        if (index < words.length - 1) {
            const whitespace = document.createElement(\'span\');
            whitespace.classList.add(\'whitespace\');
            whitespace.innerHTML = \' \';
            element.appendChild(whitespace);
        }
    });
}

splitTextIntoSpans({ {% if content.content.overflow_effect == \'hidden\' %} wrapWords: true, wrapChars: true, splitType: \'{{ content.content.split |default(\'char\') }}\' {% endif %} });

                                                                                                            

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
  
{% endif %}

const heading%%ID%% = document.querySelector(\'%%SELECTOR%%\');

if (heading%%ID%%) {
if (heading%%ID%%.headinganimtm) {
        // Kill the ScrollTrigger associated with the timeline
        if (heading%%ID%%.headinganimtm.scrollTrigger) {
            heading%%ID%%.headinganimtm.scrollTrigger.kill();
        }
        
        // Kill the timeline itself
        heading%%ID%%.headinganimtm.kill();
    }
    const letters = heading%%ID%%.querySelectorAll(\'span.{{ content.content.split |default(\'char\') }}\');
    const headinganimtm = gsap.timeline({
        scrollTrigger: {
            trigger: heading%%ID%%,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        },
    });

    headinganimtm.fromTo(letters, {
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
        {% if design.design.end_color %}color: "{{ design.design.end_color }}",{% endif %}
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

    heading%%ID%%.headinganimtm = headinganimtm;
}

{% if content.action.disable_on_mobile %} 
});
{% endif %}',
],],

'onMovedElement' => [['script' => 'gsap.registerPlugin(ScrollTrigger);
function splitTextIntoSpans(options = {}) {
    const { wrapWords = false, wrapChars = false, splitType = \'{{ content.content.split | default(\'char\')}}\' } = options;

    // Select the element with the data-text attribute
    const element = document.querySelector(\'%%SELECTOR%%\');

   if (!element) {
        console.error(\'Element not found\');
        return;
    }
    
    if (!element.hasAttribute(\'data-text\')) {
        console.log(\'data-text attribute not found. Keeping original content.\');
        return;
    }
    
    const text = element.getAttribute(\'data-text\');
    
    element.innerHTML = \'\';
    
    const words = text.split(\' \');
    
     words.forEach((word, index) => {
        if (splitType === \'word\' && !wrapWords) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            element.appendChild(wordSpan);
        } else if (splitType === \'word\' && wrapWords) {
            const wordContainer = document.createElement(\'span\');
            wordContainer.classList.add(\'wordwrap\');
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            wordContainer.appendChild(wordSpan);
            element.appendChild(wordContainer);
        } else if (splitType === \'char\' && !wrapChars) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            word.split(\'\').forEach(char => {
                const charSpan = document.createElement(\'span\');
                charSpan.classList.add(\'char\');
                charSpan.textContent = char;
                charSpan.setAttribute(\'data-char\', char);
                wordSpan.appendChild(charSpan);
            });
            element.appendChild(wordSpan);
        } else if (splitType === \'char\' && wrapChars) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            word.split(\'\').forEach(char => {
                const charContainer = document.createElement(\'span\');
                charContainer.classList.add(\'charwrap\');
                const charSpan = document.createElement(\'span\');
                charSpan.classList.add(\'char\');
                charSpan.textContent = char;
                charSpan.setAttribute(\'data-char\', char);
                charContainer.appendChild(charSpan);
                wordSpan.appendChild(charContainer);
            });
            element.appendChild(wordSpan);
        }
        
        if (index < words.length - 1) {
            const whitespace = document.createElement(\'span\');
            whitespace.classList.add(\'whitespace\');
            whitespace.innerHTML = \' \';
            element.appendChild(whitespace);
        }
    });
}

splitTextIntoSpans({ {% if content.content.overflow_effect == \'hidden\' %} wrapWords: true, wrapChars: true, splitType: \'{{ content.content.split |default(\'char\') }}\' {% endif %} });

                                                                                                            

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
  
{% endif %}

const heading%%ID%% = document.querySelector(\'%%SELECTOR%%\');

if (heading%%ID%%) {
if (heading%%ID%%.headinganimtm) {
        // Kill the ScrollTrigger associated with the timeline
        if (heading%%ID%%.headinganimtm.scrollTrigger) {
            heading%%ID%%.headinganimtm.scrollTrigger.kill();
        }
        
        // Kill the timeline itself
        heading%%ID%%.headinganimtm.kill();
    }
    const letters = heading%%ID%%.querySelectorAll(\'span.{{ content.content.split |default(\'char\') }}\');
    const headinganimtm = gsap.timeline({
        scrollTrigger: {
            trigger: heading%%ID%%,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        },
    });

    headinganimtm.fromTo(letters, {
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
        {% if design.design.end_color %}color: "{{ design.design.end_color }}",{% endif %}
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

    heading%%ID%%.headinganimtm = headinganimtm;
}

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
        return [['name' => 'data-text', 'template' => '{{ content.content.text }}']];
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 80;
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
