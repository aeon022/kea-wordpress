# To-do – KEA-Redesign

Stand: 29. Juli 2026

## Nächste Umsetzung – KEA-Redesign

- [x] Footer ohne Platzhalter und generische Breakdance-Links aufbauen: Kontakt, Service, Reisebereiche und Rechtliches.
- [x] Impressum, Datenschutz und Kontakt als verlinkte Standardseiten aufbauen.
- [x] Aktuellen Frontend-Stand auf externe Dienste prüfen: keine Analyse, Werbung, Karten, Videos oder Captcha; ungenutztes externes QR-Skript und Emoji-Fallback deaktiviert. Daher derzeit kein Consent-Banner.
- [ ] SMTP-Versand und Formularspeicherung nach finaler Kundenfreigabe technisch abnehmen.

## Vom Kunden: Bestandsdaten und Bilder

- [ ] Dublin sowie die übrigen Reiseziele inhaltlich und visuell freigeben: Texte, Bilder, Fakten, leere Datenzustände und CTAs im echten Inhalt prüfen.
- [ ] Die 31 Reiseziele im Backend stichprobenartig prüfen: Titel, Land, Sprache, Text, Bild und Permalink.
- [ ] Die sieben fehlenden Altbilder recherchieren, ersetzen oder bewusst aus den Datensätzen entfernen.

## Vom Kunden: Anfrageformular freigeben

- [ ] Verbindliche Empfängeradresse für neue Anfragen sowie gewünschte CC-Empfänger nennen.
- [ ] Absenderadresse auf der KEA-Domain und SMTP-Versand bereitstellen beziehungsweise freigeben; den Versand anschließend mit einer echten Testanfrage prüfen.
- [ ] Finalen Einleitungstext, Button-Text, Erfolgs- und Fehlermeldung liefern oder freigeben.
- [ ] Datenschutz-Text und Ziel der verlinkten Datenschutzerklärung rechtlich freigeben.
- [ ] Entscheiden, ob zusätzlich Angaben wie gewünschter Zeitraum, Budget, Alter oder Rückrufzeit abgefragt werden sollen.
- [ ] Die Auswahltexte für Reiseform, Anfragetyp und die sichtbare Programm-/Kursauswahl fachlich prüfen. Die aktuell veröffentlichten Reiseziele und Programme sind als Startliste hinterlegt.

## Vom Kunden: Reiseziel-Inhalte ergänzen

- [ ] Für alle 31 Reiseziele den **Charakter** des Ortes liefern oder freigeben.
- [ ] Für alle 31 Reiseziele eine konkrete **KEA-Empfehlung** formulieren: Für wen passt der Ort besonders gut und warum?
- [ ] **Beste Reisezeit**, **Mindestdauer**, **Unterkunftshinweis** und **Anreisehinweis** fachlich ergänzen beziehungsweise freigeben.
- [ ] Pro Reiseziel mindestens drei häufige Fragen mit verbindlichen Antworten liefern; keine Preis- oder Verfügbarkeitszusagen ohne aktuelle Prüfung.
- [ ] Die 24 übernommenen Hero-/Galeriebilder auf Bildrechte, Aktualität und passende Alt-Texte prüfen; für die sieben fehlenden Bilder neue Dateien bereitstellen.
- [ ] Bestehende Kurzprofile vor Veröffentlichung fachlich auf Aktualität prüfen.

## Vom Kunden: Programme, Partnerschaften und weitere Inhalte freigeben

- [x] Erste Partnerschulen als `kea_school` angelegt und einem Reiseziel zugeordnet: CES Dublin/Cork, Emerald Cultural Institute, CAVILAM – Alliance Française, Wimbledon School of English, International House London und BLS English.
- [x] Drei verifizierte CES-Dublin-Programme sind angelegt und dem Reiseziel sowie der Partnerschule zugeordnet.
- [ ] Die Partnerschaften und Programme vor Veröffentlichung mit KEA fachlich bestätigen; der historische Partnerbestand ist keine Preis- oder Verfügbarkeitszusage.
- [ ] Für jedes Programm mindestens Kurzprofil, Kursart, Lektionen, Dauer, Mindestalter, Starttermine und Preis-Hinweis fachlich prüfen.
- [ ] Kursarten, Zielgruppen und Altersgruppen fachlich freigeben; wir pflegen sie strukturiert, ohne Kurslisten in Breakdance zu hardcodieren.
- [ ] Bestehende WPBakery-Seiten nur als Inhaltsquelle verwenden und übernommene Texte vor dem Import bereinigen.
- [ ] Erfahrungen und Teamdaten als eigene Datensätze prüfen und bei Bedarf übernehmen.

## Technische Umsetzung und Qualitätssicherung – KEA-Redesign

- [x] Dynamisches Reiseziel-Template erstellt: Hero, Fakten, Inhalte, Partnerschulen, Programme, Galerie, Erfahrungen, FAQ und Anfrage-CTA.
- [ ] Die Reiseziel-Blöcke mit befüllten ACF-Daten auf Desktop und Mobil testen.
- [x] Angebotsliste und KEA-Komponenten an die Headspin-Farben und fluiden Typografie-Tokens binden.
- [x] Globalen Header mit Desktop-/Mobilnavigation, sichtbarem Beratungs-CTA, Hover-/Fokuszuständen und zentralem Hero-Farbwechsel umsetzen.
- [ ] Keine einzelnen Reiseziele oder Programme als manuelle Breakdance-Seiten anlegen.

## Templates und Seiten

- [x] Single-Template für Reiseziele mit dynamischen Abschnitten erstellen.
- [x] Single-Templates für Partnerschulen und Programme erstellen.
- [x] Archive für Reiseziele und Programme erstellen.
- [x] Erfahrungsarchiv erstellen und mit einem klar markierten Dublin-Testbericht prüfen.
- [ ] Den Dublin-Testbericht vor dem Launch durch eine freigegebene echte Erfahrung ersetzen oder löschen.
- [x] Startseite nach der Komponenten- und Template-Matrix aufbauen.
- [x] Anfrageformular mit validiertem Kontext für Reiseziel, Schule und Programm anbinden.
- [x] Pflichtseiten aus Konzept und Roadmap anlegen: Sprachreisen, fünf Zielgruppenseiten, Kurse, Warum KEA, Über KEA, FAQ und Magazin.

## Vom Kunden: Rechtliches und Consent freigeben

- [ ] Impressumsdaten zu Christine Gütlinger-Keegan, Firmenwortlaut, Rechtsform, Anschrift, Telefon und E-Mail final bestätigen.
- [ ] Falls vorhanden UID, Firmenbuchnummer samt Firmenbuchgericht und GISA-Zahl liefern.
- [ ] Gewerbe- beziehungsweise Berufsbezeichnung, WKO-Fachgruppe und zuständige Aufsichtsbehörde bestätigen.
- [ ] Hostinganbieter, Serverstandort, Auftragsverarbeitungsvereinbarung und Löschfrist der Serverprotokolle dokumentieren.
- [ ] Löschfristen für Breakdance Form Submissions und zugehörige Anfrage-E-Mails verbindlich festlegen.
- [ ] Datenschutzerklärung, eingesetzte Dienste und Rechtsgrundlagen rechtlich freigeben.
- [x] Für den aktuellen Stand keine optionalen Dienste aktivieren; ein Consent-Banner wird erst bei einem tatsächlich zustimmungspflichtigen Dienst konfiguriert.

## Vor Veröffentlichung

- [ ] Alte und neue URLs in einer Migrationsmatrix zuordnen und Redirects vorbereiten.
- [ ] Mobile Ansicht, Tastaturbedienung, Fokuszustände und leere Datenzustände testen.
- [ ] Bildrechte, Alt-Texte, lokale Fonts, Consent und Formularversand prüfen.
- [ ] Backups, SEO-Indexierung und Launch-Checkliste dokumentieren.
