# laravel-sentinel-bootstrap
Bootstrap a Laravel App with Sentinel Authentication

## Install via Composer Create-Project
For best results, install this by issuing the Composer `create-project` command in your terminal:

```
composer create-project whatthecode/laravel-sentinel-bootstrap fsbo dev-master
```

## Database Migrations and Seeding

Once installed, update your `.env` file to reference your DB settings and credentials. By default you should see the following:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Update accordingly. When you've done that, run the migrations and the seeding. Running the migrations will create all the required tables for using Sentinel authentication and the seeding will create an admin user and a regular user:

#### Migration

```
php artisan migrate
```

#### Seeding

```
php artisan db:seed --class=SentinelDatabaseSeeder
```
