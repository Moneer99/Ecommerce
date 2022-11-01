step
composer install

copy .env.example .env 

php artisan migrate

php artisan db:seed -class=ProductSeeder

npm install 

//npm install tailwindcss@^1

//npm run dev

php artisan serve