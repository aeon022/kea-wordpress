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

    switch ($text) {
        case 'Open Menu':
            return 'Menü öffnen';
        case 'Close':
        case 'Close Menu':
            return 'Menü schließen';
        case 'Toggle search':
            return 'Suche öffnen';
        case 'Close search':
            return 'Suche schließen';
        case 'Search':
        case 'Search for:':
            return 'Suchen';
        default:
            return $translation;
    }
}
