FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libpq-dev libzip-dev libonig-dev zlib1g-dev \
    && docker-php-ext-install intl zip opcache \
    && pecl install redis \
    && docker-php-ext-enable redis

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
