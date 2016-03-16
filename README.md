# NWT-Online-Bookshop

Instalacija:

1.Instalirati WampServer ( http://www.wampserver.com/en/ )

2.Instalirati Composer ( https://getcomposer.org/ ) izabrati PHP verziju 5.6.16. prilikom instalacije koja se nalazi u \wamp64\bin\php\php5.6.16 direktoriju

3.Skinuti projekat sa GitHub-a u lokalni direktorij

4.Pomoci CMD komandi doci do "bookshop" foldera

5.Pokrenuti komandu "composer install" u CMD

6.Uci u http://localhost/phpmyadmin/ i kreirati bazu pod nazivom "bookshop"

7.U CMD zatim ukucati naredbu "php artisan migrate" prilikom koje ce kreirati odgovarajuce tabele u bazi "bookshop"

8.Za dodavanje instanci u bazu User kucati "php artisan db:seed --class=UserTableSeeder", za Autora php artisan "db:seed --class=AutorTableSeeder" gdje se seed tabele nalaze u "NWT-Online-Bookshop\bookshop\database\seeds" direktoriju

9.U slucaju problema sa seed komandama kucati "composer dump-autoload"
