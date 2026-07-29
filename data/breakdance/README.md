# Breakdance-Sicherung

`templates.json` ist ein versionierter technischer Snapshot der KEA-spezifischen Breakdance-Dokumente:

- Magazin-Archiv und Magazin-Single
- Main Header und Main Footer
- KEA-404
- Suchergebnisse und Anfrage-Seite
- Singles für Reiseziel, Partnerschule und Programm
- Archive für Reiseziele, Programme und Erfahrungen

Der Snapshot wird aus dem lokalen WordPress mit folgendem Befehl erneuert:

```bash
/Applications/MAMP/bin/php/php8.3.30/bin/php -r \
  'require "wp-load.php"; require "tools/export-breakdance.php";'
```

Die Datei ist kein Ersatz für ein vollständiges Datenbank-Backup und kein offizielles Breakdance-Importpaket. Für eine reguläre Übertragung werden bevorzugt die freigegebene Datenbank beziehungsweise die nativen Breakdance-Exportfunktionen verwendet.

Bei einer technischen Wiederherstellung Dokumente über Kombination aus `post_type` und `post_title` zuordnen; lokale IDs sind nicht zwischen Installationen übertragbar. Metadaten ausschließlich über `Breakdance\Data\set_meta()` speichern. Danach für jedes Dokument `Breakdance\Render\generateCacheForPost()` ausführen und Zielseite sowie Breakdance-Manager prüfen.
