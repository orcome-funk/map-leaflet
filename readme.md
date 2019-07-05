<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<h1 align="center">Lokasi Toko Menggunakan Leaflet.js</h1>

## Testing
[![Build Status](https://travis-ci.org/orcome/map-leaflet.svg?branch=master)](https://travis-ci.org/orcome/map-leaflet)

## Cara Install

### Persyaratan
Aplikasi ini dapat diinstal pada local dan online server dengan spesifikasi
1. PHP 7.2 (Laravel 5.8)
2. Database MySQL atau MariaDB
3. Database SQLite (untuk automated testing)

### Langkah Instalasi
Langkah untuk menginstal aplikasi
1. Clone repo dengan perintah : `https://github.com/orcome/map-leaflet.git`
2. `cd map-leaflet`
3. `composer install`
4. `cp .env.example .env`
5. `php artisan key:generate`
6. Buat database baru di MySQL
7. Set database yang digunakan pada file `.env`
8. `php artisan migrate`
9. `php artisan serve`
10. Selesai (register user baru untuk menggunakan aplikasi)
