# Use the official PHP image from the Docker Hub
FROM php:8.1-apache

# Enable mod_rewrite for Apache (useful for routing in PHP)
RUN a2enmod rewrite

# Copy the local project files to the container's web directory
COPY . /var/www/html/

# Expose the port the app runs on
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
