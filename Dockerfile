# Usa a imagem oficial PHP com Apache
FROM php:8.2-apache

# Copia os arquivos da aplicação para o diretório padrão do Apache
COPY . /var/www/html/

# Dá permissão de leitura para os arquivos copiados (opcional)
RUN chown -R www-data:www-data /var/www/html

# Expondo a porta padrão do Apache
EXPOSE 80
