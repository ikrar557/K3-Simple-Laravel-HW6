<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang Project

Project ini dibuat untuk memenuhi Homework Minggu ke-6 dengan tema **Web Development With PHP**, dimana peserta diminta untuk menggunakan framework Laravel. Peserta diminta juga untuk membuat website dengan ketentuan sebagi berikut:
1. Desain web sederhana yang bisa kamu rancang dengan inspirasi desain yang sudah ada.
2. Login, Logout, Edit Profile, menampilkan saldo.

### Online Project
Untuk memudahkan penilaian kami juga hosting project ke server kami dengan alamat:
https://raksakabanyu.my.id

## System Requirement

Pada pengembangan project ini kami menggunakan software sebagai berikut:
- Laravel 10 atau lebih tinggi.
- PHP 8.1 atau lebih tinggi.
- MySQL 5.6 atau lebih tinggi.
- NodeJS 18 atau lebih tinggi.
- Composer 2.4.1.
- NPM 8 atau lebih tinggi.
- Laravel Breeze.

## Langkah Instalasi

1. Download zip pada project atau menggunakan
   ```
   git clone https://github.com/ikrar557/K3-Simple-Laravel-HW6.git
   ```
3. Buka folder project.
4. Buka _**powershell**_ atau _**cmd**_ untuk Window, atau _**terminal(konsole)**_.
5. Jalankan perintah
    ```
    npm install
    ```
   dan biarkan npm mendownload _**node_modules**_ yang dibutuhkan.
7. Jalankan perintah
   ```
   composer install
   ```
   dan biarkan composer mendownload _**vendor**_ yang dibutuhkan,
9. Kemudian _**copy paste**_ file **.env.example** menjadi **.env**, dan sesuaikan settingan pada database.
10. Jalankan perintah
    ```
    php artisan key:generate
    ```
12. Jalankan perintah
    ```
    php artisan migrate
    ```
14. Jalankan perintah
    ```
    php artisan serve
    ```
16. Kemudian akses
    ```
    localhost:8000
    ```
10. (Optional) Jika UI mengalami masalah saat di akses, maka buka terminal baru lagi dan jalankan
    ```
    npm run dev
    ```
    dan biarkan berjalan dilatar blakang.


## License

Project Laravel ini menggunakan lisensi [MIT license](https://opensource.org/licenses/MIT).
