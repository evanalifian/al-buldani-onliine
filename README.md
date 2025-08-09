# 📌 Al-Buldani Admin Panel

Proyek ini adalah aplikasi web berbasis **Laravel 12** dengan **Filament Admin Panel** dan **Tailwind CSS** untuk mempermudah pengelolaan data.  
Didesain agar mudah dikembangkan, dengan struktur folder yang rapi dan siap untuk kolaborasi tim.

---

## 🚀 Requirement
Pastikan environment kamu memenuhi syarat berikut sebelum menjalankan proyek:

- **PHP**: ≥ 8.2
- **Composer**: ≥ 2.x
- **Node.js**: ≥ 18.x
- **NPM**: ≥ 9.x
- **MySQL/MariaDB**
- **Git**

---

## 📂 Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/nama-project.git
   cd nama-project
   ```

2. **Install Dependensi PHP**
   ```bash
   composer install
   ```

4. **Salin file `.env`**
   ```bash
   cp .env.example .env
   ```

5. **Generate App Key**
   ```bash
   php artisan key:generate
   ```

6. **Atur konfigurasi database di `.env`**  
   Contoh:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=al-buldani
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. **Jalankan Migrasi Database**
   ```bash
   php artisan migrate --seed
   ```

8. **Buat Storage Link** (agar file dan gambar bisa diakses publik)
   ```bash
   php artisan storage:link
   ```

9. **Jalankan Server**
   ```bash
   php artisan serve
   ```

---

## 🔑 Akses Admin Filament

Setelah instalasi, kamu bisa mengakses Filament Admin Panel di:
```
http://127.0.0.1:8000/admin
```

**Login Default (jika sudah di-seed):**
```
Email: admin@gmail.com
Password: admin
```


---

## 🛠 Fitur Utama
- **Filament Admin Panel** → CRUD cepat dan mudah untuk manajemen data.
- **Tailwind CSS** → Tampilan modern, fleksibel, dan responsif.
- **Laravel 12** → Framework PHP terbaru dengan performa tinggi.
- **Upload File & Gambar** → Disimpan di `storage/app/public` dengan akses publik.

---

## 📌 Catatan untuk Developer
- Setiap kali mengubah file `.env`, jalankan:
  ```bash
  php artisan optimize:clear
  ```
- Pastikan jalankan `php artisan storage:link` di environment baru.
- Gunakan branch terpisah untuk fitur baru sebelum merge ke branch utama.

---
