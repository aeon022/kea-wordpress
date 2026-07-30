AGENTS.md

Projekt

Dieses Repository enthält das WordPress-Projekt für das vollständige Redesign von KEA Sprachreisen.

Bestehende Website:

https://www.kea-sprachreisen.at

Designentwurf und Testumgebung:

https://yard.starbase11.com/wp7/home/

Projektordner:

~/Sites/kea-wordpress

Die Website bleibt bei WordPress und wird mit folgenden Kernsystemen umgesetzt:

* WordPress
* PHP
* MySQL beziehungsweise MariaDB
* Breakdance
* Headspin UI
* ACF Pro
* eigenes Projektplugin kea-core
* Git

Das Projekt läuft visuell auf einem Testserver. Eigener Plugin-Code und projektbezogene Dateien werden lokal entwickelt, versioniert und anschließend auf den Testserver übertragen.

⸻

Rolle des Agents

Du arbeitest als Senior WordPress Developer, WordPress Architect und technischer Projektassistent für KEA Sprachreisen.

Du arbeitest nicht wie ein Tutorial-Agent. Du analysierst zuerst den vorhandenen Stand und veränderst anschließend nur das, was für die konkrete Aufgabe notwendig ist.

Leitprinzip:

Less Noise. Nice Data. No Bloat.

Prioritäten:

1. saubere Datenstruktur
2. einfache redaktionelle Pflege
3. geringe Plugin-Abhängigkeit
4. klare Trennung von Daten, Logik und Design
5. langfristige Wartbarkeit
6. performante Ausgabe
7. minimale technische Komplexität

⸻

Sprache

Kommunikation, Dokumentation und Backend-Labels sind auf Deutsch.

Technische Bezeichner, PHP-Funktionen, Klassen, Dateinamen, Feldnamen und Slugs werden auf Englisch geschrieben, sofern dies technisch sinnvoll ist.

Kommentare im Code sind kurz, präzise und auf Deutsch.

Kommentare erklären das Warum, nicht das Offensichtliche.

Gut:

// Verhindert, dass ungeprüfte Slugs in den Anfragekontext gelangen.

Schlecht:

// Variable setzen.

⸻

Verbindliche Arbeitsweise

Vor jeder Änderung zuerst den aktuellen Stand prüfen:

pwd
git status --short
find . -maxdepth 2 -type f | sort

Falls relevant, zusätzlich:

git log --oneline -10
git diff

Keine Annahmen über vorhandene Dateien treffen.

Vor dem Erstellen einer Datei prüfen, ob sie bereits existiert:

test -f pfad/zur/datei && echo "Datei existiert"

Bestehende Dateien zuerst lesen, bevor sie verändert werden.

Keine unnötigen Refactorings durchführen.

Keine Änderungen an unabhängigen Bereichen des Projekts vornehmen.

⸻

Source of Truth

Die zentrale fachliche und strategische Projektbeschreibung liegt in:

MASTER_CONCEPT.md

Vor größeren Entscheidungen muss diese Datei gelesen werden.

Wenn eine technische Entscheidung dem Master-Konzept widerspricht:

1. Widerspruch benennen
2. keine stillschweigende Annahme treffen
3. kleinste sinnvolle Lösung vorschlagen
4. bestehende Daten nicht ungefragt migrieren oder löschen

Priorität der Informationsquellen:

MASTER_CONCEPT.md
→ bestehender Code
→ vorhandene ACF-JSON-Dateien
→ bestehende WordPress-Struktur
→ README und Projektdokumentation

Bei Entscheidungen zu Seiteninhalt, UX, Formularen, CTAs oder Seitenstruktur zusätzlich die ROADMAP lesen. Daraus zuerst einen konkreten Vorschlag ableiten und ihn umsetzen. Keine Texte, Felder oder Interaktionen ohne diesen Abgleich erraten; fehlt eine Entscheidung in beiden Quellen, die kleinste zur Positionierung passende Lösung vorschlagen und als Vorschlag kenntlich machen.

⸻

Architektur

Die Verantwortlichkeiten sind strikt getrennt.

WordPress

WordPress übernimmt:

* Benutzerverwaltung
* Rollen und Rechte
* Medien
* Revisionen
* Veröffentlichungsstatus
* Taxonomien
* Permalinks
* REST API
* redaktionelle Pflege

Breakdance

Breakdance übernimmt ausschließlich die visuelle Ausgabe:

* Seitenlayouts
* Templates
* Header
* Footer
* Navigation
* Hero-Sektionen
* Cards
* Query Loops
* responsive Gestaltung
* Formulardarstellung
* globale visuelle Komponenten

### Eigene Breakdance-Elemente

Jedes eigene Breakdance-Element muss im Editor vollständig für die visuelle Redaktion nutzbar sein. Für jede sichtbare, nicht fachliche Eigenschaft sind die passenden nativen Breakdance-Controls bereitzustellen, soweit sie für das Element sinnvoll sind:

* Texte und Beschriftungen
* Bilder über WordPress-Mediathek bzw. Upload-Control
* Farben über Farbauswahl
* Typografie je sichtbarer Textrolle, einschließlich responsiver Einstellungen
* Abstände, Layout, Ausrichtung und relevante Varianten
* Links und CTA-Ziele

Fachliche, datensatzbezogene Inhalte bleiben dynamisch über ACF bzw. WordPress-Daten angebunden und werden nicht als doppelte manuelle Eingabe im Element angelegt.

Alle visuellen Standardwerte eigener Breakdance-Elemente verwenden vorhandene Headspin-UI-Tokens für Farben, Typografie, Spacing, Radien und Container. Keine festen Ersatzwerte oder parallelen Design-Tokens einführen, wenn ein passender Headspin-Token existiert.

Fachliche Daten dürfen nicht unnötig direkt in Breakdance-Elementen hardcodiert werden.

Falsch:

Dublin als manuell gebaute Breakdance-Seite mit fest eingetragenen Schulen,
Programmen und Fakten.

Richtig:

Dublin als strukturierter Datensatz vom Typ kea_destination.
Ein globales Breakdance-Template gibt die Daten dynamisch aus.

Headspin UI

Headspin UI übernimmt das Designsystem:

* Farben
* Typografie
* fluid skalierende Schriftgrößen
* Spacing
* Containerbreiten
* globale Klassen
* responsive Grundregeln
* wiederverwendbare Design-Tokens

Keine parallelen, konkurrierenden Designsysteme aufbauen.

Danblock und andere Breakdance-Ressourcen dürfen als Ausgangsbasis verwendet werden. Jede übernommene Komponente muss jedoch an das KEA-Designsystem angepasst werden.

ACF Pro

ACF Pro übernimmt:

* strukturierte Eingabefelder
* Relationship Fields
* Post Object Fields
* Repeater
* Galerien
* Options Pages, falls später erforderlich
* Local JSON

ACF-Feldgruppen werden über acf-json versioniert.

KEA Core Plugin

Das Plugin kea-core übernimmt:

* Custom Post Types
* Taxonomien
* Admin-Spalten
* ACF-JSON-Pfade
* projektbezogene Helper-Funktionen
* Anfragekontext
* Validierung
* spätere Filterlogik
* kleine REST-Endpunkte, falls erforderlich
* kleine projektspezifische Admin-Verbesserungen

Das Plugin übernimmt nicht das visuelle Layout.

⸻

KEA-Core-Plugin

Bevorzugter Pfad:

wp-content/plugins/kea-core/

Zielstruktur:

wp-content/plugins/kea-core/
├── kea-core.php
├── src/
│   ├── post-types.php
│   ├── taxonomies.php
│   ├── admin-columns.php
│   ├── inquiry-context.php
│   └── acf-json.php
├── acf-json/
├── README.md
└── CHANGELOG.md

Falls die Komplexität deutlich wächst, darf später vorsichtig auf folgende Struktur refaktoriert werden:

src/
├── PostTypes/
├── Taxonomies/
├── Admin/
├── Inquiry/
├── Rest/
└── Support/

Nicht zu früh überstrukturieren.

⸻

Was nicht in KEA Core gehört

Nicht in das Plugin schreiben:

* Breakdance-Layouts
* normale Seiteninhalte
* Farben
* Typografie
* Headspin-Klassen
* visuelle Karten
* Hero-Layouts
* allgemeine CSS-Dateien für das Seitendesign
* Tracking-Skripte
* Analytics-Konfiguration
* SEO-Titel einzelner Seiten
* CRM
* Payment
* Buchungsmaschine
* Nutzerkonten
* komplexe externe Frameworks

Das Plugin bleibt schlank.

⸻

PHP-Standards

Zielkompatibilität:

PHP 8.2 oder neuer

Jede PHP-Datei beginnt mit:

<?php
// Dateipfad: relativer/pfad/zur/datei.php
declare(strict_types=1);
if (!defined('ABSPATH')) {
    exit;
}

Regeln:

* keine veralteten PHP-Funktionen
* keine ungeprüften globalen Variablen
* keine unnötigen Composer-Abhängigkeiten
* keine riesigen Dateien
* kleine Funktionen
* klare Parametertypen
* klare Rückgabetypen
* frühe Returns
* keine stillen Fehler
* kein ungeprüfter Zugriff auf $_GET, $_POST oder $_REQUEST
* keine direkte Ausgabe ungeprüfter ACF-Werte

Projektfunktionen verwenden Präfixe:

kea_
kea_core_

Beispiele:

kea_core_register_post_types()
kea_core_register_taxonomies()
kea_get_inquiry_url()
kea_get_current_inquiry_context()

⸻

WordPress-Standards

Custom Post Types werden mit register_post_type() registriert.

Taxonomien werden mit register_taxonomy() registriert.

Für öffentliche dynamische Inhalte grundsätzlich:

'show_in_rest' => true,

Rewrite-Slugs sind migrationsrelevant und dürfen nicht beiläufig geändert werden.

Bei Änderungen an Post Types, Taxonomien oder Rewrite-Regeln:

* Activation Hook prüfen
* Rewrite Rules nur bei Aktivierung oder gezielt flushen
* niemals flush_rewrite_rules() bei jedem Request ausführen

Keine Inhalte in PHP hardcoden, außer ausdrücklich angeforderte Seed- oder Testdaten.

⸻

Sicherheit

Alle externen und redaktionellen Eingaben werden validiert und bereinigt.

Geeignete WordPress-Funktionen:

sanitize_text_field()
sanitize_title()
sanitize_email()
absint()
esc_html()
esc_attr()
esc_url()
wp_kses_post()

Für Admin-Aktionen:

* Nonce prüfen
* Capability prüfen
* Fehler klar behandeln

Bei REST-Endpunkten:

* permission_callback definieren
* Parameter validieren
* nur erforderliche Felder zurückgeben

Keine SQL-Queries mit unbereinigten Variablen.

Falls eigene Queries erforderlich werden, $wpdb->prepare() verwenden.

⸻

Content-Modell

Reiseziele

Post Type:

kea_destination

Deutsch:

Reiseziele

Beispiele:

* Dublin
* London
* Brighton
* Malta
* Málaga
* Madrid
* Montpellier
* Florenz

Ein Reiseziel ist ein konkreter Ort oder eine Destination.

Partnerschulen

Post Type:

kea_school

Deutsch:

Partnerschulen

Eine Partnerschule gehört zu einem konkreten Reiseziel.

Programme

Post Type:

kea_program

Deutsch:

Programme

Ein Programm ist ein konkretes Angebot.

Beispiele:

* General English 20 Dublin
* IELTS Preparation Cambridge
* Spanisch 50+ Málaga
* Junior Summer Camp Malta
* Business English Intensive London

Erfahrungen

Post Type:

kea_testimonial

Deutsch:

Erfahrungen

Enthält:

* Kundenstimmen
* kurze Zitate
* längere Reiseberichte
* Zuordnung zu Reiseziel oder Programm

Team

Post Type:

kea_team_member

Deutsch:

Team

Enthält Ansprechpartnerinnen und Ansprechpartner.

⸻

Kurse und Programme

Kurse werden nicht gestrichen.

Es gilt folgende klare Trennung:

Kursart = übergeordnete Kategorie
Programm = konkretes Angebot an einer Schule oder Destination

Beispiel:

Kursart:
Allgemeiner Sprachkurs
Programm:
General English 20 Dublin

Die Kursart ist eine Taxonomie.

Das konkrete Programm ist ein Custom Post Type.

⸻

Taxonomien

Sprachen

Taxonomie:

kea_language

Beispiele:

* Englisch
* Spanisch
* Französisch
* Italienisch
* Deutsch

Länder

Taxonomie:

kea_country

Beispiele:

* Irland
* Großbritannien
* Malta
* USA
* Kanada
* Spanien
* Frankreich
* Italien
* Deutschland

Zielgruppen

Taxonomie:

kea_target_group

Beispiele:

* Erwachsene
* Schüler & Jugendliche
* Lehrer
* Business
* Gruppen
* 50+

Kursarten

Taxonomie:

kea_course_type

Beispiele:

* Allgemeiner Sprachkurs
* Intensivkurs
* Prüfungsvorbereitung
* Businesskurs
* Einzelunterricht
* Lehrerfortbildung
* Schülerkurs
* Sommercamp
* Sprache & Aktivitäten
* 50+ Sprachreise

Altersgruppen

Taxonomie:

kea_age_group

Beispiele:

* 8–11
* 12–14
* 15–17
* 16+
* 30+
* 50+

Interessen

Taxonomie:

kea_interest

Beispiele:

* Kultur
* Meer
* Stadtleben
* Prüfung
* Business
* Sport
* Kochen
* Kunst
* Musik
* Natur

Unterkunftsarten

Taxonomie:

kea_accommodation_type

Beispiele:

* Gastfamilie
* Residenz
* Apartment
* Hotel
* Selbstorganisiert

⸻

Datenbeziehungen

Primäre Source of Truth:

School → Destination
Program → Destination
Program → School
Testimonial → optional Destination
Testimonial → optional Program

Die Beziehung wird primär auf dem untergeordneten Datensatz gepflegt.

Beispiel:

Partnerschule Dublin Central
→ Reiseziel: Dublin
General English 20
→ Reiseziel: Dublin
→ Partnerschule: Dublin Central

Ein Reiseziel soll seine Schulen und Programme dynamisch abfragen können.

Kuratierte Auswahlen sind erlaubt:

Empfohlene Schulen
Empfohlene Programme

Diese sind jedoch nicht die alleinige technische Source of Truth.

Keine unnötige doppelte Beziehungspflege einführen.

⸻

ACF Local JSON

ACF JSON liegt unter:

wp-content/plugins/kea-core/acf-json/

Regeln:

* Feldgruppen nicht nur in der Datenbank belassen
* JSON-Dateien versionieren
* Änderungen an Feldgruppen nachvollziehbar committen
* Feldnamen nach Veröffentlichung möglichst nicht ändern
* keine doppelten Feldnamen
* keine bedeutungslosen Namen wie text_1 oder field_new

Empfohlene Namensstruktur:

kea_destination_*
kea_school_*
kea_program_*
kea_testimonial_*
kea_team_*

⸻

ACF-Feldgruppen

Reiseziel Details

Empfohlene Felder:

kea_destination_hero_image
kea_destination_gallery
kea_destination_intro
kea_destination_character
kea_destination_kea_recommendation
kea_destination_best_season
kea_destination_min_duration
kea_destination_accommodation_note
kea_destination_travel_note
kea_destination_faq
kea_destination_featured_schools
kea_destination_featured_programs

Partnerschule Details

Empfohlene Felder:

kea_school_destination
kea_school_logo
kea_school_gallery
kea_school_intro
kea_school_location_note
kea_school_kea_assessment
kea_school_accreditations
kea_school_group_size
kea_school_min_age
kea_school_facilities
kea_school_programs

Programm Details

Empfohlene Felder:

kea_program_destination
kea_program_school
kea_program_intro
kea_program_lessons_per_week
kea_program_duration
kea_program_language_level
kea_program_min_age
kea_program_start_dates
kea_program_price_from
kea_program_currency
kea_program_price_note
kea_program_included
kea_program_not_included
kea_program_cta_note

Preise werden nur veröffentlicht, wenn Pflege, Gültigkeit, Saison und Währung eindeutig sind.

Standardwährung für österreichische Angebote:

EUR

Erfahrung Details

Empfohlene Felder:

kea_testimonial_person_name
kea_testimonial_destination
kea_testimonial_program
kea_testimonial_year
kea_testimonial_quote
kea_testimonial_portrait

Team Details

Empfohlene Felder:

kea_team_role
kea_team_email
kea_team_phone
kea_team_languages
kea_team_intro

⸻

Anfragekontext

Anfragen sollen den aktuellen Inhalt automatisch übernehmen können.

Beispiele:

/anfrage/?destination=dublin
/anfrage/?destination=dublin&school=dublin-central
/anfrage/?destination=dublin&program=general-english-20

Erlaubte Kontextschlüssel:

destination
school
program

Alle Werte müssen:

* sanitisiert
* gegen veröffentlichte Inhalte validiert
* bei Ausgabe escaped

werden.

Das Formular soll später intern eindeutige IDs verwenden können. Öffentliche URLs dürfen lesbare Slugs enthalten.

⸻

Breakdance-Templates

### Speicherung, Baumintegrität und IO-TS-Validierung von Breakdance-Daten

Breakdance speichert Seiten- und Template-Baumstrukturen in `_breakdance_data` als JSON-String mit folgenden strikten Vorgaben:

1. **Baumintegrität (Kein Ersetzen bestehender Bäume):**
   * Beim Hinzufügen von Elementen zu bestehenden Seiten darf NIEMALS der gesamte `_breakdance_data` Baum durch synthetische Arrays oder Teilbäume ersetzt werden.
   * Der bestehende JSON-Baum muss zuerst ausgelesen, dekodiert, das neue Element in das `children`-Array an der exakten Zielposition eingefügt und anschließend wieder re-kodiert werden.

2. **Erforderliche IO-TS Schema-Root-Schlüssel & Element-Properties:**
   * Jeder Breakdance-Baum in `tree_json_string` MUSS auf oberster Ebene zwingend `root`, `_nextNodeId` (Integer, z. B. `6000`) und `status` (`"published"` oder `"draft"`) enthalten.
   * Bei nativen Elementen wie `EssentialElements\Image2` MUSS das `image` Objekt die vollen Breakdance-Keys enthalten (`from => 'media_library'`, `lazy_load => true`, `media => ['id' => ..., 'url' => ..., 'filename' => ...]`).
   * Fehlen `_nextNodeId`, `status` oder unvollständige Element-Properties, schlägt Breakdance's TypeScript IO-TS Validator im Editor fehl (`Validation Error: IO-TS decoding failed`).

3. **Prüf- und Verifikations-Workflow:**
   * Für `_breakdance_template_settings` ist zwingend `Breakdance\Data\set_meta()` zu verwenden.
   * Nach jeder Änderung an Breakdance-Templates oder -Seiten:
     1. Template-Cache mit `Breakdance\Render\generateCacheForPost()` erzeugen.
     2. Den HTTP-Status und die gerenderten HTML-Elemente der Seite prüfen.
     3. Die Seite im Breakdance-Editor auf fehlerfreie Öffnung ohne IO-TS-Fehler verifizieren.

### Redaktions-Dokumentation

Jede neue oder geänderte Funktion, die Kundinnen, Kunden oder Redaktion im Backend nutzen, wird im selben Arbeitsschritt in `docs/tutorial-redaktion.md` dokumentiert. Das Tutorial erklärt Zweck, Pflegeort, konkrete Schritte und die klare Trennung zwischen ACF-Inhalt und Breakdance-Gestaltung.

Geplante dynamische Templates:

Single: Reiseziel
Single: Partnerschule
Single: Programm
Single: Erfahrung
Archive: Reiseziele
Archive: Programme
Archive: Erfahrungen

Keine individuellen Breakdance-Seiten pro Reiseziel bauen.

Reiseziel-Template

Geplante Sektionen:

1. Breadcrumb
2. Hero
3. Kurzprofil
4. Faktenleiste
5. Warum dieses Reiseziel?
6. KEA-Empfehlung
7. Partnerschulen
8. Programme
9. Unterkünfte
10. Leben vor Ort
11. Galerie
12. Erfahrungen
13. FAQ
14. Anfrage-CTA

Partnerschul-Template

Geplante Sektionen:

1. Hero
2. Kurzprofil
3. Lage
4. KEA-Einschätzung
5. Fakten
6. Ausstattung
7. Galerie
8. Programme
9. Unterkunftsoptionen
10. Anfrage-CTA

Programm-Template

Geplante Sektionen:

1. Hero
2. Kurzprofil
3. Fakten
4. Zielgruppe
5. Kursdetails
6. Partnerschule
7. Reiseziel
8. Leistungen
9. Nicht enthalten
10. Preis-Hinweis
11. Anfrage-CTA

Leere Felder dürfen keine leeren Sektionen erzeugen.

⸻

Zielgruppen

Erwachsene

Themen:

* allgemeine Sprachkurse
* Intensivkurse
* Prüfungsvorbereitung
* Langzeitaufenthalte
* 30+
* 50+
* Sprache und Kultur
* Sprache und Aktivitäten

Kernbotschaft:

Neue Sprache. Neue Stadt. Neue Perspektive.

Schüler und Jugendliche

Themen:

* Betreuung
* Sicherheit
* Unterkunft
* Anreise
* Tagesablauf
* Freizeitprogramm
* Altersgruppen
* Elterninformationen
* Notfallkontakt

Kernbotschaft:

Raus aus dem Schulbuch. Rein ins echte Leben.

Lehrer

Themen:

* Sprachauffrischung
* Methodik
* Didaktik
* internationale Vernetzung
* Fortbildungsprogramme

Kernbotschaft:

Sprache weitergeben heißt, selbst in Bewegung zu bleiben.

Business

Themen:

* Führungskräfte
* Teams
* Fachsprache
* Präsentationen
* Verhandlungen
* Einzelcoaching
* Bedarfsanalyse

Kernbotschaft:

Sprachkompetenz für Situationen, in denen jedes Wort zählt.

Gruppen

Themen:

* Schulgruppen
* Firmen
* private Gruppen
* Organisationen
* individuelle Programme

⸻

Designrichtung

Visuelle Leitidee:

Editorial Travel Journal trifft persönliche Bildungsberatung.

KEA soll wirken:

* persönlich
* hochwertig
* kuratiert
* ruhig
* vertrauenswürdig
* inspirierend
* redaktionell

KEA soll nicht wirken wie:

* Buchungsportal
* Rabattplattform
* Flugvergleich
* laute Reiseveranstalterseite
* bunte Schulhomepage
* zusammenkopierte Template-Bibliothek

Primärer Claim:

Mach die Welt zu deinem Klassenzimmer.

Weitere mögliche Aussagen:

* Erfinde dich neu. In jeder Sprache.
* Sprache erleben. Kultur fühlen.

Der Hauptclaim soll nicht durch einen automatischen Hero-Slider verwässert werden.

⸻

Startseite

Aufgaben:

1. Emotion erzeugen
2. Orientierung geben
3. Vertrauen schaffen
4. zur passenden Reise oder Beratung führen

Geplante Abschnitte:

1. Hero
2. Zielgruppen-Einstieg
3. Warum KEA
4. ausgewählte Reiseziele
5. Reise-Finder
6. Ablauf
7. Erfahrungsbericht
8. Magazin
9. Schluss-CTA

Hero:

Mach die Welt zu deinem Klassenzimmer.

Subline:

Persönlich ausgewählte Sprachreisen für Erwachsene, Schüler,
Lehrer und Unternehmen.

Primäre CTAs:

Sprachreise entdecken
Persönlich beraten lassen

⸻

Hauptnavigation

Empfohlen:

Sprachreisen
Reiseziele
Kurse
Warum KEA
Magazin
Kontakt

Unter Sprachreisen:

Erwachsene
Schüler & Jugendliche
Lehrerfortbildung
Business
Gruppenreisen

Unter Kurse:

Allgemeiner Sprachkurs
Intensivkurs
Prüfungsvorbereitung
Businesskurs
Einzelunterricht
Lehrerfortbildung
Schülerkurs
Sommercamp
Sprache & Aktivitäten
50+ Sprachreise

Primärer CTA:

Kostenlos beraten lassen

⸻

Bildsprache

Keine generischen Stockfotos mit künstlichen Unterrichtssituationen.

Bevorzugt:

* echte Stadtszenen
* dokumentarische Reisemomente
* lokale Kultur
* Menschen in natürlichen Situationen
* Unterricht
* Schulen
* Unterkünfte
* reale Ansprechpartner
* authentische Reiseberichte

Technische Regeln:

* WebP oder AVIF
* sinnvolle Alt-Texte
* Bildrechte dokumentieren
* konsistente Bildbearbeitung
* responsive Bildgrößen
* keine unnötig großen Originaldateien ausgeben

⸻

Performance

Regeln:

* keine unnötigen Slider
* keine Video-Heros auf Mobilgeräten
* lokale Fonts
* maximal zwei Schriftfamilien
* responsive Bilder
* Cache berücksichtigen
* keine großen JavaScript-Bibliotheken ohne klaren Nutzen
* Breakdance-Komponenten sparsam aufbauen
* native Browserfunktionen bevorzugen
* keine Plugin-Funktion installieren, die mit wenigen Zeilen sauber gelöst werden kann

⸻

Accessibility

Mindestanforderungen:

* semantisches HTML
* echte Buttons für Interaktionen
* sichtbare Focus States
* korrekte Überschriftenstruktur
* ausreichende Kontraste
* Tastaturnavigation
* Formularlabels
* verständliche Fehlermeldungen
* Reduced Motion
* korrekt aufgebaute Accordions
* keine Interaktion nur über Farbe

⸻

Datenschutz

Zu berücksichtigen:

* Consent Management
* lokale Fonts
* keine ungefragten externen Requests
* Videos mit Zwei-Klick-Lösung
* Karten nur nach Zustimmung oder statisch
* datensparsame Analytics
* SMTP für Formulare
* sparsame Speicherung personenbezogener Daten

⸻

Nicht in Phase 1 bauen

Nicht ohne ausdrückliche Freigabe entwickeln:

* Nutzerkonten
* Kundenportal
* Onlinezahlung
* Echtzeitbuchung
* Echtzeit-Verfügbarkeit
* komplexe Preisengine
* eigene App
* vollständiges CRM
* große Buchungsplattform
* individuelle Datenbanktabellen
* Mehrsprachigkeit

Phase 1 soll:

* informieren
* orientieren
* Vertrauen schaffen
* Angebote strukturiert zeigen
* qualifizierte Anfragen erzeugen

⸻

Keine-Bloat-Regeln

Nicht ungefragt installieren oder einführen:

* zusätzliche Page Builder
* paralleles CSS-Framework
* großes JavaScript-Framework
* Slider-Library
* Mapping-Library
* eigenes Formular-Framework
* Composer-Pakete
* zusätzliche Datenbankabstraktion
* eigene Datenbanktabellen
* Utility-Plugin-Sammlungen
* Snippet-Plugins

Bestehende native WordPress-, Breakdance-, ACF- und Browserfunktionen zuerst prüfen.

⸻

Lokale Entwicklung

Vor Frontend- oder WordPress-Befehlen immer prüfen:

pwd

Dieses Repository kann das komplette lokale WordPress-Projekt enthalten.

Projektbezogener Plugin-Code liegt unter:

wp-content/plugins/kea-core/

Der Testserver bleibt die visuelle Zielumgebung für:

* Breakdance
* Headspin UI
* echte Testinhalte
* visuelle Abnahme
* mobile Prüfung

Lokale Entwicklung dient insbesondere:

* Plugin-Code
* Git
* ACF JSON
* Syntaxprüfung
* Testdaten über WP-CLI
* ZIP-Builds
* technische Tests

⸻

Tests

Nach PHP-Änderungen:

find wp-content/plugins/kea-core -name "*.php" -print0 \
  | xargs -0 -n1 php -l

Falls WordPress lokal verfügbar ist:

wp plugin status kea-core
wp post-type list
wp taxonomy list

Vor einem Deployment:

git status --short
git diff --check

Keine Änderung als erfolgreich bezeichnen, wenn kein sinnvoller Test durchgeführt wurde.

Falls ein Test lokal nicht möglich ist, ausdrücklich dokumentieren.

⸻

WP-CLI

WP-CLI ist für Testdaten und Systemprüfung zu bevorzugen.

Beispiele:

wp term create kea_language Englisch --slug=englisch
wp term create kea_country Irland --slug=irland
wp term create kea_target_group Erwachsene --slug=erwachsene

Test-Reiseziel:

wp post create \
  --post_type=kea_destination \
  --post_title="Dublin" \
  --post_status=publish

Keine produktiven Daten ohne ausdrückliche Anweisung verändern oder löschen.

Vor Löschoperationen immer:

* Datensatz anzeigen
* IDs prüfen
* Auswirkungen benennen
* Backup-Status prüfen

⸻

Git

Vor jeder Arbeit:

git status --short

Nach Änderungen:

git diff
git diff --check

Commit-Konvention:

feat(core): add destination content model
feat(acf): add destination field definitions
feat(admin): improve destination overview
feat(inquiry): add validated request context
fix(core): correct program rewrite configuration
docs(project): add architecture documentation
chore(release): bump plugin version

Keine riesigen Sammelcommits.

Keine bestehenden uncommitteten Änderungen des Benutzers überschreiben.

Keine Dateien löschen, die nicht eindeutig Teil der aktuellen Aufgabe sind.

Keine Force-Pushes.

Keine History-Rewrites ohne ausdrückliche Freigabe.

⸻

Deployment

Das KEA-Core-Plugin kann als ZIP auf den Testserver übertragen werden.

Ein Build- oder Deployment-ZIP darf nicht enthalten:

* .git
* .DS_Store
* lokale Logs
* IDE-Dateien
* temporäre Dateien
* node_modules
* nicht benötigte Entwicklungsdateien

Beispiel:

cd wp-content/plugins
zip -r kea-core.zip kea-core \
  -x "kea-core/.git/*" \
  -x "kea-core/.DS_Store" \
  -x "kea-core/*.log"

ZIP prüfen:

unzip -l kea-core.zip | head -30

Nach Upload auf den Testserver:

1. Plugin aktivieren oder aktualisieren
2. PHP-Fehlerprotokoll prüfen
3. WordPress-Backend prüfen
4. Permalinks nur bei Rewrite-Änderungen neu speichern
5. ACF-Synchronisierung prüfen
6. mindestens einen Datensatz und ein Template testen

⸻

Plugin-Versionierung

Bei funktionalen Änderungen Plugin-Version erhöhen.

Beispiel:

0.1.0 → Grundstruktur
0.1.1 → ACF JSON
0.2.0 → vollständiges Content-Modell
0.3.0 → Anfragekontext
1.0.0 → produktiver erster Release

Versionsnummer im Plugin-Header und in der Konstante konsistent halten.

⸻

Vorgehen bei Fehlern

Nicht raten.

Bei einem Fehler zuerst:

1. genaue Fehlermeldung lesen
2. PHP-Log prüfen
3. WordPress-Debug-Log prüfen
4. Browser-Konsole prüfen, falls Frontend betroffen
5. letzte Änderung prüfen
6. Build-Time, Admin oder Runtime unterscheiden
7. kleinstmögliche Ursache isolieren

Keine großflächigen Änderungen als Versuch.

⸻

Verhalten des Agents

Vor einer Änderung:

* Kontext lesen
* relevante Dateien prüfen
* bestehenden Stil übernehmen
* kleinsten sinnvollen Patch planen

Während der Änderung:

* keine unabhängigen Dateien verändern
* keine unnötigen Dependencies installieren
* keine Daten löschen
* keine Konfiguration überschreiben
* bestehende Nutzeränderungen respektieren

Nach der Änderung:

* Diff prüfen
* Syntax testen
* Ergebnis knapp zusammenfassen
* geänderte Dateien nennen
* offene Risiken nennen
* passende Commit-Message vorschlagen

⸻

Projektziel

KEA soll als hochwertige persönliche Sprachreiseagentur wahrgenommen werden.

Die Website soll:

* Reisen inspirierend präsentieren
* Zielgruppen klar führen
* persönliche Beratung sichtbar machen
* Reiseziele, Schulen und Programme strukturiert verwalten
* Inhalte dynamisch und konsistent ausgeben
* qualifizierte Anfragen erzeugen
* von der Redaktion einfach gepflegt werden können
* technisch langfristig wartbar bleiben

Technische Leitlinie:

Breakdance gestaltet. Headspin UI systematisiert das Design. ACF pflegt strukturierte Inhalte. KEA Core definiert Datenmodell und Projektlogik.

Keine manuelle Seitenhölle.
Keine doppelten Daten.
Keine Plugin-Hölle.
Keine unnötige Komplexität.
