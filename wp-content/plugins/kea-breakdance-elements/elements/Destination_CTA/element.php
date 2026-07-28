<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Destination_CTA/element.php
declare(strict_types=1);
namespace KeaBreakdanceElements;
if (!defined('ABSPATH')) { exit; }
use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;
\Breakdance\ElementStudio\registerElementForEditing('KeaBreakdanceElements\\DestinationCta', \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__));
class DestinationCta extends \Breakdance\Elements\Element {
    public static function uiIcon(): string { return 'SquareIcon'; } public static function tag(): string { return 'section'; } public static function name(): string { return 'Profil-CTA'; } public static function className(): string { return 'kea-destination-cta'; } public static function category(): string { return 'kea'; } public static function slug(): string { return __CLASS__; } public static function template(): string { return '%%SSR%%'; } public static function defaultCss(): string { return file_get_contents(__DIR__ . '/default.css') ?: ''; } public static function cssTemplate(): string { return file_get_contents(__DIR__ . '/css.twig') ?: self::defaultCss(); }
    public static function defaultProperties(): array { return ['content' => ['heading' => 'Deine Sprachreise beginnt mit einem Gespräch.', 'text' => 'Wir finden gemeinsam das passende Programm für dich.', 'label' => 'Kostenlos beraten lassen']]; }
    public static function contentControls(): array { return [c('content', 'Inhalt', [c('heading', 'Überschrift', [], ['type' => 'text', 'layout' => 'vertical'], false, false, []), c('text', 'Text', [], ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['multiline' => true]], false, false, []), c('label', 'CTA-Text', [], ['type' => 'text', 'layout' => 'vertical'], false, false, [])], ['type' => 'section'], false, false, [])]; }
    public static function designControls(): array { return [c('typography', 'Typografie', [getPresetSection('EssentialElements\\typography', 'Überschrift', 'heading', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Text', 'text', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'CTA', 'button', ['type' => 'popout'])], ['type' => 'section'], false, false, []), c('colors', 'Farben', [c('background', 'Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []), c('text', 'Text', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []), c('button_background', 'CTA-Hintergrund', [], ['type' => 'color', 'layout' => 'vertical'], false, false, []), c('button_text', 'CTA-Text', [], ['type' => 'color', 'layout' => 'vertical'], false, false, [])], ['type' => 'section'], false, false, [])]; }
}
