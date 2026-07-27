<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapLoopSplitText",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapLoopSplitText extends \Breakdance\Elements\Element
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
        return 'GSAP Loop Split Text';
    }

    static function className()
    {
        return 'gsap-loop-split-text';
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
        return ['content' => ['content' => ['text' => 'ELEMENTS', 'tag' => 'h2', 'split' => 'char', 'text_before' => 'BREAKIN\' ', 'text_after' => ' RULES!', 'text_after_dynamic_meta' => null], 'animation' => ['stagger' => 0.04, 'duration' => 0.5, 'ease' => 'power1.inOut', 'effect' => 'slideup', 'distance' => 20, 'stagger_from' => 'start', 'delay' => null]], 'design' => ['design' => ['typography_split_text' => ['typography' => ['custom' => ['customTypography' => ['fontWeight' => null]]], 'color' => ['breakpoint_base' => '#DA2E2EFF']], 'end_color' => null, 'typography' => ['typography' => ['custom' => ['customTypography' => ['fontSize' => null]]]]]]];
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
     ), getPresetSection(
      "EssentialElements\\typography",
      "Typography Split Text",
      "typography_split_text",
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
        "text_before",
        "Text Before",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "text_after",
        "Text After",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
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
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "animation",
        "Animation",
        [c(
        "stagger",
        "Stagger",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
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
        "delay",
        "Delay",
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
      ), c(
        "stagger_from",
        "Stagger From",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'start', 'text' => 'Start'], ['text' => 'Center', 'value' => 'center'], ['text' => 'Edges', 'value' => 'edges'], ['text' => 'Random', 'value' => 'random'], ['text' => 'End', 'value' => 'end']]],
        false,
        false,
        [],
      ), c(
        "effect",
        "Effect",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'Slide Up', 'value' => 'slideup'], ['value' => 'slidedown', 'text' => 'Slide Down'], ['text' => 'Slide Left', 'value' => 'slideleft'], ['text' => 'Slide Right', 'value' => 'slideright'], ['text' => 'Scale', 'value' => 'scale']]],
        false,
        false,
        [],
      ), c(
        "distance",
        "Distance",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1], 'condition' => [[['path' => 'content.animation.effect', 'operand' => 'is one of', 'value' => ['slideup', 'slidedown', 'slideleft', 'slideright']]]]],
        false,
        false,
        [],
      ), c(
        "scale",
        "Scale",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.1], 'condition' => [[['path' => 'content.animation.effect', 'operand' => 'equals', 'value' => 'scale']]]],
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
        return ['0' =>  ['title' => 'GSAP','scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],],'1' =>  ['scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/GSAP_Loop_Split_Text/gsaploopsplittext.min.js'],'inlineScripts' => ['initializeLoop(\'%%SELECTOR%%\', { disableOnMobile: {% if content.action.disable_on_mobile %}true{% else %}false{% endif %}, {% if content.action.play %}actions: \'{{ content.action.play }}\',{% endif %} {% if content.content.split %}splitType: \'{{ content.content.split }}\',{% endif %} {% if content.animation.effect %}effect: \'{{ content.animation.effect }}\',{% endif %} {% if content.animation.distance %}distance: {{ content.animation.distance }},{% endif %} {% if content.animation.scale %}scale: {{ content.animation.scale }},{% endif %} {% if content.animation.duration or content.animation.duration == 0 %}duration: {{ content.animation.duration }},{% endif %} {% if content.animation.delay %}delay: {{ content.animation.delay }},{% endif %} {% if content.animation.ease %}ease: \'{{ content.animation.ease }}\',{% endif %} {% if content.animation.stagger %}stagger: {{ content.animation.stagger }},{% endif %} {% if content.animation.stagger_from %}staggerFrom: \'{{ content.animation.stagger_from }}\',{% endif %} start: "{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}", end: "{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}", {% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %} scrub: {{ content.action.scroll_sync }},{% endif %} {% if design.design.end_color %}endColor: \'{{ design.design.end_color }}\'{% endif %} });'],'builderCondition' => 'false',],'2' =>  ['inlineScripts' => ['// Image-specific approach to refresh ScrollTrigger when each image loads
document.querySelectorAll("img").forEach(img => {
  if(!img.loaded) {
    img.addEventListener("load", () => ScrollTrigger.refresh());
  }
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
    
    const textAttribute = element.getAttribute(\'data-text\');
    
    // Create a temporary div to parse the HTML content
    const tempDiv = document.createElement(\'div\');
    tempDiv.innerHTML = textAttribute;
    
    // Find the span with class \'loop-split\'
    const spanToSplit = tempDiv.querySelector(\'.loop-split\');
    
    if (!spanToSplit) {
        console.log(\'Element with class loop-split not found. Using original content.\');
        element.innerHTML = textAttribute;
        return;
    }
    
    // Get the text content from the span
    const textToSplit = spanToSplit.textContent;
    
    // Remove the original content from the span
    spanToSplit.textContent = \'\';
    
    // Split the text based on options
    const words = textToSplit.split(\' \');
    
    words.forEach((word, index) => {
        if (splitType === \'word\' && !wrapWords) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            spanToSplit.appendChild(wordSpan);
        } else if (splitType === \'word\' && wrapWords) {
            const wordContainer = document.createElement(\'span\');
            wordContainer.classList.add(\'wordwrap\');
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            wordContainer.appendChild(wordSpan);
            spanToSplit.appendChild(wordContainer);
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
            spanToSplit.appendChild(wordSpan);
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
            spanToSplit.appendChild(wordSpan);
        }
        
        if (index < words.length - 1) {
            const whitespace = document.createElement(\'span\');
            whitespace.classList.add(\'whitespace\');
            whitespace.innerHTML = \' \';
            spanToSplit.appendChild(whitespace);
        }
    });
    
    // Set the modified content back to the original element
    element.innerHTML = tempDiv.innerHTML;
}

splitTextIntoSpans({ wrapWords: true, wrapChars: true, splitType: \'{{ content.content.split |default(\'char\') }}\' });
                                                                 

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
    const distance = {{ content.animation.distance |default(\'0\')}};
   const zoom = {{ content.animation.scale |default(\'1\')}};
    const headinganimtm = gsap.timeline({
        scrollTrigger: {
            trigger: heading%%ID%%,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        },
    });

    headinganimtm.to(letters, {

		{% if content.animation.effect == \'slidedown\' %}
		y: distance,
		{% elseif content.animation.effect == \'slideup\' %}
		y: -distance,
		{% elseif content.animation.effect == \'slideleft\' %}
		x: -distance,
		{% elseif content.animation.effect == \'slideright\' %}
		x: distance,
		{% elseif content.animation.effect == \'scale\' %}
		scale: zoom,
		{% endif %}
      
        {% if design.design.end_color %}color: "{{ design.design.end_color }}",{% endif %}
	duration: {{ content.animation.duration |default(\'1\') }},
    //delay: {{ content.animation.delay |default(\'0\') }},

	ease: "{{ content.animation.ease |default(\'power2.out\')}}",
	stagger: {
        each: {{ content.animation.stagger |default(\'0\') }},
        from: "{{ content.animation.stagger_from |default(\'start\') }}",
        repeat:-1,
        yoyo:true,
        repeatDelay: {{ content.animation.delay |default(\'0\') }},
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
    
    const textAttribute = element.getAttribute(\'data-text\');
    
    // Create a temporary div to parse the HTML content
    const tempDiv = document.createElement(\'div\');
    tempDiv.innerHTML = textAttribute;
    
    // Find the span with class \'loop-split\'
    const spanToSplit = tempDiv.querySelector(\'.loop-split\');
    
    if (!spanToSplit) {
        console.log(\'Element with class loop-split not found. Using original content.\');
        element.innerHTML = textAttribute;
        return;
    }
    
    // Get the text content from the span
    const textToSplit = spanToSplit.textContent;
    
    // Remove the original content from the span
    spanToSplit.textContent = \'\';
    
    // Split the text based on options
    const words = textToSplit.split(\' \');
    
    words.forEach((word, index) => {
        if (splitType === \'word\' && !wrapWords) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            spanToSplit.appendChild(wordSpan);
        } else if (splitType === \'word\' && wrapWords) {
            const wordContainer = document.createElement(\'span\');
            wordContainer.classList.add(\'wordwrap\');
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            wordContainer.appendChild(wordSpan);
            spanToSplit.appendChild(wordContainer);
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
            spanToSplit.appendChild(wordSpan);
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
            spanToSplit.appendChild(wordSpan);
        }
        
        if (index < words.length - 1) {
            const whitespace = document.createElement(\'span\');
            whitespace.classList.add(\'whitespace\');
            whitespace.innerHTML = \' \';
            spanToSplit.appendChild(whitespace);
        }
    });
    
    // Set the modified content back to the original element
    element.innerHTML = tempDiv.innerHTML;
}

splitTextIntoSpans({ wrapWords: true, wrapChars: true, splitType: \'{{ content.content.split |default(\'char\') }}\' });
                                                                 

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
    const distance = {{ content.animation.distance |default(\'0\')}};
   const zoom = {{ content.animation.scale |default(\'1\')}};
    const headinganimtm = gsap.timeline({
        scrollTrigger: {
            trigger: heading%%ID%%,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        },
    });

    headinganimtm.to(letters, {

		{% if content.animation.effect == \'slidedown\' %}
		y: distance,
		{% elseif content.animation.effect == \'slideup\' %}
		y: -distance,
		{% elseif content.animation.effect == \'slideleft\' %}
		x: -distance,
		{% elseif content.animation.effect == \'slideright\' %}
		x: distance,
		{% elseif content.animation.effect == \'scale\' %}
		scale: zoom,
		{% endif %}
      
        {% if design.design.end_color %}color: "{{ design.design.end_color }}",{% endif %}
	duration: {{ content.animation.duration |default(\'1\') }},
    //delay: {{ content.animation.delay |default(\'0\') }},

	ease: "{{ content.animation.ease |default(\'power2.out\')}}",
	stagger: {
        each: {{ content.animation.stagger |default(\'0\') }},
        from: "{{ content.animation.stagger_from |default(\'start\') }}",
        repeat:-1,
        yoyo:true,
        repeatDelay: {{ content.animation.delay |default(\'0\') }},
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
    
    const textAttribute = element.getAttribute(\'data-text\');
    
    // Create a temporary div to parse the HTML content
    const tempDiv = document.createElement(\'div\');
    tempDiv.innerHTML = textAttribute;
    
    // Find the span with class \'loop-split\'
    const spanToSplit = tempDiv.querySelector(\'.loop-split\');
    
    if (!spanToSplit) {
        console.log(\'Element with class loop-split not found. Using original content.\');
        element.innerHTML = textAttribute;
        return;
    }
    
    // Get the text content from the span
    const textToSplit = spanToSplit.textContent;
    
    // Remove the original content from the span
    spanToSplit.textContent = \'\';
    
    // Split the text based on options
    const words = textToSplit.split(\' \');
    
    words.forEach((word, index) => {
        if (splitType === \'word\' && !wrapWords) {
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            spanToSplit.appendChild(wordSpan);
        } else if (splitType === \'word\' && wrapWords) {
            const wordContainer = document.createElement(\'span\');
            wordContainer.classList.add(\'wordwrap\');
            const wordSpan = document.createElement(\'span\');
            wordSpan.classList.add(\'word\');
            wordSpan.setAttribute(\'data-word\', word);
            wordSpan.textContent = word;
            wordContainer.appendChild(wordSpan);
            spanToSplit.appendChild(wordContainer);
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
            spanToSplit.appendChild(wordSpan);
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
            spanToSplit.appendChild(wordSpan);
        }
        
        if (index < words.length - 1) {
            const whitespace = document.createElement(\'span\');
            whitespace.classList.add(\'whitespace\');
            whitespace.innerHTML = \' \';
            spanToSplit.appendChild(whitespace);
        }
    });
    
    // Set the modified content back to the original element
    element.innerHTML = tempDiv.innerHTML;
}

splitTextIntoSpans({ wrapWords: true, wrapChars: true, splitType: \'{{ content.content.split |default(\'char\') }}\' });
                                                                 

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
    const distance = {{ content.animation.distance |default(\'0\')}};
   const zoom = {{ content.animation.scale |default(\'1\')}};
    const headinganimtm = gsap.timeline({
        scrollTrigger: {
            trigger: heading%%ID%%,
start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
           {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
            toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
        },
    });

    headinganimtm.to(letters, {

		{% if content.animation.effect == \'slidedown\' %}
		y: distance,
		{% elseif content.animation.effect == \'slideup\' %}
		y: -distance,
		{% elseif content.animation.effect == \'slideleft\' %}
		x: -distance,
		{% elseif content.animation.effect == \'slideright\' %}
		x: distance,
		{% elseif content.animation.effect == \'scale\' %}
		scale: zoom,
		{% endif %}
      
        {% if design.design.end_color %}color: "{{ design.design.end_color }}",{% endif %}
	duration: {{ content.animation.duration |default(\'1\') }},
    //delay: {{ content.animation.delay |default(\'0\') }},

	ease: "{{ content.animation.ease |default(\'power2.out\')}}",
	stagger: {
        each: {{ content.animation.stagger |default(\'0\') }},
        from: "{{ content.animation.stagger_from |default(\'start\') }}",
        repeat:-1,
        yoyo:true,
        repeatDelay: {{ content.animation.delay |default(\'0\') }},
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
        return [['name' => 'data-text', 'template' => '{{ content.content.text_before }}<span class=\'loop-split\'>{{ content.content.text }}</span>{{ content.content.text_after }}']];
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 85;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'string', 'path' => 'content.content.text'], ['accepts' => 'string', 'path' => 'content.content.text_before'], ['accepts' => 'string', 'path' => 'content.content.text_after']];
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
