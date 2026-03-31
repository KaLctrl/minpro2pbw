# minpro2pbw
# Website Portfolio Dinamis (PHP & MySQL)

## Deskripsi Project
Project ini merupakan pengembangan dari website portofolio statis menjadi **website dinamis** dengan menggunakan **PHP dan MySQL**.  

Pada versi ini, data yang ditampilkan seperti deskripsi diri, skills, dan certificates tidak lagi ditulis langsung di kode, melainkan diambil dari database sehingga lebih fleksibel dan mudah dikelola.

---

## Perubahan dari Versi Sebelumnya
- Mengubah file `index.html` menjadi `index.php`
- Menghapus penggunaan Vue JS (data statis)
- Menambahkan koneksi database menggunakan PHP
- Data diambil langsung dari MySQL menggunakan query

---
---

## Tampilan dan Penjelasan Fitur

### 1. Navbar
**Tampilan:**
- Menu navigasi ke Home, About Me, dan Certificates

**Penjelasan:**
- Menggunakan Bootstrap 5
- Bersifat responsif (collapse di mobile)

---

### 2. Home (Hero Section)
**Tampilan:**
- Background gambar fullscreen
- Teks perkenalan

**Penjelasan:**
- Menggunakan CSS untuk background
- Bersifat statis (tidak dari database)

---

### 3. About Me (Dinamis)
**Tampilan:**
- Menampilkan deskripsi diri

**Penjelasan:**
- Data diambil dari tabel `about`
- Menggunakan PHP:
```php
$query = mysqli_query($conn, "SELECT * FROM about");
