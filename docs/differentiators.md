# Alleinstellungsmerkmale & UX-Differentioren – KEA Sprachreisen

Dieses Dokument beschreibt die 5 strategischen Alleinstellungsmerkmale (Differentioren), mit denen sich KEA Sprachreisen visuell, inhaltlich und funktional von großen Buchungsportalen und Massenanbietern (EF, ESL, Sprachcaffe etc.) abhebt.

> **Baustatus:** Zwei der fünf sind bereits live, eines ist über ACF-Felder umgesetzt, zwei sind noch offene Ideen. Die aktuelle Tabelle mit Verweisen auf die jeweilige Umsetzung steht in [`tutorial-redaktion.md`, Abschnitt 17](tutorial-redaktion.md#17-baustatus-der-fünf-strategischen-differentioren). Die ursprüngliche Beschreibung unten bleibt als konzeptionelle Referenz erhalten.

---

## 1. Gegenüberstellung „Plattform vs. KEA Boutique“ (Trust-Design-Block)

### Problem bei der Konkurrenz
Große Reiseveranstalter und Buchungsportale wirken anonym, bieten unübersichtliche Schulmassen und erwecken oft den Eindruck, dass Direktbuchungen bei den Schulen günstiger wären.

### KEA-Lösung
Ein prominenter Vergleichsblock auf der Startseite und der Seite `/warum-kea/`:

| Anonymes Buchungsportal | KEA Sprachreisen (Boutique-Agentur) |
| --- | --- |
| Callcenter & wechselnde Hotlines | **1 persönlicher Ansprechpartner** vor, während & nach der Reise |
| Oft versteckte Gebühren & Aufschläge | **0 € Agenturaufschlag** (Originalpreise der Partnerschulen) |
| Ungeprüfter Katalog mit 500+ Schulen | **100 % handverlesene Partnerschulen** mit KEA-Qualitätssiegel |
| Keine Unterstützung bei Problemen vor Ort | **Direkte Hilfe & Erreichbarkeit** während des Aufenthalts |

---

## 2. Der KEA „Reise-Match“ (Interaktiver Inspirations-Wizard)

### Problem bei der Konkurrenz
Komplexe, technische Such- und Filtermasken mit Dutzenden Dropdowns, die wie ein Flugsuchportal wirken und Nutzer überfordern.

### KEA-Lösung
Ein eleganter 3-Schritt Inspirations-Wizard (*„Welches Reiseziel passt zu dir?“*):

1. **Wer reist?** (Erwachsene / Schüler & Jugendliche / Lehrer / Business)
2. **Welcher Umgebungstyp?** (Kultur & Geschichte / Meer & Strand / Metropole & Lifestyle / Natur & Ruhe)
3. **Was ist dein Hauptziel?** (Sprache erlernen & vertiefen / Sprachzertifikat / Auszeit & Kultur / Beruf & Karriere)

**Ergebnis:** Zeigt 2–3 passende Reiseziele dynamisch an und führt mit einem Klick auf `/anfrage/` (mit automatisch vorausgefülltem Reiseziel-Kontext).

---

## 3. Redaktionelle „KEA-Einschätzung“ (Expertise-Box)

### Problem bei der Konkurrenz
Portale kopieren meist nur unkritisch die Werbetexte der Sprachschulen.

### KEA-Lösung
Eine hervorgehobene KEA-Einschätzungsbox auf jeder Reiseziel- und Schulseite:
> **„KEA empfiehlt Dublin, weil …“**
> *„Ideal für Erwachsene und Lehrkräfte, die ein lebendiges Kulturleben und offene Menschen suchen – weniger geeignet, wenn man reinen Strandurlaub sucht.“*

Gesteuert über das ACF-Feld `kea_destination_kea_recommendation` bzw. `kea_school_kea_assessment`.

---

## 4. Visueller Tagesablauf / Beispielwoche (Timeline-Block)

### Problem bei der Konkurrenz
Vage Versprechungen über „Freizeitprogramm“ und Unterricht, ohne den echten Alltag vor Ort greifbar zu machen.

### KEA-Lösung
Ein visuell ansprechender Timeline-Block (*„Ein Tag im Summer Camp“* / *„Ein Tag Sprachreise Erwachsene“*):

* `08:30` **Frühstück** in der Gastfamilie oder Residenz
* `09:00 - 12:30` **Sprachunterricht** in Kleingruppen (Fokus auf freies Sprechen)
* `12:30 - 14:00` **Mittagspause** & Campus-Treffpunkt
* `14:00 - 17:00` **Kultur- & Freizeitaktivitäten** (Stadtführung, Sport, Ausflüge)
* `18:30` **Gemeinsames Abendessen** & Abendprogramm / Freizeit

Ausgabe dynamisch über ACF-Repeater-Felder oder als wiederverwendbares Breakdance-Element.

---

## 5. Favoriten & Merkliste ohne Zwangsanmeldung (LocalStorage)

### Problem bei der Konkurrenz
Nutzer müssen sich registrieren oder komplizierte Formulare ausfüllen, um Reiseziele zu speichern.

### KEA-Lösung
Ein Klick auf das Herz-Symbol merkt sich Reiseziele und Programme lokal im Browser (`localStorage`). Aus der Merkliste kann der Nutzer mit einem Klick alle gesammelten Orte direkt in eine Beratung übergeben.
