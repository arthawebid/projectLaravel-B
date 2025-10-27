## Menggunakan Laravel
1. clone repositories ini atau [download](https://github.com/arthawebid/projectLaravel-kelasB/archive/refs/heads/main.zip) 
2. copy dan timpa (rewrite) file php.bak ke c:\xampp\php\php.ini
```bash
copy php.bak c:\xampp\php\php.ini
```
3. copy file .env.example ke .env
```bash
copy .env.example .env
```
4. lakukan install/update modul-modul laravel
```bash
composer install
```
5. lakukan migrate untuk menambahkan sqlite (database)
```bash
php artisan migrate
```
6. generate key
```bash
php artisan key:generate
```
7. Aktifkan internal Laravel Server
```bash
php artisan serve
```


