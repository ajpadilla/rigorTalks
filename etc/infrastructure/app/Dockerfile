FROM php:7.1-fpm-alpine

# Install PHP extensions
RUN apk update && apk add libxml2-dev libmcrypt vim zip unzip git wget vim nano curl \
    && docker-php-ext-install json mbstring xml soap zip mysqli pdo pdo_mysql sockets

# Install GD
RUN apk add --no-cache libpng libpng-dev && docker-php-ext-install gd && apk del libpng-dev

# Install NodeJS
RUN apk add --update nodejs nodejs-npm

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www