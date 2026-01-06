FROM php:fpm-alpine3.22

LABEL authors="matheus"

COPY .config/php.ini /usr/local/etc/php/php.ini

RUN apk add --no-cache postgresql-dev \
    && docker-php-ext-install pdo_pgsql pgsql
