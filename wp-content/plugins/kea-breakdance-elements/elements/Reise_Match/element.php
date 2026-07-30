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
        return 'section';
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
                    'icon1'    => [
                        'slug' => 'icon-coffee.',
                        'name' => 'coffee',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H192c-17.7 0-32 14.3-32 32v288c0 17.7 14.3 32 32 32zm320-288c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zM48 448h544c17.7 0 32 14.3 32 32s-14.3 32-32 32H48c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>',
                    ],
                    'label1'   => 'Erwachsene',
                    'desc1'    => 'Kurse, Kultur & Auszeit für Erwachsene',
                    'icon2'    => [
                        'slug' => 'icon-user-graduate.',
                        'name' => 'user graduate',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM320 32L0 192l320 160 256-128v128h64V192L320 32z"/></svg>',
                    ],
                    'label2'   => 'Schüler & Jugendliche',
                    'desc2'    => 'Betreute Schülerkurse & Jugendsprachreisen',
                    'icon3'    => [
                        'slug' => 'icon-book-open.',
                        'name' => 'book open',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.26 7.85-7.26 13.17v365.17c0 10.73 11.23 17.58 20.73 12.39 67.24-41.16 176.16-52.48 230.96-55.59 11.08-.63 19.31-9.98 19.31-21.08V53.13c0-11.78-9.84-21.14-21.78-21.08zM33.78 32.05c-11.94-.06-21.78 9.3-21.78 21.08v348.57c0 11.1 8.23 20.45 19.31 21.08 54.8 3.11 163.72 14.43 230.96 55.59 9.5 5.19 20.73-1.66 20.73-12.39V100.81c0-5.32-2.62-10.33-7.26-13.17C208.5 46.48 99.58 35.16 43.78 32.05z"/></svg>',
                    ],
                    'label3'   => 'Lehrkräfte',
                    'desc3'    => 'Methodik & Sprachfortbildung (Erasmus+)',
                    'icon4'    => [
                        'slug' => 'icon-briefcase.',
                        'name' => 'briefcase',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M128 48c0-8.8 7.2-16 16-16h224c8.8 0 16 7.2 16 16v48H128V48zm-48 48V48c0-26.5 21.5-48 48-48h224c26.5 0 48 21.5 48 48v48h48c26.5 0 48 21.5 48 48v128H0V144c0-26.5 21.5-48 48-48h32zm432 176v192c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272h192v16c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16v-16h192z"/></svg>',
                    ],
                    'label4'   => 'Business & Profis',
                    'desc4'    => 'Intensivcoaching für Beruf & Karriere',
                ],
                'step2' => [
                    'question' => '2. Welche Atmosphäre beflügelt dich vor Ort?',
                    'icon1'    => [
                        'slug' => 'icon-landmark.',
                        'name' => 'landmark',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M501.62 92.11L267.24 2.04a31.958 31.958 0 0 0-22.47 0L10.38 92.11A16.001 16.001 0 0 0 0 107.09V144c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-36.91c0-6.67-4.14-12.63-10.38-14.98zM64 192v224H32c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h448c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16h-32V192H64zm80 0h64v224h-64V192zm144 0h64v224h-64V192z"/></svg>',
                    ],
                    'label1'   => 'Kultur & Pubs',
                    'desc1'    => 'Historische Gassen & lebendige Cafés',
                    'icon2'    => [
                        'slug' => 'icon-umbrella-beach.',
                        'name' => 'umbrella beach',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M629.8 195.4C609.5 78.5 500 0 384 0c-99.3 0-195 62.4-221 161.4-1.9 7.2 1.3 14.8 7.8 18.4l117.8 65.5-23.7 201.2c-1 8.8 5.4 16.7 14.2 17.7 8.8 1 16.7-5.4 17.7-14.2l23.7-201.2 108.9 60.5c6.3 3.5 14.2 2.1 18.8-3.4L627 210.8c5.4-6.4 6.7-15.3 2.8-22.9zM224 480c0 17.7 14.3 32 32 32s32-14.3 32-32-14.3-32-32-32-32 14.3 32z"/></svg>',
                    ],
                    'label2'   => 'Meer & Sonne',
                    'desc2'    => 'Küstenflair, Strand & mediterranes Leben',
                    'icon3'    => [
                        'slug' => 'icon-city.',
                        'name' => 'city',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M608 128h-64v-32c0-17.7-14.3-32-32-32h-64c-17.7 0-32 14.3-32 32v32h-64V32c0-17.7-14.3-32-32-32H192c-17.7 0-32 14.3-32 32v96H96c-17.7 0-32 14.3-32 32v320h512V160c0-17.7-14.3-32-32-32zM128 448H96v-32h32v32zm0-64H96v-32h32v32zm0-64H96v-32h32v32zm0-64H96v-32h32v32zm128 192h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32V64h32v32zm128 320h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm128 256h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32zm0-64h-32v-32h32v32z"/></svg>',
                    ],
                    'label3'   => 'Weltstadt-Flair',
                    'desc3'    => 'Große Metropole, Theater & Shopping',
                ],
                'step3' => [
                    'question' => '3. Welche Kursart passt zu deinen Zielen?',
                    'icon1'    => [
                        'slug' => 'icon-comments.',
                        'name' => 'comments',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M416 192c0-88.4-93.1-160-208-160S0 103.6 0 192c0 34.3 14.1 65.9 38 92-13.4 30.2-35.5 54.2-35.8 54.5-2.2 2.3-2.8 5.7-1.5 8.7 1.3 3 4.1 5 7.3 5 44.1 0 83.9-19.5 109.8-37.1 27 9.8 57.5 14.9 89.2 14.9 114.9 0 208-71.6 208-160zm160 160c0-67.4-56.8-124.4-136.2-148.9 3.9 12.3 6.2 25.3 6.2 38.9 0 114.9-114.9 208-256 208-13.6 0-26.9-1-39.8-2.7C184 480 238 512 304 512c26.4 0 51.8-4.3 74.3-12.4 21.6 14.7 54.8 31 91.5 31 2.7 0 5-1.7 6.1-4.2 1.1-2.5.6-5.3-1.3-7.2-.3-.3-18.7-20-29.9-45.2 19.9-21.8 31.7-48.1 31.7-76.8z"/></svg>',
                    ],
                    'label1'   => 'Allgemeiner Sprachkurs',
                    'desc1'    => 'Freies Sprechen, Hemmungen abbauen & Kultur erleben',
                    'icon2'    => [
                        'slug' => 'icon-award.',
                        'name' => 'award',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M288 304v160l-96-48-96 48V304c-22.6-24.7-36-57.5-36-96 0-79.5 64.5-144 144-144s144 64.5 144 144c0 38.5-13.4 71.3-36 96zM192 96c-61.9 0-112 50.1-112 112s50.1 112 112 112 112-50.1 112-112S253.9 96 192 96z"/></svg>',
                    ],
                    'label2'   => 'Prüfungsvorbereitung',
                    'desc2'    => 'Gezielte Vorbereitung auf IELTS, Cambridge, DELE oder DELF',
                    'icon3'    => [
                        'slug' => 'icon-rocket.',
                        'name' => 'rocket',
                        'svgCode' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505.12 19.1c-1.92-3.84-5.28-6.72-9.6-7.68C460.8 2.88 320-16.32 192 111.68c-44.16 44.16-72.32 96-85.76 150.72-10.56-4.16-22.08-6.4-34.24-6.4-44.16 0-80 35.84-80 80 0 11.52 2.56 22.4 7.04 32.32L0 448l64 64 80.32-80.32c9.92 4.48 20.8 7.04 32.32 7.04 44.16 0 80-35.84 80-80 0-12.16-2.24-23.68-6.4-34.24C305.6 311.04 357.44 282.88 401.6 238.72 528 110.72 509.12-30.08 505.12 19.1zM368 176c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48z"/></svg>',
                    ],
                    'label3'   => 'Intensivkurs',
                    'desc3'    => 'Maximale Lernfortschritte in kompakter Kurszeit',
                ],
            ],
        ];
    }

    public static function contentControls(): array
    {
        return [
            c('header', 'Header & Button Text', [
                c('kicker', 'Kicker Text', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('title', 'Titel Überschrift', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('subtitle', 'Untertitel', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('button_text', 'Button Beschriftung', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('step1', 'Schritt 1: Zielgruppe & Icons', [
                c('question', 'Frage Schritt 1', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('icon1', 'Icon 1 (Erwachsene)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label1', 'Titel 1', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc1', 'Beschreibung 1', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon2', 'Icon 2 (Schüler & Jugend)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label2', 'Titel 2', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc2', 'Beschreibung 2', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon3', 'Icon 3 (Lehrkräfte)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label3', 'Titel 3', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc3', 'Beschreibung 3', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon4', 'Icon 4 (Business)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label4', 'Titel 4', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc4', 'Beschreibung 4', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('step2', 'Schritt 2: Atmosphäre & Icons', [
                c('question', 'Frage Schritt 2', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('icon1', 'Icon 1 (Kultur)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label1', 'Titel 1', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc1', 'Beschreibung 1', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon2', 'Icon 2 (Meer)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label2', 'Titel 2', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc2', 'Beschreibung 2', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon3', 'Icon 3 (Metropole)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label3', 'Titel 3', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc3', 'Beschreibung 3', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('step3', 'Schritt 3: Kursart & Icons', [
                c('question', 'Frage Schritt 3', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
                c('icon1', 'Icon 1 (Allgemeiner Sprachkurs)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label1', 'Titel 1', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc1', 'Beschreibung 1', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon2', 'Icon 2 (Prüfungsvorbereitung)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label2', 'Titel 2', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc2', 'Beschreibung 2', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),

                c('icon3', 'Icon 3 (Intensivkurs)', [], ['type' => 'icon', 'layout' => 'vertical'], false, false, []),
                c('label3', 'Titel 3', [], ['type' => 'text', 'layout' => 'inline'], false, false, []),
                c('desc3', 'Beschreibung 3', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),
        ];
    }

    public static function designControls(): array
    {
        return [
            c('colors', 'Farben Container', [
                c('background', 'Hintergrund Container', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('border', 'Rahmen Container', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('text', 'Textfarbe Container', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('accent', 'Akzent Badge', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),

            c('button_design', 'Button Design (Haupt-CTA)', [
                c('bg', 'Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('bg_hover', 'Hintergrund Hover', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('text_color', 'Textfarbe', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('text_hover', 'Textfarbe Hover', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('border_color', 'Rahmenfarbe', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('radius', 'Eckenabrundung', [], ['type' => 'unit', 'layout' => 'inline'], false, false, []),
                getPresetSection('EssentialElements\\typography', 'Button Typografie', 'button_typo', ['type' => 'popout']),
            ], ['type' => 'section'], false, false, []),

            c('typography', 'Typografie Texte', [
                getPresetSection('EssentialElements\\typography', 'Kicker', 'kicker', ['type' => 'popout']),
                getPresetSection('EssentialElements\\typography', 'Überschrift', 'title', ['type' => 'popout']),
                getPresetSection('EssentialElements\\typography', 'Untertitel', 'subtitle', ['type' => 'popout']),
            ], ['type' => 'section'], false, false, []),
        ];
    }
}
