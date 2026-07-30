# URL-Struktur

## Verbindliche Struktur vor der Migration

| Inhalt | URL |
| --- | --- |
| Reiseziele-Archiv | `/reiseziele/` |
| Reiseziel | `/reiseziele/{slug}/` |
| Partnerschul-Archiv | `/partnerschulen/` |
| Partnerschule | `/partnerschulen/{slug}/` |
| Programm-Archiv | `/programme/` |
| Programm | `/programme/{slug}/` |
| Erfahrungen-Archiv | `/erfahrungen/` |
| Erfahrung | `/erfahrungen/{slug}/` |
| Magazin-Archiv | `/magazin/` |
| Magazinartikel | `/magazin/{slug}/` |
| Magazin-Kategorie | `/magazin/thema/{slug}/` |
| Reise-Match (Wizard) | `/reise-match/` |
| Tagesablauf (Beispieltag je Zielgruppe) | `/tagesablauf/` |
| Anfrage | `/anfrage/` |

Sprach- und Ländertermseiten bleiben zunächst eigenständige Archive. Eine verschachtelte URL wie `/reiseziele/englisch/irland/dublin/` wird erst umgesetzt, wenn die Redirect-Matrix und die technische Routing-Strategie freigegeben sind.

## Anfragekontext

`/anfrage/?destination={slug}&school={slug}&program={slug}`

Die Werte werden ausschließlich akzeptiert, wenn sie zu veröffentlichten Datensätzen der passenden Post Types gehören.

## URL-Migrationsmatrix

Die vorbereitete Matrix liegt in [`migration-map.csv`](migration-map.csv). Grundlage sind der öffentliche WordPress-Sitemap-Index der bestehenden Website und der WordPress-Export vom 27. Juli 2026.

Die Spalten bedeuten:

| Spalte | Bedeutung |
| --- | --- |
| `source_path` | bisheriger relativer Pfad |
| `target_path` | neuer relativer Pfad; bei `gone` oder offener Prüfung leer |
| `action` | `keep`, `redirect`, `gone` oder `review` |
| `http_status` | geplanter HTTP-Status |
| `status` | `ready`, `blocked` oder `customer` |
| `note` | fachlicher Grund oder noch offene Voraussetzung |

Redirects werden erst beim Launch aktiviert. Zuvor müssen alle Zeilen mit `blocked` oder `customer` geklärt sein. Insbesondere der Versicherungsbeitrag erhält seinen Redirect erst, wenn ein fachlich freigegebener Magazinartikel unter der Ziel-URL veröffentlicht ist. Die alte Downloadseite benötigt eine Bestandsprüfung; ohne gleichwertigen Nachfolgeinhalt wird keine beliebige Ersatzseite als Ziel verwendet.

URL-Fragmente wie `/#news`, `/#about` oder `/#kursangebote` erreichen den Server nicht und können daher nicht per HTTP umgeleitet werden. Alte interne Links auf diese Fragmente werden im neuen Inhalt ersetzt; externe Links landen weiterhin auf der Startseite.

Anhangseiten, Medien-URLs, Feeds, WordPress-Systempfade und Suchparameter sind nicht Teil der redaktionellen Redirect-Matrix. Für neue Reiseziele, Partnerschulen und Programme gibt es keine alten indexierten Einzel-URLs; sie benötigen daher keine künstlichen Redirects.
