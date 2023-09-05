FROM php:8.0-apache

WORKDIR /var/www/html

EXPOSE 80

COPY . .

RUN apt-get update && apt-get install -y git curl zip unzip

RUN pecl install xdebug

RUN docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-enable pdo_mysql xdebug

RUN mv ${PHP_INI_DIR}/php.ini-development ${PHP_INI_DIR}/php.ini

COPY ./docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

COPY ./docker/php/timezone.ini "${PHP_INI_DIR}/conf.d/"

COPY ./docker/php/xdebug.ini "${PHP_INI_DIR}/conf.d/"

RUN a2enmod rewrite
