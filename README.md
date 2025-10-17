📸 StarShot Studio

StarShot Studio adalah website portofolio dan layanan pemesanan untuk studio foto profesional. Website ini menampilkan informasi tentang layanan fotografi, galeri hasil karya, serta menyediakan sistem kontak dan pemesanan yang mudah digunakan.

🌐 Fitur Utama

Beranda
Menampilkan sambutan dan ajakan untuk melakukan pemesanan atau mengenal layanan lebih lanjut.

Tentang Kami
Menjelaskan nilai-nilai utama studio seperti kualitas, kepuasan klien, kreativitas, dan ketepatan waktu.

Layanan
Menampilkan daftar paket foto dan layanan yang ditawarkan studio.

Galeri
Berisi contoh hasil pemotretan dan karya terbaik StarShot Studio.

Kontak Kami
Formulir kontak dengan input nama, nomor telepon, email, subjek, dan pesan. Dilengkapi dengan peta lokasi menggunakan Google Maps.

Akun Pengguna
Menu untuk login dan mengakses halaman akun bagi pelanggan.

Admin Panel (Opsional)
CRUD data layanan, galeri, dan manajemen pesan pelanggan.

🛠️ Teknologi yang Digunakan
Komponen	Teknologi
Bahasa Pemrograman	PHP Native
Database	MySQL
Frontend	HTML5, CSS3, JavaScript
Framework CSS	Bootstrap 5
Ikon	Font Awesome / Bootstrap Icons
Peta	Google Maps Embed

🧩 Struktur Folder
StarShot-Studio/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── image/
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── navbar.php
│
├── pages/
│   ├── home.php
│   ├── about.php
│   ├── services.php
│   ├── gallery.php
│   ├── contact.php
│   └── account.php
│
├── admin/
│   ├── dashboard.php
│   ├── manage-gallery.php
│   ├── manage-services.php
│   ├── manage-messages.php
│   └── login.php
│
├── config/
│   └── database.php
│
├── index.php
└── README.md

⚙️ Instalasi dan Penggunaan

Clone atau Download Repository

git clone https://github.com/username/starshot-studio.git


Pindahkan ke Folder XAMPP

C:\xampp\htdocs\starshot-studio


Buat Database di phpMyAdmin

Buka http://localhost/phpmyadmin

Buat database baru, misalnya db_starshot

Import file db_starshot.sql (jika tersedia)

Konfigurasi Koneksi Database
Edit file config/database.php:

<?php
$conn = mysqli_connect("localhost", "root", "", "db_starshot");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>


Jalankan Website
Buka di browser:

http://localhost/starshot-studio

👨‍💻 Tim Pengembang

Hafizh Izdihar – Web Developer


🖼️ Tampilan Website
🏠 Halaman Utama

Menampilkan hero section dengan ajakan Booking Sekarang dan Pelajari Lebih Lanjut.

💡 Halaman Tentang

Berisi nilai-nilai inti seperti Kualitas Terbaik, Kepuasan Klien, Kreativitas, dan Tepat Waktu.

✉️ Halaman Kontak

Formulir tanya jawab dengan peta lokasi studio (Semarang, Jawa Tengah).

📦 Fitur Admin (Opsional)

Admin dapat:

Mengelola data layanan (tambah, ubah, hapus).

Mengelola foto galeri.

Melihat pesan yang dikirim oleh pengguna melalui form kontak.

Login menggunakan akun admin terdaftar.

📄 Lisensi

Proyek ini dibuat untuk tujuan pembelajaran dan pengembangan portofolio.
Lisensi: MIT License

💡 StarShot Studio – Abadikan momen berharga Anda dengan hasil foto profesional dan konsep kreatif yang memukau.
