FROM php:8.4-fpm

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
  curl \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install gd pdo pdo_mysql zip bcmath xml intl \
  && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Node.js (needed for Vite build)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
  && apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy only composer and npm files first to leverage Docker cache
COPY composer.json composer.lock package.json package-lock.json* ./

# Set environment variable to allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress --no-scripts \
  && npm install

# Copy the rest of the application
COPY . .

# Build assets and finish composer setup
RUN npm run build \
  && composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Configure Nginx
COPY nginx.conf /etc/nginx/sites-available/default
RUN ln -sf /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

# Configure permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Prepare entrypoint
# COPY entrypoint.sh /usr/local/bin/entrypoint.sh
# RUN chmod +x /usr/local/bin/entrypoint.sh

EXPOSE 80
# RUN npm run dev
CMD ["/usr/local/bin/entrypoint.sh"]
