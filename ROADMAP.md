# **Roadmap KEA-Redesign**

## **Grundregel**

Wir bauen nicht zuerst schöne Einzelseiten.

Die richtige Reihenfolge lautet:

```text
Inhalte inventarisieren
→ Datenmodell definieren
→ Designsystem bauen
→ Komponenten entwickeln
→ Templates erstellen
→ Pilotinhalte einpflegen
→ System testen
→ restliche Inhalte migrieren
→ veröffentlichen
```

Damit vermeiden wir, dass Dublin, London und Málaga dreimal unterschiedlich aufgebaut werden oder später alle Seiten erneut angefasst werden müssen.

* * *

## **Projektstatus – 28. Juli 2026**

Der folgende Stand ergänzt die ursprüngliche Roadmap. Er ersetzt keine noch offenen Phasen.

Erledigt:

- lokales WordPress unter MAMP Pro ist erreichbar; der Breakdance-Redirect durch unterschiedliche Groß-/Kleinschreibung der lokalen URL ist behoben
- `kea-core` liegt als Version 0.2.2 vor: Content Types, Taxonomien, versionierte ACF-Feldgruppen und validierter Anfragekontext sind angelegt
- 31 Reiseziele sind als strukturierte Datensätze vorhanden; Dublin wurde mit dem bereinigten Alttext ergänzt
- die aus der alten WordPress-XML übernommenen Zieltexte enthalten keine WPBakery-Shortcodes mehr
- 24 passende Bestandsbilder wurden den importierten Reisezielen zugeordnet
- sieben Partnerschulen und drei fachlich geprüfte CES-Dublin-Programme sind strukturiert angelegt und korrekt zugeordnet
- die KEA-Komponentenbibliothek sowie dynamische Single- und Archiv-Templates für Reiseziele, Partnerschulen, Programme und Erfahrungen sind aufgebaut
- Startseite, Reiseziel-Archiv mit Sprach-/Landfilter, Anfragekontext sowie Header mit Desktop-/Mobilnavigation sind umgesetzt
- der globale Header wurde auf Home, den drei Single-Typen, Archiven, Standardseiten und 404 visuell geprüft: über Hero transparent/hell, sonst dunkles Glas/hell

Noch offen:

- sieben im Altbestand referenzierte Bilder prüfen oder ersetzen: `IMG_0852.jpg`, `map-brighton.jpg`, `DSC_1488-bearb.jpg`, `IMG_0111.jpg`, `WP_002224.jpg`, `20180829_121159-e1546633996344.jpg`, `Malaga1-e1559337096861.jpg`
- konkrete Programme fachlich prüfen und vervollständigen; Preise, Starttermine und belastbare Kursdetails werden bewusst erst nach Freigabe übernommen
- Footer sowie Impressum, Datenschutz und Kontakt als vollständige Standardseiten fertigstellen
- Consent, SMTP-Versand und rechtliche Inhalte mit den finalen Kundendaten technisch abnehmen

Die priorisierte Arbeitsliste liegt in `docs/todo.md`.

## Nächste Lieferstrecke

1. Footer sowie Impressum, Datenschutz und Kontakt als hochwertige, verlinkte Standardseiten aufbauen.
2. Consent und Formularversand mit den finalen Kundendaten technisch prüfen.
3. Kundeninhalte, Bildrechte sowie fachliche Programm- und Reisezielangaben als eigenen Freigabeblock vervollständigen.
4. Abschließende Desktop-/Mobil-, Accessibility- und Launch-Abnahme durchführen.

* * *

# **Phase 0: Projekt sauber aufsetzen**

## **0.1 Staging-Installation**

Das Redesign wird nicht auf der Live-Website entwickelt.

Benötigt:

```text
staging.kea-sprachreisen.at
```

oder vorläufig:

```text
yard.starbase11.com/wp7/
```

Die Installation muss:

- durch Passwort geschützt sein
- `noindex` gesetzt haben
- eigene Datenbank verwenden
- getrennte Uploads besitzen
- regelmäßig gesichert werden

## **0.2 Entwicklungsgrundlage festlegen**

Installieren beziehungsweise prüfen:

- WordPress
- Breakdance
- Breakdance Pro
- ACF Pro
- SEO-Plugin
- Formularlösung
- SMTP-Lösung
- Backup-Lösung
- Redirect-Verwaltung
- Headspin UI
- ausgewählte Danblock-Ressourcen

Nicht sofort zehn weitere Plugins installieren.

## **0.3 Projektstruktur dokumentieren**

Im Projekt sollte eine zentrale technische Dokumentation liegen:

```text
/docs/
├── architecture.md
├── content-model.md
├── design-system.md
├── component-library.md
├── url-structure.md
├── migration-map.csv
└── launch-checklist.md
```

Falls kein Git-Zugriff auf das WordPress-Projekt vorhanden ist, zumindest:

- Child Theme
- eigenes KEA-Core-Plugin
- Exporte der Breakdance-Templates
- ACF-JSON
- regelmäßige Datenbank-Backups

## **Ergebnis Phase 0**

- stabile Staging-Umgebung
- definierte Plugin-Landschaft
- Backup vorhanden
- technische Dokumentation begonnen
- keine Arbeit direkt auf Produktion

* * *

# **Phase 1: Bestehende Inhalte erfassen**

Bevor neue Seiten gebaut werden, benötigen wir eine vollständige Bestandsaufnahme.

## **1.1 Alle bestehenden URLs exportieren**

Für jede bestehende Seite erfassen:

<div class="joplin-table-wrapper"><table border="1" cellspacing="0" cellpadding="8" width="100%" style="width: 100%; border-collapse: collapse; border: 1px solid;" class="jop-noMdConv"><thead class="jop-noMdConv"><tr class="jop-noMdConv"><th style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><b class="jop-noMdConv">Alte URL</b></p></th><th style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><b class="jop-noMdConv">Seitentyp</b></p></th><th style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><b class="jop-noMdConv">Inhalt relevant</b></p></th><th style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><b class="jop-noMdConv">Neue URL</b></p></th><th style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><b class="jop-noMdConv">Aktion</b></p></th></tr></thead><tbody class="jop-noMdConv"><tr class="jop-noMdConv"><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><code class="jop-noMdConv">/alte-seite/</code></p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>Reiseziel</p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>Ja</p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><code class="jop-noMdConv">/reiseziele/.../</code></p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>migrieren</p></td></tr><tr class="jop-noMdConv"><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><code class="jop-noMdConv">/angebot-2021/</code></p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>Aktion</p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>Nein</p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>passende Kategorie</p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>umleiten</p></td></tr><tr class="jop-noMdConv"><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><code class="jop-noMdConv">/kontakt-alt/</code></p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>Kontakt</p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>teilweise</p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p><code class="jop-noMdConv">/kontakt/</code></p></td><td style="border: 1px solid; padding: 8px 12px; white-space: nowrap;" class="jop-noMdConv"><p>zusammenführen</p></td></tr></tbody></table></div>

Aktionen:

- übernehmen
- überarbeiten
- zusammenführen
- archivieren
- löschen und weiterleiten

## **1.2 Inhalte nach Typ sortieren**

Die vorhandenen Inhalte werden nicht einfach als „Seiten“ behandelt.

Wir unterscheiden:

- Reiseziele
- Länder
- Sprachen
- Partnerschulen
- Kursprogramme
- Zielgruppen
- Erfahrungsberichte
- Ratgeber
- FAQs
- Team
- Serviceinformationen
- rechtliche Inhalte

## **1.3 Fehlende Inhalte identifizieren**

Für jede wichtige Seite prüfen:

- Ist ein brauchbarer Text vorhanden?
- Gibt es aktuelle Bilder?
- Sind Preise aktuell?
- Sind Schulen und Programme noch verfügbar?
- Gibt es konkrete Ansprechpartner?
- Gibt es echte Erfahrungsberichte?
- Sind Akkreditierungen belegbar?
- Sind Altersangaben und Starttermine korrekt?

## **Ergebnis Phase 1**

Ein verbindliches Content-Inventar. Erst danach wissen wir, was tatsächlich gebaut und geschrieben werden muss.

* * *

# **Phase 2: Informationsarchitektur festlegen**

Jetzt wird die endgültige Seitenstruktur definiert.

## **2.1 Hauptnavigation**

Empfohlene Struktur:

```text
Sprachreisen
Reiseziele
Kurse
Warum KEA
Magazin
Kontakt
```

Unter „Sprachreisen“:

```text
Erwachsene
Schüler & Jugendliche
Lehrerfortbildung
Business
Gruppenreisen
```

## **2.2 URL-Struktur**

Die URLs müssen feststehen, bevor Inhalte migriert werden.

Beispiel:

```text
/reiseziele/
/reiseziele/englisch/
/reiseziele/englisch/irland/
/reiseziele/englisch/irland/dublin/

/kurse/
/kurse/intensivkurse/
/kurse/pruefungsvorbereitung/

/sprachreisen/erwachsene/
/sprachreisen/schueler-jugendliche/
/sprachreisen/lehrerfortbildung/
```

Keine wechselnden URL-Strukturen je nach Redakteur.

## **2.3 Seitentypen definieren**

Wir benötigen nicht für jede Seite ein eigenes Layout.

Sinnvolle Seitentypen:

1.  Startseite
2.  Zielgruppen-Landingpage
3.  Reiseziele-Übersicht
4.  Land- oder Sprachenübersicht
5.  Destination-Detailseite
6.  Schule-Detailseite
7.  Kursübersicht
8.  Kursdetailseite
9.  Service-Landingpage
10. Magazin-Archiv
11. Magazinartikel
12. Standard-Inhaltsseite
13. Anfrage
14. Kontakt

## **Ergebnis Phase 2**

- finale Sitemap
- finale URLs
- definierte Templates
- keine unklaren Sonderseiten

* * *

# **Phase 3: Datenmodell in WordPress bauen**

Das ist der wichtigste technische Schritt.

## **3.1 Custom Post Types**

Empfohlen:

```text
destination
school
program
testimonial
team
```

Optional später:

```text
accommodation
faq
```

FAQs können anfangs auch als strukturierte ACF-Repeater gepflegt werden. Erst bei starker Wiederverwendung lohnt ein eigener Post Type.

## **3.2 Taxonomien**

```text
language
country
target_group
course_type
age_group
interest
accommodation_type
```

## **3.3 Beziehungen**

Beispiele:

```text
Destination → gehört zu Land
Destination → unterstützt Sprachen
Destination → besitzt Schulen
School → gehört zu Destination
School → bietet Programme
Program → gehört zu Schule
Program → besitzt Kursart
Program → eignet sich für Zielgruppe
Testimonial → gehört zu Destination oder Programm
```

## **3.4 ACF-Felder**

### **Destination**

```text
Kurzbeschreibung
Hero-Bild
Galerie
Stadtcharakter
beste Reisezeit
Anreise
Lebenshaltungskosten
Unterkünfte
Aktivitäten
KEA-Empfehlung
FAQs
```

### **School**

```text
Adresse
Lage
Beschreibung
KEA-Einschätzung
Akkreditierungen
Gruppengröße
Mindestalter
Ausstattung
Galerie
Unterkunftsopt[118;1:3uionen
```

### **Program**

```text
Kursname
Kursart
Unterrichtseinheiten
Dauer
Sprachniveau
Mindestalter
Starttermine
Preis ab
Währung
Leistungen
nicht enthalten
Buchungsstatus
```

## **3.5 Kein Fachinhalt in Breakdance hardcoden**

Breakdance enthält nur das Layout.

Falsch:

```text
Dublin-Seite direkt in Breakdance mit Texten, Preisen und Schulen bauen
```

Richtig:

```text
Dublin als strukturierter Datensatz
→ Breakdance-Template liest die Felder dynamisch aus
```

## **Ergebnis Phase 3**

Ein vollständiges Content-System, in das Inhalte konsistent eingepflegt werden können.

* * *

# **Phase 4: Designsystem definieren**

Noch keine vollständigen Seiten bauen.

Zuerst werden die globalen Regeln festgelegt.

## **4.1 Farben**

Die verbindliche KEA-Palette wird in Headspin UI gepflegt:

```text
Neutral / Paper: #F4F0E8
Ink:             #17201D
Primary / Forest: #183F35
Primary Hover:    #123128
Secondary / Sky:  #90AEBB
Tertiary / Coral: #E56F55
Sand:             #DED4C3
White:            #FFFDF8
```

Keine individuellen Farbsysteme pro Zielgruppe und keine lokalen Hexwerte in eigenen KEA-Elementen.

Definieren:

- Hauptfarbe
- Textfarbe
- Hintergrundfarben
- Akzentfarbe
- Rahmenfarbe
- Erfolg
- Warnung
- Fehler

Die Farben ausschließlich als globale Variablen beziehungsweise Headspin-Tokens pflegen.

## **4.2 Typografie**

Festlegen:

- Display-Schrift
- Textschrift
- H1 bis H6
- Fließtext
- kleine Texte
- Navigation
- Buttons
- Zitate

## **4.3 Abstände**

Eine konsistente Skala:

```text
XS
S
M
L
XL
2XL
3XL
```

Keine zufälligen Werte wie:

```text
37px
83px
119px
```

## **4.4 Layoutregeln**

Definieren:

- maximale Seitenbreite
- Textbreite
- Grid
- Sektionenabstände
- Kartenabstände
- mobile Breakpoints
- Bildformate

## **4.5 Globale UI-Elemente**

Erstellen und freigeben:

- Buttons
- Textlinks
- Labels
- Eingabefelder
- Select-Felder
- Checkboxen
- Karten
- Tags
- Akkordeons
- Tabs
- Zitate
- Hinweisboxen

## **Ergebnis Phase 4**

Ein kleines, verbindliches Designsystem. Erst danach werden Seiten komponiert.

* * *

# **Phase 5: Breakdance-Komponentenbibliothek bauen**

Die wiederverwendbaren Komponenten werden als globale Blöcke erstellt.

## **Zuerst bauen**

### **Struktur**

- Site Header
- Desktop Navigation
- Mobile Navigation
- Footer
- Breadcrumbs
- Standard Section Wrapper
- Standard Content Container

### **Inhalt**

- Hero Standard
- Hero Destination
- Hero Zielgruppe
- Intro Block
- Text/Bild-Sektion
- Benefit Block
- Statistikblock
- CTA-Band
- Kontaktperson
- FAQ
- Testimonial
- Artikelkarte

### **Reiseinhalte**

- Destination Card
- School Card
- Program Card
- Zielgruppenkarte
- Unterkunftskarte
- Related Destinations
- Faktenleiste
- Galerie
- Sticky Anfrage-CTA

## **Ressourcen sinnvoll verwenden**

Headspin dient primär für:

- Tokens
- Spacing
- Typography
- globale Utility-Struktur

Danblock und andere Bibliotheken dienen als:

- technische Ausgangsbasis
- Inspirationsquelle
- schneller Rohbau

Sie dürfen nicht ungeprüft miteinander vermischt werden.

Jede übernommene Komponente wird auf das KEA-System angepasst:

- Klassen
- Farben
- Typografie
- Abstände
- Animation
- Accessibility
- Mobile-Verhalten

## **Ergebnis Phase 5**

Eine KEA-eigene Komponentenbibliothek statt einer Sammlung fremder Templates.

* * *

# **Phase 6: Globale Templates erstellen**

Jetzt werden die dynamischen Seitentemplates gebaut.

## **Reihenfolge**

### **1\. Standardseite**

Für:

- Über KEA
- Service
- Datenschutznahe Informationsseiten
- einfache Landingpages

### **2\. Magazinartikel**

Für:

- Ratgeber
- Reiseberichte
- News

### **3\. Destination**

Der wichtigste Template-Typ.

### **4\. Schule**

Zeigt:

- Lage
- Ausstattung
- Programme
- Unterkünfte
- Galerie
- Anfrage

### **5\. Programm**

Zeigt:

- Kursdetails
- Termine
- Zielgruppe
- Schule
- Destination
- Leistungen
- Anfrage

### **6\. Archive**

- alle Reiseziele
- Länder
- Sprachen
- Kursarten
- Zielgruppen
- Magazin

## **Bedingte Ausgabe**

Leere Felder dürfen keine leeren Sektionen erzeugen.

Beispiel:

```text
Keine Galerie gepflegt
→ Galerie-Sektion wird nicht ausgegeben
```

Nicht:

```text
Galerie
[leerer weißer Bereich]
```

## **Ergebnis Phase 6**

Alle wiederkehrenden Inhalte können automatisch und konsistent ausgegeben werden.

* * *

# **Phase 7: Pilotseiten bauen**

Nicht sofort 50 Seiten migrieren.

Zuerst bauen wir einen vollständigen vertikalen Ausschnitt.

## **Empfohlener Pilot**

1.  Startseite
2.  Reiseziele-Übersicht
3.  Dublin als Destination
4.  eine Partnerschule in Dublin
5.  ein Kursprogramm
6.  Schüler-Landingpage
7.  Lehrerfortbildung
8.  Kontakt
9.  Anfrageformular
10. ein Magazinartikel

Damit testen wir:

- Navigation
- Datenbeziehungen
- Karten
- Filter
- Formulare
- Mobile
- SEO
- redaktionelle Pflege

## **Abnahmekriterien**

Jede Pilotseite wird geprüft auf:

- Inhalt
- Gestaltung
- Mobile
- Geschwindigkeit
- Accessibility
- SEO
- Conversion
- einfache Redaktionspflege

Erst wenn dieser Pilot sauber funktioniert, wird das System skaliert.

* * *

# **Phase 8: Anfrage- und Lead-System**

Die Anfrage ist für KEA wichtiger als eine komplexe Sofortbuchung.

## **8.1 Hauptformular**

Drei Schritte:

### **Reise**

- Zielgruppe
- Sprache
- Wunschziel
- Zeitraum
- Dauer

### **Anforderungen**

- Lernziel
- Niveau
- Unterkunft
- besondere Wünsche

### **Kontakt**

- Name
- E-Mail
- Telefon optional
- bevorzugte Kontaktart
- Datenschutz

## **8.2 Kontext automatisch übernehmen**

Auf einer Dublin-Seite:

```text
Destination: Dublin
```

Auf einer Kursseite:

```text
Destination: Dublin
School: Example School
Program: General English 20
```

Diese Werte werden automatisch in die Anfrage übernommen.

## **8.3 Anfrageverarbeitung**

Benötigt:

- E-Mail an KEA
- Bestätigung an den Interessenten
- vollständige Zusammenfassung
- Speicherung im WordPress-Backend, falls datenschutzrechtlich gewünscht
- Spam-Schutz
- SMTP
- Fehlerprotokollierung

## **8.4 Erfolgsseite**

Nicht nur:

Danke für Ihre Nachricht.

Sondern:

- Was passiert als Nächstes?
- Wann und wie meldet sich KEA?
- Ansprechpartner
- weitere passende Inhalte

* * *

# **Phase 9: Reise-Finder und Filter**

Erst nach stabilen Daten und Templates.

## **Reise-Finder Version 1**

Fragen:

1.  Für wen?
2.  Welche Sprache?
3.  Welche Region?
4.  Welches Ziel?
5.  Welche Dauer?

Ergebnis:

- passende Destinationen
- passende Programme
- direkte Anfrage

## **Filter auf der Reiseziele-Seite**

Filter:

- Sprache
- Land
- Zielgruppe
- Kursart

Zunächst ohne unnötige Komplexität:

- serverseitig oder über AJAX
- URL-Parameter
- filterbare Ergebnisse
- teilbare Filter-URLs
- funktionierender Zurück-Button

Kein schweres JavaScript-Framework notwendig.

* * *

# **Phase 10: Inhalte migrieren**

Erst jetzt werden die restlichen Inhalte eingepflegt.

## **Reihenfolge**

1.  wichtigste Destinationen
2.  wichtigste Schulen
3.  aktive Programme
4.  Zielgruppenseiten
5.  Serviceinhalte
6.  Erfahrungsberichte
7.  Ratgeber
8.  weniger relevante Altinhalte

## **Pro Inhalt prüfen**

- Text aktuell?
- Daten vollständig?
- Bildrechte vorhanden?
- Verknüpfungen gesetzt?
- SEO-Titel vorhanden?
- Meta Description vorhanden?
- interne Links gesetzt?
- CTA passend?
- Vorschau mobil geprüft?

## **Preise**

Preise nur veröffentlichen, wenn klar ist:

- wer sie aktualisiert
- wie häufig
- welche Saison gilt
- welche Währung gilt
- welche Leistungen enthalten sind
- wann der Preis zuletzt geprüft wurde

Andernfalls:

Preis auf Anfrage

oder:

Individuelles Angebot erhalten

* * *

# **Phase 11: SEO und Weiterleitungen**

## **Vor dem Launch zwingend**

- alte URLs exportieren
- neue URLs zuordnen
- 301-Redirects einrichten
- Seitentitel prüfen
- Meta Descriptions prüfen
- Canonicals prüfen
- XML-Sitemap prüfen
- interne Links prüfen
- strukturierte Daten prüfen
- 404-Seite erstellen
- Breadcrumbs prüfen

## **Wichtig**

Keine alten Seiten pauschal auf die Startseite umleiten.

Jede alte URL erhält das fachlich passendste Ziel.

* * *

# **Phase 12: Qualitätssicherung**

## **Funktional**

- alle Formulare
- alle E-Mails
- Navigation
- Filter
- Suche
- Buttons
- Downloads
- externe Links
- 404-Seite
- Weiterleitungen

## **Responsive**

Testen:

- kleine Smartphones
- große Smartphones
- Tablet Portrait
- Tablet Landscape
- Desktop
- große Monitore

## **Accessibility**

- Tastaturnavigation
- Fokuszustände
- Farbkontraste
- Überschriftenhierarchie
- Formularlabels
- Fehlermeldungen
- Alt-Texte
- Reduced Motion

## **Performance**

- WebP/AVIF
- responsive Bilder
- lokale Fonts
- keine unnötigen Slider
- keine Autoplay-Videos mobil
- Breakdance-Assets prüfen
- Cache konfigurieren
- Datenbank bereinigen

## **Datenschutz**

- Consent
- Analytics
- externe Dienste
- eingebettete Videos
- Karten
- Formulare
- Aufbewahrungsfristen
- Datenschutzerklärung

* * *

# **Phase 13: Launch**

## **Unmittelbar vor Veröffentlichung**

```text
Backup
→ Datenbank exportieren
→ Dateien sichern
→ Redirects importieren
→ Formulare erneut testen
→ Cache leeren
→ noindex entfernen
→ Sitemap prüfen
→ Live-Domain kontrollieren
```

## **Nach Veröffentlichung**

- Search Console prüfen
- 404-Fehler überwachen
- Formulare täglich kontrollieren
- Rankings beobachten
- Core Web Vitals kontrollieren
- Nutzerfeedback sammeln
- alte URLs stichprobenartig testen

* * *

# **Was wir bewusst später bauen**

Diese Funktionen gehören nicht in die erste Ausbaustufe:

- Kundenkonto
- Onlinezahlung
- verbindliche Echtzeitbuchung
- komplexe Preisberechnung
- Live-Verfügbarkeit aller Schulen
- mehrstufiges CRM
- vollständige Mehrsprachigkeit
- mobile App

Zuerst muss die Website zuverlässig:

- informieren
- Vertrauen schaffen
- passende Angebote zeigen
- qualifizierte Anfragen erzeugen

* * *

# **Konkrete Reihenfolge ohne Leerlauf**

## **Arbeitsblock 1: Fundament**

1.  Staging absichern
2.  Plugins und Hosting prüfen
3.  Inhalte inventarisieren
4.  Sitemap festlegen
5.  URL-Struktur festlegen

## **Arbeitsblock 2: Daten**

6.  Custom Post Types definieren
7.  Taxonomien definieren
8.  ACF-Felder definieren
9.  Beziehungen festlegen
10. Testdaten einpflegen

## **Arbeitsblock 3: Design**

11. Farben festlegen
12. Typografie festlegen
13. Spacing festlegen
14. Basiselemente bauen
15. Header und Footer bauen

## **Arbeitsblock 4: Templates**

16. Destination Card
17. School Card
18. Program Card
19. Destination Template
20. School Template
21. Program Template
22. Archive Templates

## **Arbeitsblock 5: Pilot**

23. Dublin vollständig einpflegen
24. Schülerseite bauen
25. Lehrerfortbildung bauen
26. Startseite fertigstellen
27. Anfrageformular anschließen

## **Arbeitsblock 6: Skalierung**

28. weitere Destinationen
29. weitere Schulen
30. weitere Programme
31. SEO-Migration
32. Tests
33. Launch

* * *

# **Was ich konkret vorbereiten kann**

## **1\. Vollständige Sitemap**

Ich kann die komplette neue Seitenstruktur ausarbeiten mit:

- Hauptnavigation
- Unterseiten
- URL-Slugs
- Seitentyp
- Zielgruppe
- primärer CTA
- benötigtem Template
- SEO-Suchintention

Ausgabe als strukturierte Tabelle.

## **2\. WordPress-Datenmodell**

Ich kann eine vollständige technische Spezifikation erstellen für:

- Custom Post Types
- Taxonomien
- ACF-Feldgruppen
- Feldnamen
- Feldtypen
- Pflichtfelder
- Beziehungen
- bedingte Logik
- Backend-Beschriftungen

Damit kann das System ohne Rätselraten umgesetzt werden.

## **3\. ACF-Feldplan**

Beispiel:

```text
Field Group: Destination Details

kea_destination_intro
Type: Textarea
Required: Yes

kea_destination_country
Type: Taxonomy
Required: Yes

kea_destination_schools
Type: Relationship
Post Type: school

kea_destination_best_season
Type: Text
```

Ich kann diesen Plan vollständig für alle Inhaltstypen vorbereiten.

## **4\. Breakdance-Komponentenplan**

Für jede Komponente:

- Name
- Zweck
- verwendete Daten
- Varianten
- responsive Verhalten
- Interaktionen
- globale Klassen
- Accessibility-Anforderungen

## **5\. Seiten-Wireframes**

Ich kann textbasierte, sehr konkrete Wireframes erstellen für:

- Startseite
- Reiseziele-Übersicht
- Destination
- Schule
- Programm
- Schüler
- Lehrer
- Business
- Warum KEA
- Anfrage

Mit exakter Reihenfolge jeder Sektion.

## **6\. Designsystem-Spezifikation**

Ich kann liefern:

- Farbpalette
- Typografie
- fluid Type Scale
- Spacing Scale
- Containerbreiten
- Grid
- Radien
- Schatten
- Buttonvarianten
- Formularzustände
- Kartenvarianten
- Motion-Regeln

Direkt übertragbar in Headspin und Breakdance Global Settings.

## **7\. Content-Briefings**

Für jede Seite kann ich definieren:

- Ziel der Seite
- Zielgruppe
- Kernbotschaft
- benötigte Inhalte
- benötigte Fakten
- Bildbedarf
- CTA
- FAQ
- SEO-Thema
- interne Verlinkung

## **8\. Migrationsmatrix**

Ich kann eine Vorlage strukturieren für:

```text
alte URL
neue URL
Status
Content Owner
Redirect
SEO-Priorität
Bildstatus
Textstatus
Abnahme
```

## **9\. Anfrageformular-Konzept**

Ich kann vorbereiten:

- alle Felder
- Schrittlogik
- Pflichtfelder
- Bedingungen
- Kontextfelder
- E-Mail-Texte
- Bestätigungsseite
- Validierung
- Datenschutztexte als Arbeitsentwurf

## **10\. KEA-Core-Plugin**

Sobald die finalen Post Types und Felder feststehen, kann ich den Code vorbereiten für:

- Custom Post Types
- Taxonomien
- Admin-Spalten
- REST-Endpunkte
- Query-Logik
- Filter
- Anfragekontext
- Sicherheitsvalidierung
- strukturierte Hilfsfunktionen

Das sollte als eigenes Plugin umgesetzt werden, nicht in zufälligen Code-Snippets innerhalb von Breakdance.

* * *

# **Mein empfohlener nächster konkreter Schritt**

Als nächstes sollten drei Dokumente entstehen:

1.  **Finale Sitemap**
2.  **WordPress-Datenmodell mit ACF-Feldern**
3.  **Komponenten- und Template-Matrix**

Diese drei Dokumente verhindern den größten Teil späterer Doppelarbeit. Danach kann Breakdance gezielt aufgebaut werden, ohne Seiten mehrfach neu zu konstruieren.

Passende Commit-Struktur bei versioniertem Custom Code:

```text
chore(project): initialize kea redesign architecture
feat(content): register destination school and program models
feat(ui): add global kea design tokens
feat(templates): add dynamic destination template
feat(forms): add contextual travel inquiry flow
```
