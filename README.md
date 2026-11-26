# SEE Bilförsäljning AB – WordPress-tema (Moment 4.2)

Detta repository innehåller det fristående, egentillverkade WordPress-temat för **SEE Bilförsäljning AB**, byggt vidare på den statiska webbplatsen från Moment 4.1. Temat är utformat så att användare utan kunskap i HTML eller CSS kan administrera innehållet via `wp-admin`.

## Publicerad webbplats
- **Live-länk:** `https://studenter.miun.se/~naha2204/writeable/wordpress-6.9_Moment4/wordpress/`

## Implementerad funktionalitet och kravuppfyllnad
- **Egentillverkat och fristående tema:** Byggt från grunden som ett eget WordPress-tema (inte ett child-tema) med semantisk struktur, anpassad CSS och dynamiska menyer (`wp_nav_menu`) för både huvudmeny och footermeny.
- **Anpassade sidmallar och standardsida:** Flera sidmallar (bland annat för lager/bilsida, kontaktsida och AI-verktyg) samt stöd för vanliga undersidor utan vald mall (`page.php`).
- **Inlägg, utvald bild och utdrag (`excerpt`):** Stöd för utvald bild (`add_theme_support('post-thumbnails')`), anpassade bildstorlekar samt anpassad längd och avslutning på `the_excerpt()` med länk (`Läs mer`) till fullständigt inlägg.
- **Widget-område:** Registrerad widget-yta (`Huvud-sidebar` / `main-sidebar`) med klassisk widget-hantering aktiverad och utskriven i temat.
- **Användarroller och behörigheter:** Anpassade rättigheter för redaktörsrollen (`editor`) samt automatisk namnuppdatering vid registrering av nya redaktörer.
- **Tillägg (plugins), SEO och besöksstatistik:** Uppbyggt med stöd för tillägg för kontaktformulär, sökmotoroptimering (SEO) och besöksstatistik.
- **AI-dokumentation:** Separat undersida och mall där användningen av AI-verktyg och slutsatser redovisas.
- **Versionshantering:** Kontinuerligt versionshanterat i Git/GitHub med `.gitignore` och denna `README.md`.

## Filöversikt (exempel)
- `style.css` – Temats huvudsakliga stilmall / temadeklaration.
- `css/style.css` – Design och layout från webbplatsen.
- `functions.php` – Temafunktioner, menyer, bildstorlekar, widget-område, `excerpt`-filter och användarrättigheter.
- `header.php` & `footer.php` – Gemensamt sidhuvud, menyer, sidfot samt `wp_head()` och `wp_footer()`.
- `front-page.php` & `index.php` – Startsida och reservmall för visning av innehåll.
- `page.php` – Standardsida för undersidor utan särskild sidmall (inklusive widget-område).
- `single.php` – Visning av enskilda inlägg.
- Mallfiler för undersidor (t.ex. lager, kontakt och AI-verktyg) samt `.gitignore` och `README.md`.
