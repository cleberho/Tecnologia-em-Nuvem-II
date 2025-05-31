# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Copia os arquivos da sua aplicação para o diretório padrão do Apache
COPY . /var/www/html/

# Permite URLs amigáveis
RUN a2enmod rewrite
