# Pandulungan - Sistem Pendaftaran Event

Sistem pendaftaran event berbasis Laravel yang memungkinkan pendaftaran multiple peserta dalam satu form.

## Fitur

- Form pendaftaran dengan multiple peserta
- Validasi data pendaftar (NIK, Email, dll)
- Dashboard admin untuk melihat data pendaftar
- Export data pendaftar
- Autentikasi admin

## Teknologi

- Laravel 10
- MySQL
- TailwindCSS
- Alpine.js
- Laravel Breeze (untuk autentikasi)

## Struktur Aplikasi

### Views
- `resources/views/layouts/app.blade.php` - Layout utama aplikasi
- `resources/views/partials/header.blade.php` - Partial header
- `resources/views/partials/footer.blade.php` - Partial footer
- `resources/views/home.blade.php` - Halaman form pendaftaran
- `resources/views/admin/dashboard.blade.php` - Dashboard admin
- `resources/views/admin/show.blade.php` - Detail pendaftar

### Controllers
- `app/Http/Controllers/RegistrationController.php` - Menangani pendaftaran peserta
- `app/Http/Controllers/AdminController.php` - Menangani dashboard admin
- `app/Http/Controllers/Auth/AuthenticatedSessionController.php` - Menangani autentikasi

### Models
- `app/Models/Registration.php` - Model untuk data pendaftaran
- `app/Models/User.php` - Model untuk data admin

### Database
- `database/migrations/` - Migrasi database
- `database/seeders/` - Seeder untuk data awal
  - `AdminUserSeeder.php` - Seeder untuk admin default
  - `DatabaseSeeder.php` - Seeder utama

## Instalasi

1. Clone repository
```bash
git clone <repository-url>
cd pandulungan
```

2. Install dependencies
```bash
composer install
npm install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di file `.env`
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pandulungan
DB_USERNAME=root
DB_PASSWORD=
```

5. Migrasi dan seed database
```bash
php artisan migrate --seed
```

6. Jalankan aplikasi
```bash
npm run dev
php artisan serve
```

## Konfigurasi yang Sudah Dilakukan

1. **Database**
   - Migrasi untuk tabel registrations
   - Seeder untuk admin default

2. **Autentikasi**
   - Implementasi Laravel Breeze
   - Kustomisasi middleware admin
   - Setup login untuk admin

3. **Frontend**
   - Implementasi TailwindCSS
   - Setup layout dan partials
   - Form pendaftaran dengan multiple entries
   - Validasi form client-side dan server-side

4. **Backend**
   - Validasi data pendaftar
   - Penanganan multiple entries dalam satu form
   - Export data pendaftar
   - Dashboard admin

## Akun Default

**Admin**
- Email: admin@example.com
- Password: password

## Kontribusi

1. Fork repository
2. Buat branch baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -m 'Menambah fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## License

[MIT License](LICENSE.md)
