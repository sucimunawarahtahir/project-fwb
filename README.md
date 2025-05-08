<p align="center"><strong>Jobsy - Sistem Penjualan Hijab Online</strong></p>

<div align="center">

![logo_unsulbar](public/logo.jpg)



<b>Suci Munawarah Tahir</b><br>
<b>D0222038</b><br>
<b>Framework Web Based</b><br>
<b>2025</b>
</div>

---


## Fitur Utama

- Manajemen Produk Hijab (CRUD)
- Sistem Keranjang dan Checkout
- Manajemen Pesanan dan Status Pengiriman
- Role-based Access Control
- Dashboard Admin
- Notifikasi Pesanan

## Role Pengguna

| Role         | Deskripsi                                                                 | Hak Akses Utama                                                                                 |
|--------------|---------------------------------------------------------------------------|-------------------------------------------------------------------------------------------------|
| **Admin**    | Pengelola utama sistem                                                    | Mengelola pengguna(customer & pengguna),Melihat laporan penjualan toko               |
| **Customer** | Pengguna akhir yang membeli produk                                        | Lihat produk, keranjang, checkout, kelola pesanan & profil                                     |
| **Staf**     | Pengguna operasional terbatas                                             | Lihat produk, update stok, proses pesanan, update status pengiriman                           |
                             
## 📦 Struktur Database

Berikut adalah tabel-tabel utama beserta field dan tipe datanya:

### 1. **users**
| Field          | Tipe Data     | Keterangan                    |
|----------------|---------------|--------------------------------|
| id             | BIGINT (PK)   | Primary key                   |
| name           | VARCHAR       | Nama pengguna                 |
| email          | VARCHAR       | Email unik                    |
| password       | VARCHAR       | Password terenkripsi          |
| role           | ENUM          | admin, customer, staf, dll    |
| created_at     | TIMESTAMP     | Waktu dibuat                  |
| updated_at     | TIMESTAMP     | Waktu diperbarui              |

---

### 2. **products**
| Field          | Tipe Data     | Keterangan                    |
|----------------|---------------|--------------------------------|
| id             | BIGINT (PK)   | Primary key                   |
| name           | VARCHAR       | Nama produk hijab             |
| description    | TEXT          | Deskripsi produk              |
| price          | DECIMAL       | Harga produk                  |
| stock          | INTEGER       | Jumlah stok tersedia          |
| image          | VARCHAR       | Path gambar produk            |
| created_at     | TIMESTAMP     |                               |
| updated_at     | TIMESTAMP     |                               |

---

### 3. **orders**
| Field          | Tipe Data     | Keterangan                    |
|----------------|---------------|--------------------------------|
| id             | BIGINT (PK)   | Primary key                   |
| user_id        | BIGINT (FK)   | Relasi ke tabel `users`       |
| total_price    | DECIMAL       | Total harga pesanan           |
| status         | ENUM          | pending, diproses, dikirim, selesai |
| created_at     | TIMESTAMP     |                               |
| updated_at     | TIMESTAMP     |                               |

---

### 4. **order_items**
| Field          | Tipe Data     | Keterangan                    |
|----------------|---------------|--------------------------------|
| id             | BIGINT (PK)   | Primary key                   |
| order_id       | BIGINT (FK)   | Relasi ke tabel `orders`      |
| product_id     | BIGINT (FK)   | Relasi ke tabel `products`    |
| quantity       | INTEGER       | Jumlah produk dipesan         |
| price          | DECIMAL       | Harga per item saat dipesan   |

---

### 5. **categories**
| Field          | Tipe Data     | Keterangan                    |
|----------------|---------------|--------------------------------|
| id             | BIGINT (PK)   | Primary key                   |
| name           | VARCHAR       | Nama kategori (ex: pashmina)  |
| created_at     | TIMESTAMP     |                               |
| updated_at     | TIMESTAMP     |                               |

---

### 6. **product_category**
(Pivot table untuk relasi many-to-many antara produk dan kategori)

| Field          | Tipe Data     | Keterangan                    |
|----------------|---------------|--------------------------------|
| product_id     | BIGINT (FK)   | Relasi ke `products`          |
| category_id    | BIGINT (FK)   | Relasi ke `categories`        |

---



## 🧩 Relasi Antar Tabel

- `users` → `orders` (One to Many)
- `orders` → `order_items` (One to Many)
- `products` → `order_items` (One to Many)
- `products` ↔ `categories` (Many to Many)

---


### 1. `users` ⟶ `orders`  
**Jenis Relasi:** One to Many  


---

### 2. `orders` ⟶ `order_items`  
**Jenis Relasi:** One to Many  


---

### 3. `products` ⟶ `order_items`  
**Jenis Relasi:** One to Many  


---

### 4. `products` ⟷ `categories`  
**Jenis Relasi:** Many to Many  

---

### 5. `users` ⟷ `roles` (via Spatie Laravel Permission)  
**Jenis Relasi:** Many to Many  

---

### 6. `roles` ⟷ `permissions` (Opsional - via Spatie)  
**Jenis Relasi:** Many to Many  


---








