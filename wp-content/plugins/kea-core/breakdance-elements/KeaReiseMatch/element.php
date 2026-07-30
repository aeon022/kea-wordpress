<?php

namespace KeaElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

if (function_exists('\Breakdance\ElementStudio\registerElementForEditing')) {
    \Breakdance\ElementStudio\registerElementForEditing(
        "KeaElements\\KeaReiseMatch",
        \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
    );
}

class KeaReiseMatch extends \Breakdance\Elements\Element
{
    static function name()
    {
        return 'KEA Reise-Match';
    }

    static function className()
    {
        return 'kea-reisematch-element';
    }

    static function category()
    {
        return 'KEA Sprachreisen';
    }

    static function slug()
    {
        return __CLASS__;
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultProperties()
    {
        return [
            'content' => [
                'content' => [
                    'kicker'         => 'KEA INSPIRATION & GUIDE',
                    'title'          => 'Der KEA Reise-Match',
                    'subtitle'       => 'Finde in 3 kurzen Klicks das ideale Sprachreiseziel für dich',
                    'step1_question' => '1. Für wen ist die Sprachreise gedacht?',
                    'step2_question' => '2. Welche Atmosphäre beflügelt dich vor Ort?',
                    'step3_question' => '3. Was steht bei deiner Reise im Vordergrund?',
                    'button_text'    => 'Beratung starten',
                ]
            ]
        ];
    }

    static function contentControls()
    {
        return [
            c(
                "content",
                "Text & Beschriftungen",
                [
                    c("kicker", "Kicker Text", [], ['type' => 'text', 'layout' => 'vertical']),
                    c("title", "Titel Überschrift", [], ['type' => 'text', 'layout' => 'vertical']),
                    c("subtitle", "Untertitel", [], ['type' => 'text', 'layout' => 'vertical']),
                    c("step1_question", "Frage Schritt 1", [], ['type' => 'text', 'layout' => 'vertical']),
                    c("step2_question", "Frage Schritt 2", [], ['type' => 'text', 'layout' => 'vertical']),
                    c("step3_question", "Frage Schritt 3", [], ['type' => 'text', 'layout' => 'vertical']),
                    c("button_text", "Button Text", [], ['type' => 'text', 'layout' => 'vertical']),
                ],
                ['type' => 'section', 'layout' => 'vertical']
            )
        ];
    }

    static function designControls()
    {
        return [
            c(
                "container",
                "Container & Farben",
                [
                    c("bg_color", "Hintergrundfarbe", [], ['type' => 'color', 'layout' => 'inline']),
                    c("border_color", "Rahmenfarbe", [], ['type' => 'color', 'layout' => 'inline']),
                    c("text_color", "Textfarbe", [], ['type' => 'color', 'layout' => 'inline']),
                    c("accent_color", "Akzentfarbe", [], ['type' => 'color', 'layout' => 'inline']),
                ],
                ['type' => 'section']
            ),
            getPresetSection("EssentialElements\\typography", "Typografie", "typography", ['type' => 'popout']),
            getPresetSection("EssentialElements\\spacing_margin_y", "Abstände", "spacing", ['type' => 'popout']),
        ];
    }

    static function settings()
    {
        return false;
    }
}
