# C305_Malasarte_Raphael — Portfolio Web Application

## Project Overview
This repository is a Laravel-based portfolio web application (MVC) that serves as a digital resume and project showcase with simple authentication and session-based access to the portfolio pages.

- Routes are defined in [routes/web.php](routes/web.php).
- Authentication flows use the controller referenced as [`App\Http\Controllers\AuthController`](app/Http/Controllers/AuthController.php) (see routes).
- The Eloquent user model is [`App\Models\User`](app/Models/User.php) and the users table migration is [database/migrations/2025_11_30_100102_create_users_table.php](database/migrations/2025_11_30_100102_create_users_table.php).
- Public entry point: [public/index.php](public/index.php)
- App bootstrap: [bootstrap/app.php](bootstrap/app.php)
- Console entry: [artisan](artisan)

## Tech Stack
- Framework: Laravel (PHP)
- Frontend: Blade templates + Bootstrap (see [resources/views/portfolio.blade.php](resources/views/portfolio.blade.php))
- Assets: Vite (see [vite.config.js](vite.config.js)) and [resources/js/app.js](resources/js/app.js)
- DB: configured in [config/database.php](config/database.php)
- Session & cache: [config/session.php](config/session.php), [config/cache.php](config/cache.php)

## Key Features
- Login / Register pages: [resources/views/authentication/login.blade.php](resources/views/authentication/login.blade.php) and [resources/views/authentication/register.blade.php](resources/views/authentication/register.blade.php)
- Session-based access control to `/portfolio` (see [routes/web.php](routes/web.php))
- Dynamic portfolio content rendered from Blade templates ([resources/views/portfolio.blade.php](resources/views/portfolio.blade.php))
- Basic tests in [tests/Feature/ExampleTest.php](tests/Feature/ExampleTest.php) and [tests/Unit/ExampleTest.php](tests/Unit/ExampleTest.php)

## Installation & Setup
1. Clone the repo:
   git clone <https://github.com/starrrrr06/C305_Malasarte_Raphael.git>

2. Install PHP dependencies:
   composer install

3. Install Node dependencies and build assets:
   npm install
   npm run dev

4. Copy env and generate app key:
   cp .env.example .env
   php artisan key:generate

5. Configure database in `.env` (see [config/database.php](config/database.php)), then run migrations:
   php artisan migrate

6. Start dev server:
   php artisan serve

## Running Tests
- Run PHPUnit / artisan test:
  php artisan test
  or
  ./vendor/bin/phpunit

## Useful Files
- Routes: [routes/web.php](routes/web.php)
- Controllers: [app/Http/Controllers](app/Http/Controllers)
- Middleware: [app/Http/Middleware](app/Http/Middleware)
- Models: [`App\Models\User`](app/Models/User.php)
- Views: [resources/views](resources/views)
- Config: [config/app.php](config/app.php), [config/session.php](config/session.php), [config/cache.php](config/cache.php)
- Migrations: [database/migrations](database/migrations)
- Composer & NPM: [composer.json](composer.json), [package.json](package.json), [vite.config.js](vite.config.js)

## Deployment Notes
- Ensure environment variables (.env) are set (use [.env.example](.env.example) as reference).
- Set appropriate `APP_URL`, DB credentials, and `APP_KEY`.
- Configure web server to point to [public/index.php](public/index.php).

## Credits
Author: Raprap (project content in [resources/views/portfolio.blade.php](resources/views/portfolio.blade.php))
