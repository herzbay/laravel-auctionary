
# Auctionary

A web-based auction management application built with Laravel. Auctionary provides an integrated dashboard for administrators to manage auction items, user accounts, and application data efficiently.

## Features

- **Auction Item Management** — View, add, and delete auction item records, including item details, owner information, contact details, address, description, and price.
- **User Management** — Manage user accounts, including creating, viewing, and deleting users, as well as assigning user types.
- **Admin Dashboard & Authentication** — Secure administrator access with authentication, role-based access restrictions, and centralized data monitoring.

## Tech Stack

### Backend
- PHP 8.2
- Laravel 11
- Laravel Eloquent ORM

### Frontend
- Blade Templates
- Tailwind CSS 3
- Alpine.js 3
- JavaScript
- Axios

### Development Tools & Libraries
- Vite 5
- PostCSS
- Autoprefixer
- Laravel Breeze
- Yajra Laravel DataTables Buttons
- Realrashid SweetAlert

## Requirements

Make sure the following tools are installed:

- PHP >= 8.2
- Composer
- Node.js and npm
- A database supported by Laravel

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/herzbay/laravel-auctionary.git
   ```

2. Navigate to the project directory:

   ```bash
   cd laravel-auctionary
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Install frontend dependencies:

   ```bash
   npm install
   ```

5. Create the environment configuration:

   ```bash
   cp .env.example .env
   ```

   On Windows CMD, use:

   ```cmd
   copy .env.example .env
   ```

6. Generate the application key:

   ```bash
   php artisan key:generate
   ```

7. Configure your database credentials in the `.env` file.

8. Run database migrations:

   ```bash
   php artisan migrate
   ```

## Running the Application

Open two terminals from the project directory.

**Terminal 1 — Laravel development server**

```bash
php artisan serve
```

**Terminal 2 — Vite development server**

```bash
npm run dev
```

Open the application in your browser:

```text
http://127.0.0.1:8000
```

## Building Assets

To compile frontend assets for production:

```bash
npm run build
```

## Project Structure

```text
laravel-auctionary/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   ├── web.php
│   └── auth.php
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── vite.config.js
```

## License

This project is developed for educational and portfolio purposes.