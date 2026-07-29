# KEA Core

Projektplugin für KEA Sprachreisen.

## Zweck

Dieses Plugin registriert projektspezifische Content Types, Taxonomien und kleine Hilfsfunktionen.

## Enthalten

- Reiseziele
- Partnerschulen
- Programme
- Erfahrungen
- Team
- Sprachen
- Länder
- Zielgruppen
- Kursarten
- Altersgruppen
- Interessen
- Unterkunftsarten
- leere Magazin-Kategorien als gültige Archive
- Anfrage-Kontext
- versionierte ACF-Feldgruppen

## Nicht enthalten

- Layouts
- Breakdance Templates
- Headspin UI Tokens
- ACF-Feldgruppen
- Designlogik

## ACF Local JSON

Die Feldgruppen liegen unter `acf-json/` und werden beim Laden des Plugins
automatisch als ACF-JSON-Pfad registriert.

## Deployment

Plugin-Ordner als `kea-core` nach WordPress hochladen:

```text
wp-content/plugins/kea-core/
