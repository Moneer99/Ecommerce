step
composer install

copy .env.example .env 

php artisan migrate

php artisan db:seed -class=ProductSeeder

php artisan serve