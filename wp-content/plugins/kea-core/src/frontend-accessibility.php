<?php
// Dateipfad: src/frontend-accessibility.php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

function kea_core_translate_breakdance_ui(string $translation, string $text, string $domain): string
{
    if (!in_array($domain, ['breakdance', 'breakdance-elements'], true)) {
        return $translation;
    }

    return match ($text) {
        'Open Menu' => 'Menü öffnen',
        'Close', 'Close Menu' => 'Menü schließen',
        'Toggle search' => 'Suche öffnen',
        'Close search' => 'Suche schließen',
        'Search', 'Search for:' => 'Suchen',
        default => $translation,
    };
}
