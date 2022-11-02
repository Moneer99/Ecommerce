# ecommerce-laravel-fullstack


## Features

-   Fully functional E-commerce website front-end and back-end .
-   Using laravel corona as an admin panel for the site.
-   javascript, jquery, bootstrap and css for the front-end.
-   Intelligent searching mechanism for products.
-   Awesome Cart package that uses session.
-   An artisan command to seed the database with all neccessary dummy data, even for tables (php artisan ecommerce:install).
-   Different user roles and privileges.
-   And much more features.

---

## Installation Guide

1. clone this repo to your local machine
1. copy `.example.env` to `.env` file
1. add your database credentials
1. run `composer install`
1. run `npm install && npm run dev`
1. run `php artisan key:generate`
1. run `php artisan ecommerce:install`
1. run `php artisan ecommerce: db:seed --class=ProductSeeder`
1. credentials to access admin panel (email: `admin@admin.com`, password: `12345`)

