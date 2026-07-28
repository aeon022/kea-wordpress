<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_Facts/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) {
    exit;
}

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing(
    'KeaBreakdanceElements\\DestinationFacts',
    \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__)
);

class DestinationFacts extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string { return 'ListIcon'; }
    public static function tag(): string { return 'section'; }
    public static function name(): string { return 'Profil-Fakten'; }
    public static function className(): string { return 'kea-destination-facts'; }
    public static function category(): string { return 'kea'; }
    public static function slug(): string { return __CLASS__; }
    public static function template(): string { return '%%SSR%%'; }
    public static function defaultCss(): string { return file_get_contents(__DIR__ . '/default.css') ?: ''; }

    public static function defaultProperties(): array
    {
        return ['content' => [
            'heading' => 'Auf einen Blick',
            'best_season_label' => 'Beste Reisezeit',
            'min_duration_label' => 'Mindestdauer',
            'accommodation_label' => 'Unterkunft',
            'travel_label' => 'Anreise',
        ]];
    }

    public static function contentControls(): array
    {
        return [c('content', 'Beschriftungen', [
            c('heading', 'Überschrift', [], ['type' => 'text'], false, false, []),
            c('best_season_label', 'Beste Reisezeit', [], ['type' => 'text'], false, false, []),
            c('min_duration_label', 'Mindestdauer', [], ['type' => 'text'], false, false, []),
            c('accommodation_label', 'Unterkunft', [], ['type' => 'text'], false, false, []),
            c('travel_label', 'Anreise', [], ['type' => 'text'], false, false, []),
        ], ['type' => 'section'], false, false, [])];
    }

    public static function cssTemplate(): string { return file_get_contents(__DIR__ . '/css.twig') ?: self::defaultCss(); }
    public static function designControls(): array { return [c('typography', 'Typografie', [getPresetSection('EssentialElements\\typography', 'Überschrift', 'heading', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Faktenbezeichnung', 'label', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Faktenwert', 'value', ['type' => 'popout'])], ['type' => 'section'], false, false, [])]; }
}
