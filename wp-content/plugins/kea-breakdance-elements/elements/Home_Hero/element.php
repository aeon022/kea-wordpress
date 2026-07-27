<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Home_Hero/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) {
    exit;
}

use function Breakdance\Elements\c;

\Breakdance\ElementStudio\registerElementForEditing(
    'KeaBreakdanceElements\\HomeHero',
    \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__)
);

class HomeHero extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string { return 'HeadingIcon'; }
    public static function tag(): string { return 'section'; }
    public static function name(): string { return 'Startseiten-Hero'; }
    public static function className(): string { return 'kea-home-hero'; }
    public static function category(): string { return 'kea'; }
    public static function slug(): string { return __CLASS__; }
    public static function template(): string { return '%%SSR%%'; }
    public static function defaultCss(): string { return file_get_contents(__DIR__ . '/default.css') ?: ''; }

    public static function defaultProperties(): array
    {
        return ['content' => ['content' => [
            'image_id' => 3831,
            'eyebrow' => 'KEA Sprachreisen',
            'title' => 'Mach die Welt zu deinem Klassenzimmer.',
            'text' => 'Persönlich ausgewählte Sprachreisen für Erwachsene, Schüler, Lehrer und Unternehmen.',
            'primary_label' => 'Sprachreise entdecken', 'primary_url' => '/reiseziele/',
            'secondary_label' => 'Persönlich beraten lassen', 'secondary_url' => '/anfrage/',
        ]]];
    }

    public static function contentControls(): array
    {
        return [c('content', 'Inhalt', [
            c('image_id', 'Bild-ID', [], ['type' => 'number'], false, false, []),
            c('eyebrow', 'Kicker', [], ['type' => 'text'], false, false, []),
            c('title', 'Überschrift', [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []),
            c('text', 'Text', [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []),
            c('primary_label', 'Primärer Button', [], ['type' => 'text'], false, false, []),
            c('primary_url', 'Primäre URL', [], ['type' => 'text'], false, false, []),
            c('secondary_label', 'Sekundärer Button', [], ['type' => 'text'], false, false, []),
            c('secondary_url', 'Sekundäre URL', [], ['type' => 'text'], false, false, []),
        ], ['type' => 'section'], false, false, [])];
    }
    public static function designControls(): array { return []; }
}
