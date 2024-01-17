## Setup:

1. Install PHP 8.1 or 8.2 (e.g. with [XAMP](https://www.apachefriends.org/))
2. Install [Composer](https://getcomposer.org/download/)
3. Install [Node.js 16](https://nodejs.org/download/release/v16.20.2/)
4. Execute:
```
composer install
composer run post-root-package-install
composer run post-create-project-cmd
composer run post-autoload-dump
npm install
npm run build
```
5. Change database credentials in .env file
6. Execute:
```
php artisan migrate
php artisan db:seed
```
7. Run the server: `php artisan serve`
8. Open the website in your browser: http://localhost:8000
9. Login with the email `test@example.com` and the password `test`


Login:
https://laravel.com/docs/10.x/starter-kits

Generování Controllerů
https://github.com/awais-vteams/laravel-crud-generator
