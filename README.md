# English

# Laravel 12 CRUD Posts Application

This repository contains a Laravel 12 application that demonstrates basic CRUD (Create, Read, Update, Delete) operations for managing blog posts. It serves as a practical example for developers learning Laravel and building web applications with structured data handling.

## Features

- Create new blog posts
- View a list of all posts
- Edit existing posts
- Delete posts
- Responsive UI using Blade templates
- Form validation and error handling

## Installation

Follow these steps to install and run the application locally:

1. Clone the repository:
   ```bash
   git clone https://github.com/antoniusekoputranto/laravel_12_app_crud_posts.git
   cd laravel_12_app_crud_posts
   ```

2. Install dependencies:
    ```bash
    composer install
    npm install && npm run dev
    ```

3. Copy .env.example to .env and configure your database:
    ```bash
    cp .env.example .env
    ```

4. Generate application key:
    ```bash
    php artisan key:generate
    ```

5. Run migrations:
    ```bash
    php artisan migrate
    ```

6. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

- Access the app via http://localhost:8000
- Use the interface to create, edit, and delete blog posts

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any improvements or bug fixes.

## License

This project is open-source and available under the MIT License.

# Indonesia

# Aplikasi CRUD Postingan Laravel 12

Repositori ini berisi aplikasi Laravel 12 yang mendemonstrasikan operasi dasar CRUD (Create, Read, Update, Delete) untuk mengelola postingan blog. Aplikasi ini berfungsi sebagai contoh praktis bagi para pengembang yang sedang mempelajari Laravel dan membangun aplikasi web dengan penanganan data yang terstruktur.

## Fitur

- Membuat postingan blog baru
- Melihat daftar semua postingan
- Mengedit postingan yang sudah ada
- Menghapus postingan
- Antarmuka responsif menggunakan template Blade
- Validasi formulir dan penanganan kesalahan

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi secara lokal:

1. Kloning repositori:
   ```bash
   git clone https://github.com/antoniusekoputranto/laravel_12_app_crud_posts.git
   cd laravel_12_app_crud_posts
   ```

2. Instal dependensi:
    ```bash
    composer install
    npm install && npm run dev
    ```

3. Salin .env.example ke .env dan konfigurasikan database Anda:
    ```bash
    cp .env.example .env
    ```

4. Hasilkan kunci aplikasi:
    ```bash
    php artisan key:generate
    ```

5. Jalankan migrasi:
    ```bash
    php artisan migrate
    ```

6. Jalankan server pengembangan:
    ```bash
    php artisan serve
    ```

## Penggunaan

- Akses aplikasi melalui http://localhost:8000
- Gunakan antarmuka untuk membuat, mengedit, dan menghapus postingan blogs

## Kontribusi

Kontribusi sangat disambut! Silakan fork repositori ini dan kirimkan pull request untuk perbaikan atau peningkatan apa pun.

## Lisensi

Proyek ini bersifat open-source dan tersedia di bawah Lisensi MIT.