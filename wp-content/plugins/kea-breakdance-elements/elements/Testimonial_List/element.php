<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Testimonial_List/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) {
    exit;
}

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing('KeaBreakdanceElements\\TestimonialList', \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__));

class TestimonialList extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string { return 'SquareQuoteIcon'; }
    public static function tag(): string { return 'section'; }
    public static function name(): string { return 'Erfahrungsberichte'; }
    public static function className(): string { return 'kea-testimonial-list'; }
    public static function category(): string { return 'kea'; }
    public static function slug(): string { return __CLASS__; }
    public static function template(): string { return '%%SSR%%'; }
    public static function defaultCss(): string { return file_get_contents(__DIR__ . '/default.css') ?: ''; }
    public static function cssTemplate(): string { return file_get_contents(__DIR__ . '/css.twig') ?: self::defaultCss(); }

    public static function defaultProperties(): array
    {
        return ['content' => ['content' => ['eyebrow' => 'Erfahrungen', 'title' => 'Unterwegs mit KEA', 'intro' => 'Geschichten von Sprachreisen, die in Erinnerung bleiben.', 'limit' => 12]]];
    }

    public static function contentControls(): array
    {
        return [c('content', 'Inhalt', [
            c('eyebrow', 'Kicker', [], ['type' => 'text'], false, false, []),
            c('title', 'Überschrift', [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []),
            c('intro', 'Einleitung', [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []),
            c('limit', 'Anzahl', [], ['type' => 'number', 'rangeOptions' => ['min' => 1, 'max' => 24]], false, false, []),
        ], ['type' => 'section'], false, false, [])];
    }

    public static function designControls(): array
    {
        return [c('typography', 'Typografie', [
            getPresetSection('EssentialElements\\typography', 'Kicker', 'eyebrow', ['type' => 'popout']),
            getPresetSection('EssentialElements\\typography', 'Überschrift', 'title', ['type' => 'popout']),
            getPresetSection('EssentialElements\\typography', 'Einleitung', 'intro', ['type' => 'popout']),
            getPresetSection('EssentialElements\\typography', 'Zitat', 'quote', ['type' => 'popout']),
            getPresetSection('EssentialElements\\typography', 'Quelle', 'source', ['type' => 'popout']),
        ], ['type' => 'section'], false, false, []), c('colors', 'Farben', [
            c('background', 'Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
            c('text', 'Text', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
        ], ['type' => 'section'], false, false, [])];
    }
}
