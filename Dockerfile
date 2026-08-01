FROM study-app:latest

LABEL authors="matheus"

COPY .config/php.ini /usr/local/etc/php/php.ini

RUN apk add --no-cache postgresql-dev \
    && docker-php-ext-install pdo_pgsql pgsql

CMD ['php -S 0.0.0.0:8020 -t /home/root/code/public']