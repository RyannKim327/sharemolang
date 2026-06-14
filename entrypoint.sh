#!/bin/sh

# Set Laravel environment variables if they are not set
export LOG_CHANNEL=${LOG_CHANNEL:-stderr}
export DB_CONNECTION=${DB_CONNECTION:-sqlite}
export DB_DATABASE=${DB_DATABASE:-/var/www/database/database.sqlite}

# Create SQLite database if it doesn't exist
if [ "$DB_CONNECTION" = "sqlite" ]; then
  touch "$DB_DATABASE"
  chown www-data:www-data "$DB_DATABASE"
fi

# Ensure storage and bootstrap/cache are writable
# (Doing this again in entrypoint because volumes might change permissions)
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Generate APP_KEY if not provided (this should be set in Render for production)
if [ -z "$APP_KEY" ]; then
  echo "APP_KEY is not set. Generating a temporary one..."
  # We use a trick to set it for the current session without editing .env
  # because we want it to be available for artisan commands below.
  export APP_KEY=$(php artisan key:generate --show --no-interaction)
fi

# Run migrations
echo "Running migrations..."
php artisan migrate --force --no-interaction

# Cache configuration and routes for performance
echo "Caching configuration and routes..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start PHP-FPM in the background
echo "Starting PHP-FPM..."
php-fpm -D

# Start Nginx in the foreground
echo "Starting Nginx..."
nginx -g "daemon off;"
