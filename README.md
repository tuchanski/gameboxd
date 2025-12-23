# Gameboxd

A lightweight Laravel 12 application to track and review video games, inspired by Letterboxd. Search games via the Gamebrain API, write personal reviews with ratings, and manage your entries behind authentication. Built with Vite and Tailwind for a snappy UI, and ready to run locally or via Docker/Sail.
## Features

-   Auth: Email/password registration, login, logout
-   Reviews: Create, read, update, delete your own reviews
-   Ratings: 0–10 rating scale with validation
-   Game search: Integrates with Gamebrain API for game discovery
-   UX: Toast notifications via `devrabiul/laravel-toaster-magic`
-   DX: Vite dev server, Pest tests, optional Sail + MySQL + phpMyAdmin

## Tech Stack

-   Backend: Laravel 12 (PHP ^8.2)
-   Frontend: Vite ^7, Tailwind CSS ^4
-   Notifications: `devrabiul/laravel-toaster-magic`
-   Tests: Pest ^4
-   Local Dev: Laravel Sail (Docker) or native PHP toolchain

## Screenshots

### 1. Login
<img width="1917" height="1028" alt="Image" src="https://github.com/user-attachments/assets/5ce40f36-ac35-4055-b5db-8d387dcee2a6" />

### 2. Register
<img width="1915" height="1025" alt="Image" src="https://github.com/user-attachments/assets/9d5112b5-cc01-42c5-b870-a921cfa76bbf" />

### 3. Dashboard
<img width="1917" height="1032" alt="Image" src="https://github.com/user-attachments/assets/f18717f4-260e-4bb6-9ea1-a85a434b5dd4" />

### 4. About
<img width="1916" height="1023" alt="Image" src="https://github.com/user-attachments/assets/e5173e57-4255-4fab-8baf-184e42536a5c" />

### 5. Review
<img width="1917" height="1022" alt="Image" src="https://github.com/user-attachments/assets/5a71e59f-01f2-4bae-bcb8-bbd8d2be0f53" />

### 6. Edit Review
<img width="1916" height="1027" alt="Image" src="https://github.com/user-attachments/assets/3b689255-2a73-4d33-9785-d7198d6cf77d" />

### 7. Game Searcher
<img width="1917" height="1032" alt="Image" src="https://github.com/user-attachments/assets/7d81da5a-8711-41da-bf77-adaefcc8e12a" />

### 8. Create Review
<img width="1918" height="1026" alt="Image" src="https://github.com/user-attachments/assets/03262bdb-8065-462a-a384-b6a2ae9296e0" />

## Quick Start

### Option A — Docker (Sail)

1. Create environment

```bash
cp .env.example .env
```

2. Configure required variables in `.env` (see Environment below).
3. Start services

```bash
# If Sail is available (recommended)
./vendor/bin/sail up -d

# Or with Docker Compose directly
docker compose up -d
```

4. Install dependencies and build assets

```bash
./vendor/bin/sail composer install
./vendor/bin/sail npm install
./vendor/bin/sail php artisan key:generate
./vendor/bin/sail php artisan migrate --seed
./vendor/bin/sail npm run dev   # for hot-reload
```

5. Open the app

-   App: http://localhost (or the value of `APP_PORT`, default 80)
-   Vite: http://localhost:5173 (proxied when using Vite dev)
-   phpMyAdmin: http://localhost:8080

### Option B — Native (no Docker)

Prerequisites: PHP ^8.2, Composer, Node.js 18+, MySQL 8.4

```bash
cp .env.example .env
composer install
npm install
php artisan key:generate
php artisan migrate --seed
npm run dev     # or: npm run build
php artisan serve
```

Open http://127.0.0.1:8000

## Environment

Set these keys in `.env` before running:

-   APP_NAME, APP_URL, APP_KEY (generated)
-   DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
-   GAMEBRAIN_API_KEY, GAMEBRAIN_API_URL (required for search)

The Gamebrain service uses bearer auth and expects a base URL:

-   Config location: [config/services.php](config/services.php)
-   Service code: [app/Services/GamebrainApiService.php](app/Services/GamebrainApiService.php)

## Useful Commands

-   Start dev suite (concurrently runs server, queue, logs, vite):

```bash
composer run dev
```

-   Run tests:

```bash
php artisan test
# or
./vendor/bin/pest
```

-   Run migrations/seeders:

```bash
php artisan migrate --seed
```

-   Build assets for production:

```bash
npm run build
```

## Routes Overview

-   `GET /` — Dashboard of your reviews (auth)
-   `GET /games?query=...` — Gamebrain search (auth)
-   `GET /reviews/create` — New review form (auth; supports game query params)
-   `POST /reviews` — Create review (auth)
-   `GET /reviews/{id}` — View review (auth, owner-only)
-   `GET /reviews/{id}/edit` — Edit review (auth, owner-only)
-   `PATCH /reviews/{id}` — Update review (auth, owner-only)
-   `DELETE /reviews/{id}` — Delete review (auth, owner-only)
-   `GET /register` / `POST /register` — Sign up (guest)
-   `GET /login` / `POST /login` / `DELETE /login` — Auth (guest/auth)
-   `GET /about` — About page (auth)

## Data Model

`reviews` table (selected columns):

-   `id` (PK)
-   `user_id` (FK -> users, cascade on delete)
-   `game_id` (int)
-   `title` (text, nullable)
-   `image` (text, nullable)
-   `rating` (tinyint 0–10)
-   `body` (text, nullable)
-   Timestamps

See migration: [database/migrations/2025_12_18_164916_create_reviews_table.php](database/migrations/2025_12_18_164916_create_reviews_table.php)

## Running With Docker Details

This repo ships a `compose.yaml` tailored for Sail:

-   App: publishes `${APP_PORT:-80}`; Vite: `${VITE_PORT:-5173}`
-   MySQL 8.4, volume `sail-mysql`
-   phpMyAdmin on `8080`

Common Sail commands:

```bash
./vendor/bin/sail up -d
./vendor/bin/sail down
./vendor/bin/sail artisan migrate --seed
./vendor/bin/sail npm run dev
```

## Development Notes

-   Views live in [resources/views](resources/views)
-   Frontend entrypoints: [resources/js/app.js](resources/js/app.js), [resources/css/app.css](resources/css/app.css)
-   Vite config: [vite.config.js](vite.config.js)
-   Example dashboard: [resources/views/dashboard.blade.php](resources/views/dashboard.blade.php)

## Troubleshooting

-   403/redirect on `/`: You must be logged in; register first.
-   Game search returns empty: verify `GAMEBRAIN_API_KEY` and `GAMEBRAIN_API_URL`.
-   Vite HMR not working in Docker: ensure `VITE_PORT` is open and matches `5173`.
-   MySQL connection errors: confirm DB host/port and that the container is healthy.

## License

MIT (see root license of Laravel skeleton). Project content is for educational/demo purposes.
## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
