# laravel-api

## Instal·lació
Instal·lar Composer, Git i llibreries PHP
```sh
$ sudo apt-get install composer git php7.0 php7.0-mbstring php-sqlite3
```
Descarregar el repo i instal·lar dependències:
```sh
$ git clone https://github.com/emieza/laravel-karaoke
$ cd laravel-karaoke
$ composer install
```
Setup sqlite DB (o altres):
```sh
$ cp .env.example .env
$ php artisan key:generate
```
Modificar .env:
```
DB_CONNECTION=sqlite
DB_DATABASE=/path/absolut/a/db.sqlite
```
Migrar DB i posar en marxa:
```sh
$ touch db.sqlite
$ php artisan migrate
$ php artisan db:seed
$ php artisan serve
```

Provar crida a la llibreria:
```
$ curl localhost:8000/api/barri/barceloneta
```


