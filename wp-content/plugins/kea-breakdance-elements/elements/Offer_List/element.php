<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Offer_List/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) {
    exit;
}

use function Breakdance\Elements\c;

\Breakdance\ElementStudio\registerElementForEditing(
    'KeaBreakdanceElements\\OfferList',
    \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__)
);

class OfferList extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string
    {
        return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M5 4h14v2H5V4Zm0 5h14v2H5V9Zm0 5h9v2H5v-2Zm0 5h9v2H5v-2Zm12-5h2v7h-2v-7Z"/></svg>';
    }

    public static function tag(): string
    {
        return 'section';
    }

    public static function name(): string
    {
        return 'Angebotsliste';
    }

    public static function className(): string
    {
        return 'kea-offer-list';
    }

    public static function category(): string
    {
        return 'kea';
    }

    public static function slug(): string
    {
        return __CLASS__;
    }

    public static function template(): string
    {
        return '%%SSR%%';
    }

    public static function defaultCss(): string
    {
        return file_get_contents(__DIR__ . '/default.css') ?: '';
    }

    public static function defaultProperties(): array
    {
        return [
            'content' => [
                'source' => [
                    'content_type' => 'program',
                    'scope' => 'current_destination',
                    'limit' => 6,
                ],
                'heading' => [
                    'eyebrow' => 'Ausgewählt für dich',
                    'title' => 'Passende Programme',
                    'intro' => '',
                    'empty_message' => 'Für dieses Reiseziel werden die Angebote gerade ergänzt.',
                ],
            ],
        ];
    }

    public static function contentControls(): array
    {
        return [
            c('source', 'Quelle', [
                c('content_type', 'Inhalt', [], [
                    'type' => 'dropdown',
                    'layout' => 'inline',
                    'items' => [
                        ['text' => 'Programme', 'value' => 'program'],
                        ['text' => 'Partnerschulen', 'value' => 'school'],
                    ],
                ], false, false, []),
                c('scope', 'Auswahl', [], [
                    'type' => 'dropdown',
                    'layout' => 'inline',
                    'items' => [
                        ['text' => 'Aktuelles Reiseziel', 'value' => 'current_destination'],
                        ['text' => 'Alle', 'value' => 'all'],
                    ],
                ], false, false, []),
                c('limit', 'Anzahl', [], [
                    'type' => 'number',
                    'layout' => 'inline',
                    'rangeOptions' => ['min' => 1, 'max' => 24, 'step' => 1],
                ], false, false, []),
            ], ['type' => 'section'], false, false, []),
            c('heading', 'Einleitung', [
                c('eyebrow', 'Kicker', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('title', 'Überschrift', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('intro', 'Text', [], ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['multiline' => true]], false, false, []),
                c('empty_message', 'Leerer Zustand', [], ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['multiline' => true]], false, false, []),
            ], ['type' => 'section'], false, false, []),
        ];
    }

    public static function designControls(): array
    {
        return [];
    }

}
