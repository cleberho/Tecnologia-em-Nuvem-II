FROM php:8.2-apache

# Copia o app para o diretório padrão do Apache
COPY public/ /var/www/html/

# Render define a porta como variável de ambiente $PORT
ENV PORT=8080

# Modifica as configurações do Apache para escutar nessa porta
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf && \
    sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# Expõe a porta dinamicamente
EXPOSE ${PORT}
