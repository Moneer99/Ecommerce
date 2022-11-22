# Ecommerce

Fully functional E-commerce website front-end and back-end built from scratch.
●  Using laravel theme as an admin panel for the site.
●  Javascript bootstrap and css for the front -end.
●  Intelligent searching mechanism for products.
●  Awesome Cart package that uses session.
●  An artisan command to seed the database with all neccessary dummy data.


step:
1-composer install

2-copy .env.example .env 

3-php artisan migrate

4-php artisan db:seed -class=ProductSeeder

5-php artisan serve
