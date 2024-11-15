# **Dokumen Persyaratan Bisnis (BRD)**  
### **Proyek:** Aplikasi Manajemen Data Menu Restoran  
**Versi:** 1.0  
**Tanggal:** 15 November 2024  

---

## **1. Tujuan Proyek**
- **Objektif**: Aplikasi ini dirancang untuk mempermudah restoran dalam mengelola menu, memungkinkan pelanggan untuk melihat menu dengan mudah, dan memfasilitasi proses pemesanan secara efisien.

---

## **2. Fitur Utama**

### **Untuk Pelanggan**
- **Melihat Menu**: Pelanggan dapat mengakses daftar menu restoran yang mencakup informasi seperti:  
  - Nama menu  
  - Kategori (Makanan, Minuman, Dessert)  
  - Harga  
  - Status ketersediaan  

### **Untuk Admin dan Kasir**
- **Pengelolaan Menu**: Admin dapat menambah, mengubah, dan menghapus menu restoran.  
- **Pemrosesan Pesanan**: Kasir dapat mencatat pesanan pelanggan, mencetak struk, dan mengupdate status ketersediaan menu.

---

## **3. Persyaratan Fungsional**

### **Sistem Login**
- **Akses Berdasarkan Peran**: 
  - Admin untuk pengelolaan data menu.  
  - Kasir untuk mencatat pesanan dan memproses transaksi.  
  - Pelanggan hanya dapat melihat menu.

### **Pengelolaan Menu**
- **Admin**: Mengelola data menu (input, update, delete).  
- **Kasir**: Mengupdate status menu berdasarkan stok atau permintaan pelanggan.

---

## **4. Persyaratan Non-Fungsional**

- **Keamanan**:  
  - Hanya admin yang dapat mengubah data menu.  
  - Kasir memiliki akses terbatas untuk mencatat pesanan dan mengupdate ketersediaan menu.  
- **Kegunaan**:  
  - Antarmuka aplikasi harus ramah pengguna untuk semua jenis pengguna (pelanggan, kasir, admin).

---

## **5. Model, Migrasi, Seeder, dan Resource yang Perlu Dibuat Pada Container `docker exec -it sample bash`**

### **Menus**
- **Model**: `Menu`. Menyimpan data menu yang tersedia di restoran.  
- **Migration**: Struktur tabel berikut akan dibuat pada database:
  - `id`: `bigint UNSIGNED` (Primary Key)  
  - `name`: `varchar(255)` - Nama menu  
  - `category`: `varchar(255)` - Kategori menu (Makanan, Minuman, Dessert)  
  - `price`: `decimal(10,2)` - Harga menu  
  - `status`: `varchar(50)` - Status ketersediaan menu (Tersedia/Habis)  
  - `created_at`: `timestamp`  
  - `updated_at`: `timestamp`  

- **Seeder**: Menambahkan data menu awal untuk pengujian.  
- **Resource**: Endpoint API untuk data menu, dapat diakses oleh pelanggan, admin, dan kasir.

---

## **6. Analisis Permissions untuk Admin dan Kasir**

Permissions yang tepat diperlukan untuk membatasi akses sesuai dengan peran pengguna dalam aplikasi:

### **Permissions untuk Kasir**
- `view_menu`: Mengizinkan kasir melihat daftar menu.  
- `update_status`: Mengizinkan kasir memperbarui status ketersediaan menu.  

### **Permissions untuk Admin**
- `view_menu`: Mengizinkan admin melihat daftar menu.  
- `manage_menu`: Mengizinkan admin menambah, mengedit, dan menghapus menu.

---

# Changelog

| Versi  | Tanggal        | Deskripsi Perubahan                                                              |
|--------|----------------|----------------------------------------------------------------------------------|
| **1.0** | 15 November 2024 | Pembuatan dokumen BRD, fitur utama, dan perancangan database menu restoran.      |
| **1.1** | 16 November 2024 | Penambahan kolom `status` pada tabel `menus` dan permissions untuk kasir/admin.  |
| **1.2** | 17 November 2024 | Penyederhanaan tabel dan pemisahan hak akses `view_menu` antara pelanggan dan kasir. |
| **1.3** | 18 November 2024 | Penambahan seeder, API untuk mengelola menu, dan fitur riwayat pemesanan.         |
