# Wangkas

Wangkas adalah aplikasi pendataan uang kas yang dibuat menggunakan Framework Laravel 11 dan Fullstack Framework Livewire 3. Aplikasi ini dirancang untuk sistem pembayaran kas yang dilakukan satu kali setiap minggu, dan sangat cocok digunakan di lingkungan sekolah atau untuk masing-masing kelas.

## Demo

-   Demo Aplikasi (https://demo.wangkas.mrizkimaulidan.my.id/login)

## Prasyarat

Berikut beberapa hal yang perlu diinstal terlebih dahulu:

-   Composer (https://getcomposer.org/)
-   PHP ^8.2
-   MySQL 15.x
-   NodeJS ^20.x (https://nodejs.org/)
-   XAMPP (https://www.apachefriends.org/)

Jika Anda menggunakan XAMPP, PHP, dan MySQL sudah menjadi satu paket di dalam aplikasi XAMPP.

## Fitur

-   CRUD Pelajar
-   CRUD Kelas
-   CRUD Jurusan
-   Transaksi kas
-   Filter transaksi kas
-   CRUD Administrator
-   Pengaturan Profil

## Preview Gambar

**Tampilan Login**
![Image 1](https://i.imgur.com/XxHhqON.jpeg)

**Tampilan Dashboard**
![Image 2](https://i.imgur.com/22ytFSv.jpeg)

**Tampilan Pelajar**
![Image 3](https://i.imgur.com/DgT8SKQ.jpeg)

**Tampilan Kelas**
![Image 4](https://i.imgur.com/xYpzWtx.jpeg)

**Tampilan Jurusan**
![Image 5](https://i.imgur.com/1bBrBs4.jpeg)

**Tampilan Transaksi Kas Minggu Ini**
![Image 6](https://i.imgur.com/zgKq8Dt.jpeg)

**Tampilan Filter Transaksi Kas**
![Image 7](https://i.imgur.com/bNvjbWR.jpeg)

**Tampilan Administrator**
![Image 8](https://i.imgur.com/iXKQXzP.jpeg)

**Tampilan Pengaturan Profil**
![Image 9](https://i.imgur.com/Ocn0uGU.jpeg)

## Langkah-langkah Instalasi

🎓 Sistem Pembayaran SPP
SMK Muhammadiyah 1 Jakarta

Aplikasi Sistem Informasi Pembayaran SPP berbasis web untuk
SMK Muhammadiyah 1 Jakarta, dibuat menggunakan Laravel.

✨ Showcase Fitur

✅ Manajemen Data Pelajar

✅ Kategori SPP: Reguler, Unggulan, Beasiswa

✅ Transaksi Pembayaran + Bukti Upload

✅ Dashboard Admin

✅ UI modern & responsif

✅ Homepage & Login Page custom sekolah

🛠️ Teknologi

Framework: Laravel 10

Backend: PHP 8.2

Database: MySQL / MariaDB

Frontend: Blade + Bootstrap

Auth: Laravel Auth

📦 Instalasi (WINDOWS)
1. Install Software Wajib

```bash
PHP ≥ 8.2
```

```bash
Composer
```

```bash
Git
```

```bash
MySQL / XAMPP
```

Cek versi:

```bash
php -v
composer -V
```

2. Clone Repository

```bash
git clone https://github.com/Alief1150/wangkas-smk-muhammadiyah-1-jakarta.git
cd wangkas-smk-muhammadiyah-1-jakarta
```

3. Install Dependencies
```bash
composer install
```

4. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate
```
```bash
Edit .env:
```

```bash
DB_DATABASE=uas-wangkas-tawadu
DB_USERNAME=root
DB_PASSWORD=
```

5. Buat Database

Masuk ke MySQL:
```bash
CREATE DATABASE uas-wangkas-tawadu;
```

6. Migration & Seeder
```bash
php artisan migrate:fresh --seed
```

7. Jalankan Aplikasi
```bash
php artisan serve
```


Akses di browser:
```bash
http://127.0.0.1:8000
```

🐧 Instalasi (LINUX)
1. Install Dependensi
```bash
sudo apt update
sudo apt install php php-cli php-mbstring php-xml php-curl php-mysql unzip git composer mysql-server
```

2. Clone & Setup
```bash
git clone https://github.com/Alief1150/wangkas-smk-muhammadiyah-1-jakarta.git
cd wangkas-smk-muhammadiyah-1-jakarta
composer install
cp .env.example .env
php artisan key:generate
```

3. Database
```bash
CREATE DATABASE uas-wangkas-tawadu;
```

```bash
php artisan migrate:fresh --seed
php artisan serve
```

👤 Akun Default
Email    : admin@example.com
Password : password

📄 Lisensi

Project ini dibuat untuk keperluan UAS / Akademik.

## Dibuat dengan

-   Laravel 11 (https://laravel.com/)
-   Livewire 3 (https://livewire.laravel.com/)
-   Mazer Admin Dashboard (https://github.com/zuramai/mazer)
-   Bootstrap 5 (https://getbootstrap.com/)

## Kontribusi

Silakan request melalui kolom `Pull Requests` jika ingin melakukan kontribusi.

## Lisensi

Aplikasi ini boleh untuk dibagi dan diubah. Mohon tidak untuk diperjualbelikan!

Muhammad Rizki Maulidan - [@mrizkimaulidan](https://github.com/mrizkimaulidan)
