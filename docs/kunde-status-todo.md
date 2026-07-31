# Status & To-do für KEA Sprachreisen

Stand: 31. Juli 2026

Dieses Dokument ist die kundenfreundliche Zusammenfassung: Was ist fertig, was fehlt noch von KEA, damit die neue Website live gehen kann? Für die granulare interne Arbeitsliste siehe [`todo.md`](todo.md), für die technische Launch-Checkliste [`launch-checklist.md`](launch-checklist.md), für rechtliche Details [`datenschutz-konzept.md`](datenschutz-konzept.md).

---

## Status: Was ist bereits fertig

- Die komplette Website-Struktur steht: Startseite, Reiseziele, Partnerschulen, Programme, Erfahrungen, Magazin, Anfrageformular, Kontakt, Impressum, Datenschutz.
- 31 Reiseziele sind als strukturierte Datensätze angelegt, davon Dublin bereits mit bereinigtem Text.
- 24 passende Bestandsbilder sind den Reisezielen zugeordnet.
- 7 Partnerschulen und 3 fachlich geprüfte CES-Dublin-Programme sind angelegt und korrekt verknüpft.
- Header, Footer und alle Pflichtseiten sind aufgebaut und verlinkt.
- Das Magazin läuft mit den Kategorien Ratgeber, Reiseberichte und Aktuelles.
- Der interaktive „KEA Reise-Match" (`/reise-match/`) und die Tagesablauf-Übersicht (`/tagesablauf/`) sind live.
- Desktop-, Mobil- und Accessibility-Prüfung der wichtigsten Seiten ist abgeschlossen.
- URL-Migrationsmatrix und Redaktionstutorial sind dokumentiert.

---

## Was KEA noch liefern oder freigeben muss

### 1. Rechtliches & Impressum — **Launch-Blocker**

- Exakter Firmenwortlaut & Rechtsform
- Offizielle Geschäftsanschrift, Telefonnummer & E-Mail-Adresse
- Firmenbuchnummer & Firmenbuchgericht (falls vorhanden)
- UID-Nummer (falls vorhanden)
- GISA-Zahl (falls vorhanden)
- Gewerbe- & Berufsbezeichnung, WKO-Fachgruppe, zuständige Aufsichtsbehörde
- Hostinganbieter, Serverstandort & Auftragsverarbeitungsvereinbarung (AVV) bestätigen
- Rechtliche Freigabe der Datenschutzerklärung
- Löschfristen für Server-Logfiles und Formular-Anfragen festlegen

### 2. Anfrageformular & E-Mail-Versand — **Launch-Blocker**

- Verbindliche Empfänger-Adresse für neue Anfragen (sowie optionale CC-Empfänger)
- Absenderadresse auf der KEA-Domain
- SMTP-Zugangsdaten (Host, Port, User, Passwort) für echten Mailversand
- Finaler Einleitungstext, Button-Text, Erfolgs- und Fehlermeldung
- Entscheidung: sollen zusätzlich Zeitraum, Budget, Alter oder Rückrufzeit abgefragt werden?

### 3. Cookie-Consent — **Launch-Blocker**

- Rechtliche Freigabe der Cookie-Texte & Kategorien für den Consent-Banner (Complianz Free wird technisch vorbereitet)

### 4. Bilder & Bestandsdaten

- Eigene Originalfotos in voller Auflösung hochladen und bei den jeweiligen Reisezielen/Schulen/Programmen/Beiträgen austauschen
- Die folgenden 7 fehlenden Altbilder recherchieren, ersetzen oder bewusst entfernen: `IMG_0852.jpg`, `map-brighton.jpg`, `DSC_1488-bearb.jpg`, `IMG_0111.jpg`, `WP_002224.jpg`, `20180829_121159-e1546633996344.jpg`, `Malaga1-e1559337096861.jpg`
- Die 24 übernommenen Hero-/Galeriebilder auf Bildrechte, Aktualität und Alt-Texte prüfen
- Die 31 Reiseziele stichprobenartig prüfen: Titel, Land, Sprache, Text, Bild, Permalink

### 5. Reiseziel-Inhalte

- Pro Reiseziel: **Charakter** des Ortes formulieren
- Pro Reiseziel: konkrete **KEA-Empfehlung** — für wen passt der Ort und warum?
- Beste Reisezeit, Mindestdauer, Unterkunfts- und Anreisehinweis ergänzen
- Mindestens drei FAQ mit verbindlichen Antworten pro Reiseziel (keine Preis-/Verfügbarkeitszusagen ohne aktuelle Prüfung)

### 6. Programme & Partnerschulen

- Bestehende Partnerschaften und Programme fachlich bestätigen (der historische Bestand ist keine Preis-/Verfügbarkeitszusage)
- Pro Programm: Kurzprofil, Kursart, Lektionen, Dauer, Mindestalter, Starttermine, Preis-Hinweis prüfen
- Kursarten, Zielgruppen und Altersgruppen fachlich freigeben

### 7. Magazin

- Die 3 veröffentlichten Demoartikel durch freigegebene Artikel ersetzen oder vor Launch auf Entwurf setzen
- Pro Artikel: Titel, Kurztext, Beitragsbild mit geklärten Bildrechten, Kategorie freigeben

### 8. Pilotabnahme & Testinhalte

- Gemeinsame Pilotabnahme von Dublin: Texte, Bilder, Fakten, leere Zustände, CTAs auf Desktop und Mobil
- Den Dublin-Testbericht in den Erfahrungen vor Launch durch eine echte, freigegebene Erfahrung ersetzen oder löschen

---

## Technische Restpunkte (kein Kundenaufwand, aber vor Launch nötig)

Backup-Konfiguration, SEO-Lösung, Redirect-Aktivierung — Details in [`launch-checklist.md`](launch-checklist.md).

---

## Nächste Lieferstrecke

1. Consent und Formularversand mit den finalen Kundendaten technisch prüfen.
2. Kundeninhalte, Bildrechte sowie fachliche Programm- und Reisezielangaben vervollständigen.
3. Backup, SEO, Redirects und abschließende Launch-Abnahme durchführen.
