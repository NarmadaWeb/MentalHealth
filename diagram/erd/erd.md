# Struktur Tabel Database (ERD)

Berikut adalah detail spesifikasi struktur tabel basis data untuk aplikasi **MentalHealth** sesuai dengan relasi database terbaru:

### 1. Tabel: `kategori_gejala`
Tabel ini digunakan untuk menyimpan kategori gejala klinis berdasarkan skala DASS-21 (Depresi, Kecemasan, Stres).

| No | Field | Type | Size | Keterangan |
| :--- | :--- | :--- | :--- | :--- |
| 1 | id | Int | 11 | Identitas kategori gejala (Primary Key) |
| 2 | nama_kategori | Varchar | 50 | Nama kategori gejala (Depresi, Kecemasan, Stres) (Unique) |
| 3 | created_at | Timestamp | - | Waktu pembuatan baris data |

### 2. Tabel: `gejala`
Tabel ini menyimpan butir-butir pertanyaan/gejala kuesioner DASS-21 yang terhubung ke kategorinya masing-masing.

| No | Field | Type | Size | Keterangan |
| :--- | :--- | :--- | :--- | :--- |
| 1 | id | Int | 11 | Identitas gejala (Primary Key) |
| 2 | kategori_id | Int | 11 | ID Kategori Gejala (Foreign Key) |
| 3 | question_text | Text | - | Pertanyaan gejala klinis (kuesioner DASS-21) |
| 4 | sort_order | Int | 11 | Nomor urut penampilan pertanyaan |
| 5 | created_at | Timestamp | - | Waktu pembuatan baris data |
| 6 | updated_at | Timestamp | - | Waktu pembaruan baris data terakhir |

### 3. Tabel: `admin_users`
Tabel ini menyimpan data akun administrator untuk otentikasi akses panel kontrol admin.

| No | Field | Type | Size | Keterangan |
| :--- | :--- | :--- | :--- | :--- |
| 1 | id | Int | 11 | Identitas admin (Primary Key) |
| 2 | username | Varchar | 64 | Username login admin (Unique) |
| 3 | password_hash | Varchar | 255 | Hash password administrator |
| 4 | created_at | Timestamp | - | Waktu pendaftaran akun admin |
