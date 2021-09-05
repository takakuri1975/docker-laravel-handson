FROM php:8.0-fpm-buster
ENV https_proxy "http://sys_dwh:1525dwhIpet@172.16.10.151:12080"
ENV http_proxy  "http://sys_dwh:1525dwhIpet@172.16.10.151:12080"

SHELL ["/bin/bash", "-oeux" ,"pipefail" , "-c"]

ENV COMPOSER_ALLOW_SUPERUSER=1 \
COMPOSER_HOME=/composer

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get -y install git unzip libzip-dev libicu-dev libonig-dev && apt-get clean 
RUN rm -rf /var/lib/apt/lists/* 
RUN docker-php-ext-install intl pdo_mysql zip bcmath

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work
