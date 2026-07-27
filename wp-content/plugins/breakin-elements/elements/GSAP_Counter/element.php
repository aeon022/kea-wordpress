<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapCounter",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapCounter extends \Breakdance\Elements\Element
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
        return 'GSAP Counter';
    }

    static function className()
    {
        return 'gsap-counter';
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
        return ['content' => ['content' => ['number' => 0, 'target_number' => 1667, 'tag' => 'h2', 'suffix_text' => null, 'decimal' => null], 'advanced' => ['trigger_source' => 'itself'], 'animation' => ['ease' => 'expo.out', 'duration' => 1], 'action' => ['trigger' => ['start_when' => 'top', 'start_position' => ['number' => 100, 'unit' => '%', 'style' => '100%'], 'end_when' => 'bottom', 'end_position' => ['number' => 0, 'unit' => '%', 'style' => '0%']]]]];
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
      "EssentialElements\\LayoutV2",
      "Layout",
      "layout_v2",
       ['type' => 'popout']
     ), c(
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
      "Typography Prefix",
      "typography_prefix",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Typography Suffix",
      "typography_suffix",
       ['type' => 'popout']
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
        "number",
        "Number",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "target_number",
        "Target Number",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "prefix_text",
        "Prefix Text",
        [],
        ['type' => 'text', 'layout' => 'inline', 'textOptions' => ['format' => 'plain']],
        false,
        false,
        [],
      ), c(
        "suffix_text",
        "Suffix Text",
        [],
        ['type' => 'text', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "decimal",
        "Decimal",
        [],
        ['type' => 'number', 'layout' => 'inline'],
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
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.01]],
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
     ), c(
        "advanced",
        "Advanced",
        [c(
        "css_var",
        "CSS Var",
        [],
        ['type' => 'text', 'layout' => 'inline', 'variableOptions' => ['enabled' => false], 'variableItems' => [['value' => 'gee', 'text' => 'Label', 'label' => 'Gee']], 'placeholder' => '--gsapcounter1'],
        false,
        false,
        [],
      ), c(
        "css_var_unit",
        "CSS Var Unit",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'none', 'value' => ' '], ['value' => 'px', 'text' => 'px'], ['text' => '%', 'value' => '%']]],
        false,
        false,
        [],
      ), c(
        "trigger_source",
        "Trigger Source",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'itself', 'text' => 'Element itself'], ['text' => 'Parent element', 'value' => 'parent'], ['text' => 'Custom selector', 'value' => 'custom']]],
        false,
        false,
        [],
      ), c(
        "trigger_selector",
        "Trigger Selector",
        [],
        ['type' => 'text', 'layout' => 'inline', 'condition' => [[['path' => 'content.advanced.trigger_source', 'operand' => 'equals', 'value' => 'custom']]]],
        false,
        false,
        [],
      ), c(
        "new_control",
        "New Control",
        [],
        ['type' => 'alert_box', 'layout' => 'vertical', 'alertBoxOptions' => ['style' => 'info', 'content' => '<p>Will add a CSS variable to the chosen selector.<br>The selector will also be the trigger (when the animation starts)</p>']],
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
        return ['0' =>  ['title' => 'GSAP','scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],],'1' =>  ['inlineScripts' => ['gsap.registerPlugin(ScrollTrigger); const selector = document.querySelector(\'%%SELECTOR%%\'); const numberDisplay = selector.querySelector(\'.counter\'); function setTargetNumberAndCssVar() { if (numberDisplay) { numberDisplay.textContent = parseFloat("{{ content.content.target_number }}").toFixed({{ content.content.decimal|default(\'0\') }}); {% if content.advanced.css_var %} selector.parentElement.style.setProperty(\'{{ content.advanced.css_var }}\', parseFloat("{{ content.content.target_number }}").toFixed(2) + \'{{ content.advanced.css_var_unit|default(\'px\')}}\'); {% endif %} } } if (matchMedia("(prefers-reduced-motion: reduce)").matches || ({% if content.action.disable_on_mobile %}true{% else %}false{% endif %} && window.matchMedia("(max-width: 767px)").matches) ) { setTargetNumberAndCssVar(); return; } {% if content.action.disable_on_mobile %} let mm = gsap.matchMedia(); mm.add("(min-width: 768px)", () => { {% endif %} const counter = { value: {{ content.content.number|default(\'0\') }} }; {% if content.advanced.trigger_source == \'itself\' %} const triggerElement = selector; {% elseif content.advanced.trigger_source == \'parent\' %} const triggerElement = selector.parentElement; {% elseif content.advanced.trigger_source == \'custom\' %} const triggerElement = document.querySelector("{{ content.advanced.trigger_selector }}"); {% else %} const triggerElement = selector; {% endif %} window.numbertm = gsap.timeline({ scrollTrigger: { trigger: triggerElement, start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}", end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}", {% if content.action.scroll_sync is not empty and content.action.scroll_sync is not null %} scrub: {{ content.action.scroll_sync }},{% endif %} toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}" }, }); numbertm.to(counter, { duration: {{ content.animation.duration|default(\'1\') }}, delay: {{ content.animation.delay|default(\'0\') }}, value: {{ content.content.target_number }}, onUpdate: function() { if (numberDisplay) { const formattedValue = counter.value.toFixed({{ content.content.decimal|default(\'0\') }}); numberDisplay.textContent = formattedValue; {% if content.advanced.css_var %} const decimalValue = counter.value.toFixed(2); triggerElement.style.setProperty(\'{{ content.advanced.css_var }}\', decimalValue + \'{{ content.advanced.css_var_unit|default(\'px\')}}\'); {% endif %} } }, ease: "{{ content.animation.ease|default(\'power2.Out\') }}" }); {% if content.action.disable_on_mobile %} }); {% endif %} '],'builderCondition' => 'false;',],];
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

const selector = document.querySelector(\'%%SELECTOR%%\');
const numberDisplay = selector.querySelector(\'.counter\');

{% if content.action.disable_on_mobile %}
if (window.matchMedia("(max-width: 767px)").matches) {
    if (numberDisplay) {
        numberDisplay.textContent = parseFloat("{{ content.content.target_number }}").toFixed({{ content.content.decimal|default(\'0\') }});
        {% if content.advanced.css_var %}
        selector.parentElement.style.setProperty(\'{{ content.advanced.css_var }}\', parseFloat("{{ content.content.target_number }}").toFixed(2) + \'{{ content.advanced.css_var_unit|default(\'px\')}}\');
        {% endif %}
    }
}
{% endif %}

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

    if (window.numbertm%%ID%%) {
        if (window.numbertm%%ID%%.scrollTrigger) {
            window.numbertm%%ID%%.scrollTrigger.kill();
        }
        window.numbertm%%ID%%.kill();
        window.numbertm%%ID%% = null;
    }

    const counter = { value: {{ content.content.number|default(\'0\') }} };
    {% if content.advanced.trigger_source == \'itself\' %}
    const triggerElement = selector;
    {% elseif content.advanced.trigger_source == \'parent\' %}
    const triggerElement = selector.parentElement;
    {% elseif content.advanced.trigger_source == \'custom\' %}
    const triggerElement = document.querySelector("{{ content.advanced.trigger_selector }}");
    {% else %}
    const triggerElement = selector;
    {% endif %}

    window.numbertm%%ID%% = gsap.timeline({
            scrollTrigger: {
              trigger: triggerElement,
              start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
              end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
               {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
                toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
            },
        });

    numbertm%%ID%%.to(counter, {
        duration: {{ content.animation.duration|default(\'1\') }},
        delay: {{ content.animation.delay|default(\'0\') }},
        value: {{ content.content.target_number }},
        onUpdate: function() {
          if (numberDisplay) {
            const formattedValue = counter.value.toFixed({{ content.content.decimal|default(\'0\') }});
            numberDisplay.textContent = formattedValue;
            // Only update CSS variable if it\'s defined
            {% if content.advanced.css_var %}
            const decimalValue = counter.value.toFixed(2); // for smoother animation
            triggerElement.style.setProperty(\'{{ content.advanced.css_var }}\', decimalValue + \'{{ content.advanced.css_var_unit|default(\'px\')}}\');
            {% endif %}
          }
        },
        ease: "{{ content.animation.ease|default(\'power2.Out\') }}"
      });

{% if content.action.disable_on_mobile %}
});
{% endif %}
',
],],

'onMovedElement' => [['script' => 'gsap.registerPlugin(ScrollTrigger);

const selector = document.querySelector(\'%%SELECTOR%%\');
const numberDisplay = selector.querySelector(\'.counter\');

{% if content.action.disable_on_mobile %}
if (window.matchMedia("(max-width: 767px)").matches) {
    if (numberDisplay) {
        numberDisplay.textContent = parseFloat("{{ content.content.target_number }}").toFixed({{ content.content.decimal|default(\'0\') }});
        {% if content.advanced.css_var %}
        selector.parentElement.style.setProperty(\'{{ content.advanced.css_var }}\', parseFloat("{{ content.content.target_number }}").toFixed(2) + \'{{ content.advanced.css_var_unit|default(\'px\')}}\');
        {% endif %}
    }
}
{% endif %}

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

    if (window.numbertm%%ID%%) {
        if (window.numbertm%%ID%%.scrollTrigger) {
            window.numbertm%%ID%%.scrollTrigger.kill();
        }
        window.numbertm%%ID%%.kill();
        window.numbertm%%ID%% = null;
    }

    const counter = { value: {{ content.content.number|default(\'0\') }} };
    {% if content.advanced.trigger_source == \'itself\' %}
    const triggerElement = selector;
    {% elseif content.advanced.trigger_source == \'parent\' %}
    const triggerElement = selector.parentElement;
    {% elseif content.advanced.trigger_source == \'custom\' %}
    const triggerElement = document.querySelector("{{ content.advanced.trigger_selector }}");
    {% else %}
    const triggerElement = selector;
    {% endif %}

    window.numbertm%%ID%% = gsap.timeline({
            scrollTrigger: {
              trigger: triggerElement,
              start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
              end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
               {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
                toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
            },
        });

    numbertm%%ID%%.to(counter, {
        duration: {{ content.animation.duration|default(\'1\') }},
        delay: {{ content.animation.delay|default(\'0\') }},
        value: {{ content.content.target_number }},
        onUpdate: function() {
          if (numberDisplay) {
            const formattedValue = counter.value.toFixed({{ content.content.decimal|default(\'0\') }});
            numberDisplay.textContent = formattedValue;
            // Only update CSS variable if it\'s defined
            {% if content.advanced.css_var %}
            const decimalValue = counter.value.toFixed(2); // for smoother animation
            triggerElement.style.setProperty(\'{{ content.advanced.css_var }}\', decimalValue + \'{{ content.advanced.css_var_unit|default(\'px\')}}\');
            {% endif %}
          }
        },
        ease: "{{ content.animation.ease|default(\'power2.Out\') }}"
      });

{% if content.action.disable_on_mobile %}
});
{% endif %}
',
],],

'onMountedElement' => [['script' => 'gsap.registerPlugin(ScrollTrigger);

const selector = document.querySelector(\'%%SELECTOR%%\');
const numberDisplay = selector.querySelector(\'.counter\');

{% if content.action.disable_on_mobile %}
if (window.matchMedia("(max-width: 767px)").matches) {
    if (numberDisplay) {
        numberDisplay.textContent = parseFloat("{{ content.content.target_number }}").toFixed({{ content.content.decimal|default(\'0\') }});
        {% if content.advanced.css_var %}
        selector.parentElement.style.setProperty(\'{{ content.advanced.css_var }}\', parseFloat("{{ content.content.target_number }}").toFixed(2) + \'{{ content.advanced.css_var_unit|default(\'px\')}}\');
        {% endif %}
    }
}
{% endif %}

{% if content.action.disable_on_mobile %}
let mm = gsap.matchMedia()
mm.add("(min-width: 768px)", () => {
{% endif %}

    if (window.numbertm%%ID%%) {
        if (window.numbertm%%ID%%.scrollTrigger) {
            window.numbertm%%ID%%.scrollTrigger.kill();
        }
        window.numbertm%%ID%%.kill();
        window.numbertm%%ID%% = null;
    }

    const counter = { value: {{ content.content.number|default(\'0\') }} };
    {% if content.advanced.trigger_source == \'itself\' %}
    const triggerElement = selector;
    {% elseif content.advanced.trigger_source == \'parent\' %}
    const triggerElement = selector.parentElement;
    {% elseif content.advanced.trigger_source == \'custom\' %}
    const triggerElement = document.querySelector("{{ content.advanced.trigger_selector }}");
    {% else %}
    const triggerElement = selector;
    {% endif %}

    window.numbertm%%ID%% = gsap.timeline({
            scrollTrigger: {
              trigger: triggerElement,
              start:"{{ content.action.trigger.start_when |default(\'top\') }} {{ content.action.trigger.start_position.style |default(\'100%\') }}",
              end:"{{ content.action.trigger.end_when |default(\'bottom\') }} {{ content.action.trigger.end_position.style |default(\'0%\') }}",
               {% if content.action.scroll_sync or content.action.scroll_sync == 0 %}scrub:{{ content.action.scroll_sync |default(\'0\') }},{% endif %}
                toggleActions: "{{ content.action.play |default(\'play pause resume reset\') }}"
            },
        });

    numbertm%%ID%%.to(counter, {
        duration: {{ content.animation.duration|default(\'1\') }},
        delay: {{ content.animation.delay|default(\'0\') }},
        value: {{ content.content.target_number }},
        onUpdate: function() {
          if (numberDisplay) {
            const formattedValue = counter.value.toFixed({{ content.content.decimal|default(\'0\') }});
            numberDisplay.textContent = formattedValue;
            // Only update CSS variable if it\'s defined
            {% if content.advanced.css_var %}
            const decimalValue = counter.value.toFixed(2); // for smoother animation
            triggerElement.style.setProperty(\'{{ content.advanced.css_var }}\', decimalValue + \'{{ content.advanced.css_var_unit|default(\'px\')}}\');
            {% endif %}
          }
        },
        ease: "{{ content.animation.ease|default(\'power2.Out\') }}"
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
        return 150;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'string', 'path' => 'content.content.number'], ['accepts' => 'string', 'path' => 'content.content.target_number'], ['accepts' => 'string', 'path' => 'content.content.prefix_text'], ['accepts' => 'string', 'path' => 'content.content.suffix_text'], ['accepts' => 'string', 'path' => 'content.content.decimal']];
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
        return ['design.layout_v2.layout', 'design.layout_v2.h_vertical_at', 'design.layout_v2.h_alignment_when_vertical', 'design.layout_v2.a_display'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
