
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
