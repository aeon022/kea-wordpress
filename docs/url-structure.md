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
| Anfrage | `/anfrage/` |

Sprach- und Ländertermseiten bleiben zunächst eigenständige Archive. Eine verschachtelte URL wie `/reiseziele/englisch/irland/dublin/` wird erst umgesetzt, wenn die Redirect-Matrix und die technische Routing-Strategie freigegeben sind.

## Anfragekontext

`/anfrage/?destination={slug}&school={slug}&program={slug}`

Die Werte werden ausschließlich akzeptiert, wenn sie zu veröffentlichten Datensätzen der passenden Post Types gehören.
