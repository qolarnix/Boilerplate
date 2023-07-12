# PHP Project Boilerplate

## What is it
- Latest version of PHP
- Eloquent from laravel
- Great router
- Bring your own auth
- HTMX for ajax
- Tailwindcss

## How to use

### Commands
- `composer run dev` start the local php server
- _note_ you need to have the tailwind binary installed to usr/local/bin
- `composer run tw-dev` watch tailwind files
- `composer run tw-min` minify dist for production
- `composer run db-create` create sqlite file before migrations

### Migrations
- `php database/migrations/users.php` create table for users and insert faker data