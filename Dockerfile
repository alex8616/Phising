FROM php:8.2-apache

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpq-dev unzip zip git curl gnupg ca-certificates \
    && docker-php-ext-install pdo pdo_pgsql

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Instalar Node.js (v18 LTS)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar archivos del proyecto
COPY . /var/www/html
WORKDIR /var/www/html

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Instalar dependencias JS
RUN npm install

# Compilar assets con Vite
RUN npm run build

# Permisos adecuados
RUN chown -R www-data:www-data storage bootstrap/cache public/build

# Generar clave de aplicación
RUN php artisan config:clear \
    && php artisan key:generate \
    && php artisan migrate --force

# Copiar configuración personalizada de Apache
COPY vhost.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
