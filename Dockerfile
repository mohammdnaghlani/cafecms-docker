FROM php:8.2-apache

COPY ./docker/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

RUN docker-php-ext-install pdo pdo_mysql

