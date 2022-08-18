# lowongan-perusahaan
Aplikasi Lowongan Pekerjaan di PT. Trans Network Indonesia

# Setup
- buka direktori project di terminal anda.
- ketikan command : cp .env.example .env (copy paste file .env.example)
- buat database

Lalu ketik command dibawah ini
- composer install
- php artisan optimize:clear
- php artisan key:generate (generate app key)
- php artisan migrate (migrasi database)
- php artisan db:seed
- php artisan storage:link


Email Verify
- MAIL_MAILER=smtp
- MAIL_HOST=smtp.gmail.com
- MAIL_PORT=587
- MAIL_USERNAME=your email username (dimasbudiprratama@gmail.com)
- MAIL_PASSWORD=your email password
- MAIL_ENCRYPTION=tls
- MAIL_FROM_ADDRESS=your email address
- MAIL_FROM_NAME="${APP_NAME}" do not change

# Login
Admin
http://127.0.0.1:8000/login/admin
- email   : dimasbudipratama12345@gmail.com
- password : 12345


# Fitur
Admin
- Halaman Dashboard
- Data Pendidikan (CRUD)
- Data Keahlian (CRUD)
- Data Kategori (CRUD)
- Data User (CRUD)
- Lowongan
- Jadwal
- Pelamar

Pelamar
- Halaman Homepage
- Halaman Contact
- Halaman About
- Halaman Find Job
- Halaman Semua Lowongan
- Detail Lowongan
- Profil Pelamar
- Data Lamaran

# Author
- Dimas Budi Pratama
