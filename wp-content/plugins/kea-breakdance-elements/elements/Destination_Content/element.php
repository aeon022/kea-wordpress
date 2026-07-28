<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_Content/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) {
    exit;
}

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing(
    'KeaBreakdanceElements\\DestinationContent',
    \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__)
);

class DestinationContent extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string { return 'TextIcon'; }
    public static function tag(): string { return 'section'; }
    public static function name(): string { return 'Profil-Inhalte'; }
    public static function className(): string { return 'kea-destination-content'; }
    public static function category(): string { return 'kea'; }
    public static function slug(): string { return __CLASS__; }
    public static function template(): string { return '%%SSR%%'; }
    public static function defaultCss(): string { return file_get_contents(__DIR__ . '/default.css') ?: ''; }
    public static function cssTemplate(): string { return file_get_contents(__DIR__ . '/css.twig') ?: self::defaultCss(); }

    public static function defaultProperties(): array
    {
        return ['content' => [
            'character_heading' => 'Warum dieses Reiseziel?',
            'recommendation_heading' => 'KEA-Empfehlung',
            'accommodation_heading' => 'Unterkunft',
            'travel_heading' => 'Anreise',
        ]];
    }

    public static function contentControls(): array
    {
        return [c('content', 'Beschriftungen', [
            c('character_heading', 'Charakter', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            c('recommendation_heading', 'KEA-Empfehlung', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            c('accommodation_heading', 'Unterkunft', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            c('travel_heading', 'Anreise', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
        ], ['type' => 'section'], false, false, [])];
    }

    public static function designControls(): array
    {
        return [c('typography', 'Typografie', [
            getPresetSection('EssentialElements\\typography', 'Überschriften', 'heading', ['type' => 'popout']),
            getPresetSection('EssentialElements\\typography', 'Text', 'text', ['type' => 'popout']),
        ], ['type' => 'section'], false, false, []), c('colors', 'Farben', [
            c('background', 'Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
            c('heading', 'Überschrift', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
            c('text', 'Text', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
        ], ['type' => 'section'], false, false, [])];
    }
}
