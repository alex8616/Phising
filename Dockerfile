FROM php:8.2-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpq-dev unzip zip git curl \
    && docker-php-ext-install pdo pdo_pgsql

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar proyecto Laravel al contenedor
COPY . /var/www/html

WORKDIR /var/www/html

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Permisos
RUN chown -R www-data:www-data storage bootstrap/cache

# Copiar archivo .env.example si no existe .env (opcional)
RUN if [ ! -f .env ]; then cp .env.example .env; fi

# Generar clave de aplicación
RUN php artisan key:generate

# Ejecutar migraciones
RUN php artisan migrate --force

EXPOSE 80
