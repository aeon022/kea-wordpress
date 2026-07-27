<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_List/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) { exit; }

use function Breakdance\Elements\c;

\Breakdance\ElementStudio\registerElementForEditing('KeaBreakdanceElements\\DestinationList', \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__));

class DestinationList extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string { return 'GridIcon'; }
    public static function tag(): string { return 'section'; }
    public static function name(): string { return 'Reisezielauswahl'; }
    public static function className(): string { return 'kea-destination-list'; }
    public static function category(): string { return 'kea'; }
    public static function slug(): string { return __CLASS__; }
    public static function template(): string { return '%%SSR%%'; }
    public static function defaultCss(): string { return file_get_contents(__DIR__ . '/default.css') ?: ''; }
    public static function defaultProperties(): array { return ['content' => ['content' => ['eyebrow' => 'Orte mit Charakter', 'title' => 'Wohin zieht es dich?', 'intro' => 'Einige unserer ausgewählten Reiseziele.', 'ids' => '', 'limit' => 6]]]; }
    public static function contentControls(): array { return [c('content', 'Inhalt', [c('eyebrow', 'Kicker', [], ['type' => 'text'], false, false, []), c('title', 'Überschrift', [], ['type' => 'text'], false, false, []), c('intro', 'Text', [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []), c('ids', 'Reiseziel-IDs', [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []), c('limit', 'Anzahl', [], ['type' => 'number', 'rangeOptions' => ['min' => 1, 'max' => 12]], false, false, [])], ['type' => 'section'], false, false, [])]; }
    public static function designControls(): array { return []; }
}
