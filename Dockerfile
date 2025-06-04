FROM php:8.2-apache

# Instala extensões PHP comumente usadas
RUN docker-php-ext-install pdo pdo_mysql

# Habilita o mod_rewrite do Apache
RUN a2enmod rewrite

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY src/ /var/www/html/