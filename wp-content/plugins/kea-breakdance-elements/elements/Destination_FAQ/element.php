<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_FAQ/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) {
    exit;
}

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing(
    'KeaBreakdanceElements\\DestinationFaq',
    \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__)
);

class DestinationFaq extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string { return 'ListIcon'; }
    public static function tag(): string { return 'section'; }
    public static function name(): string { return 'Reiseziel-FAQ'; }
    public static function className(): string { return 'kea-destination-faq'; }
    public static function category(): string { return 'kea'; }
    public static function slug(): string { return __CLASS__; }
    public static function template(): string { return '%%SSR%%'; }
    public static function defaultCss(): string { return file_get_contents(__DIR__ . '/default.css') ?: ''; }
    public static function cssTemplate(): string { return file_get_contents(__DIR__ . '/css.twig') ?: self::defaultCss(); }

    public static function defaultProperties(): array { return ['content' => ['heading' => 'Häufige Fragen']]; }

    public static function contentControls(): array
    {
        return [c('content', 'Inhalt', [
            c('heading', 'Überschrift', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
        ], ['type' => 'section'], false, false, [])];
    }

    public static function designControls(): array
    {
        return [c('typography', 'Typografie', [
            getPresetSection('EssentialElements\\typography', 'Überschrift', 'heading', ['type' => 'popout']),
            getPresetSection('EssentialElements\\typography', 'Fragen', 'question', ['type' => 'popout']),
            getPresetSection('EssentialElements\\typography', 'Antworten', 'answer', ['type' => 'popout']),
        ], ['type' => 'section'], false, false, []), c('colors', 'Farben', [
            c('background', 'Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
            c('heading', 'Überschrift', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
            c('text', 'Text', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
        ], ['type' => 'section'], false, false, [])];
    }
}
