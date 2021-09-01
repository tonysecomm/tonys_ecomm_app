FROM wordpress:5.8.0-php8.0-apache

# Install system dependencies
RUN apt-get update && apt-get install -y git && apt-get install -y vim

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
# WORKDIR /var/www