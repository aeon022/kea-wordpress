<?php
// Dateipfad: wp-content/plugins/kea-breakdance-elements/elements/Home_Guide/element.php
declare(strict_types=1);

namespace KeaBreakdanceElements;

if (!defined('ABSPATH')) { exit; }

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;

\Breakdance\ElementStudio\registerElementForEditing('KeaBreakdanceElements\\HomeGuide', \Breakdance\Util\getDirectoryPathRelativeToPluginFolder(__DIR__));

class HomeGuide extends \Breakdance\Elements\Element
{
    public static function uiIcon(): string { return 'ListIcon'; }
    public static function tag(): string { return 'section'; }
    public static function name(): string { return 'Startseiten-Orientierung'; }
    public static function className(): string { return 'kea-home-guide'; }
    public static function category(): string { return 'kea'; }
    public static function slug(): string { return __CLASS__; }
    public static function template(): string { return '%%SSR%%'; }
    public static function defaultCss(): string { return file_get_contents(__DIR__ . '/default.css') ?: ''; }
    public static function defaultProperties(): array { return ['content' => ['content' => [
        'audience_eyebrow' => 'Für wen?', 'audience_title' => 'Deine Reise. Dein nächstes Kapitel.',
        'audience_1_title' => 'Erwachsene', 'audience_1_text' => 'Neue Sprache. Neue Stadt. Neue Perspektive.', 'audience_1_url' => '/sprachreisen/erwachsene/',
        'audience_2_title' => 'Schüler & Jugendliche', 'audience_2_text' => 'Raus aus dem Schulbuch. Rein ins echte Leben.', 'audience_2_url' => '/sprachreisen/schueler-jugendliche/',
        'audience_3_title' => 'Lehrerfortbildung', 'audience_3_text' => 'Sprache weitergeben heißt, selbst in Bewegung zu bleiben.', 'audience_3_url' => '/sprachreisen/lehrerfortbildung/',
        'audience_4_title' => 'Business', 'audience_4_text' => 'Sprachkompetenz für Situationen, in denen jedes Wort zählt.', 'audience_4_url' => '/sprachreisen/business/',
        'why_eyebrow' => 'Warum KEA?', 'why_title' => 'Persönlich statt Plattform.', 'why_text' => 'Du erzählst uns, was du vorhast. Wir finden den Ort und die Schule, die wirklich zu dir passen – und bleiben dein Ansprechpartner.', 'why_label' => 'Mehr über KEA', 'why_url' => '/warum-kea/',
        'benefit_1' => 'Ausgewählt statt endlos', 'benefit_2' => 'Ein Ansprechpartner', 'benefit_3' => 'Organisation kostenfrei', 'benefit_4' => 'Vor Ort nicht allein',
        'steps_eyebrow' => 'So funktioniert KEA', 'steps_title' => 'Gut beraten. Gut unterwegs.', 'step_1' => 'Wünsche besprechen', 'step_2' => 'Passende Schulen vergleichen', 'step_3' => 'Reise gemeinsam organisieren', 'step_4' => 'Während des Aufenthalts begleitet bleiben',
        'cta_eyebrow' => 'Dein nächstes Kapitel beginnt nicht im Klassenzimmer.', 'cta_title' => 'Wir planen deine Sprachreise persönlich.', 'cta_label' => 'Beratung vereinbaren', 'cta_url' => '/anfrage/',
    ]]]; }
    public static function contentControls(): array { return [
        c('audiences', 'Zielgruppen', [c('audience_eyebrow', 'Kicker', [], ['type' => 'text'], false, false, []), c('audience_title', 'Überschrift', [], ['type' => 'text'], false, false, []), ...self::cardControls()], ['type' => 'section'], false, false, []),
        c('why', 'Warum KEA?', [c('why_eyebrow', 'Kicker', [], ['type' => 'text'], false, false, []), c('why_title', 'Überschrift', [], ['type' => 'text'], false, false, []), c('why_text', 'Text', [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []), c('why_label', 'Link-Text', [], ['type' => 'text'], false, false, []), c('why_url', 'Link-URL', [], ['type' => 'text'], false, false, []), c('benefit_1', 'Vorteil 1', [], ['type' => 'text'], false, false, []), c('benefit_2', 'Vorteil 2', [], ['type' => 'text'], false, false, []), c('benefit_3', 'Vorteil 3', [], ['type' => 'text'], false, false, []), c('benefit_4', 'Vorteil 4', [], ['type' => 'text'], false, false, [])], ['type' => 'section'], false, false, []),
        c('steps', 'Ablauf', [c('steps_eyebrow', 'Kicker', [], ['type' => 'text'], false, false, []), c('steps_title', 'Überschrift', [], ['type' => 'text'], false, false, []), c('step_1', 'Schritt 1', [], ['type' => 'text'], false, false, []), c('step_2', 'Schritt 2', [], ['type' => 'text'], false, false, []), c('step_3', 'Schritt 3', [], ['type' => 'text'], false, false, []), c('step_4', 'Schritt 4', [], ['type' => 'text'], false, false, [])], ['type' => 'section'], false, false, []),
        c('cta', 'Abschluss-CTA', [c('cta_eyebrow', 'Kicker', [], ['type' => 'text'], false, false, []), c('cta_title', 'Überschrift', [], ['type' => 'text'], false, false, []), c('cta_label', 'Button-Text', [], ['type' => 'text'], false, false, []), c('cta_url', 'Button-URL', [], ['type' => 'text'], false, false, [])], ['type' => 'section'], false, false, []),
    ]; }

    private static function cardControls(): array { $controls = []; for ($index = 1; $index <= 4; $index++) { $controls[] = c('audience_' . $index . '_title', 'Titel ' . $index, [], ['type' => 'text'], false, false, []); $controls[] = c('audience_' . $index . '_text', 'Text ' . $index, [], ['type' => 'text', 'textOptions' => ['multiline' => true]], false, false, []); $controls[] = c('audience_' . $index . '_url', 'URL ' . $index, [], ['type' => 'text'], false, false, []); } return $controls; }
    public static function cssTemplate(): string { return file_get_contents(__DIR__ . '/css.twig') ?: self::defaultCss(); }
    public static function designControls(): array { return [c('typography', 'Typografie', [getPresetSection('EssentialElements\\typography', 'Kicker', 'eyebrow', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Überschriften', 'heading', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Texte', 'text', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Karten', 'card', ['type' => 'popout']), getPresetSection('EssentialElements\\typography', 'Links und Buttons', 'link', ['type' => 'popout'])], ['type' => 'section'], false, false, [])]; }
}
