# Dierenpaspoort

Een digitaal dierenpaspoort voor een boerderijcamping.  
Bezoekers kunnen via een QR-code bij een dier direct informatie bekijken over het dier, zonder dat ze een medewerker hoeven te vragen.

Het doel van dit project is om de informatievoorziening rondom de dieren makkelijker en interactiever te maken voor bezoekers.

## Functionaliteiten

- Digitale dierenpaspoorten
- QR-code per dier
- QR-code downloaden voor gebruik bij dierenverblijven
- Dieren bekijken per soort
- Dieren beheren via een admin omgeving
- Dieren toevoegen, aanpassen en verwijderen
- Responsive ontwerp voor mobiel gebruik

## Voorbeeld

Een bezoeker scant de QR-code bij een dier en komt direct op het juiste dierenpaspoort terecht.

Voorbeeld:


/dieren/geit/pim


Hier ziet de bezoeker informatie zoals:
- Naam
- Soort
- Geboortedatum
- Eten
- Weetjes
- Foto

## Gebruikte technieken

- Laravel 12
- PHP 8.2
- MySQL
- Blade templates
- Tailwind CSS
- Vite
- QR-code generatie

## Installatie

Clone de repository:

```bash
git clone https://github.com/DaphneBruggeman/dierenpaspoort2.git

Ga naar de projectmap:

cd dierenpaspoort

Installeer de dependencies:

composer install
npm install

Maak een .env bestand:

cp .env.example .env

Genereer de Laravel key:

php artisan key:generate

Maak de database en voer de migrations uit:

php artisan migrate

Start Laravel:

php artisan serve

Start Vite:

npm run dev
```

## Gebruik

De applicatie bestaat uit twee onderdelen:

Bezoekers

Bezoekers kunnen dieren bekijken door:

rechtstreeks naar een dierenpagina te gaan
een QR-code bij een dier te scannen

Admin

Admins kunnen:

dieren beheren
nieuwe dieren toevoegen
QR-codes genereren en downloaden 
## Status

Dit project is momenteel in ontwikkeling en wordt gebruikt als prototype voor een digitaal dierenpaspoort.
