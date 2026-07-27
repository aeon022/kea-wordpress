<?php

namespace BreakinElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\Elements\PresetSections\PresetSectionsController::getInstance()->register(
    "BreakinElements\\gsap-action",
    c(
        "action",
        "Action",
        [c(
        "play",
        "Play",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'Always', 'value' => 'play pause resume reset'], ['value' => 'play none none none', 'text' => 'Once'], ['text' => 'Restart On Scroll Back', 'value' => 'restart none restart none'], ['text' => 'Reverse On Scroll Back', 'value' => 'play none reverse none'], ['text' => 'Always Reverse on scroll Backwards', 'value' => 'play reverse play reverse']]],
        false,
        false,
        [],
      ), c(
        "scroll_sync",
        "Scroll Sync",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 2, 'step' => 0.1]],
        false,
        false,
        [],
      ), c(
        "trigger",
        "Trigger",
        [c(
        "start_when",
        "Start When",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'top', 'text' => 'Top'], ['text' => 'Center', 'value' => 'center'], ['text' => 'Bottom', 'value' => 'bottom']]],
        false,
        false,
        [],
      ), c(
        "end_when",
        "End When",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['value' => 'top', 'text' => 'Top'], ['text' => 'Center', 'value' => 'center'], ['text' => 'Bottom', 'value' => 'bottom']]],
        false,
        false,
        [],
      ), c(
        "start_position",
        "Start Position",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%'], 'defaultType' => '%'], 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "end_position",
        "End Position",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['px', '%'], 'defaultType' => '%'], 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'popout']],
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
        ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['preset' => ['slug' => 'BreakinElements\\gsap-action']]],
        false,
        false,
        [],
      ),
    true,
    null
);

