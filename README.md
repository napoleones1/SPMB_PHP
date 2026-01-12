# SPMB – Sistem Penerimaan Mahasiswa Baru

SPMB adalah aplikasi berbasis web yang digunakan untuk mengelola proses pendaftaran mahasiswa baru secara online. Sistem ini mencakup fitur login, pendaftaran peserta, pengelolaan data diri, unggah dokumen persyaratan, serta pencetakan bukti pendaftaran.

## 🚀 Fitur Utama
- Login multi-role (Admin / Sekolah / Peserta)
- Dashboard peserta
- Pengelolaan data diri peserta
- Upload dokumen persyaratan
- Cetak bukti pendaftaran
- Session-based authentication
- Tampilan UI sederhana dan responsif

## 🛠️ Teknologi yang Digunakan
- **PHP (Native)**
- **HTML5**
- **CSS3**
- **JavaScript (basic)**
- **XAMPP / Apache**
- **MySQL** (opsional / pengembangan)

## 📂 Struktur Folder
```bash
spmb/
├── assets/
│ ├── css/
│ ├── js/
│ └── images/
│
├── includes/
│ ├── header.php
│ └── footer.php
│
├── pages/
│ ├── login.php
│ ├── proses_login.php
│ ├── dashboard_siswa.php
│ ├── dashboard_admin.php
│ ├── profil.php
│ ├── dokumen.php
│ └── cetak.php
│
├── index.php
└── README.md
```
## ⚙️ Cara Menjalankan Project
1. Clone repository ini
   ```bash
   git clone https://github.com/username/spmb_PHP.git
2. Pindahkan folder ke direktori htdocs
   ```bash
   C:\xampp\htdocs\
4. Jalankan Apache melalui XAMPP
5. Akses melalui browser
   ```bash
   http://localhost/spmb_PHP

## 🔐 Akun Login (Contoh)
- Username : admin
- Password : admin
- Role     : admin

(Login masih simulasi, belum terhubung database)

## 📌 Catatan
- Project ini masih dalam tahap pengembangan
- Autentikasi saat ini menggunakan session PHP
- Database akan ditambahkan pada tahap selanjutnya

## 👨‍💻 Author
- Muhamad Haikal
