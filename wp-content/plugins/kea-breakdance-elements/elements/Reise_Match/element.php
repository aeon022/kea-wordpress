<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Reise_Match/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) {
    exit;
}

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing(
    'KeaBreakdanceElements\\ReiseMatch',
    \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__)
);

class ReiseMatch extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string
    {
        return 'StarIcon';
    }

    public static function tag(): string
    {
        return 'div';
    }

    public static function name(): string
    {
        return 'Reise-Match';
    }

    public static function className(): string
    {
        return 'kea-reisematch-element';
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

    public static function cssTemplate(): string
    {
        return file_get_contents(__DIR__ . '/css.twig') ?: self::defaultCss();
    }

    public static function defaultProperties(): array
    {
        return [
            'content' => [
                'header' => [
                    'kicker'      => 'KEA INSPIRATION & GUIDE',
                    'title'       => 'Der KEA Reise-Match',
                    'subtitle'    => 'Finde in 3 kurzen Klicks das ideale Sprachreiseziel für dich',
                    'button_text' => 'Beratung starten',
                ],
                'step1' => [
                    'question' => '1. Für wen ist die Sprachreise gedacht?',
                    'icon1'    => '☕',
                    'label1'   => 'Erwachsene',
                    'desc1'    => 'Kurse, Kultur & Auszeit für Erwachsene',
                    'icon2'    => '🎓',
                    'label2'   => 'Schüler & Jugend',
                    'desc2'    => 'Betreute Camps & Ferienkurse',
                    'icon3'    => '📘',
                    'label3'   => 'Lehrkräfte',
                    'desc3'    => 'Methodik & Sprachfortbildung',
                    'icon4'    => '💼',
                    'label4'   => 'Business & Profis',
                    'desc4'    => 'Intensivcoaching für Beruf & Karriere',
                ],
                'step2' => [
                    'question' => '2. Welche Atmosphäre beflügelt dich vor Ort?',
                    'icon1'    => '🏰',
                    'label1'   => 'Kultur & Pubs',
                    'desc1'    => 'Historische Gassen & lebendige Cafés',
                    'icon2'    => '🌊',
                    'label2'   => 'Meer & Sonne',
                    'desc2'    => 'Küstenflair, Strand & mediterranes Leben',
                    'icon3'    => '🏙️',
                    'label3'   => 'Weltstadt-Flair',
                    'desc3'    => 'Große Metropole, Theater & Shopping',
                ],
                'step3' => [
                    'question' => '3. Was steht bei deiner Reise im Vordergrund?',
                    'icon1'    => '🗣️',
                    'label1'   => 'Freies Sprechen',
                    'desc1'    => 'Hemmungen abbauen & Land erleben',
                    'icon2'    => '📜',
                    'label2'   => 'Zertifikat & Prüfung',
                    'desc2'    => 'IELTS, Cambridge, DELE oder DELF',
                    'icon3'    => '⚡',
                    'label3'   => 'Intensivfortbildung',
                    'desc3'    => 'Maximale Lernfortschritte in kurzer Zeit',
                ],
            ],
        ];
    }

    public static function contentControls(): array
    {
        return [
            c('header', 'Header & Button', [
                c('kicker', 'Kicker Text', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('title', 'Titel Überschrift', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('subtitle', 'Untertitel', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('button_text', 'Button Text', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('step1', 'Schritt 1: Zielgruppe & Icons', [
                c('question', 'Frage Schritt 1', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('icon1', 'Icon 1 (Erwachsene)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label1', 'Titel 1', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc1', 'Beschreibung 1', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon2', 'Icon 2 (Schüler)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label2', 'Titel 2', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc2', 'Beschreibung 2', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon3', 'Icon 3 (Lehrkräfte)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label3', 'Titel 3', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc3', 'Beschreibung 3', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon4', 'Icon 4 (Business)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label4', 'Titel 4', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc4', 'Beschreibung 4', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('step2', 'Schritt 2: Atmosphäre & Icons', [
                c('question', 'Frage Schritt 2', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('icon1', 'Icon 1 (Kultur)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label1', 'Titel 1', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc1', 'Beschreibung 1', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon2', 'Icon 2 (Meer)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label2', 'Titel 2', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc2', 'Beschreibung 2', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon3', 'Icon 3 (Metropole)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label3', 'Titel 3', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc3', 'Beschreibung 3', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('step3', 'Schritt 3: Hauptziel & Icons', [
                c('question', 'Frage Schritt 3', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('icon1', 'Icon 1 (Sprechen)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label1', 'Titel 1', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc1', 'Beschreibung 1', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon2', 'Icon 2 (Zertifikat)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label2', 'Titel 2', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc2', 'Beschreibung 2', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon3', 'Icon 3 (Intensiv)', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('label3', 'Titel 3', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc3', 'Beschreibung 3', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),
        ];
    }

    public static function designControls(): array
    {
        return [
            c('colors', 'Farben', [
                c('background', 'Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('border', 'Rahmen', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('text', 'Text', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('accent', 'Akzentfarbe', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('button_bg', 'Button Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),
            c('typography', 'Typografie', [
                getPresetSection('EssentialElements\\typography', 'Kicker', 'kicker', ['type' => 'popout']),
                getPresetSection('EssentialElements\\typography', 'Überschrift', 'title', ['type' => 'popout']),
                getPresetSection('EssentialElements\\typography', 'Untertitel', 'subtitle', ['type' => 'popout']),
            ], ['type' => 'section'], false, false, []),
        ];
    }
}
