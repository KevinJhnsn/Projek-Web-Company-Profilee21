# 🌐 WillPerfect Studio – Company Profile Website

Website Company Profile ini merupakan proyek tugas UAS dari mata kuliah *Pemrograman Web*, dikembangkan menggunakan **CodeIgniter 4**. Proyek ini memiliki fitur Admin Panel untuk mengelola konten seperti **services**, **products**, **portfolio**, **testimonials**, dan **contact form**. Tampilan frontend menggunakan template HTML5 **Onova** dari ThemeForest / Envato Elements.

---

## 📌 Fitur Utama

### 🔹 Frontend
- Halaman: Home, About, Services, Products, Portfolio, Testimonials, Contact
- Desain profesional dan responsif

### 🔹 Admin Panel
- CRUD untuk: Services, Products, Portfolio, Testimonials
- Manajemen pesan dari contact form

---

## 🚀 Teknologi Digunakan

- CodeIgniter 4  
- Bootstrap 5  
- PHP 8.2+  
- Composer  
- HTML5 Template: Onova (ThemeForest)

---

## ⚙️ Clone & Setup

```bash
git clone https://github.com/willyrafaelfs/Tugas-UAS-Pemrograman-Web-Company-Profile.git
cd company-profile

# Install dependencies
composer install

# Copy file .env
cp env .env

# Konfigurasi database di file .env
# Jalankan migrasi jika diperlukan
php spark migrate

# Jalankan server lokal
php spark serve
