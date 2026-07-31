# Ideen & Backlog – KEA Sprachreisen

Stand: 31. Juli 2026

Dieses Dokument bündelt alles, was bewusst **nicht** in der ersten Ausbaustufe gebaut wird, sowie offene Ideen für danach. Bisher stand das verstreut in `AGENTS.md`, `ROADMAP.md` und `Master-Konzept.md` an drei leicht unterschiedlichen Stellen — hier ist es an einem Ort.

---

## 1. Bewusst zurückgestellte Kerninfrastruktur

Diese Funktionen werden ohne ausdrückliche Freigabe **nicht** entwickelt, weil sie Komplexität, Kosten oder Wartungsaufwand erzeugen, die für die aktuelle Ausbaustufe nicht gerechtfertigt sind:

- Nutzerkonten / Kundenportal
- Onlinezahlung
- verbindliche Echtzeitbuchung / Live-Verfügbarkeit aller Schulen
- komplexe Preisengine
- eigene App
- vollständiges CRM
- große Buchungsplattform
- individuelle Datenbanktabellen (abseits von WordPress-Bordmitteln)
- vollständige Mehrsprachigkeit der Website

Die Website soll zuerst zuverlässig informieren, orientieren, Vertrauen schaffen, Angebote strukturiert zeigen und qualifizierte Anfragen erzeugen — erst danach sind die Punkte oben überhaupt sinnvoll zu bewerten.

---

## 2. Produkt-Ideen für nach dem Launch

Aus `Master-Konzept.md` § „Phase 2 nach Launch":

- **Merkliste** (Favoriten ohne Zwangsanmeldung, lokal über `localStorage`) — einer der ursprünglichen 5 Differentioren (siehe `docs/differentiators.md` #5), bisher nicht gebaut.
- **Vergleich** (bis zu 3 Programme nebeneinander vergleichen) — siehe „Zu klären" unten, Status unsicher.
- ausführlichere Erfahrungsberichte (Langform statt nur Zitat)
- Download-Guides (z. B. PDF-Ratgeber je Zielgruppe)
- Newsletter-Automation
- zusätzliche Destinationen über die aktuellen 31 hinaus
- mehrsprachige Website (siehe auch Abschnitt 1 — Dopplung, gehört eigentlich dorthin)

Aus `docs/differentiators.md` #1 (bisher nicht gebaut):

- **Trust-Design-Block** „Plattform vs. KEA Boutique" — Vergleichstabelle (Callcenter vs. persönlicher Ansprechpartner, versteckte Gebühren vs. 0 € Agenturaufschlag, etc.) für Startseite und `/warum-kea/`.

---

## 3. Zu klären (beim Dokumenten-Audit gefunden, Status unklar)

- **„Vergleich"-Tool** (max. 3 Programme vergleichen, `Master-Konzept.md` §17): taucht nur einmal auf, wird in keinem anderen Dokument mehr erwähnt. Unklar, ob das noch eine aktive Idee ist oder schlicht vergessen wurde — bitte mit KEA klären, ob das weiterverfolgt werden soll.
- **Single-Template „Erfahrung"**: `AGENTS.md` plant ein eigenes Einzelseiten-Template pro Erfahrungsbericht; laut `docs/tutorial-redaktion.md` erscheinen Erfahrungen aber nur im Archiv `/erfahrungen/` bzw. auf der zugehörigen Reiseziel-Seite, kein eigenes Single-Template. Zu klären: bewusste Entscheidung oder offene Lücke?
- **`migration-map.csv`**: wird von `docs/launch-checklist.md` und `docs/url-structure.md` referenziert; Aktualität/Vollständigkeit sollte vor Launch nochmal stichprobenartig geprüft werden.

---

## Quellen

Ursprünglich verteilt auf: `AGENTS.md` („Nicht in Phase 1 bauen"), `ROADMAP.md` („Was wir bewusst später bauen"), `Master-Konzept.md` („Phase 2 nach Launch"), `docs/differentiators.md`.
