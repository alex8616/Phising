FROM php:8.2-apache

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia los archivos del proyecto
COPY . /var/www/html/

# Cambia el directorio de trabajo
WORKDIR /var/www/html

# Da permisos a Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Habilita mod_rewrite para Apache
RUN a2enmod rewrite
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

# Expone el puerto 80
EXPOSE 80

CMD ["apache2-foreground"]
