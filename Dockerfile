FROM php:8.2-apache

# PHP uploadlimieten
RUN echo "upload_max_filesize=20M" > /usr/local/etc/php/conf.d/uploads.ini \
    && echo "post_max_size=25M" >> /usr/local/etc/php/conf.d/uploads.ini

# PHP-extensies en benodigde tools
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    libpq-dev \
    unzip \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql gd zip \
    && rm -rf /var/lib/apt/lists/*
# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Node.js + npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get update \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# Apache rewrite
RUN a2enmod rewrite

WORKDIR /var/www/html

# Hele Laravel-project kopiëren
COPY . .

# Composer dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Vite/Tailwind build
RUN npm ci
RUN npm run build

# Laravel permissions
RUN mkdir -p public/storage/dieren \
    && chown -R www-data:www-data storage bootstrap/cache public/storage \
    && chmod -R 775 storage bootstrap/cache public/storage

# Apache naar Laravel public/
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf

EXPOSE 80

RUN chmod +x start.sh

CMD ["./start.sh"]
