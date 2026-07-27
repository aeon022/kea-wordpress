<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\SectionParallax",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class SectionParallax extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1.5C2 1.77614 1.77614 2 1.5 2C1.22386 2 1 1.77614 1 1.5C1 1.22386 1.22386 1 1.5 1C1.77614 1 2 1.22386 2 1.5ZM2 5L2 10H13V5H2ZM2 4C1.44772 4 1 4.44772 1 5V10C1 10.5523 1.44772 11 2 11H13C13.5523 11 14 10.5523 14 10V5C14 4.44772 13.5523 4 13 4H2ZM1.5 14C1.77614 14 2 13.7761 2 13.5C2 13.2239 1.77614 13 1.5 13C1.22386 13 1 13.2239 1 13.5C1 13.7761 1.22386 14 1.5 14ZM4 1.5C4 1.77614 3.77614 2 3.5 2C3.22386 2 3 1.77614 3 1.5C3 1.22386 3.22386 1 3.5 1C3.77614 1 4 1.22386 4 1.5ZM3.5 14C3.77614 14 4 13.7761 4 13.5C4 13.2239 3.77614 13 3.5 13C3.22386 13 3 13.2239 3 13.5C3 13.7761 3.22386 14 3.5 14ZM6 1.5C6 1.77614 5.77614 2 5.5 2C5.22386 2 5 1.77614 5 1.5C5 1.22386 5.22386 1 5.5 1C5.77614 1 6 1.22386 6 1.5ZM5.5 14C5.77614 14 6 13.7761 6 13.5C6 13.2239 5.77614 13 5.5 13C5.22386 13 5 13.2239 5 13.5C5 13.7761 5.22386 14 5.5 14ZM8 1.5C8 1.77614 7.77614 2 7.5 2C7.22386 2 7 1.77614 7 1.5C7 1.22386 7.22386 1 7.5 1C7.77614 1 8 1.22386 8 1.5ZM7.5 14C7.77614 14 8 13.7761 8 13.5C8 13.2239 7.77614 13 7.5 13C7.22386 13 7 13.2239 7 13.5C7 13.7761 7.22386 14 7.5 14ZM10 1.5C10 1.77614 9.77614 2 9.5 2C9.22386 2 9 1.77614 9 1.5C9 1.22386 9.22386 1 9.5 1C9.77614 1 10 1.22386 10 1.5ZM9.5 14C9.77614 14 10 13.7761 10 13.5C10 13.2239 9.77614 13 9.5 13C9.22386 13 9 13.2239 9 13.5C9 13.7761 9.22386 14 9.5 14ZM12 1.5C12 1.77614 11.7761 2 11.5 2C11.2239 2 11 1.77614 11 1.5C11 1.22386 11.2239 1 11.5 1C11.7761 1 12 1.22386 12 1.5ZM11.5 14C11.7761 14 12 13.7761 12 13.5C12 13.2239 11.7761 13 11.5 13C11.2239 13 11 13.2239 11 13.5C11 13.7761 11.2239 14 11.5 14ZM14 1.5C14 1.77614 13.7761 2 13.5 2C13.2239 2 13 1.77614 13 1.5C13 1.22386 13.2239 1 13.5 1C13.7761 1 14 1.22386 14 1.5ZM13.5 14C13.7761 14 14 13.7761 14 13.5C14 13.2239 13.7761 13 13.5 13C13.2239 13 13 13.2239 13 13.5C13 13.7761 13.2239 14 13.5 14Z" fill="currentColor"></path> </g></svg>';
    }

    static function tag()
    {
        return 'section';
    }

    static function tagOptions()
    {
        return ['div', 'header', 'footer', 'article', 'main', 'aside', 'nav', 'a'];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Section Parallax';
    }

    static function className()
    {
        return 'bde-section';
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
        return ['design' => ['layout_v2' => ['layout' => 'vertical']]];
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
      "EssentialElements\\simpleLayout",
      "Layout",
      "layout",
       ['condition' => [[['path' => 'design.layout', 'operand' => 'is set', 'value' => '']]], 'type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\LayoutV2",
      "Layout",
      "layout_v2",
       ['condition' => [[['path' => 'design.layout', 'operand' => 'is not set', 'value' => '']]], 'type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\fancy_background",
      "Background",
      "background",
       ['type' => 'popout']
     ), c(
        "text_colors",
        "Text Colors",
        [c(
        "headings",
        "Headings",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "text",
        "Text",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "link",
        "Link",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        true,
        [],
      ), c(
        "brand",
        "Brand",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'condition' => [[['path' => 'design.text_colors', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [c(
        "height",
        "Height",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'fit-content', 'text' => 'Fit Content'], ['text' => 'Viewport', 'value' => 'viewport'], ['text' => 'Custom', 'value' => 'custom']]],
        true,
        false,
        [],
      ), c(
        "custom_height",
        "Custom Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.size.height', 'operand' => 'equals', 'value' => 'custom']],
        true,
        false,
        [],
      ), c(
        "min_height",
        "Min Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.size.height', 'operand' => 'equals', 'value' => 'custom']],
        true,
        false,
        [],
      ), c(
        "width",
        "Width",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'contained', 'text' => 'Contained'], ['text' => 'Full', 'value' => 'full'], ['text' => 'Custom', 'value' => 'custom']]],
        true,
        false,
        [],
      ), c(
        "container_width",
        "Container Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.size.width', 'operand' => 'equals', 'value' => 'custom']],
        true,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "spacing",
        "Spacing",
        [c(
        "padding",
        "Padding",
        [],
        ['type' => 'spacing_complex', 'layout' => 'vertical'],
        true,
        false,
        [],
      ), c(
        "margin_top",
        "Margin Top",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "margin_bottom",
        "Margin Bottom",
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
      ), c(
        "dividers",
        "Dividers",
        [getPresetSection(
      "EssentialElements\\Shape",
      "Shape Dividers",
      "shape_dividers_section",
       ['type' => 'accordion']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "parallax",
        "Parallax",
        [c(
        "vertical_parallax",
        "Vertical Parallax",
        [],
        ['type' => 'slider', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 100]],
        false,
        false,
        [],
      ), c(
        "horizontal_parallax",
        "Horizontal Parallax",
        [],
        ['type' => 'slider', 'layout' => 'vertical', 'rangeOptions' => ['min' => 0, 'max' => 100]],
        false,
        false,
        [],
      ), c(
        "inverse_vertical",
        "Inverse Vertical",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "inverse_horizontal",
        "Inverse Horizontal",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "scrub",
        "Scrub",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 5, 'step' => 0.1]],
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
        return ['0' =>  ['inlineScripts' => ['{% if design.background.type == \'slideshow\' %}
window.BreakdanceSwiper().update({
  selector:\'%%SELECTOR%%\',
  id: \'%%UNIQUESLUG%%\',
  isBuilder: false,
  settings: {
     allowTouchMove: false,
     {% if design.background.slideshow_settings.play_only_once is empty %}
        infinite: "enabled",
      {% endif %}
      speed: { number: {{ design.background.slideshow_settings.effect_duration.number ?? 300 }} },
      autoplay: "enabled",
      autoplay_settings: {
        speed: { number: {{ design.background.slideshow_settings.slide_duration.number ?? 3000 }} },
        pause_on_hover: false,
        stop_on_interaction: false,
      },
      {% if design.background.slideshow_settings.transition_effect and design.background.slideshow_settings.transition_effect != "slide" %}
        effect: "{{ design.background.slideshow_settings.transition_effect }}",
      {% endif %}
      {% if design.background.slideshow_settings.slide_direction %}
        direction: "{{ design.background.slideshow_settings.slide_direction }}",
      {% endif %}
  },
  paginationSettings: {},
  advancedSettings: {},
  extras : {
  	autoplay: true
  }
});
{% endif %}'],'scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-swiper/breakdance-swiper.js'],'inlineStyles' => ['',''],'styles' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.css'],'builderCondition' => '{% if design.background.type == \'slideshow\' %}
return true;
{% else%}
 return false;
{% endif %}','frontendCondition' => '{% if design.background.type == \'slideshow\' %}
return true;
{% else%}
 return false;
{% endif %}','title' => 'Slideshow',],'1' =>  ['scripts' => ['https://www.youtube.com/iframe_api','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-youtube@1/breakdance-youtube.js'],'inlineScripts' => ['window.YT.ready(() => {
  
  const { matchMedia } = window.BreakdanceFrontend.utils;
  if ({{ design.background.video_settings.play_on_mobile ? \'false\' : \'true\' }} && matchMedia(\'breakpoint_phone_landscape\')) {
    return;
  }
  const element = document.querySelector(\'#youtubeEmbed%%ID%%\');
  window.breakdanceYoutube.createInstance(%%ID%%, {
    videoId: "{{ design.background.video.videoId }}",
    loop: {{ design.background.video_settings.no_loop == 1 ? \'false\' : \'true\' }},
    start_time: {{ design.background.video_settings.start_time ?? 0 }},
    end_time: {{ design.background.video_settings.end_time ?? \'null\' }},
    pause_when_out_of_view: {{ design.background.video_settings.pause_when_out_of_view == 1 ? \'true\' : \'false\' }},
    privacy_mode: {{ design.background.video_settings.youtube_privacy_mode ? \'true\' : \'false\' }},
  });
});'],'frontendCondition' => '{% if design.background.type == \'video\' 
  and \'youtube\' in design.background.video.embedUrl  
%}
return true;
{% else%}
 return false;
{% endif %}','title' => 'Youtube','builderCondition' => '{% if design.background.type == \'video\' 
  and \'youtube\' in design.background.video.embedUrl  
%}
return true;
{% else%}
 return false;
{% endif %}',],'2' =>  ['title' => 'Vimeo','scripts' => ['https://player.vimeo.com/api/player.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-vimeo@1/breakdance-vimeo.js'],'inlineScripts' => ['(function() {
  const element = document.querySelector(\'%%SELECTOR%% #vimeoEmbed%%ID%%\');
  window.breakdanceVimeo.createInstance(element, %%ID%%, {
                                     id: "{{ design.background.video.embedUrl }}",
                                     loop: {{ design.background.video_settings.no_loop == 1 ? \'false\' : \'true\' }},
  start_time: {{ design.background.video_settings.start_time ?? 0 }},
    end_time: {{ design.background.video_settings.end_time ?? \'null\' }},
      pause_when_out_of_view: {{ design.background.video_settings.pause_when_out_of_view == 1 ? \'true\' : \'false\' }},
    playsinline: {{ design.background.video_settings.play_on_mobile ? \'true\' : \'false\' }},
});
})();'],'frontendCondition' => '{% if design.background.type == \'video\' 
  and \'vimeo\' in design.background.video.embedUrl  
%}
return true;
{% else%}
 return false;
{% endif %}','builderCondition' => '{% if design.background.type == \'video\' 
  and \'vimeo\' in design.background.video.embedUrl  
%}
return true;
{% else%}
 return false;
{% endif %}',],'3' =>  ['title' => 'Video - on mobile','inlineScripts' => ['(function() {
let video = document.querySelector("%%SELECTOR%% video");

const { matchMedia } = window.BreakdanceFrontend.utils;
if (matchMedia(\'breakpoint_phone_landscape\') || matchMedia(\'breakpoint_phone_portrait\')) {
  video.removeAttribute(\'autoplay\');
}})();
'],'frontendCondition' => '{% if design.background.type == \'video\'
  and design.background.video.type == \'video\' 
  and design.background.video_settings.play_on_mobile == 0 %}
return true;
{% else%}
 return false;
{% endif %}','builderCondition' => '{% if design.background.type == \'video\'
  and design.background.video.type == \'video\' 
  and design.background.video_settings.play_on_mobile == 0 %}
return true;
{% else%}
 return false;
{% endif %}',],'4' =>  ['title' => 'Video - auto pause','inlineScripts' => ['let video = document.querySelector("%%SELECTOR%% video");

let isPaused = false;
let observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio != 1  && !video.paused) {
      video.pause(); isPaused = true;
    } else if (isPaused) {
      video.play(); isPaused=false;
    }
  });
}, {threshold: 0.2});
observer.observe(video) ;'],'builderCondition' => '{% if design.background.type == \'video\'
  and design.background.video.type == \'video\' 
  and design.background.video_settings.pause_when_out_of_view == 1 %}
return true;
{% else%}
 return false;
{% endif %}','frontendCondition' => '{% if design.background.type == \'video\'
  and design.background.video.type == \'video\' 
  and design.background.video_settings.pause_when_out_of_view == 1 %}
return true;
{% else%}
 return false;
{% endif %}',],'5' =>  ['title' => 'GSAP','scripts' => ['%%BREAKDANCE_REUSABLE_GSAP%%','%%BREAKDANCE_REUSABLE_SCROLL_TRIGGER%%'],],'6' =>  ['inlineScripts' => ['createParallaxEffect("%%SELECTOR%%, %%SELECTOR%% .section-background-slideshow .swiper-slide-item", {
    {% if content.parallax.inverse_vertical %}
    inverseVertical: true,
    {% endif %}
    {% if content.parallax.inverse_horizontal %}
    inverseHorizontal: true,
    {% endif %}
    {% if content.parallax.vertical_parallax %}
    verticalParallax: ["{{ content.parallax.vertical_parallax[0] |default(\'50\') }}", "{{ content.parallax.vertical_parallax[1] |default(\'50\') }}"],
    {% endif %}
    {% if content.parallax.horizontal_parallax %}
    horizontalParallax: ["{{ content.parallax.horizontal_parallax[0] |default(\'50\') }}", "{{ content.parallax.horizontal_parallax[1] |default(\'50\') }}"],
    {% endif %}
    {% if content.parallax.scrub %}
    scrub: {{ content.parallax.scrub |default(\'true\') }}
    {% endif %}
});
'],'scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/Section_Parallax/sectionparallax.js'],'builderCondition' => 'false',],];
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

'onMountedElement' => [['script' => '{% if design.background.type == \'slideshow\' %}
window.BreakdanceSwiper().update({
  selector:\'%%SELECTOR%%\',
  id: \'%%ID%%\',
  isBuilder: true,
  settings: {
    allowTouchMove: false,
    allowTouchMove: false,
    {% if design.background.slideshow_settings.play_only_once %}
        infinite:false,
      {% else %}
        infinite: "enabled",
      {% endif %}
	  speed: { number: {{ design.background.slideshow_settings.effect_duration.number ?? 300 }} },
      autoplay: "enabled",
      autoplay_settings: {
        speed: { number: {{ design.background.slideshow_settings.slide_duration.number ?? 3000 }} },
        pause_on_hover: false,
        stop_on_interaction: false,
      },
      {% if design.background.slideshow_settings.transition_effect and design.background.slideshow_settings.transition_effect != "slide" %}
        effect: "{{ design.background.slideshow_settings.transition_effect }}",
      {% endif %}
      {% if design.background.slideshow_settings.slide_direction %}
        direction: "{{ design.background.slideshow_settings.slide_direction }}",
      {% endif %}
  },
  paginationSettings: {},
  advancedSettings: {},
  extras : {
  	autoplay: true
  }
});
{% endif %}',
],['script' => 'gsap.registerPlugin(ScrollTrigger);

if (window.parallaxbgtm%%ID%%) {
    window.parallaxbgtm%%ID%%.kill();
}

{% if content.parallax.inverse_vertical %}
const startVertical = "{{ content.parallax.vertical_parallax[1] |default(\'50\') }}%"
const endVertical = "{{ content.parallax.vertical_parallax[0] |default(\'50\') }}%"
{% else %}
const startVertical = "{{ content.parallax.vertical_parallax[0] |default(\'50\') }}%"
const endVertical = "{{ content.parallax.vertical_parallax[1] |default(\'50\') }}%"
{% endif %}

{% if content.parallax.inverse_horizontal %}
const startHorizontal = "{{ content.parallax.horizontal_parallax[1] |default(\'50\') }}%"
const endHorizontal = "{{ content.parallax.vertihorizontal_parallaxcal_parallax[0] |default(\'50\') }}%"
{% else %}
const startHorizontal = "{{ content.parallax.horizontal_parallax[0] |default(\'50\') }}%"
const endHorizontal = "{{ content.parallax.horizontal_parallax[1] |default(\'50\') }}%"
{% endif %}

let directionStart = `${startHorizontal} ${startVertical}`;
let directionEnd = `${endHorizontal} ${endVertical}`;

window.parallaxbgtm%%ID%% = gsap.timeline({
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
            start: "top bottom",
            scrub:{{ content.parallax.scrub |default(\'true\') }}
        }
    });

parallaxbgtm%%ID%%.fromTo("%%SELECTOR%%, %%SELECTOR%% .section-background-slideshow .swiper-slide-item",{
  backgroundPosition: directionStart,
},
     {
      backgroundPosition: directionEnd,
      ease: "none",
});',
],],

'onPropertyChange' => [['script' => '{% if design.background.type == \'slideshow\' %}
window.BreakdanceSwiper().update({
  selector:\'%%SELECTOR%%\',
  id: \'%%ID%%\',
  settings: {
    allowTouchMove: false,
    {% if design.background.slideshow_settings.play_only_once %}
        infinite:false,
      {% else %}
        infinite: "enabled",
      {% endif %}
	  speed: { number: {{ design.background.slideshow_settings.effect_duration.number ?? 300 }} },
      autoplay: "enabled",
      autoplay_settings: {
        speed: { number: {{ design.background.slideshow_settings.slide_duration.number ?? 3000 }} },
        pause_on_hover: false,
        stop_on_interaction: false,
      },
      {% if design.background.slideshow_settings.transition_effect and design.background.slideshow_settings.transition_effect != "slide" %}
        effect: "{{ design.background.slideshow_settings.transition_effect }}",
      {% endif %}
      {% if design.background.slideshow_settings.slide_direction %}
        direction: "{{ design.background.slideshow_settings.slide_direction }}",
      {% endif %}
  },
  paginationSettings: {},
  advancedSettings: {},
  extras : {
  	autoplay: true
  }
});
{% endif %}',
],['script' => '{% if design.background.type == \'video\' and design.background.video.type == \'oembed\' %}
  {% if \'youtube\' in design.background.video.embedUrl %}
    window.YT.ready(() => {
      const element = document.querySelector(\'%%SELECTOR%% .section-youtube-wrapper\');
      window.breakdanceYoutube.updateInstance(element, %%ID%%, {
        videoId: "{{ design.background.video.videoId }}",
        loop: {{ design.background.video_settings.no_loop == 1 ? \'false\' : \'true\' }},
        start_time: {{ design.background.video_settings.start_time ?? 0 }},
        end_time: {{ design.background.video_settings.end_time ?? \'null\' }},
        pause_when_out_of_view: {{ design.background.video_settings.pause_when_out_of_view == 1 ? \'true\' : \'false\' }},
        privacy_mode: {{ design.background.video_settings.youtube_privacy_mode ?? \'false\' }},
      });
    });
  {% endif %} 
  {% if \'vimeo\' in design.background.video.embedUrl %}
    (function() {
      const element = document.querySelector(\'%%SELECTOR%% #vimeoEmbed%%ID%%\');
      window.breakdanceVimeo.updateInstance(element, %%ID%%, {
        id: "{{ design.background.video.embedUrl }}",
        loop: {{ design.background.video_settings.no_loop == 1 ? \'false\' : \'true\' }},
        start_time: {{ design.background.video_settings.start_time ?? 0 }},
        end_time: {{ design.background.video_settings.end_time ?? \'null\' }},
        pause_when_out_of_view: {{ design.background.video_settings.pause_when_out_of_view == 1 ? \'true\' : \'false\' }},
      });
    })();
  {%endif%}
{% endif %}',
],['script' => 'gsap.registerPlugin(ScrollTrigger);

if (window.parallaxbgtm%%ID%%) {
    window.parallaxbgtm%%ID%%.kill();
}

{% if content.parallax.inverse_vertical %}
const startVertical = "{{ content.parallax.vertical_parallax[1] |default(\'50\') }}%"
const endVertical = "{{ content.parallax.vertical_parallax[0] |default(\'50\') }}%"
{% else %}
const startVertical = "{{ content.parallax.vertical_parallax[0] |default(\'50\') }}%"
const endVertical = "{{ content.parallax.vertical_parallax[1] |default(\'50\') }}%"
{% endif %}

{% if content.parallax.inverse_horizontal %}
const startHorizontal = "{{ content.parallax.horizontal_parallax[1] |default(\'50\') }}%"
const endHorizontal = "{{ content.parallax.vertihorizontal_parallaxcal_parallax[0] |default(\'50\') }}%"
{% else %}
const startHorizontal = "{{ content.parallax.horizontal_parallax[0] |default(\'50\') }}%"
const endHorizontal = "{{ content.parallax.horizontal_parallax[1] |default(\'50\') }}%"
{% endif %}

let directionStart = `${startHorizontal} ${startVertical}`;
let directionEnd = `${endHorizontal} ${endVertical}`;

window.parallaxbgtm%%ID%% = gsap.timeline({
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
            start: "top bottom",
            scrub:{{ content.parallax.scrub |default(\'true\') }}
        }
    });

parallaxbgtm%%ID%%.fromTo("%%SELECTOR%%, %%SELECTOR%% .section-background-slideshow .swiper-slide-item",{
  backgroundPosition: directionStart,
},
     {
      backgroundPosition: directionEnd,
      ease: "none",
});',
],],

'onMovedElement' => [['script' => '{% if design.background.type == \'slideshow\' %}
window.BreakdanceSwiper().update({
  selector:\'%%SELECTOR%%\',
  id: \'%%ID%%\',
  isBuilder: false,
  settings: {
    allowTouchMove: false,
    {% if design.background.slideshow_settings.play_only_once %}
        infinite:false,
      {% else %}
        infinite: "enabled",
      {% endif %}
	  speed: { number: {{ design.background.slideshow_settings.effect_duration.number ?? 300 }} },
      autoplay: "enabled",
      autoplay_settings: {
        speed: { number: {{ design.background.slideshow_settings.slide_duration.number ?? 3000 }} },
        pause_on_hover: false,
        stop_on_interaction: false,
      },
      {% if design.background.slideshow_settings.transition_effect and design.background.slideshow_settings.transition_effect != "slide" %}
        effect: "{{ design.background.slideshow_settings.transition_effect }}",
      {% endif %}
      {% if design.background.slideshow_settings.slide_direction %}
        direction: "{{ design.background.slideshow_settings.slide_direction }}",
      {% endif %}
  },
  paginationSettings: {},
  advancedSettings: {},
  extras : {
  	autoplay: true
  }
});
{% endif %}',
],['script' => 'gsap.registerPlugin(ScrollTrigger);

if (window.parallaxbgtm%%ID%%) {
    window.parallaxbgtm%%ID%%.kill();
}

{% if content.parallax.inverse_vertical %}
const startVertical = "{{ content.parallax.vertical_parallax[1] |default(\'50\') }}%"
const endVertical = "{{ content.parallax.vertical_parallax[0] |default(\'50\') }}%"
{% else %}
const startVertical = "{{ content.parallax.vertical_parallax[0] |default(\'50\') }}%"
const endVertical = "{{ content.parallax.vertical_parallax[1] |default(\'50\') }}%"
{% endif %}

{% if content.parallax.inverse_horizontal %}
const startHorizontal = "{{ content.parallax.horizontal_parallax[1] |default(\'50\') }}%"
const endHorizontal = "{{ content.parallax.vertihorizontal_parallaxcal_parallax[0] |default(\'50\') }}%"
{% else %}
const startHorizontal = "{{ content.parallax.horizontal_parallax[0] |default(\'50\') }}%"
const endHorizontal = "{{ content.parallax.horizontal_parallax[1] |default(\'50\') }}%"
{% endif %}

let directionStart = `${startHorizontal} ${startVertical}`;
let directionEnd = `${endHorizontal} ${endVertical}`;

window.parallaxbgtm%%ID%% = gsap.timeline({
        scrollTrigger: {
            trigger: "%%SELECTOR%%",
            start: "top bottom",
            scrub:{{ content.parallax.scrub |default(\'true\') }}
        }
    });

parallaxbgtm%%ID%%.fromTo("%%SELECTOR%%, %%SELECTOR%% .section-background-slideshow .swiper-slide-item",{
  backgroundPosition: directionStart,
},
     {
      backgroundPosition: directionEnd,
      ease: "none",
});',
],],

'onBeforeDeletingElement' => [['script' => '{% if design.background.type == \'slideshow\' %}
window.BreakdanceSwiper().destroy(
  \'%%ID%%\'
);
{% endif %}',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "section",   ];
    }

    static function spacingBars()
    {
        return [['cssProperty' => 'padding-top', 'location' => 'inside-top', 'affectedPropertyPath' => 'design.spacing.padding.%%BREAKPOINT%%.top'], ['cssProperty' => 'padding-bottom', 'location' => 'inside-bottom', 'affectedPropertyPath' => 'design.spacing.padding.%%BREAKPOINT%%.bottom']];
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
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'video', 'path' => 'design.background.video'], ['accepts' => 'image_url', 'path' => 'design.background.video_settings.fallback_image'], ['accepts' => 'image_url', 'path' => 'design.background.image'], ['accepts' => 'gallery', 'path' => 'design.background.slideshow'], ['accepts' => 'image_url', 'path' => 'design.background.overlay.image']];
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
        return ['design.layout.align_children', 'design.layout.advanced.flex_direction', 'design.layout.advanced.align_items', 'design.layout.advanced.justify_content', 'design.layout.advanced.flex_wrap', 'design.layout.advanced.align_content', 'design.layout.advanced.gap', 'design.background.image', 'design.background.overlay.image', 'design.background.type', 'design.background.image_settings.unset_image_at', 'design.background.image_settings.size', 'design.background.image_settings.height', 'design.background.image_settings.repeat', 'design.background.image_settings.position', 'design.background.image_settings.left', 'design.background.image_settings.top', 'design.background.image_settings.attachment', 'design.background.image_settings.custom_position', 'design.background.image_settings.width', 'design.background.overlay.image_settings.custom_position', 'design.background.image_size', 'design.background.overlay.image_size', 'design.background.overlay.type', 'design.layout.horizontal.vertical_at', 'design.background.image_settings', 'design.dividers.shape_dividers_section.dividers[].position', 'design.dividers.shape_dividers_section.dividers[].flip_horizontally', 'design.layout_v2.layout', 'design.layout_v2.h_vertical_at', 'design.layout_v2.h_alignment_when_vertical', 'design.layout_v2.a_display'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
