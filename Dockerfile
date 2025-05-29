FROM php:8.2-apache

# Instala extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Habilita mod_rewrite
RUN a2enmod rewrite

# Copia archivos del proyecto
COPY . /var/www/html/

# Ajusta permisos
RUN chown -R www-data:www-data /var
