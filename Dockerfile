FROM php:8.1-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    zip unzip curl git libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www

RUN composer install && php artisan config:cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
