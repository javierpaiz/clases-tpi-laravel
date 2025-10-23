FROM php:8.2-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer globalmente
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Activar mod_rewrite y configuración
RUN a2enmod rewrite

# Configurar permisos y acceso a /var/www/html
RUN printf "<Directory /var/www/html>\nOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>\n" \
    > /etc/apache2/conf-available/z-laravel.conf \
    && a2enconf z-laravel

WORKDIR /var/www/html
EXPOSE 80
