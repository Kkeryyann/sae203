# Use an official PHP image with Apache
FROM php:8.2-apache

# Install necessary PHP extensions for MySQL/MariaDB
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy the application source code to the web server's document root
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80
