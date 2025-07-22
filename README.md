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
    composer install
    npm install && npm run dev

3. Copy .env.example to .env and configure your database:
    cp .env.example .env

4. Generate application key:
    php artisan key:generate

5. Run migrations:
    php artisan migrate

6. Start the development server:
    php artisan serve

## Usage
    * Access the app via http://localhost:8000
    * Use the interface to create, edit, and delete blog posts

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any improvements or bug fixes.

## License

This project is open-source and available under the MIT License.