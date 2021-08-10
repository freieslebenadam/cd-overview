# PHP Evidence hudebních CD

Jednoduchá PHP aplikace zobrazující hudební CD z databáze.

Aplikace se skládá ze dvou stránek - přehled a detail.
Obě stránky jsou také uzpůsobeny pro tisk.

Překládání url probíhá pomocí přepisu Apache pravidel díky `.htaccess` souboru.

## Instalace

Projekt je třeba spouštět v Apache prostředí.

Pro vytvoření MySQL databáze slouží soubor `cd_overview.sql`.

Pro úspěšné připojení k databázi je pořeba nakonfigurovat PDO konstanty v souboru `resources/class/database.class.php`

## Zdroje

Položky obsažené v databázi byly náhodně vybrány z [Discogs](https://www.discogs.com).

## Použité technologie

- **PHP** *(OOP)*
- MySQL
- CSS
- HTML
