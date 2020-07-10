FROM php:5.5.19-fpm

RUN apt-get update && apt-get install -y --force-yes \
        libzip-dev \
        zip
RUN docker-php-ext-configure zip --with-libzip
RUN docker-php-ext-install zip
RUN docker-php-ext-install mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html