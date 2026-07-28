<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_List/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) { exit; }

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

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
    public static function defaultProperties(): array { return ['content' => ['content' => ['eyebrow' => 'Orte mit Charakter', 'title' => 'Wohin zieht es dich?', 'intro' => 'Einige unserer ausgewählten Reiseziele.', 'ids' => '', 'limit' => 6, 'more_label' => 'Alle Reiseziele', 'more_url' => '/reiseziele/', 'language_label' => 'Sprache', 'country_label' => 'Land', 'filter_label' => 'Reiseziele filtern', 'reset_label' => 'Alle anzeigen']]]; }
    public static function contentControls(): array { return [c('content', 'Inhalt', [c('eyebrow', 'Kicker', [], ['type' => 'text'], false, false, []), c('title', 'Überschrift', [], ['type' => 'text'], false, false, []), c('intro', 'Text', [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []), c('ids', 'Reiseziel-IDs', [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []), c('limit', 'Anzahl', [], ['type' => 'number', 'rangeOptions' => ['min' => 1, 'max' => 12]], false, false, []), c('more_label', 'Button-Text', [], ['type' => 'text'], false, false, []), c('more_url', 'Button-URL', [], ['type' => 'text'], false, false, []), c('filter_label', 'Filter-Überschrift', [], ['type' => 'text'], false, false, []), c('language_label', 'Filter Sprache', [], ['type' => 'text'], false, false, []), c('country_label', 'Filter Land', [], ['type' => 'text'], false, false, []), c('reset_label', 'Zurücksetzen-Text', [], ['type' => 'text'], false, false, [])], ['type' => 'section'], false, false, [])]; }
    public static function cssTemplate(): string { return file_get_contents(__DIR__ . '/css.twig') ?: self::defaultCss(); }
    public static function designControls(): array { return [c('typography', 'Typografie', [getPresetSection('EssentialElements\\typography', 'Kicker', 'eyebrow', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Überschrift', 'title', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Einleitung', 'intro', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Karten-Kicker', 'card_meta', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Karten-Titel', 'card_title', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Karten-Link', 'card_link', ['type' => 'popout'])], ['type' => 'section'], false, false, [])]; }
}
