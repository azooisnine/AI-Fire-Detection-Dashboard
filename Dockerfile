FROM php:8.2-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    sqlite3 \
    libsqlite3-dev \
    libzip-dev

RUN docker-php-ext-install pdo pdo_sqlite zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN cp .env.example .env

RUN php artisan key:generate

RUN touch database/database.sqlite

RUN php artisan migrate --force

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000