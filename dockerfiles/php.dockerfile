FROM php:8.1-fpm-alpine

WORKDIR /var/www

RUN apk update && apk add \
    build-base

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql

RUN addgroup -g 1000 -S www && \
    adduser -u 1000 -S www -G www

USER www

COPY --chown=www:www . /var/www

EXPOSE 9000