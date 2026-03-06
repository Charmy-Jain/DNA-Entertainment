FROM php:8.2-apache

# Enable Apache mod_rewrite for custom routing
RUN a2enmod rewrite

# Copy current directory to the apache web root
COPY . /var/www/html/

# Change ownership to the apache user
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Expose the default Apache port
EXPOSE 