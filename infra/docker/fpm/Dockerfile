FROM php:7.2-fpm

WORKDIR /var/www/

RUN docker-php-ext-install pdo pdo_mysql

COPY design-patterns/ .

EXPOSE 9000