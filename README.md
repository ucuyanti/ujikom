# ERD
![erd](https://github.com/user-attachments/assets/888d8079-15d6-4557-b956-25ec58643e1b)

# uml
![umll](https://github.com/user-attachments/assets/8700b30c-d864-4a91-9546-f82c8bc965fa)
# 1. Prasyarat 
### Pastikan perangkat Anda telah memenuhi prasyarat berikut sebelum menginstal Repository ini:

- PHP: Versi 8.1 atau lebih baru.
- Composer: Dependency Manager untuk PHP.
- MySQL/SQLite: Untuk database.

# 2. Langkah Instalasi  

### Langkah 1: Clone Repository 

```
git clone https://github.com/ucuyanti/ujikom
 ```

### Langkah 2: Pindah ke Direktori Proyek 

```
cd riska1
```
- Setelah Itu Masuk Ke dalam Visual Studio Code

```
code .

### Langkah 3: Instal Dependensi Backend
```
composer install
```
### Langkah 4: Copy atau Salin File Konfigurasi (.env)

##### Salin file .env.example menjadi .env untuk mengatur variabel lingkungan atau Mengunkan Code berikut:

```
cp .env.example .env

```
### Langkah 5: Atur Konfigurasi .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_riska
DB_USERNAME=root
DB_PASSWORD=
DB_COLLATION=utf8mb4_unicode_ci
```

### Langkah 6: Migrasi Database

- Buat sebuah Databases Di xampp Terlebih Dahulu

```
php artisan migrate
```

### Langkah 7: Generate Application Key

- Langkah ini sangat penting untuk setiap aplikasi Laravel, karena tanpa kunci ini, beberapa fitur tidak akan berjalan sebagaimana mestinya jadi harus di jalankan ya perintanya kalo mau menggunakan Source Code ini ya semoga berhasil  :

```
php artisan key:generate
```

### Langkah 9: Jalankan Server Pengembang

```
php artisan serve
```
