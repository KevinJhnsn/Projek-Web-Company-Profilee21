Pemrograman Web – Company Profile WillPerfect Studio adalah proyek tugas UAS mata kuliah Pemrograman Web berupa website Company Profile yang dikembangkan menggunakan CodeIgniter 4 yang memiliki Admin Panel untuk mengelola konten (services, products, portfolio, testimonials, dan kontak), serta menggunakan template HTML5 Onova dari ThemeForest/Envato Elements untuk tampilan frontend.

📌 Deskripsi Proyek
Website ini menampilkan profil perusahaan secara profesional, dengan fitur:
- Frontend (Client-side) — Halaman home, about, services, products, portfolio, testimonials, dan contact form.
- Admin Panel — CRUD data untuk services, products, portfolio, testimonials, dan manajemen pesan kontak.

🚀 Teknologi Digunakan
- CodeIgniter 4
- Bootstrap 5
- Template HTML5: Onova dari ThemeForest/Envato Elements
- PHP 8.2+, Composer

⚡ Clone & Setup

- git clone https://github.com/willyrafaelfs/Tugas-UAS-Pemrograman-Web-Company-Profile.git
  cd company-profile

# Install dependencies
composer install

# Copy environment file
cp env .env

# Atur .env untuk koneksi database
# Lalu jalankan migrasi jika ada (optional)
php spark migrate

# Jalankan server lokal
php spark serve

# Login Admin Panel (Filament)
http://localhost:8080/admin/login
Username: admin  
Password: admin123