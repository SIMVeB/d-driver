
# To install the project, follow these steps

## Clone the project

open your preferences directory and run these commands
git clone  <https://github.com/SIMVeB/v-driver.git>
cd v-driver
cp .env.example .env
composer i
php artisan key:generate

## Config database

### Step 1

run your apach server
run your  mysql (If your database server is not mysql so you have to change the DB_CONNECTION, DB_HOST, DB_PORT, DB_USERNAME and DB_PASSWORD values in .env file)
create a database name v_driver using utf8_general_ci

### Step 2

run following commande
php artisan migrate:fresh
php artisan db:seed

## start the website

php artisan serve

## Super admin auth info

To access the dashboard as super admin, use these info
email: toundji@vdriver.com
password: 123456789

#
