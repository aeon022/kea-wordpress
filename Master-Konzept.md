# **Redesign-Blueprint KEA Sprachreisen**

## **1\. Strategische Richtung**

KEA sollte **nicht wie ein großer Reiseveranstalter** auftreten. Gegen EF, ESL und andere Plattformen gewinnt KEA nicht über Angebotsmenge, Rabattbanner oder technische Filtermonster.

**KEA gewinnt über:**

- persönliche Beratung
- handverlesene Partnerschulen
- langjährige Marktkenntnis
- kostenfreie Organisation
- einen direkten Ansprechpartner
- Unterstützung vor, während und nach der Reise
- individuell mögliche Sonderlösungen

Genau diese Leistungen sind im vorhandenen Content bereits angelegt, werden aktuell aber zu textlastig und ohne klare Priorisierung präsentiert. Der Entwurf auf `yard.starbase11.com` geht visuell bereits in die richtige Richtung: emotional, hochwertig, editorial und deutlich eigenständiger. Der Claim **„Mach die Welt zu deinem Klassenzimmer“** besitzt dafür die stärkste kommunikative Kraft.

Die neue Positionierung:

**Die persönliche Sprachreiseagentur für Menschen, die nicht irgendeinen Kurs, sondern den richtigen Ort, die richtige Schule und ein echtes Erlebnis suchen.**

KEA wird damit zur **kuratierenden Boutique-Agentur**, nicht zum unübersichtlichen Reisekatalog.

* * *

# **2\. Zielgruppen**

Die aktuelle Navigation mit „Schüler“, „Lehrer“, „Orte“ und „Kurse“ vermischt Zielgruppen, Produkte und Reiseziele. Das erschwert Nutzern den Einstieg.

Die Website sollte stattdessen vier primäre Einstiege anbieten:

## **Erwachsene**

Für:

- allgemeine Sprachkurse
- Bildungsurlaub beziehungsweise Weiterbildung
- Prüfungsvorbereitung
- 30+, 40+ oder 50+ Programme
- Sprachreisen mit Kultur, Kochen, Sport oder anderen Aktivitäten
- Langzeitaufenthalte

Hauptmotiv:

Sprache lernen, Menschen kennenlernen, eine Stadt wirklich erleben.

## **Schüler und Jugendliche**

Für:

- Sommercamps
- betreute Sprachreisen
- Schulgruppen
- Maturavorbereitung
- Gastfamilien oder Residenzen
- Programme mit Sport, Freizeit und Kultur

Hier müssen Eltern emotional und rational gleichzeitig abgeholt werden:

- Sicherheit
- Betreuung
- Altersempfehlung
- Anreise
- Unterkunft
- Tagesablauf
- Notfallkontakt
- Qualität der Partnerschule

Andere große Anbieter stellen bei Schülerreisen Betreuung, Unterkunft, Freizeit und Sicherheitsaspekte besonders stark heraus. Diese Themen sollten auch bei KEA früh und konkret sichtbar werden.

## **Lehrerinnen und Lehrer**

Das ist eine echte KEA-Spezialität und darf nicht nur eine Unterkategorie sein.

Die bestehende Leistung umfasst unter anderem:

- Beratung bei der Kursauswahl
- Sprach- und Methodikkurse
- Organisation der Kommunikation
- Unterstützung bei Unterkunft und Transfers
- flexible beziehungsweise förderungsabhängige Buchung
- Programme für Englisch, Französisch, Spanisch und Italienisch

Das sollte eine starke eigene Landingpage erhalten:

Neue Methoden. Frische Sprache. Internationale Perspektiven.

## **Business und Organisationen**

Für:

- Führungskräfte
- Fachkräfte
- Unternehmen
- Schulen und Bildungseinrichtungen
- Einzelcoachings
- branchenspezifische Kurse
- Präsentations- und Verhandlungstraining
- Gruppenprogramme

Diese Zielgruppe benötigt weniger Lifestyle und mehr:

- Zieldefinition
- messbaren Nutzen
- flexible Kursformate
- kurze Reaktionszeiten
- individuelle Angebote
- klare Ansprechpartner

* * *

# **3\. Empfohlene Hauptnavigation**

## **Desktop**

**Logo**

**Sprachreisen**

- Erwachsene
- Schüler & Jugendliche
- Lehrerfortbildung
- Business
- Gruppenreisen

**Reiseziele**

- Alle Reiseziele
- Nach Sprache
- Nach Land
- Beliebte Städte

**Kurse**

- Allgemeine Sprachkurse
- Intensivkurse
- Prüfungsvorbereitung
- Businesskurse
- 50+ Programme
- Sprache & Aktivitäten
- Einzelunterricht

**Warum KEA**

- Über KEA
- Beratung & Service
- Qualität der Partnerschulen
- Ablauf einer Buchung
- Erfahrungen

**Magazin**

Sekundär:

- Suche
- Merkliste
- Kontakt
- prominenter CTA: **Kostenlos beraten lassen** (umgesetzt als „Beratung starten →", siehe `docs/tutorial-redaktion.md`)

## **Mobile**

Keine verschachtelte Navigation mit drei Ebenen.

Der erste Screen des Menüs:

1.  Passende Sprachreise finden
2.  Reiseziele
3.  Für Erwachsene
4.  Für Schüler
5.  Für Lehrer
6.  Für Unternehmen
7.  Beratung

Darunter erst die vollständige Navigation.

* * *

# **4\. Sinnvolle Seitenstruktur**

## **Ebene 1: Kernseiten**

```text
/
├── sprachreisen/
├── reiseziele/
├── kurse/
├── erwachsene/
├── schueler-jugendliche/
├── lehrerfortbildung/
├── business/
├── gruppenreisen/
├── warum-kea/
├── ueber-kea/
├── erfahrungen/
├── magazin/
├── faq/
├── kontakt/
└── anfrage/
```

## **Ebene 2: Reiseziele**

```text
/reiseziele/
├── englisch/
│   ├── england/
│   │   ├── london/
│   │   ├── brighton/
│   │   └── ...
│   ├── irland/
│   ├── malta/
│   ├── usa/
│   └── kanada/
├── spanisch/
│   ├── spanien/
│   │   ├── malaga/
│   │   ├── madrid/
│   │   └── ...
│   └── lateinamerika/
├── franzoesisch/
├── italienisch/
└── deutsch/
```

Dabei sollten **Sprache, Land und Ort getrennte Datentypen** sein. Inhalte dürfen nicht als manuell kopierte Einzel-Landingpages gebaut werden.

## **Ebene 2: Kurse**

```text
/kurse/
├── allgemein/
├── intensiv/
├── einzelunterricht/
├── pruefungsvorbereitung/
├── business/
├── lehrerfortbildung/
├── bildungsurlaub/
├── 50-plus/
├── schuelerkurse/
├── sommerprogramme/
└── sprache-und-aktivitaeten/
```

## **Ebene 2: Service und Vertrauen**

```text
/warum-kea/
├── persoenliche-beratung/
├── qualitaet-und-partnerschulen/
├── unterkunft/
├── anreise-und-transfer/
├── versicherung/
├── buchungsablauf/
└── faq/
```

* * *

# **5\. Die Startseite**

Die Startseite darf kein vollständiger Produktkatalog sein. Ihre Aufgabe ist:

1.  Emotion erzeugen
2.  Orientierung geben
3.  Vertrauen schaffen
4.  zur Beratung oder passenden Auswahl führen

## **Sektion 1: Hero**

Der aktuelle Entwurf verwendet drei sehr starke Aussagen:

- Erfinde dich neu. In jeder Sprache.
- Sprache erleben. Kultur fühlen.
- Mach die Welt zu deinem Klassenzimmer.

Ich würde nicht alle drei gleichberechtigt rotieren lassen. Slider verlieren häufig Fokus und erschweren die Botschaft.

Empfehlung:

### **Hauptclaim**

**Mach die Welt zu deinem Klassenzimmer.**

Subline:

Persönlich ausgewählte Sprachreisen für Erwachsene, Schüler, Lehrer und Unternehmen.

CTAs:

- **Sprachreise entdecken**
- **Persönlich beraten lassen**

Darunter eine kompakte Such- beziehungsweise Inspirationsleiste:

```text
Ich möchte [Englisch lernen]
als [Erwachsener]
in [Europa]
```

Button:

**Reisen anzeigen**

Wichtig: Kein komplexes Buchungsportal vortäuschen. Das Werkzeug soll qualifizieren und inspirieren, nicht sofort Preise berechnen.

### **Bildsprache**

Kein klassisches Stockfoto von lachenden Menschen mit Lehrbuch.

Besser:

- dokumentarische Szenen
- Menschen in realen Stadtsituationen
- Café, Markt, Küste, öffentlicher Raum
- sichtbare lokale Kultur
- Nahaufnahmen und große Landschaftsbilder gemischt
- kleine Unvollkommenheiten statt Hochglanz-Reisekatalog

## **Sektion 2: Zielgruppen-Einstieg**

Vier großformatige Karten:

- Erwachsene
- Schüler
- Lehrer
- Business

Jede Karte enthält:

- starkes Bild
- eine emotionale Aussage
- maximal zwei Sätze
- einen klaren Link

Beispiel:

### **Erwachsene**

Neue Sprache. Neue Stadt. Neue Perspektive.

### **Schüler**

Ferien, die länger bleiben als der Sommer.

### **Lehrer**

Frische Ideen für lebendigen Unterricht.

### **Business**

Sicher kommunizieren, wo es zählt.

## **Sektion 3: Warum KEA**

Der aktuelle lange Block sollte auf fünf klare Nutzenargumente reduziert werden. Die vorhandenen Kernaussagen sind stark: kostenlose Organisation, Beratung, Expertise, Qualität und individuelle Programme.

Darstellung als asymmetrisches Editorial-Layout:

- **20+ Jahre Erfahrung**
- **Organisation ohne Agenturaufschlag**
- **persönliche Begleitung**
- **handverlesene Schulen**
- **individuelle Lösungen**

Nicht fünf gleichförmige Icon-Karten. Besser:

- eine große Kernbotschaft links
- drei bis fünf kompakte Beweispunkte rechts
- echtes Foto der Ansprechpartnerin oder des Teams

## **Sektion 4: Ausgewählte Reiseziele**

Nicht 30 Orte in einem Raster.

Startseite:

- London
- Dublin
- Malta
- Málaga
- Montpellier
- Florenz

Als horizontale, visuelle Auswahl.

Jede Karte:

```text
Málaga
Spanisch · Sonne · Kultur
Ab 1 Woche
Für Erwachsene und 50+
```

Der Preis sollte nur erscheinen, wenn er zentral gepflegt und aktuell gehalten werden kann. Sonst besser:

Individuelles Angebot

## **Sektion 5: „Welche Reise passt zu mir?“**

Ein kurzer Beratungs-Wizard mit drei bis fünf Fragen:

1.  Für wen ist die Reise?
2.  Welche Sprache?
3.  Was ist das wichtigste Ziel?
4.  Gewünschter Zeitraum?
5.  Ungefähre Aufenthaltsdauer?

Ergebnis:

- zwei bis vier passende Programme
- Kontaktformular bereits vorbefüllt
- optional per E-Mail senden

Das ist kein externer Buchungskonfigurator, sondern ein sauberer WordPress-Custom-Block mit serverseitiger Logik oder leichtem JavaScript.

## **Sektion 6: So funktioniert KEA**

Vier Schritte:

1.  Wünsche besprechen
2.  passende Schulen vergleichen
3.  Reise gemeinsam organisieren
4.  während des Aufenthalts begleitet bleiben

Hier sollte deutlich werden:

Sie zahlen nicht mehr als bei einer Direktbuchung, erhalten aber persönliche Unterstützung.

Diese Aussage ist bereits Bestandteil des KEA-Angebots und gehört prominent kommuniziert.

## **Sektion 7: Erfahrungsbericht**

Ein echter Fall statt eines austauschbaren Testimonials:

„Zwei Wochen Englisch in Dublin – und warum ich noch eine Woche geblieben bin.“

Mit:

- Porträt
- Reiseziel
- Kursart
- Alter beziehungsweise Zielgruppe
- kurzem Zitat
- Link zur vollständigen Erfahrung

## **Sektion 8: Aktuelles und Inspiration**

Der jetzige Entwurf führt alte und neue Beiträge gemeinsam auf und enthält noch generische Kategorien beziehungsweise Platzhalter.

Künftig drei getrennte Content-Arten:

- Reiseberichte
- Ratgeber
- aktuelle Programme und Termine

Startseite zeigt maximal drei Beiträge.

## **Sektion 9: Schluss-CTA**

**Dein nächstes Kapitel beginnt nicht im Klassenzimmer.**

Buttons:

- Beratung vereinbaren
- Reiseziele entdecken

Dazu ein ruhiges, breites Reisemotiv.

* * *

# **6\. Seite „Alle Reiseziele“**

## **Ziel**

Der Nutzer soll nicht durch eine endlose Liste navigieren müssen.

## **Aufbau**

### **Header**

Wo möchtest du Sprache wirklich erleben?

Filter:

- Sprache
- Zielgruppe
- Land
- Kursart
- Jahreszeit
- Dauer

### **Darstellungswechsel**

- Kartenansicht
- Listenansicht
- optionale Kartenansicht

Eine interaktive Weltkarte ist nur sinnvoll, wenn sie tatsächlich Mehrwert bietet. Keine schwere Mapping-Library nur für Dekoration.

### **Destination Card**

Jede Karte zeigt:

- Ort
- Land
- Sprache
- Zielgruppen
- Kurzprofil
- beste Reisezeit
- typischer Charakter
- Bild
- Merken-Funktion

Beispiel:

```text
Dublin
Irland · Englisch

Literarisch, offen und lebendig.
Ideal für Erwachsene, Lehrer und Langzeitkurse.

[Ort entdecken]
```

* * *

# **7\. Detailseite eines Reiseziels**

Beispiel: `/reiseziele/dublin/`

> **Aktualisiert:** Umgesetzt wurde die flache URL-Struktur aus [`docs/url-structure.md`](docs/url-structure.md), nicht die hier ursprünglich vorgeschlagene verschachtelte Form (`/reiseziele/englisch/irland/dublin/`).

## **Aufbau**

### **1\. Hero**

- Ort und Land
- emotionale Kurzbeschreibung
- Sprache
- passende Zielgruppen
- Breadcrumb
- CTA „Beratung zu Dublin“

### **2\. Schnellübersicht**

- Sprache
- Mindestalter
- Kursstart
- mögliche Dauer
- Unterkunft
- Transfer
- Kurslevel
- Zertifikate

### **3\. Warum dieser Ort?**

Editorialer Text, nicht SEO-Füllmaterial.

### **4\. Partnerschulen**

Eine oder mehrere Schul-Karten:

- Schulname
- Lage
- Akkreditierung
- Gruppengröße
- Ausstattung
- Kursarten
- Galerie
- KEA-Einschätzung

Wichtig:

Nicht einfach Herstellertexte übernehmen. Eine redaktionelle „KEA empfiehlt diese Schule, weil …“-Ebene schafft den Unterschied.

### **5\. Verfügbare Kurse**

Dynamisch aus den verknüpften Kursen.

### **6\. Unterkünfte**

- Gastfamilie
- Residenz
- Apartment
- Hotel
- Selbstorganisation

### **7\. Leben vor Ort**

- Stadtgefühl
- Aktivitäten
- Mobilität
- ungefähre Kosten
- Sicherheit
- beste Reisezeit

### **8\. Beispielwoche**

Besonders wertvoll für Schüler und Erstbucher.

### **9\. Erfahrungsberichte**

Nur Berichte mit Bezug zum Ort.

### **10\. FAQ zum Reiseziel**

### **11\. Anfrage**

Vorausgefülltes Formular:

- Reiseziel
- Kurs
- Zeitraum
- Zielgruppe

* * *

# **8\. Kursdetailseiten**

Kurse sollten nicht bloß Kategorien sein. Jede Kursart benötigt eine verständliche Landingpage.

Beispiel: `/kurse/pruefungsvorbereitung/`

## **Inhalte**

- Für wen?
- Welche Prüfungen?
- Voraussetzungen
- typische Dauer
- Intensität
- mögliche Orte
- mögliche Abschlüsse
- Beratungshinweis
- passende Schulen
- FAQ
- Anfrage

Prüfungen:

- Cambridge B2 First
- Cambridge C1 Advanced
- IELTS
- TOEFL
- DELF/DALF
- DELE
- CILS/CELI

Nur tatsächlich verfügbare Programme veröffentlichen.

* * *

# **9\. Schülerseite**

Die Schülerseite muss zwei Personen gleichzeitig bedienen:

- Jugendliche
- Eltern

## **Hero**

Raus aus dem Schulbuch. Rein ins echte Leben.

Subline:

Betreute Sprachreisen, internationale Freundschaften und Programme, die zum Alter und Lernziel passen.

CTAs:

- Programme entdecken
- Elternberatung vereinbaren

## **Sektionen**

1.  Altersgruppen
2.  beliebte Reiseziele
3.  typische Tagesabläufe
4.  Betreuung und Sicherheit
5.  Unterkunft
6.  Anreise
7.  Freizeitprogramm
8.  was im Angebot enthalten ist
9.  Eltern-FAQ
10. Erfahrungsbericht eines Schülers
11. Anfrage

## **Alterssegmente**

- 8–11
- 12–14
- 15–17
- 16+ mit Erwachsenenprogramm

Diese Grenzen müssen anhand des realen Angebots gepflegt werden.

## **Vertrauensdesign**

Die Seite darf visuell etwas lebendiger sein, aber nicht kindisch.

- klare Farbakzente
- echte Camp-Situationen
- Elterninformationen in ruhigen Boxen
- Sicherheitsinformationen nicht im Kleingedruckten

* * *

# **10\. Lehrerfortbildung**

Diese Seite kann ein eigener Lead-Magnet werden.

## **Hero**

Sprache weitergeben heißt, selbst in Bewegung zu bleiben.

## **Inhalte**

- Sprachauffrischung
- Methodik und Didaktik
- internationale Vernetzung
- Erasmus+- beziehungsweise Förderhinweise, sofern zutreffend und aktuell geprüft
- Sprachen
- Reiseziele
- Kursbeispiele
- Ablauf der Organisation
- Risiko- und Stornoregelungen
- persönliche Beratung

Die bestehende Seite enthält wertvolle konkrete Serviceargumente, aber sie braucht stärkere Gliederung und eine klarere Conversion.

## **Zusätzlicher Download**

Checkliste: Lehrerfortbildung im Ausland planen

Kein PDF-Zwang vor jeder Information. Der Download dient als ergänzender Lead-Magnet.

* * *

# **11\. Business-Seite**

## **Hero**

Sprachkompetenz für Situationen, in denen jedes Wort zählt.

## **Einstieg nach Bedarf**

- Führungskräfte
- Teams
- Fachsprache
- Präsentation
- Verhandlung
- Einzelcoaching
- Intensivtraining
- Sprachreise als Incentive

## **Prozess**

1.  Bedarfsanalyse
2.  Level und Lernziel
3.  Kurs- und Standortauswahl
4.  Organisation
5.  Nachbereitung

## **CTA**

Individuelles Trainingskonzept anfragen

Kein allgemeines „Kontakt aufnehmen“.

* * *

# **12\. „Warum KEA?“**

Diese Seite ist entscheidend, weil KEA als kleinere Agentur Vertrauen erklären muss.

## **Aufbau**

### **Persönlich statt Plattform**

Ein Ansprechpartner, keine Hotline-Kette.

### **Ausgewählt statt endlos**

Nicht jede Schule wird aufgenommen.

### **Kostenfrei organisiert**

Transparent erklären:

- Was ist kostenfrei?
- Welche externen Kosten entstehen?
- Für welche Zusatzleistungen können Gebühren anfallen?

### **Vor Ort nicht allein**

Unterstützung bei Problemen, Änderungen und organisatorischen Fragen.

### **Erfahrung**

Keine vagen Aussagen wie „seit vielen Jahren“. Konkrete, bestätigte Zahlen verwenden:

- Gründungsjahr
- Anzahl vermittelter Reisender
- Anzahl Partnerländer
- Wiederbuchungsquote, sofern messbar

### **Persönlichkeit**

Ein echtes Porträt und eine persönliche Geschichte sind wichtiger als zehn generische Benefits.

* * *

# **13\. Designsystem**

## **Visuelle Leitidee**

**Editorial Travel Journal trifft persönliche Bildungsberatung.**

Nicht:

- klassischer Reiseveranstalter
- bunte Flugportal-Optik
- verspielte Schulwebsite
- sterile Corporate-Beratung

## **Farbwelt**

Ausgangspunkt des Entwurfs: warm, kultiviert, etwas retro, aber nicht nostalgisch.

Empfohlene Tokens:

```css
--color-ink: #17201d;
--color-paper: #f4f0e8;
--color-sand: #ded4c3;
--color-forest: #183f35;
--color-forest-hover: #123128;
--color-moss: #75806a;
--color-coral: #e56f55;
--color-sky: #90aebb;
--color-white: #fffdf8;
```

Verwendung:

- `ink`: Text und dunkle Flächen
- `paper`: primärer Hintergrund
- `forest`: Markenfarbe, primäre CTA und Navigation
- `forest-hover`: Hover- und Active-Zustand von primären Interaktionen
- `coral`: gezielte Highlights, Pfeile und aktive Details; nie Fließtext
- `sky`: zurückhaltende Informationsflächen und Reise-Finder
- `sand`: Sektionen und Karten

Headspin UI bildet diese Rollen direkt ab: `neutral` ist die warme Paper-/Ink-Skala, `brand` und `primary` sind Forest, `secondary` ist Sky und `tertiary` ist Coral. Es werden keine lokalen Ersatz-Hexwerte in Breakdance-Elementen angelegt.

Nicht jede Zielgruppe erhält eine völlig andere Farbe. Das zerstört die Marke.

## **Typografie**

Empfehlung:

### **Display**

Eine charaktervolle Serifenschrift:

- Fraunces
- Newsreader
- Instrument Serif
- oder eine lizenzierte Editorial Serif

### **Text und UI**

Eine klare Sans:

- Manrope
- Inter
- Geist
- Source Sans 3

Kombination:

- große, knappe Headlines
- Serif für Emotion und Marke
- Sans für Navigation, Formulare und längere Texte

## **Größen**

```css
--text-xs: clamp(.78rem, .75rem + .1vw, .84rem);
--text-sm: clamp(.9rem, .86rem + .15vw, 1rem);
--text-base: clamp(1rem, .95rem + .25vw, 1.14rem);
--text-lg: clamp(1.2rem, 1.05rem + .55vw, 1.55rem);
--text-xl: clamp(1.55rem, 1.2rem + 1vw, 2.2rem);
--text-2xl: clamp(2.2rem, 1.45rem + 2.4vw, 4.4rem);
--text-hero: clamp(3rem, 1.7rem + 5vw, 7.5rem);
```

Headspin UI eignet sich als Basis, weil es bereits auf globale Farbsysteme, fluid skalierende Typografie und adaptive Abstände ausgelegt ist.

## **Layout**

- maximale Contentbreite: etwa 1280–1360 px
- Lesetext: maximal 65–72 Zeichen
- asymmetrische 5/7- und 4/8-Grids
- großzügige vertikale Abstände
- wechselnde Bildformate
- einzelne übergroße Typografieelemente
- keine durchgängige Kartenwüste

## **Radius**

Nicht alles abrunden.

```css
--radius-sm: 0.35rem;
--radius-md: 0.75rem;
--radius-lg: 1.25rem;
--radius-pill: 999px;
```

Bilder teilweise komplett eckig, Cards dezent gerundet.

## **Buttons**

Primär:

- dunkelgrün
- heller Text
- klarer Pfeil
- mindestens 44 px Touch-Höhe

Sekundär:

- transparenter Hintergrund
- sichtbarer Rahmen

Textlinks:

- Unterstreichung oder Pfeilbewegung
- nicht nur Farbwechsel

* * *

# **14\. Bildkonzept**

Benötigt werden:

## **Markenbilder**

- Hero-Motive in hoher Auflösung
- urbane Alltagsszenen
- Menschen beim echten Anwenden der Sprache
- Schulen und Unterricht
- Gastfamilien beziehungsweise Unterkünfte
- Lehrerfortbildungen
- Schülerprogramme
- Business-Situationen

## **Pro Reiseziel**

Mindestens:

- 1 Hero
- 2 Stadtbilder
- 2 Schulfotos
- 1 Unterrichtssituation
- 1 Unterkunft
- 1 Freizeitaktivität

## **Regeln**

- WebP oder AVIF
- konsistente Bildbearbeitung
- kein wildes Mischen verschiedener Stock-Stile
- korrekte Alt-Texte
- Fokuspunkt pro Bild pflegen
- Copyright und Nutzungsrechte dokumentieren

* * *

# **15\. Breakdance-Architektur**

## **Grundlage**

- WordPress
- Breakdance
- Breakdance Global Settings
- Headspin UI als Token- und Frameworkbasis
- Danblock selektiv für strukturelle Ausgangspunkte
- eigene KEA-Komponenten als globale Blöcke
- Custom Post Types und zentrale Datenfelder

Danblock bietet zahlreiche vorgefertigte Breakdance-Komponenten für Hero, Content, CTA, Header, Footer, Tabs und weitere Bereiche. Diese sollten als Rohmaterial dienen, nicht ungeprüft als visuelle Patchwork-Bibliothek eingesetzt werden.

## **Nicht machen**

- auf jeder Seite individuelle Klassen erfinden
- Komponenten aus fünf Libraries optisch unverändert mischen
- wiederkehrende Inhalte direkt in Breakdance-Seiten hardcoden
- wichtige Daten in Repeater-Elementen verstecken
- jeden Effekt mit zusätzlichem JavaScript lösen

* * *

# **16\. Datenmodell in WordPress**

> **Aktualisiert:** Umgesetzt wurden die `kea_`-präfigierten Post-Type- und Taxonomie-Slugs aus `AGENTS.md` (`kea_destination`, `kea_school`, `kea_program`, `kea_testimonial`, `kea_team_member`, `kea_language`, `kea_country`, `kea_target_group`, `kea_course_type`, `kea_age_group`, `kea_interest`, `kea_accommodation_type`) und `docs/content-model.md` — nicht die unpräfigierten Namen unten. Ein eigener `faq`-Post-Type wurde nicht gebaut; FAQs liegen als ACF-Feld (`kea_destination_faq`) direkt am Reiseziel. Die Felder unten dienen weiterhin als inhaltliche Referenz, einzelne Felder (z. B. „Zertifikate“, „Status aktiv/inaktiv“, „Kurslevel“) sind im aktuellen Feldsystem noch nicht 1:1 übernommen.

## **Custom Post Types**

### **`destination`** → umgesetzt als `kea_destination`

Ein konkreter Ort:

- Dublin
- London
- Málaga
- Montpellier

Felder:

- Name
- Land
- Sprache
- Kurzbeschreibung
- Langbeschreibung
- Hero
- Galerie
- beste Reisezeit
- Zielgruppen
- Kursarten
- Unterkünfte
- Aktivitäten
- Anreise
- FAQ
- SEO-Inhalte
- Ansprechpartner
- verknüpfte Schulen

### **`school`** → umgesetzt als `kea_school`

- Schulname
- Destination
- Adresse
- Website intern
- Akkreditierungen
- Beschreibung
- KEA-Einschätzung
- Ausstattung
- Gruppengröße
- Mindestalter
- Kurslevel
- Galerie
- verfügbare Kurse
- Unterkunftsoptionen

### **`program`** → umgesetzt als `kea_program`

- Programmname
- Kursart
- Schule
- Zielgruppe
- Sprache
- Mindestalter
- Level
- Lektionen
- Dauer
- Starttermine
- Zertifikate
- Preis ab, optional
- Leistungen
- nicht enthalten
- Status aktiv/inaktiv

### **`testimonial`** → umgesetzt als `kea_testimonial`

- Name
- Porträt
- Zielgruppe
- Destination
- Programm
- Zitat
- Langbericht
- Reisejahr
- Freigabe

### **`team`** → umgesetzt als `kea_team_member`

- Name
- Funktion
- Bild
- Kurzprofil
- Kontakt
- Sprachen

### **`faq`** → nicht als eigener Post Type umgesetzt

Optional zentral, wenn dieselbe FAQ mehreren Seiten zugeordnet werden soll. Stattdessen umgesetzt als ACF-Feld `kea_destination_faq` direkt am Reiseziel.

## **Taxonomien**

- Sprachen
- Länder
- Zielgruppen
- Kursarten
- Altersgruppen
- Interessen
- Unterkunftstypen
- Zertifikate

## **Feldsystem**

ACF Pro oder Meta Box.

Meine Empfehlung: **ACF Pro**, sofern bereits vorhanden oder budgetiert.

Gründe:

- stabile Breakdance-Integration
- Relationship Fields
- Repeater
- Options Pages
- flexible redaktionelle Pflege

* * *

# **17\. Eigene Breakdance-Blöcke**

## **Globale Komponenten**

1.  Header
2.  Mega Menu
3.  Mobile Navigation
4.  Footer
5.  Breadcrumbs
6.  Hero Destination
7.  Hero Audience
8.  Destination Card
9.  Program Card
10. School Card
11. Testimonial Card
12. Trust Strip
13. KEA Benefit Block
14. Filter Bar
15. FAQ Accordion
16. Contact CTA
17. Advisor Card
18. Related Destinations
19. Article Card
20. Sticky Mobile CTA

## **Spezifische Custom Elements**

### **Reise-Finder** → umgesetzt als „KEA Reise-Match" (`/reise-match/`)

> **Aktualisiert:** Gebaut wurde kein Filter mit den Inputs unten, sondern ein 3-Schritt-Inspirations-Wizard „Reise-Match" (Zielgruppe → Atmosphäre → Kursart, siehe `docs/differentiators.md` und `docs/tutorial-redaktion.md`), der auf `/reise-match/` live ist und direkt zu `/anfrage/` mit vorbefülltem Kontext führt.

Ursprünglich geplante Inputs (nicht umgesetzt):

- Zielgruppe
- Sprache
- Ziel
- Dauer
- Reisezeit

Ergebnis via WordPress REST API oder serverseitiger Abfrage.

### **Merkliste**

Leichtgewichtig über `localStorage`.

Kein Benutzerkonto erforderlich.

Der Nutzer kann:

- Reiseziele merken
- Programme merken
- Anfrage aus Merkliste starten

### **Dynamischer Anfrageblock**

Übernimmt Kontext:

```text
Interesse: Dublin
Programm: General English 20
Zielgruppe: Erwachsene
```

### **Vergleich**

Maximal drei Programme vergleichen:

- Unterricht
- Dauer
- Zielgruppe
- Unterkunft
- Besonderheiten

Nicht als komplette Buchungsmaschine ausbauen.

* * *

# **18\. Formulare und Conversion**

## **Hauptformular**

Schritt 1:

- Für wen?
- Sprache
- Wunschziel, optional
- Zeitraum
- Dauer

Schritt 2:

- Lernziel
- aktuelles Niveau
- Unterkunft
- besondere Wünsche

Schritt 3:

- Name
- E-Mail
- Telefon optional
- bevorzugte Kontaktart
- Datenschutz

## **Formularregeln**

- maximal drei sichtbare Schritte
- Fortschrittsanzeige
- Eingaben zwischenspeichern
- serverseitige Validierung
- Spam-Schutz ohne aggressive Captchas
- klare Erfolgsseite
- automatische Zusammenfassung per E-Mail

## **Weitere CTAs**

Nicht überall „Mehr erfahren“.

Besser:

- Reise ansehen
- Passende Kurse entdecken
- Beratung zu Dublin
- Schülerprogramm anfragen
- Kurs vergleichen
- Reise merken
- Mit KEA planen

* * *

# **19\. Header und Footer**

## **Header**

Desktop:

- zunächst transparent über Hero
- beim Scrollen kompakt und solide
- CTA immer sichtbar
- optional eine kleine Servicezeile:

Persönliche Beratung · Organisation kostenfrei

Keine Social-Media-Icons im primären Header.

## **Mega Menu**

Visuell aufgebaut:

- linke Spalte: Zielgruppen
- mittlere Spalte: Sprachen oder beliebte Orte
- rechte Spalte: hervorgehobenes Reiseziel oder Beratung

## **Footer**

### **Spalte 1**

Marke, Claim, Kontakt

### **Spalte 2**

Sprachreisen

### **Spalte 3**

Reiseziele

### **Spalte 4**

Service

### **Spalte 5**

Rechtliches

Zusätzlich:

- Telefonnummer
- E-Mail
- Öffnungszeiten
- Social Media
- Newsletter, nur falls regelmäßig gepflegt
- Qualitätssiegel, falls nachweisbar

Der aktuelle Footer des Entwurfs enthält noch generische Platzhalter und Breakdance-Links und muss vollständig als eigenes globales Element aufgebaut werden.

* * *

# **20\. Magazin und SEO**

## **Content-Silos**

### **Inspiration**

- Dublin oder Malta?
- Die schönsten Orte für Spanisch
- Sprachreise mit 50+
- Sprache und Kochen kombinieren

### **Planung**

- Was kostet eine Sprachreise?
- Gastfamilie oder Residenz?
- Wie lange sollte eine Sprachreise dauern?
- Welches Sprachniveau brauche ich?
- Was ist im Preis enthalten?

### **Zielgruppen**

- Sprachreise für Schüler
- Lehrerfortbildung im Ausland
- Business-Englisch im Ausland
- Sprachreise für Erwachsene

### **Prüfung**

- IELTS oder Cambridge?
- Vorbereitung auf B2 First
- Sprachzertifikate im Überblick

## **SEO-Prinzip**

Keine Stadtseite aus dünnem Text und einer Partnerschulliste.

Jede Destination braucht:

- eigenständige Suchintention
- konkrete Informationen
- echte KEA-Einschätzung
- passende Programme
- FAQ
- interne Links
- strukturierte Daten

## **Strukturierte Daten**

- Organization
- BreadcrumbList
- FAQPage
- Article
- Course, wo semantisch und technisch korrekt
- Person
- LocalBusiness, falls passend

* * *

# **21\. Technische Anforderungen**

## **Performance**

- keine Video-Heros auf Mobilgeräten
- Bilder responsiv ausgeben
- Fonts lokal hosten
- maximal zwei Schriftfamilien
- möglichst keine Slider-Library
- Breakdance-Assets nur bei Bedarf laden
- Plugins konsequent reduzieren
- CDN nur bei echtem Bedarf

## **Accessibility**

- WCAG-konforme Kontraste
- sichtbare Focus States
- korrekte Überschriftenstruktur
- Navigation per Tastatur
- Dialoge mit nativem `<dialog>`, sofern geeignet
- Accordions mit echten Buttons
- Reduced Motion berücksichtigen
- Formfehler programmatisch zuordnen

Headspin UI kann beim Aufbau konsistenter Kontraste, fluid skalierender Typografie und Abstände helfen, ersetzt aber keine abschließende Accessibility-Prüfung.

## **Datenschutz**

- Consent Management
- keine externen Fonts
- YouTube nur mit Zwei-Klick-Lösung
- Maps erst nach Zustimmung oder als statische Vorschau
- datensparsame Analytics
- Formulardaten klar dokumentieren

## **Sicherheit**

- minimale Plugin-Landschaft
- automatische Backups
- Staging getrennt von Produktion
- Rollen und Rechte beschränken
- Login absichern
- Updates zuerst im Staging
- SMTP statt PHP-Mail
- Upload-Typen einschränken

* * *

# **22\. Migration**

## **Vor dem Neubau**

1.  vollständigen URL-Export erstellen
2.  Rankings und organische Landingpages erfassen
3.  bestehende Formulare dokumentieren
4.  Medienbibliothek prüfen
5.  alle Destinationen und Kurse inventarisieren
6.  veraltete Inhalte markieren
7.  neue Datenstruktur festlegen

## **Redirect-Matrix**

Für jede alte URL:

```text
Alte URL -> neue Ziel-URL -> Status -> geprüft
```

Keine pauschale Weiterleitung aller alten Seiten auf die Startseite.

## **Content-Bereinigung**

Kategorien:

- übernehmen
- überarbeiten
- zusammenführen
- archivieren
- löschen und umleiten

## **Launch**

- Staging noindex
- Canonicals prüfen
- Sitemap prüfen
- Robots prüfen
- Formulare testen
- Analytics testen
- Redirects testen
- 404-Monitoring
- Core Web Vitals prüfen
- Search Console einreichen

* * *

# **23\. Umsetzungsphasen**

## **Phase 1: Strategie und Bestand**

- Content-Audit
- SEO-Audit
- Angebotsinventar
- Zielgruppen
- Navigationsstruktur
- Datenmodell

## **Phase 2: Designsystem**

- Farben
- Typografie
- Spacing
- Buttons
- Formulare
- Karten
- Bildsprache
- Breakdance Global Settings
- Headspin-Konfiguration

## **Phase 3: Kernkomponenten**

- Header
- Navigation
- Footer
- Heroes
- Cards
- CTA
- Filter
- Formulare
- globale Templates

## **Phase 4: Datensystem**

- CPTs
- Taxonomien
- ACF-Felder
- Beziehungen
- Templates
- Query Loops

## **Phase 5: Pilotseiten**

Zuerst:

1.  Startseite
2.  Reiseziele-Archiv
3.  eine Destination
4.  Schülerseite
5.  Lehrerfortbildung
6.  Kontakt und Anfrage

Damit wird das System geprüft, bevor dutzende Seiten entstehen.

## **Phase 6: Content und Migration**

- Inhalte übertragen
- Texte kürzen
- Bilder optimieren
- interne Links
- Metadaten
- Redirects

## **Phase 7: Qualität und Launch**

- Mobile
- Accessibility
- Performance
- Browser
- Formulare
- SEO
- Datenschutz
- Backups

* * *

# **24\. Prioritäten**

## **Muss zum Launch fertig sein**

- Startseite
- Zielgruppenseiten
- Reiseziele
- Destination-Template
- Kursübersicht
- Warum KEA
- Über KEA
- Anfrage
- Kontakt
- FAQ
- Datenschutz und Impressum
- Redirects
- Analytics und Consent

## **Phase 2 nach Launch**

> **Aktualisiert:** „Reise-Finder" (als Reise-Match) wurde bereits vor Launch gebaut, siehe Korrektur in Abschnitt 17. Der Rest dieser Liste ist unverändert offen — konsolidiert mit weiteren Ideen in `docs/ideen-backlog.md`.

- ~~Reise-Finder~~ (bereits umgesetzt als Reise-Match, siehe oben)
- Merkliste
- Vergleich
- ausführliche Erfahrungsberichte
- Download-Guides
- Newsletter-Automation
- zusätzliche Destinationen
- mehrsprachige Website

* * *

# **25\. Klare Designentscheidung**

Der bestehende Entwurf sollte **nicht verworfen**, sondern konsequent professionalisiert werden.

Beibehalten:

- große emotionale Typografie
- editoriale Bildflächen
- warme, hochwertige Stimmung
- der Claim „Mach die Welt zu deinem Klassenzimmer“
- die persönliche Boutique-Positionierung

Ändern:

- kein rotierender Mehrfach-Hero
- klare Zielgruppenführung
- kürzere Texte
- weniger generische Cards
- echte dynamische Destinationen
- belastbare Anfrageführung
- vollständig eigener Header und Footer
- konsistentes Designsystem
- keine Platzhalter oder unverbundenen Komponentenbibliotheken

Das Ergebnis sollte wirken wie ein **hochwertiges Reisemagazin mit einer sehr guten persönlichen Beratung im Hintergrund**. Nicht laut, nicht überladen und nicht technisch. Die Technik bleibt unsichtbar; Reise, Sprache und Vertrauen stehen im Vordergrund.
