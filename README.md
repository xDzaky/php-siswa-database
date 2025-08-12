## **Struktur Folder**

```
php-siswa-database/
│
├── README.md
├── siswa.sql
└── index.php
```

---

## **README.md**

```markdown
# PHP Siswa Database

Proyek ini berisi contoh database siswa untuk pembelajaran PHP dan MySQL.  
Database ini mencakup data siswa seperti:
- Nama
- Kelas
- Gender
- Umur
- Alamat
- Nomor HP
- Email
- Tanggal Lahir
- Hobi

## 📂 Struktur Proyek
```

php-siswa-database/
├── README.md
├── siswa.sql
└── index.php

````

## ✨ Fitur
- **Struktur tabel SQL lengkap**
- **80+ data dummy siswa**
- **Cocok untuk latihan CRUD di PHP**
- **Format data sesuai konteks Indonesia**

## 🚀 Cara Menggunakan

### 1. Import Database
1. Pastikan MySQL sudah berjalan.
2. Buat database baru, misalnya:
   ```sql
   CREATE DATABASE dbsiswa;
````

3. Import file `siswa.sql`:

   ```bash
   mysql -u root -p dbsiswa < siswa.sql
   ```

### 2. Coba Koneksi PHP

Gunakan file `contoh_koneksi.php`:

```php
<?php
$conn = mysqli_connect("localhost", "root", "", "dbsiswa");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>
```

Jalankan di browser untuk memastikan koneksi berhasil.

## 📜 Lisensi

Proyek ini bebas digunakan untuk pembelajaran dan pengujian.

````

---

## **siswa.sql**
```sql
CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kelas VARCHAR(20) NOT NULL,
    gender ENUM('Laki-laki', 'Perempuan') NOT NULL,
    umur INT NOT NULL,
    alamat VARCHAR(255),
    no_hp VARCHAR(15),
    email VARCHAR(100),
    tanggal_lahir DATE,
    hobi VARCHAR(100)
);

INSERT INTO siswa (nama, kelas, gender, umur, alamat, no_hp, email, tanggal_lahir, hobi) VALUES
('Ahmad Fauzi', 'X RPL 1', 'Laki-laki', 16, 'Jl. Mawar No. 12', '081234567890', 'ahmad@example.com', '2008-01-15', 'Futsal'),
('Siti Aminah', 'X RPL 2', 'Perempuan', 15, 'Jl. Melati No. 5', '081234567891', 'siti@example.com', '2009-02-20', 'Membaca'),
('Budi Santoso', 'XI TKJ 1', 'Laki-laki', 17, 'Jl. Kenanga No. 7', '081234567892', 'budi@example.com', '2007-03-10', 'Basket'),
('Rina Kartika', 'XII MM 2', 'Perempuan', 18, 'Jl. Anggrek No. 8', '081234567893', 'rina@example.com', '2006-04-05', 'Fotografi'),
('Fajar Pratama', 'XI RPL 1', 'Laki-laki', 17, 'Jl. Flamboyan No. 9', '081234567894', 'fajar@example.com', '2007-05-12', 'Coding');
````

---

## **contoh\_koneksi.php**

```php
<?php
$host = "localhost";
$user = "root"; // sesuaikan dengan username MySQL kamu
$pass = "";     // sesuaikan dengan password MySQL kamu
$db   = "dbsiswa";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil ke database dbsiswa!";
?>
```
