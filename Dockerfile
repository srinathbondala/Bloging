FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the extracted files from local /src to the container's /var/www/html
COPY ./src /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set the working directory for Apache to /var/www/html
WORKDIR /var/www/html

# Set permissions for /var/www/html
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN mkdir -p /var/www/html/application/uploads && \
    chmod -R 777 /var/www/html/application/uploads


