docker compose up -d
npm run dev
php artisan serve

php artisan migrate:fresh
php artisan db:seed
