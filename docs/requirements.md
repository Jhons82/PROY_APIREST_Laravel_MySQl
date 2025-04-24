TODO: Install Laravel / Terminal

composer global require laravel/installer

composer create-project laravel/laravel ApiRest_Laravel

TODO: Execute Laravel serve

php artisan serve

TODO: Create Migration - Model (Esquema para migrar a la bd principal)

php artisan make:model categoria -m

TODO: Migrating laravel database to the main database

php artisan migrate

TODO: Create Controller
php artisan make:controller categoriacontroller

TODO: List of all routes registered in your application

php artisan route:list