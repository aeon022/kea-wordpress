<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\Elements\PresetSections\PresetSectionsController::getInstance()->register(
    "BreakinElements\\gsap-animation",
    c(
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
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'Fade', 'value' => 'fade'], ['value' => 'Slidedown', 'text' => 'Slide Down'], ['text' => 'Slide Up', 'value' => 'slideup'], ['text' => 'Slide Left', 'value' => 'slideleft'], ['text' => 'Slide Right', 'value' => 'slideright'], ['text' => 'Zoom In', 'value' => 'zoomin'], ['text' => 'Zoom Out', 'value' => 'zoomout'], ['text' => 'Custom Effect', 'value' => 'customeffect']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['preset' => ['slug' => 'BreakinElements\\gsap-animation']]],
        false,
        false,
        [],
      ),
    true,
    null
);

