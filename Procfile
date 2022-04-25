web: vendor/bin/heroku-php-nginx -C nginx.conf public/
worker: php artisan migrate
release: php artisan migrate --force && php artisan cache:clear && php artisan config:cache