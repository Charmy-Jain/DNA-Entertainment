FROM php:8.2-apache

# Enable Apache mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Copy the project files to the apache document root
COPY . /var/www/html/

# Set appropriate permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for Render
EXPOSE 80
