# Use the official PHP image with PHP 8.1
FROM php:8.1-fpm

# Set environment variables for configuration and defaults
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV DB_HOST=localhost
ENV DB_PORT=3306
ENV DB_DATABASE=laravel
ENV DB_USERNAME=root
ENV DB_PASSWORD=2eTxLyPDZm3L3NkS

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libmagickwand-dev \
    && docker-php-ext-install pdo_mysql \
    && pecl install imagick \
    && docker-php-ext-enable imagick \

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY --chown=www-data:www-data . /var/www/
RUN chown -R www-data:www-data /var/www

# Copy project files
COPY . /var/www/

# Install npm dependencies
RUN npm install -g npm@10

# Install composer dependencies
RUN composer install --no-interaction

# Install node dependencies
RUN npm install
RUN npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port
EXPOSE 9000

