# 👜 Bag Store - Sistem CRUD Sederhana

Proyek ini adalah aplikasi web manajemen stok tas sederhana yang dibangun menggunakan framework **Laravel 12**. Aplikasi ini memungkinkan pengguna untuk melihat, menambah, dan menghapus data produk tas dengan tampilan yang minimalis.

---

## 👤 Identitas Pengembang
* **Nama:** Emia Agi Karina br Kaban
* **Role:** Lead Developer
* **Kampus:** Universitas Malikussaleh (UNIMAL)

---

## 🛠️ Spesifikasi Sistem
Untuk menjalankan proyek ini, pastikan perangkat kamu sudah terinstall:
* **PHP:** v8.2 atau lebih baru
* **Framework:** Laravel 12
* **Database:** MySQL (via XAMPP/MariaDB)
* **Dependency Manager:** Composer

---

## 🚀 Cara Instalasi & Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek di komputer lokal:

### 1. Persiapan Database
1. Buka **XAMPP Control Panel** dan aktifkan **Apache** serta **MySQL**.
2. Buka browser dan akses `localhost/phpmyadmin`.
3. Buat database baru dengan nama: `db_bag_store`.

### 2. Konfigurasi Proyek
Buka folder proyek di terminal (CMD/VS Code), lalu sesuaikan konfigurasi database di file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_bag_store
DB_USERNAME=root
DB_PASSWORD=
3. Migrasi Tabel
Jalankan perintah berikut untuk membuat tabel bags secara otomatis ke database:

Bash
php artisan migrate
4. Menjalankan Server
Setelah migrasi selesai, nyalakan server lokal Laravel:

Bash
php artisan serve
Buka browser dan akses: http://127.0.0.1:8000

📌 Fitur Utama
✅ Lihat Produk: Menampilkan daftar tas dalam bentuk tabel.

✅ Tambah Produk: Input nama produk dan harga tas.

✅ Hapus Produk: Menghapus data tas dari database.

✅ Tampilan Sederhana: Menggunakan HTML murni tanpa CSS berlebih agar ringan dan cepat.

© 2026 Bag Store Project - Emia Agi Karina br Kaban