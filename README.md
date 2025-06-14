# Pandulungan - Night Run Event Registration System 🏃‍♂️🏃‍♀️

Welcome to **Pandulungan** — a modern, robust, and user-friendly event registration platform built for the Night Run 2025! This system is designed to make mass registration, payment, and admin management a breeze, whether you're a participant or an event organizer.

---

## 🌟 What's New (June 14, 2025)

- **Multi-Peserta Registration:**
  - Form pendaftaran kini mendukung 1-5 peserta sekaligus dalam satu kali submit.
  - Validasi lengkap di frontend (HTML5) dan backend (Laravel) untuk NIK, email, nomor telepon, tanggal lahir, dsb.
  - Input hanya menerima format yang benar (angka, email, tanggal, dsb).
- **Data Peserta Tersimpan Rapi:**
  - Semua data peserta kini disimpan di tabel `checkout_participants` dan langsung terhubung ke order/checkout.
- **Admin Dashboard & Order Management:**
  - Dashboard admin, detail order, dan edit order kini menampilkan SEMUA peserta per order, bukan hanya peserta pertama.
  - Tampilan peserta di dashboard, detail, dan edit order sudah modern, responsif, dan mudah dibaca.
  - Admin dapat mengedit data seluruh peserta dalam satu order dengan mudah.
- **UI/UX & Logging:**
  - Semua halaman admin dan publik kini lebih modern, mobile-friendly, dan informatif.
  - Penanganan error dan logging backend lebih jelas untuk debugging.
- **Controller & View Update:**
  - Semua controller dan view sudah disesuaikan untuk mendukung multi-peserta dan relasi data yang benar.

---

## 🚀 Fitur Utama

- **Pendaftaran Multi Peserta:**
  - Satu form, hingga 5 peserta sekaligus, validasi otomatis.
- **Checkout & Pembayaran:**
  - Ringkasan pendaftaran, instruksi pembayaran, upload bukti, dan status pembayaran.
- **Dashboard Admin:**
  - Statistik peserta, pendapatan, status order, dan export data.
  - Lihat, edit, dan kelola semua peserta dalam satu order.
- **Modern UI:**
  - Menggunakan TailwindCSS, layout responsif, dan komponen interaktif.
- **Keamanan & Logging:**
  - Validasi ganda, autentikasi admin, dan logging proses penting.

---

## 🏁 Event Night Run 2025
- **Jalur:** 5km, 3 waterstation
- **Kategori:** Putra & Putri
- **Biaya:** Rp 150.000 (jersey & refreshment)
- **Hadiah:** Total jutaan rupiah & sertifikat untuk 500 finisher pertama
- **Timeline:**
  - Pendaftaran: 1-30 Januari 2025
  - Race Pack: 5 Februari 2025
  - Event: 10 Februari 2025

---

## 📦 Instalasi Cepat

1. **Clone & Install**
   ```bash
   git clone <repository-url>
   cd pandulungan
   composer install
   npm install
   ```
2. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   # Edit .env untuk database Anda
   ```
3. **Migrate & Seed**
   ```bash
   php artisan migrate --seed
   ```
4. **Run the App**
   ```bash
   npm run dev
   php artisan serve
   ```

---

## 🛠️ Struktur & Teknologi
- **Laravel 10** (Backend, Auth, Validation)
- **MySQL** (Database)
- **TailwindCSS** (UI/UX)
- **Alpine.js** (Interaktivitas ringan)
- **Laravel Breeze** (Auth)
- **Custom Models:**
  - `Checkout`, `CheckoutParticipant`, `User`
- **Views:**
  - `home.blade.php` (Form pendaftaran)
  - `admin/dashboard.blade.php` (Dashboard admin)
  - `admin/order_detail.blade.php` (Detail order multi peserta)
  - `admin/edit_order.blade.php` (Edit order multi peserta)

---

## 👤 Akun Admin Default
- **Email:** admin@example.com
- **Password:** password

---

## 🤝 Kontribusi
1. Fork repo ini
2. Buat branch baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -m 'Tambah fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

---

## 📢 Catatan Kreatif
- Sistem ini dirancang untuk event lari malam, namun sangat fleksibel untuk event lain yang butuh pendaftaran massal.
- Semua proses pendaftaran, pembayaran, dan manajemen peserta kini jauh lebih mudah, cepat, dan transparan.
- UI dibuat agar nyaman diakses dari HP maupun desktop.
- Setiap perubahan hari ini difokuskan pada kemudahan admin dan pengalaman peserta yang lebih baik.

---

## 📄 License
[MIT License](LICENSE.md)
