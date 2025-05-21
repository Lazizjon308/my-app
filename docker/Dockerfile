
FROM php:8.2-fpm


RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    unzip \
    libpq-dev \
    zip \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip


COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql pgsql

#RUN chown -R www-data:www-data /var/www \
#    && chmod -R 755 /var/www/storage


