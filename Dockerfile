FROM php:8.1-apache

#  extensiones necesarias para MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html/

# Dar permisos adecuados
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Habilitar el módulo rewrite de Apache (si usas URLs amigables)
RUN a2enmod rewrite

# Exponer el puerto 80
EXPOSE 80