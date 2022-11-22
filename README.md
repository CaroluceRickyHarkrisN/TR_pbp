<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Project LK Laravel 9
## Yang perlu disediakan:
1. [composer](https://getcomposer.org/download/)
1. web server seperti [XAMPP](https://www.apachefriends.org/download.html) (PHP versi 8^)

## Awalan
1. Clone repository `https://github.com/CaroluceRickyHarkrisN/TR_pbp.git`
1. Jalankan `composer install` ( _jika terjadi error mungkin bisa cek versi PHPnya dulu harus 8^_ )
1. Save AS `.env.example` dengan nama `.env`
1. buka file `.env` dan rubah terutama data ini:
``` 
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```
5. generate key dengan `php artisan key:generate`
6. lalu jalankan perintah `php artisan migrate --seed` untuk membuat tabel dan seeder. **Jangan membuat tabel langsung lewat phpmyadmin**.
7. Jalankan `php artisan serve` untuk memulai server dan bukak `http://localhost:8000`
