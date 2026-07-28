<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_Hero/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) {
    exit;
}

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing(
    'KeaBreakdanceElements\\DestinationHero',
    \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__)
);

class DestinationHero extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string
    {
        return 'HeadingIcon';
    }

    public static function tag(): string
    {
        return 'section';
    }

    public static function name(): string
    {
        return 'Profil-Hero';
    }

    public static function className(): string
    {
        return 'kea-destination-hero';
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
                'content' => [
                    'cta_label' => 'Kostenlos beraten lassen',
                ],
            ],
        ];
    }

    public static function contentControls(): array
    {
        return [
            c('content', 'Inhalt', [
                c('cta_label', 'CTA-Text', [], ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['multiline' => true]], false, false, []),
            ], ['type' => 'section'], false, false, []),
        ];
    }

    public static function designControls(): array
    {
        return [
            c('typography', 'Typografie', [
                getPresetSection('EssentialElements\\typography', 'Kicker', 'eyebrow', ['type' => 'popout']),
                getPresetSection('EssentialElements\\typography', 'Überschrift', 'title', ['type' => 'popout']),
                getPresetSection('EssentialElements\\typography', 'Einleitung', 'intro', ['type' => 'popout']),
                getPresetSection('EssentialElements\\typography', 'CTA', 'cta', ['type' => 'popout']),
            ], ['type' => 'section'], false, false, []),
            c('colors', 'Farben', [
                c('background', 'Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('heading', 'Überschrift', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('text', 'Text', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('overlay', 'Bild-Overlay', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('cta_background', 'CTA-Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
                c('cta_text', 'CTA-Text', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []),
            ], ['type' => 'section'], false, false, []),
        ];
    }
}
