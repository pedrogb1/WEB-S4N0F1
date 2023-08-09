# Use an official PHP image
FROM php:8.2.5-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Copy the Laravel project files
COPY . .

# Install Composer dependencies
RUN composer install --no-interaction --prefer-dist
RUN php artisan key:generate
# Expose port 8000 (Laravel's default development server port)
EXPOSE 80

# Start the Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]