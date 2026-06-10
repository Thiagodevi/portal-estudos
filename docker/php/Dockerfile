FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    firebird-dev \
    libfbclient2 \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install \
    pdo \
    pdo_firebird \
    mbstring \
    exif \
    pcntl \
    bcmath

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin \
    --filename=composer

WORKDIR /var/www/html