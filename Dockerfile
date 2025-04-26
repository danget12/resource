# Use official PHP image with Apache
FROM php:8.2-apache

# Copy your project files into the server directory
COPY . /var/www/html/

# Expose default web server port
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
