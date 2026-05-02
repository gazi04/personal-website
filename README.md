# Personal Website & Portfolio

A modern, dynamic personal website and portfolio platform built to showcase projects, track professional experiences, detail skills, and host a personal blog. The application features a clean, responsive frontend backed by a robust and secure administration dashboard.

## Features

- **Dynamic Portfolio:** Showcase your projects, including descriptions, links, and featured images.
- **Integrated Blog Engine:** Write, publish, and manage blog posts seamlessly.
- **Professional Timeline:** Display your work experiences and technical skills.
- **Admin Dashboard:** Secure backend panel (authenticated via Laravel Fortify) to manage site content, settings, and entries.
- **Fast & Responsive UI:** Powered by Svelte 5 and Tailwind CSS v4, delivered smoothly as a Single Page Application (SPA) using Inertia.js.

## Tech Stack

- **Backend:** Laravel 13 (PHP 8.5)
- **Frontend:** Svelte 5, Inertia.js, Tailwind CSS v4
- **Authentication:** Laravel Fortify (Jetstream-like scaffolding)
- **Database:** SQLite (Default, scalable to MySQL/PostgreSQL)
- **Asset Compilation:** Vite

## Prerequisites

Before getting started, ensure you have the following installed on your machine:
- PHP >= 8.5
- Composer
- Node.js (v20+) & NPM
- SQLite (or another preferred DBMS)

## Local Setup & Installation

1. **Clone the repository (if applicable)**
   ```bash
   git clone <repository-url>
   cd personal-website
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   Copy the `.env.example` to `.env` and configure your environment.
   ```bash
   cp .env.example .env
   ```
   *Note: Ensure your `DB_CONNECTION` is correctly set. It defaults to `sqlite`.*

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Create the SQLite database (if using SQLite)**
   ```bash
   touch database/database.sqlite
   ```

7. **Run Database Migrations**
   This will create all necessary tables (users, projects, blog_posts, experiences, etc.).
   ```bash
   php artisan migrate
   ```

8. **Start the Development Servers**
   Laravel 11 provides a handy `dev` script in Composer that utilizes `concurrently` to run the Vite dev server, Laravel artisan server, and queue worker simultaneously.
   ```bash
   composer run dev
   # OR
   npm run dev
   ```

9. **Access the application**
   Open your browser and navigate to `http://localhost:8000`.

## Deployment

When preparing for a production deployment:
1. Ensure `.env` is set to `APP_ENV=production` and `APP_DEBUG=false`.
2. Build the production frontend assets:
   ```bash
   npm run build
   ```
3. Cache Laravel configurations for optimized performance:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
