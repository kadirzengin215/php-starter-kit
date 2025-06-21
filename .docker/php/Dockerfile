# Get the latest PHP official image from Docker Hub
FROM php:latest

# Update package list and install required packages
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    && apt-get autoremove -y

# Install PHP extensions with pecl
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Install PHP extensions with docker
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Copy the application files to the working directory
COPY --chown=www-data:www-data ../../ /var/www/html

# Copy the xdebug configuration file
COPY .docker/php/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/
