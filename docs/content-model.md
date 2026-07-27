# Content-Modell

## Primäre Beziehungen

| Untergeordneter Datensatz | Pflichtbeziehung |
| --- | --- |
| Partnerschule | Reiseziel (`kea_school_destination`) |
| Programm | Reiseziel (`kea_program_destination`) und Partnerschule (`kea_program_school`) |
| Erfahrung | optional Reiseziel und Programm |

Reiseziele verwalten lediglich kuratierte Auswahlen über `kea_destination_featured_schools` und `kea_destination_featured_programs`. Schulen pflegen keine gegenläufige Programmliste; Programme werden dynamisch über ihre primäre Beziehung abgefragt.

Die ACF-Feldgruppen liegen versioniert im Plugin unter `acf-json/`. Preise bleiben optional und dürfen nur mit gepflegter Gültigkeit und eindeutigem Hinweis ausgegeben werden.
