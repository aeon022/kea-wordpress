# Datenschutzkonzept – KEA Sprachreisen

Stand: 29. Juli 2026

Dieses Dokument beschreibt den technisch geprüften Stand des KEA-Redesigns. Es ist die Arbeitsgrundlage für datensparsame Umsetzung und Betrieb. Die öffentliche Datenschutzerklärung muss vor dem Livegang von KEA rechtlich freigegeben und bei Änderungen an Diensten oder Prozessen aktualisiert werden.

## 1. Grundsatz

KEA verarbeitet nur Daten, die für Websitebetrieb, persönliche Beratung, die Bearbeitung konkreter Anfragen und die spätere Organisation einer beauftragten Sprachreise erforderlich sind.

Für Phase 1 gilt:

- keine Webanalyse
- keine personalisierte Werbung
- keine eingebetteten Social-Media-Inhalte
- keine eingebetteten Karten oder Videos
- kein Newsletter
- kein reCAPTCHA
- keine Nutzerkonten
- keine Onlinezahlung oder Buchungsmaschine
- lokale Schriften

Optionale Dienste werden nicht vorsorglich eingebaut. Kommt später ein Dienst hinzu, wird vor Aktivierung geprüft, ob Datenschutzerklärung, Auftragsverarbeitung, Drittlandtransfer und Einwilligung angepasst werden müssen.

## 2. Technisch geprüfter Stand

Geprüft wurden die öffentlichen Seiten und Post Types aus der WordPress-Sitemap, die globalen Breakdance-Templates, Header, Footer, Anfrageformular, aktive Plugins, ausgelieferte Ressourcen und in Breakdance gespeicherte externe Ziele.

Aktuell nachgewiesen:

| Verarbeitung | Zweck | Rechtsgrundlage | Stand |
| --- | --- | --- | --- |
| Server- und Verbindungsdaten | Sichere Bereitstellung, Fehleranalyse | Art. 6 Abs. 1 lit. f DSGVO | aktiv |
| Technisch notwendige Sitzungscookies | Sitzungs- und Formularfunktion | Art. 6 Abs. 1 lit. f DSGVO, § 165 Abs. 3 TKG 2021 | aktiv |
| Anfrageformular | Vorvertragliche Beratung und Kommunikation | Art. 6 Abs. 1 lit. b, ergänzend lit. f DSGVO | aktiv |
| E-Mail und Telefon | Bearbeitung von Kontakt und Anfragen | Art. 6 Abs. 1 lit. b beziehungsweise lit. f DSGVO | aktiv |
| Social-Media-Links | Externe Profile auf Nutzerinitiative öffnen | keine Datenübertragung vor Klick durch KEA | aktiv |
| Analyse, Werbung, Karten, Videos, Captcha | derzeit kein Zweck | keine Verarbeitung | nicht aktiv |

Die derzeit gesetzten Cookies sind `PHPSESSID`, `breakdance_view_count`, `breakdance_session_count` und `breakdance_last_session_id`. Sie werden im geprüften Stand als Sitzungscookies ohne Werbe- oder Analysezweck ausgeliefert.

Ein ungenutztes QR-Code-Skript von `unpkg.com` und der externe WordPress-Emoji-Fallback wurden deaktiviert. Externe Social-Media-Adressen sind normale Links; Inhalte dieser Plattformen werden nicht in die KEA-Seite eingebettet.

## 3. Anfrage und Kontakt

Das Anfrageformular verarbeitet je nach Eingabe:

- Reiseform und Anfragetyp
- ausgewähltes Reiseziel
- ausgewähltes Programm
- automatisch validierten Kontext für Reiseziel, Partnerschule oder Programm
- Vor- und Nachname
- E-Mail-Adresse
- Telefonnummer
- freie Nachricht
- technische Sicherheitsdaten wie CSRF-Token

Die Bestätigung zur Datenschutzerklärung dokumentiert deren Kenntnisnahme. Sie ist keine Einwilligung in Werbung.

Neue Anfragen werden derzeit im nativen Breakdance-Formularsystem gespeichert und per E-Mail weitergeleitet, sobald der Versand final konfiguriert ist. Vor dem Livegang sind verbindlich festzulegen:

- Empfänger und zulässige CC-Empfänger
- Absenderadresse auf der KEA-Domain
- SMTP-Anbieter und Auftragsverarbeitungsvereinbarung
- Aufbewahrungs- und Löschroutine für Breakdance Form Submissions
- Aufbewahrung des zugehörigen E-Mail-Verkehrs

Empfohlener Minimalprozess:

1. Anfrage eingehen lassen und zuständiger Person zuordnen.
2. Nur für die Beratung notwendige Angaben verwenden.
3. Anfrage ohne Vertrag nach Erledigung und Ablauf einer kurzen Nachbearbeitungsfrist löschen.
4. Bei Vertrag nur abrechnungs-, vertrags- und nachweispflichtige Unterlagen nach den gesetzlichen Fristen aufbewahren.
5. Form Submissions und Postfächer regelmäßig gemeinsam bereinigen.

Die konkrete Löschfrist wird von KEA nach rechtlicher und organisatorischer Prüfung verbindlich festgelegt; sie wird nicht technisch geraten.

## 4. Empfänger und Reiseorganisation

Für Hosting, technische Betreuung und E-Mail können Auftragsverarbeiter eingesetzt werden. Vor Produktion müssen Anbieter, Speicherorte, Verträge und Löschfristen dokumentiert sein.

Bei einer konkreten Anfrage oder Buchung dürfen notwendige Daten nur nach Bedarf an ausgewählte Leistungspartner weitergegeben werden, etwa:

- Partnerschule
- Unterkunftsanbieter
- Transferanbieter
- Versicherungsanbieter

Vor jeder Weitergabe gilt Datenminimierung. Ein Partner erhält nicht automatisch den gesamten Formularinhalt, sondern nur die für seine Leistung erforderlichen Angaben.

Liegt ein gewählter Partner außerhalb des Europäischen Wirtschaftsraums, werden Angemessenheitsbeschluss, geeignete Garantien oder eine im konkreten Fall anwendbare Ausnahme nach Art. 49 DSGVO geprüft und dokumentiert.

## 5. Consent-Entscheidung

Im aktuellen Stand ist kein Consent-Banner erforderlich, weil keine optionalen Analyse-, Werbe- oder Medien-Dienste geladen werden.

Ein Banner wird erst notwendig, wenn tatsächlich zustimmungspflichtige Funktionen hinzukommen. Vor Aktivierung eines neuen Dienstes sind mindestens zu prüfen:

- Wird vor einer Einwilligung bereits eine Verbindung zu einem Dritten aufgebaut?
- Werden Cookies oder andere Informationen am Endgerät gespeichert oder gelesen?
- Erfolgt Profilbildung, Reichweitenmessung oder Werbung?
- Gibt es einen Drittlandtransfer?
- Kann dieselbe Funktion lokal oder ohne Tracking umgesetzt werden?

Ohne Freigabe bleiben Google Analytics, Meta Pixel, eingebettete Karten, YouTube/Vimeo, Social Feeds und externe Captcha-Dienste deaktiviert.

## 6. Betroffenenrechte und Sicherheit

Anfragen zu Auskunft, Berichtigung, Löschung, Einschränkung, Datenübertragbarkeit, Widerruf oder Widerspruch gehen an `office@kea-sprachreisen.at`.

Vor einer Datenauskunft oder Herausgabe ist die Identität angemessen zu prüfen. Anfragen und Erledigung werden nachvollziehbar dokumentiert, ohne unnötige Kopien von Identitätsdokumenten aufzubewahren.

Technische Mindestmaßnahmen:

- WordPress, Plugins und PHP aktuell halten
- Administratorzugänge mit starken individuellen Kennwörtern schützen
- Benutzerrechte nach Aufgabe vergeben
- Backups geschützt speichern und Wiederherstellung testen
- HTTPS auf Produktion erzwingen
- SMTP statt unzuverlässigem Standardversand verwenden
- Formulare mit CSRF-Schutz, Validierung und Spam-Schutz ohne externes Tracking betreiben
- Fehler- und Zugriffsprotokolle zeitlich begrenzen
- keine personenbezogenen Daten in Testdaten, Screenshots oder Git übernehmen

## 7. Prüfung vor Livegang

- finale Betreiber-, UID-, Gewerbe- und gegebenenfalls Firmenbuchangaben bestätigen
- Hostinganbieter, Serverstandort und Auftragsverarbeitung dokumentieren
- SMTP-Anbieter, Empfänger und Löschfristen bestätigen
- echte Testanfrage senden und Zustellung sowie Speicherung prüfen
- Datenschutzerklärung rechtlich freigeben
- Cookie- und Netzwerkprüfung ohne Login wiederholen
- externe Ressourcen auf Startseite, Formular und mindestens je einem Single-/Archivtyp prüfen
- Social-Media-Links und Datenschutzlink im Formular testen
- Verantwortlichkeit für Betroffenenanfragen intern festlegen

## 8. Quellen

- [Informationspflichten für Reisebüros – WKO](https://www.wko.at/tourismus-freizeitwirtschaft/reisebueros/musterimpressum-reisebuero)
- [Informationspflichten nach dem E-Commerce-Gesetz – WKO](https://www.wko.at/internetrecht/informationspflichten-nach-dem-e-commerce-gesetz--dem-unte)
- [Datenschutz-Grundverordnung – EUR-Lex](https://eur-lex.europa.eu/eli/reg/2016/679/oj)
- [Telekommunikationsgesetz 2021 § 165 – RIS](https://ris.bka.gv.at/eli/bgbl/i/2021/190/P165/NOR40238623)
- [Österreichische Datenschutzbehörde](https://www.dsb.gv.at/)
