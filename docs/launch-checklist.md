# Launch-Checkliste – KEA Sprachreisen

Stand: 29. Juli 2026

Diese Checkliste trennt den intern geprüften technischen Stand von Punkten, die Kundendaten, rechtliche Freigabe oder die spätere Pilotabnahme benötigen. Ein Launch erfolgt erst, wenn alle als **Blocker** markierten Punkte erledigt sind.

## 1. Aktueller technischer Stand

- [x] WordPress verwendet **KEA Sprachreisen** als Website-Titel und **Persönlich ausgewählte Sprachreisen** als Untertitel.
- [x] Website-Icon und Logo verwenden das KEA-Branding; Starbase11-Platzhalter sind entfernt.
- [x] Die Startseite ist als statische Frontpage gesetzt.
- [x] Beitrags-URLs verwenden `/magazin/{slug}/`.
- [x] Die native WordPress-Sitemap ist erreichbar.
- [x] Header, Footer, Suche, Pflichtseiten, dynamische Singles und Archive sind vorhanden.
- [x] Repräsentative Seiten wurden auf Desktop und Mobil ohne horizontale Überbreite oder leere sichtbare Sektionen geprüft.
- [x] Die geprüften Seiten haben genau eine sichtbare H1.
- [x] Sichtbare Bilder, Links, Buttons und Formularfelder der geprüften Seiten besitzen zugängliche Namen beziehungsweise Beschriftungen.
- [x] Breakdance-Bedientexte im globalen Header sind auf Deutsch.
- [ ] Für den Consent-Banner wird **Complianz (Free Version)** konfiguriert und vor dem Launch getestet.

Geprüfte Seitentypen: Startseite, Reiseziele-Archiv, befülltes und reduziertes Reiseziel, Partnerschule, Programm, Erfahrungen, Magazin, Magazinartikel, Kontakt, Anfrage, Datenschutz und 404.

## 2. Blocker vor der Veröffentlichung

- [ ] **Kunde:** Dublin-Pilotabnahme durchführen.
- [ ] **Kunde:** Impressumsdaten und Datenschutzerklärung rechtlich freigeben.
- [ ] **Kunde:** Empfänger, Absender und SMTP-Zugang für das Anfrageformular bestätigen.
- [ ] **Kunde:** Demoartikel und Test-Erfahrungsbericht ersetzen oder auf Entwurf setzen.
- [ ] **Kunde:** Bildrechte, Alt-Texte und fachliche Kerndaten der veröffentlichten Inhalte freigeben.
- [ ] **Technik:** Backup-Ziel und Zeitplan konfigurieren und eine Wiederherstellung testen.
- [ ] **Technik:** SEO-Lösung und Pflegeverantwortung für Seitentitel, Meta-Beschreibungen, Canonicals und Social Previews festlegen.
- [ ] **Technik:** Redirect-Matrix vollständig freigeben und erst zum Launch aktivieren.

## 3. Backup

UpdraftPlus ist aktiv, derzeit aber ohne Zeitplan, Aufbewahrung oder Remote-Speicher konfiguriert. Vor dem Launch:

1. Remote-Ziel und verantwortlichen Zugang festlegen.
2. Datenbank täglich mit mindestens sieben Ständen sichern.
3. Dateien wöchentlich mit mindestens vier Ständen sichern.
4. Direkt vor Deployment und Domainumschaltung eine manuelle Vollsicherung erstellen.
5. Mindestens eine Wiederherstellung in einer getrennten Umgebung testen.
6. Speicherort und verantwortliche Person dokumentieren.

Ein vorhandenes Backup ohne geprüfte Wiederherstellung gilt nicht als Launch-Freigabe.

## 4. SEO und Indexierung

WordPress liefert aktuell Titel und XML-Sitemap nativ aus; ein eigenes SEO-Plugin ist nicht aktiv. Vor dem Launch ist zu entscheiden, ob die native Ausgabe genügt oder eine schlanke SEO-Lösung für Meta-Beschreibungen, Canonicals und Social Previews benötigt wird.

### Testumgebung

- [ ] Passwortschutz aktiv.
- [ ] **Suchmaschinen davon abhalten, diese Website zu indexieren** aktiv.
- [ ] HTML-Ausgabe auf `noindex` prüfen.
- [ ] Testdomain nicht in öffentlichen Sitemaps oder Search Console einreichen.

### Produktionsstart

- [ ] Website-Titel und Untertitel final prüfen.
- [ ] Sichtbarkeit für Suchmaschinen erst unmittelbar zum Launch aktivieren.
- [ ] `robots.txt` und `/wp-sitemap.xml` nach der Umschaltung prüfen.
- [ ] Canonical-URLs müssen auf die Produktionsdomain zeigen.
- [ ] Home, Hauptseiten, Archive und Pilotinhalte auf eindeutige Seitentitel prüfen.
- [ ] Produktions-Sitemap in der zuständigen Search Console einreichen.

## 5. Redirects

Die vorbereitete Matrix liegt in [`migration-map.csv`](migration-map.csv).

1. Zeilen mit `blocked` oder `customer` klären.
2. Redirects nicht auf der lokalen oder öffentlichen Altseite vorab aktivieren.
3. Am Launch-Ziel ausschließlich eindeutige 301-Weiterleitungen übernehmen.
4. Die veraltete Coming-soon-Seite mit HTTP 410 entfernen.
5. Jede Quelle auf Ziel, Statuscode und Weiterleitungskette prüfen.
6. Keine pauschale Weiterleitung aller 404-Seiten auf die Startseite einrichten.

## 6. Formulare und Datenschutz

- [ ] Empfänger- und CC-Adressen bestätigt.
- [ ] Absenderadresse liegt auf der KEA-Domain.
- [ ] SMTP eingerichtet und eine echte Anfrage erfolgreich zugestellt.
- [ ] Breakdance Form Submission vollständig und sparsam gespeichert.
- [ ] Erfolgs- und Fehlermeldung geprüft.
- [ ] Datenschutzhinweis und Pflichtlink geprüft.
- [ ] Löschfristen für Formularspeicherung und Anfrage-E-Mails dokumentiert.
- [ ] Consent-Entscheidung nach dem finalen Dienstestand erneut geprüft.

## 7. Deployment

1. Vollbackup erstellen und Zeitpunkt dokumentieren.
2. Versionierte KEA-Plugins übertragen und aktivieren.
3. ACF-JSON synchronisieren.
4. Breakdance-Header, Footer und Templates importieren beziehungsweise die freigegebene Datenbank migrieren.
5. Breakdance-Caches neu erzeugen.
6. Permalinks nur bei geänderten Rewrite-Regeln neu speichern.
7. Startseite, Anfrage, Archive und je einen Single-Datensatz per HTTP prüfen.
8. PHP- und WordPress-Fehlerprotokolle kontrollieren.
9. Desktop, Mobil, Tastaturbedienung und Formular erneut kurz prüfen.

## 8. Nach dem Launch

- [ ] Alte Haupt-URLs und Redirects kontrollieren.
- [ ] 404-Protokoll in der ersten Woche regelmäßig prüfen.
- [ ] Sitemap und Indexierungsstatus kontrollieren.
- [ ] Formularzustellung und Spamaufkommen beobachten.
- [ ] Performance und Bildausgabe auf der Produktionsdomain prüfen.
- [ ] Erst nach stabiler Abnahme Testinhalte entfernen und Testzugänge schließen.
