<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "BreakinElements\\ScrambleText",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class ScrambleText extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return '<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16"><g fill="none"><g clip-path="url(#gravityUiArrows3RotateLeftLetterA0)"><path fill="currentColor" fill-rule="evenodd" d="M8.007 1.52a6.47 6.47 0 0 1 3.384.983a.75.75 0 1 1-.795 1.272a4.97 4.97 0 0 0-2.602-.756a4.98 4.98 0 0 0-3.583 1.469l.817.007a.75.75 0 1 1-.013 1.5l-2.497-.022a.75.75 0 0 1-.743-.756l.022-2.5a.75.75 0 1 1 1.5.013l-.005.56a6.48 6.48 0 0 1 4.515-1.77M1.453 7.796a6.47 6.47 0 0 0 .84 3.422a6.48 6.48 0 0 0 3.791 3.026l-.487.275a.75.75 0 0 0 .739 1.306l2.176-1.231a.75.75 0 0 0 .283-1.022L7.565 11.4a.75.75 0 0 0-1.305.738l.403.712a4.98 4.98 0 0 1-3.064-2.37a4.97 4.97 0 0 1-.647-2.63a.75.75 0 1 0-1.499-.053m9.554 5.959a6.47 6.47 0 0 0 2.544-2.438a6.48 6.48 0 0 0 .724-4.796l.483.284a.75.75 0 1 0 .761-1.293l-2.154-1.268a.75.75 0 0 0-1.027.265l-1.267 2.151a.75.75 0 0 0 1.292.762l.415-.705a4.98 4.98 0 0 1-.52 3.838a4.97 4.97 0 0 1-1.955 1.876a.75.75 0 1 0 .704 1.324M7.003 5.284a1.056 1.056 0 0 1 1.994 0l1.45 4.142a.75.75 0 0 1-1.416.496L8.9 9.543H7.1l-.132.379a.75.75 0 0 1-1.416-.496zM8 6.975l.374 1.068h-.748z" clip-rule="evenodd"/></g><defs><clipPath id="gravityUiArrows3RotateLeftLetterA0"><path fill="currentColor" d="M0 0h16v16H0z"/></clipPath></defs></g></svg>';
    }

    static function tag()
    {
        return 'h1';
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
        return 'Scramble Text';
    }

    static function className()
    {
        return 'scramble-text';
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
        return ['content' => ['content' => ['phrase' => [['text' => 'Scramble Text'], ['text' => 'by SUPAMIKE']], 'presets' => null, 'tag' => 'h1', 'play' => null, 'interval' => null, 'letter_delay' => null, 'mode' => null, 'glyphs' => null], 'advanced' => null], 'design' => ['design' => ['typography_glitched' => ['color' => ['breakpoint_base' => '#FD0000FF'], 'typography' => ['custom' => ['customTypography' => ['fontSize' => null, 'fontWeight' => null]]]], 'typography' => ['typography' => ['custom' => ['customTypography' => ['fontSize' => null, 'fontWeight' => null, 'advanced' => ['textTransform' => null]]]]]], 'size' => null]];
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
        [getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\typography",
      "Typography Glitched",
      "typography_glitched",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 300, 'max' => 1200, 'step' => 1]],
        true,
        false,
        [],
      ), c(
        "min_height",
        "Min Height",
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
        "phrase",
        "Phrase",
        [c(
        "text",
        "Text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '{text}', 'defaultTitle' => '', 'buttonName' => '']],
        false,
        false,
        [],
      ), c(
        "tag",
        "Tag",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'h1', 'text' => 'H1'], ['text' => 'H2', 'value' => 'h2'], ['text' => 'H3', 'value' => 'h3'], ['text' => 'H4', 'value' => 'h4'], ['text' => 'H5', 'value' => 'h5'], ['text' => 'H6', 'value' => 'h6'], ['text' => 'Div', 'value' => 'div'], ['text' => 'Span', 'value' => 'span'], ['text' => 'P', 'value' => 'p']]],
        false,
        false,
        [],
      ), c(
        "presets",
        "Presets",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'default', 'text' => 'default'], ['text' => 'nier', 'value' => 'nier'], ['text' => 'typewriter', 'value' => 'typewriter'], ['text' => 'terminal', 'value' => 'terminal'], ['text' => 'zalgo', 'value' => 'zalgo'], ['text' => 'neo', 'value' => 'neo'], ['text' => 'encrypted', 'value' => 'encrypted'], ['text' => 'bitbybit', 'value' => 'bitbybit'], ['text' => 'cosmic', 'value' => 'cosmic']]],
        false,
        false,
        [],
      ), c(
        "play",
        "Play",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'false', 'text' => 'Once'], ['text' => 'Loop', 'value' => 'true']]],
        false,
        false,
        [],
      ), c(
        "interval",
        "Interval",
        [],
        ['type' => 'number', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "mode",
        "Mode",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'matching', 'text' => 'Matching'], ['text' => 'Normal', 'value' => 'normal'], ['text' => 'Erase', 'value' => 'erase'], ['text' => 'Erase Smart', 'value' => 'erase_smart'], ['text' => 'Clear', 'value' => 'clear']]],
        false,
        false,
        [],
      ), c(
        "glyphs",
        "Glyphs",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
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
        return ['0' =>  ['scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/Scramble_Text/glitched-writer.min.js'],],'1' =>  ['scripts' => [BREAKIN_ELEMENTS_PLUGIN_URL.'elements/Scramble_Text/scrambletext.js'],'inlineScripts' => ['ScrambleText({
  selector: \'%%SELECTOR%%\',
  {% if content.content.presets %}presets: \'{{ content.content.presets }}\',{% endif %}
  {% if content.content.mode %}mode: \'{{ content.content.mode }}\',{% endif %}
  {% if content.content.glyphs %}glyphs: \'{{ content.content.glyphs }}\',{% endif %}
  phrases: [{% for item in content.content.phrase %}\'{{ item.text }}\',{% endfor %}],
  {% if content.content.interval %}interval: {{ content.content.interval }},{% endif %}
  {% if content.content.play %}play: {{ content.content.play }},{% endif %}
  {% if content.content.letterize %}letterize: {{ content.content.letterize }},{% endif %}
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

'onPropertyChange' => [['script' => '// Function to initialize or reinitialize the writer
function initializeWriter() {
  // Destroy existing writer instance if it exists
  if (window.glitchedWriter%%ID%%) {
    window.glitchedWriter%%ID%%.pause();
    delete window.glitchedWriter%%ID%%;
  }

  // Create new writer instance
  window.glitchedWriter%%ID%% = GlitchedWriter.create(\'%%SELECTOR%%\', { 
    ...GlitchedWriter.presets.{{ content.content.presets |default(\'default\')}},
    letterize: true,

    {% if content.content.mode %}mode:\'{{ content.content.mode }}\',{% endif %}
   {% if content.content.glyphs %}glyphs:\'{{ content.content.glyphs }}\'{% endif %}
  });

  const phrases = [  {% for item in content.content.phrase %}\'{{ item.text }}\',{% endfor %} ];

  //window.glitchedWriter.queueWrite(phrases, 800, true);
   window.glitchedWriter%%ID%%.queueWrite(phrases, {{ content.content.interval |default(\'800\') }}, {{ content.content.play |default(\'true\')}});
}

// Call the function to initialize the writer
initializeWriter();',
],],

'onMovedElement' => [['script' => '// Function to initialize or reinitialize the writer
function initializeWriter() {
  // Destroy existing writer instance if it exists
  if (window.glitchedWriter%%ID%%) {
    window.glitchedWriter%%ID%%.pause();
    delete window.glitchedWriter%%ID%%;
  }

  // Create new writer instance
  window.glitchedWriter%%ID%% = GlitchedWriter.create(\'%%SELECTOR%%\', { 
    ...GlitchedWriter.presets.{{ content.content.presets |default(\'default\')}},
    letterize: true,

    {% if content.content.mode %}mode:\'{{ content.content.mode }}\',{% endif %}
   {% if content.content.glyphs %}glyphs:\'{{ content.content.glyphs }}\'{% endif %}
  });

  const phrases = [  {% for item in content.content.phrase %}\'{{ item.text }}\',{% endfor %} ];

  //window.glitchedWriter.queueWrite(phrases, 800, true);
   window.glitchedWriter%%ID%%.queueWrite(phrases, {{ content.content.interval |default(\'800\') }}, {{ content.content.play |default(\'true\')}});
}

// Call the function to initialize the writer
initializeWriter();',
],],

'onMountedElement' => [['script' => '// Function to initialize or reinitialize the writer
function initializeWriter() {
  // Destroy existing writer instance if it exists
  if (window.glitchedWriter%%ID%%) {
    window.glitchedWriter%%ID%%.pause();
    delete window.glitchedWriter%%ID%%;
  }

  // Create new writer instance
  window.glitchedWriter%%ID%% = GlitchedWriter.create(\'%%SELECTOR%%\', { 
    ...GlitchedWriter.presets.{{ content.content.presets |default(\'default\')}},
    letterize: true,

    {% if content.content.mode %}mode:\'{{ content.content.mode }}\',{% endif %}
   {% if content.content.glyphs %}glyphs:\'{{ content.content.glyphs }}\'{% endif %}
  });

  const phrases = [  {% for item in content.content.phrase %}\'{{ item.text }}\',{% endfor %} ];

  //window.glitchedWriter.queueWrite(phrases, 800, true);
   window.glitchedWriter%%ID%%.queueWrite(phrases, {{ content.content.interval |default(\'800\') }}, {{ content.content.play |default(\'true\')}});
}

// Call the function to initialize the writer
initializeWriter();',
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
        return 15;
    }

    static function dynamicPropertyPaths()
    {
        return [['accepts' => 'string', 'path' => 'content.content.phrase[].text'], ['accepts' => 'string', 'path' => 'content.content.glyphs']];
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
