=========================================
    important commands for CRUD operations
=========================================

1. php artisan make:model Service -mcr (Service= model name, m=migration, cr=resource controller)
2. php artisan migrate (run migration files -in this case it will create new table)
3. php artisan make:view services.index(crate view page in the subfolder in this case it will      create index.blade.php in the services folder)
4. php artisan storage:link


===========================================
How to clone from github
==========================================
1. git clone https://github.com/MdKawsarAK/HR
2. composer install
3. copy .env.example to .env
4. =============================================



============================================
    Commands after clone form Github
============================================

1. .env.example .env (copy files form .env.example to .env)
    ->setup database in .env file
2. composer install (install all dependencies)
3. php artisan key:generate (generate all keys)#   l a r a v e l - m y s q l - c r u d 

====================================
git add/push:
====================================
git status
git add .
git commit -m "Short description of your update"
git push (origin main) just fast time
===========================================


 
Chatgpt::
 composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve





Api create:
==============================
1. php artisan install:api
2. php artisan make: model Table (singuler)
3. php artisan make:controller Api/PostController --api
4. php artisan make: resource TableResource

