<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Manajemen Data Fakultas

Aplikasi **Manajemen Data Fakultas** adalah sistem berbasis web untuk mengelola data akademik di lingkungan fakultas, dibangun menggunakan Laravel 12 dan Filament 3.

## Fitur Utama

- **Manajemen Data Mahasiswa**: CRUD data mahasiswa, termasuk NIM, email, program studi, angkatan, dll.
- **Manajemen Data Dosen**: CRUD data dosen, termasuk NIP, email, program studi, status, dll.
- **Manajemen Ruang Kelas**: Data ruang kelas, kapasitas, lokasi, fasilitas, dan kode ruang.
- **Jadwal Kuliah**: Penjadwalan mata kuliah, dosen, ruang kelas, hari, jam, dan semester.
- **Program Studi**: Data program studi yang tersedia.
- **Laporan Penelitian Dosen**: Pencatatan laporan penelitian dosen.
- **Pengajuan Administrasi**: Pengajuan administrasi oleh mahasiswa.
- **Dashboard Statistik**: Statistik jumlah mahasiswa, dosen, ruang kelas, jadwal, dan visualisasi data.

## Teknologi

- Laravel 12.x
- Filament Admin Panel 3.x
- MySQL/MariaDB (default), mendukung SQLite
- Livewire, Vite, TailwindCSS

## Instalasi

1. **Clone repository**
    ```bash
    git clone <repo-url>
    cd manajemen-data-fakultas
    ```

2. **Install dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Copy file environment**
    ```bash
    cp .env.example .env
    ```

4. **Atur konfigurasi database** di file `.env` sesuai kebutuhan.

5. **Generate key**
    ```bash
    php artisan key:generate
    ```

6. **Jalankan migrasi database**
    ```bash
    php artisan migrate
    ```

7. **Jalankan server**
    ```bash
    php artisan serve
    npm run dev
    ```

## Penggunaan

- Akses aplikasi di `http://localhost:8000` (atau sesuai port).
- Login/akses dashboard admin Filament di `/admin` (atur user/admin sesuai kebutuhan).
- Kelola data mahasiswa, dosen, ruang kelas, jadwal, dsb melalui panel admin.

## Struktur Direktori Penting

- `app/Models/` — Model Eloquent untuk setiap entitas.
- `app/Filament/Resources/` — Resource & halaman admin Filament.
- `database/migrations/` — Migrasi database.
- `resources/views/` — Blade templates.
- `resources/js/` — Asset JS (Vite).
- `public/` — Asset publik.

## Kontribusi

Pull request dan issue sangat terbuka untuk pengembangan lebih lanjut.

## Lisensi

MIT License.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
