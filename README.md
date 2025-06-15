# Pandulungan - Night Run Event Registration System 🏃‍♂️🏃‍♀️

Welcome to **Pandulungan** — a modern, robust, and user-friendly event registration platform built for the Night Run 2025! This system is designed to make mass registration, payment, and admin management a breeze, whether you're a participant or an event organizer.

---

## 🌟 What's New (Latest Updates)

### WhatsApp Integration & Notifications
- **Fonnte Integration:**
  - WhatsApp notifications sent to registrants after successful registration
  - Background processing using Laravel Queues
  - Automatic payment reminders and status updates
  - Admin contact via WhatsApp in footer

### UI/UX Enhancements
- **Modern Design:**
  - Clean, transparent header that changes to solid white on scroll
  - Minimalistic footer with social and WhatsApp links
  - Two-column login layout with admin info
  - Creative 404 page with fallback route
  - Mobile-friendly solid white drawer menu with icons
- **Event Pages:**
  - Redesigned hero section with event theme
  - Modern card layouts for event details
  - Improved spacing and professional styling
  - Consistent theming across all pages

### Admin Dashboard Improvements
- **Enhanced Table Features:**
  - Search functionality for orders
  - Pagination with modern Tailwind styling
  - Excel export with combined data from registrations and checkout_participants
  - Complete participant information including payment proof and status

### SEO & Performance
- **Search Engine Optimization:**
  - Meta tags for better search visibility
  - Open Graph tags for social media sharing
  - Twitter Card support
  - Custom favicon and site icons
- **Performance:**
  - Optimized image loading
  - Efficient queue processing
  - Responsive design for all devices

### Multi-Peserta Registration:
- Form pendaftaran mendukung 1-5 peserta sekaligus
- Validasi lengkap di frontend (HTML5) dan backend (Laravel)
- Input hanya menerima format yang benar
- Data peserta tersimpan rapi di tabel `checkout_participants`

---

## 🚀 Fitur Utama

- **Pendaftaran Multi Peserta:**
  - Satu form, hingga 5 peserta sekaligus
  - Validasi otomatis untuk NIK, email, WhatsApp
  - Background processing untuk notifikasi
- **Checkout & Pembayaran:**
  - Ringkasan pendaftaran
  - Instruksi pembayaran
  - Upload bukti
  - Status pembayaran real-time
- **Dashboard Admin:**
  - Statistik peserta dan pendapatan
  - Manajemen order lengkap
  - Export data ke Excel
  - WhatsApp integration
- **Modern UI:**
  - TailwindCSS
  - Inter font family
  - Responsive design
  - Dark/light mode support
- **Keamanan & Logging:**
  - Validasi ganda
  - Autentikasi admin
  - Error handling
  - Queue monitoring

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
   # Edit .env untuk database dan Fonnte API
   ```
3. **Migrate & Seed**
   ```bash
   php artisan migrate --seed
   ```
4. **Run the App**
   ```bash
   npm run dev
   php artisan serve
   php artisan queue:work
   ```

---

## 🛠️ Struktur & Teknologi
- **Laravel 10** (Backend, Auth, Validation)
- **MySQL** (Database)
- **TailwindCSS** (UI/UX)
- **Alpine.js** (Interaktivitas)
- **Laravel Breeze** (Auth)
- **Laravel Excel** (Data Export)
- **Fonnte** (WhatsApp Integration)
- **Custom Models:**
  - `Checkout`, `CheckoutParticipant`, `User`
  - `WhatsAppNotification` (Queue Jobs)
- **Views:**
  - Modern layouts with SEO optimization
  - Responsive components
  - Error pages
  - Admin dashboard

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
- Sistem ini dirancang untuk event lari malam dengan fokus pada user experience
- Notifikasi WhatsApp otomatis untuk engagement yang lebih baik
- UI modern dan konsisten di semua halaman
- SEO optimized untuk visibilitas yang lebih baik
- Queue system untuk performa yang optimal

---

## 📄 License
[MIT License](LICENSE.md)
