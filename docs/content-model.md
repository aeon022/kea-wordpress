# Content-Modell

## Primäre Beziehungen

| Untergeordneter Datensatz | Pflichtbeziehung |
| --- | --- |
| Partnerschule | Reiseziel (`kea_school_destination`) |
| Programm | Reiseziel (`kea_program_destination`) und Partnerschule (`kea_program_school`) |
| Erfahrung | optional Reiseziel und Programm |

Reiseziele verwalten lediglich kuratierte Auswahlen über `kea_destination_featured_schools` und `kea_destination_featured_programs`. Schulen pflegen keine gegenläufige Programmliste; Programme werden dynamisch über ihre primäre Beziehung abgefragt.

Die ACF-Feldgruppen liegen versioniert im Plugin unter `acf-json/`. Preise bleiben optional und dürfen nur mit gepflegter Gültigkeit und eindeutigem Hinweis ausgegeben werden.

## Magazin

Das Magazin verwendet native WordPress-Beiträge (`post`) und die native Taxonomie `category`. Es gibt keinen zusätzlichen Custom Post Type und keine ACF-Doppelpflege.

Verbindliche Kategorien:

- Ratgeber (`ratgeber`)
- Reiseberichte (`reiseberichte`)
- Aktuelles (`aktuelles`, Standardkategorie)

Titel, Kurztext, Beitragsbild und Inhalt werden direkt am Beitrag gepflegt. Archiv und Einzelansicht entstehen automatisch über die globalen Breakdance-Templates.
