<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\GsapMagneticMouse",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class GsapMagneticMouse extends \Breakdance\Elements\Element
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
        return 'GSAP Magnetic Mouse';
    }

    static function className()
    {
        return 'gsap-magneticmouse';
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
        return ['content' => ['content' => ['new_control' => 'gg'], 'magnetic_mouse' => ['scale' => null, 'new_control' => 'd', 'threshold' => 1.6, 'duration_in' => 1.2, 'duration_out' => 0.8, 'ease_in' => 'elastic.out', 'ease_out' => 'elastic.out']]];
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
        "magnetic_mouse",
        "Magnetic Mouse",
        [c(
        "scale",
        "Scale",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 2, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "threshold",
        "Threshold",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "duration_in",
        "Duration In",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 3, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "duration_out",
        "Duration Out",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 3, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "ease_in",
        "Ease In",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'None', 'value' => 'none'], ['value' => 'expo.in', 'text' => 'Expo In'], ['text' => 'Expo Out', 'value' => 'expo.out'], ['text' => 'Expo InOut', 'value' => 'expo.inOut'], ['text' => 'Power1 In', 'value' => 'power1.in'], ['text' => 'Power1 Out', 'value' => 'power1.out'], ['text' => 'Power1 InOut', 'value' => 'power1.inOut'], ['value' => 'power2.in', 'text' => 'Power2 In'], ['text' => 'Power2 Out', 'value' => 'power2.out'], ['text' => 'Power2 InOut', 'value' => 'power2.inOut'], ['text' => 'Power3 In', 'value' => 'power3.in'], ['text' => 'Power3 Out', 'value' => 'power3.out'], ['text' => 'Power3 InOut', 'value' => 'power3.inOut'], ['text' => 'Power4 In', 'value' => 'power4.in'], ['text' => 'Power4 Out', 'value' => 'power4.out'], ['text' => 'Power4 InOut', 'value' => 'power4.inOut'], ['text' => 'Back In', 'value' => 'back.in'], ['text' => 'Back Out', 'value' => 'back.out'], ['text' => 'Back InOut', 'value' => 'back.inOut'], ['text' => 'Elastic In', 'value' => 'elastic.in'], ['text' => 'Elastic Out', 'value' => 'elastic.out'], ['text' => 'Elastic InOut', 'value' => 'elastic.inOut'], ['text' => 'Bounce In', 'value' => 'bounce.in'], ['text' => 'Bounce Out', 'value' => 'bounce.out'], ['text' => 'Bounce InOut', 'value' => 'bounce.inOut']]],
        false,
        false,
        [],
      ), c(
        "ease_out",
        "Ease Out",
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
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['title' => 'GSAP','scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%'],],'1' =>  ['scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/GSAP_Magnetic_Mouse/gsapmagneticmouse.min.js'],'builderCondition' => 'false','inlineScripts' => ['const magneticElement = document.querySelector(\'%%SELECTOR%%\');
const magnetic = new MagneticMouse({
  element: magneticElement,
  target: magneticElement,
  threshold: {{ content.magnetic_mouse.threshold |default(\'1.4\') }},
  zoom: {{ content.magnetic_mouse.scale |default(\'1\') }},
  durationin: {{ content.magnetic_mouse.duration_in |default(\'1.2\') }},
  durationout: {{ content.magnetic_mouse.duration_out |default(\'1.2\') }},
  easein: "{{ content.magnetic_mouse.ease_in |default(\'power2\') }}",
  easeout: "{{ content.magnetic_mouse.ease_out |default(\'power2\') }}"
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

'onPropertyChange' => [['script' => 'function MagneticMouse(options) {
  const threshold = options.threshold !== undefined ? options.threshold : 2;
  let zoom = options.zoom !== undefined ? options.zoom : false;
  const element = options.element;
  const target = options.target;
  const durationin = options.durationin;
  const durationout = options.durationout;
  const easein = options.easein;
 const easeout = options.easeout;
  let eventHandlers = [];

  function init() {
    const mouseMoveHandler = (e) => mousemove(e);
    const mouseLeaveHandler = () => mouseleave();

    target.addEventListener(\'mousemove\', mouseMoveHandler, false);
    target.addEventListener(\'mouseleave\', mouseLeaveHandler, false);

    // Store handlers for cleanup
    eventHandlers.push({ type: \'mousemove\', handler: mouseMoveHandler });
    eventHandlers.push({ type: \'mouseleave\', handler: mouseLeaveHandler });
  }

  function mousemove(e) {
    const rect = target.getBoundingClientRect();
    const mouseX = e.clientX - rect.left - rect.width / 2;
    const mouseY = e.clientY - rect.top - rect.height / 2;

    gsap.to(element, {
      x: threshold === 0 ? mouseX : mouseX / threshold,
      y: threshold === 0 ? mouseY : mouseY / threshold,
      ease: easein,
      overwrite: "auto",
      duration:durationin
    });

    if (zoom && zoom !== 1) {
      gsap.to(element, {
        scale: zoom,
        ease: easein,
        overwrite: "auto",
        duration:durationin
      });
    }
  }

  function mouseleave() {
    gsap.to(element, {
      x: 0,
      y: 0,
      scale: 1,
      ease: easeout,
      duration:durationout,
      overwrite: "auto",
    });
  }

  // Public method to update zoom dynamically
  this.updateZoom = (newZoom) => {
    zoom = newZoom;
  };

  // Public method to destroy the instance
  this.destroy = function () {
    // Remove all event listeners
    eventHandlers.forEach(({ type, handler }) => {
      target.removeEventListener(type, handler);
    });
    eventHandlers = [];

    // Reset GSAP animations
    gsap.killTweensOf(element);

    // Reset element properties
    gsap.set(element, {
      x: 0,
      y: 0,
      scale: 1,
    });
  };

  init();
}

const selector = document.querySelector(\'%%SELECTOR%%\');
if (window.magnetic%%ID%% && typeof window.magnetic%%ID%%.destroy === \'function\') {
  window.magnetic%%ID%%.destroy();
}

window.magnetic%%ID%% = new MagneticMouse({
  element: selector,
  target: selector,
  threshold: {{ content.magnetic_mouse.threshold |default(\'1.4\') }},
  zoom: {{ content.magnetic_mouse.scale |default(\'1\') }},
  durationin: {{ content.magnetic_mouse.duration_in |default(\'1.2\') }},
  durationout: {{ content.magnetic_mouse.duration_out |default(\'1.2\') }},
  easein: "{{ content.magnetic_mouse.ease_in |default(\'power2\') }}",
  easeout: "{{ content.magnetic_mouse.ease_out |default(\'power2\') }}",
});
',
],],

'onMountedElement' => [['script' => 'function MagneticMouse(options) {
  const threshold = options.threshold !== undefined ? options.threshold : 2;
  let zoom = options.zoom !== undefined ? options.zoom : false;
  const element = options.element;
  const target = options.target;
  const durationin = options.durationin;
  const durationout = options.durationout;
  const easein = options.easein;
 const easeout = options.easeout;
  let eventHandlers = [];

  function init() {
    const mouseMoveHandler = (e) => mousemove(e);
    const mouseLeaveHandler = () => mouseleave();

    target.addEventListener(\'mousemove\', mouseMoveHandler, false);
    target.addEventListener(\'mouseleave\', mouseLeaveHandler, false);

    // Store handlers for cleanup
    eventHandlers.push({ type: \'mousemove\', handler: mouseMoveHandler });
    eventHandlers.push({ type: \'mouseleave\', handler: mouseLeaveHandler });
  }

  function mousemove(e) {
    const rect = target.getBoundingClientRect();
    const mouseX = e.clientX - rect.left - rect.width / 2;
    const mouseY = e.clientY - rect.top - rect.height / 2;

    gsap.to(element, {
      x: threshold === 0 ? mouseX : mouseX / threshold,
      y: threshold === 0 ? mouseY : mouseY / threshold,
      ease: easein,
      overwrite: "auto",
      duration:durationin
    });

    if (zoom && zoom !== 1) {
      gsap.to(element, {
        scale: zoom,
        ease: easein,
        overwrite: "auto",
        duration:durationin
      });
    }
  }

  function mouseleave() {
    gsap.to(element, {
      x: 0,
      y: 0,
      scale: 1,
      ease: easeout,
      duration:durationout,
      overwrite: "auto",
    });
  }

  // Public method to update zoom dynamically
  this.updateZoom = (newZoom) => {
    zoom = newZoom;
  };

  // Public method to destroy the instance
  this.destroy = function () {
    // Remove all event listeners
    eventHandlers.forEach(({ type, handler }) => {
      target.removeEventListener(type, handler);
    });
    eventHandlers = [];

    // Reset GSAP animations
    gsap.killTweensOf(element);

    // Reset element properties
    gsap.set(element, {
      x: 0,
      y: 0,
      scale: 1,
    });
  };

  init();
}

const selector = document.querySelector(\'%%SELECTOR%%\');
if (window.magnetic%%ID%% && typeof window.magnetic%%ID%%.destroy === \'function\') {
  window.magnetic%%ID%%.destroy();
}

window.magnetic%%ID%% = new MagneticMouse({
  element: selector,
  target: selector,
  threshold: {{ content.magnetic_mouse.threshold |default(\'1.4\') }},
  zoom: {{ content.magnetic_mouse.scale |default(\'1\') }},
  durationin: {{ content.magnetic_mouse.duration_in |default(\'1.2\') }},
  durationout: {{ content.magnetic_mouse.duration_out |default(\'1.2\') }},
  easein: "{{ content.magnetic_mouse.ease_in |default(\'power2\') }}",
  easeout: "{{ content.magnetic_mouse.ease_out |default(\'power2\') }}",
});
',
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
        return 140;
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
