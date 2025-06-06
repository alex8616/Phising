FROM php:8.2-apache

# Instala extensiones necesarias y otras herramientas
RUN apt-get update && apt-get install -y \
    git zip unzip curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instala Composer globalmente
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Establece directorio de trabajo
WORKDIR /var/www/html

# Copia todo el proyecto
COPY . .

# Ejecuta composer install para instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Da permisos necesarios
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Habilita mod_rewrite en Apache
RUN a2enmod rewrite

# Configura el VirtualHost
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

# Expone el puerto
EXPOSE 80

CMD ["apache2-foreground"]
