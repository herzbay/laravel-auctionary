
<div align="center">

# 🔨 Auctionary

### Web-Based Auction Management System

A web-based application designed to simplify auction administration through an integrated dashboard for managing auction items and user accounts.

<br/>

![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)

</div>

---

## 📖 Overview

**Auctionary** is a web-based auction management application built with Laravel. It provides administrators with a centralized platform to manage auction item records, user accounts, and application data efficiently.

The application features an integrated administrative dashboard with authentication and data management capabilities, helping streamline auction-related administrative processes.

## ✨ Key Features

| Feature | Description |
|---|---|
| 📦 **Auction Item Management** | Manage auction item records, including item details, owner information, contact details, descriptions, and prices. |
| 👥 **User Management** | View, add, and manage user accounts and user types. |
| 📊 **Admin Dashboard & Authentication** | Access a centralized dashboard with authentication and administrative data monitoring. |

## 🛠️ Tech Stack

Technologies and tools used in this project:

<div align="center">

[![My Skills](https://skillicons.dev/icons?i=php,laravel,tailwind,alpinejs,js,vite,postman,git,github)](https://skillicons.dev)

</div>

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

## 🚀 Future Improvements

- Real-time auction bidding system.
- Auction history and bid tracking.
- Automated auction winner determination.

---

<div align="center">

**Auctionary** — Simplifying Auction Management.

Developed with ❤️ using Laravel.

</div>