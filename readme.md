# PHP Project Boilerplate

### What is this boilerplate for?
- Build interactive websites without node/npm/javascript
- [HTMX for ajax, animations & forms](https://htmx.org/docs/)
- [Tailwindcss standalone executable](https://tailwindcss.com/blog/standalone-cli)
- Using the latest version of PHP and all of its features
- [ORM from Laravel for maximum productivity](https://github.com/illuminate/database)
- [Bramus/Router for web & api routes](https://github.com/bramus/router)
- Simple templating function but you can also bring your own engine
- Choose your own auth solution

### Commands
- `composer install` install deps
- `composer run dev` start the local php server
- _note_ you need to have the tailwind binary installed to usr/local/bin
- `composer run tw-dev` watch tailwind files
- `composer run tw-min` minify dist for production
- `composer run db-create` create sqlite file before migrations

### Migrations
- `php database/migrations/users.php` create table for users and insert faker data

### Contributing
- Make a PR