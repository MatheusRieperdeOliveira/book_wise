FROM php:fpm-alpine3.22

LABEL authors="matheus"

RUN apk add --no-cache postgresql-dev \
    && docker-php-ext-install pdo_pgsql pgsql
