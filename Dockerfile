FROM php:8.3-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libxml2-dev \
    libicu-dev \
    zip \
    git \
    unzip \
    nginx \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip bcmath xml intl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy only composer files first to leverage Docker cache
COPY composer.json composer.lock ./

# Set environment variable to allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install dependencies without scripts first to avoid issues with missing files
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress --no-scripts

# Copy the rest of the application
COPY . .

# Run composer scripts now that all files are present
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Configure permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
