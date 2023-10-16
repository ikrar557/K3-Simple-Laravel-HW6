# Use the official PHP image as base
FROM php:8.1-apache

# Install required dependencies
RUN apt-get update && \
    apt-get install -y git zip unzip && \
    docker-php-ext-install pdo_mysql

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Clone Laravel project from GitHub
RUN git clone -b balance-feature https://github.com/ikrar557/K3-Simple-Laravel-HW6 .

# Install Laravel dependencies
RUN composer install --no-interaction

# Copy environment file
COPY .env.example .env

# Generate application key
RUN php artisan key:generate

# Run npm install and npm build
RUN apt-get install -y npm
RUN npm install
RUN npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
