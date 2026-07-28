FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    sqlite3 \
    libsqlite3-dev \
    libzip-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy project
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Prepare database
RUN mkdir -p database && touch database/database.sqlite

# Prepare storage
RUN mkdir -p storage/framework/{cache,sessions,views}
RUN chmod -R 775 storage bootstrap/cache

# Copy environment
RUN cp .env.example .env

# Generate application key
RUN php artisan key:generate

# Run migrations
RUN php artisan migrate --force

EXPOSE 10000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]