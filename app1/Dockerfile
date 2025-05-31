FROM php:8.2-apache

# Define a variável de ambiente PORT para fallback local
ENV PORT=8080

# Substitui configurações do Apache para escutar na porta definida por $PORT
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf \
 && sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# Copia os arquivos da aplicação para o diretório padrão do Apache
COPY public/ /var/www/html/

# Expõe a porta (mesmo que Render não dependa disso)
EXPOSE ${PORT}

# Inicia o Apache em foreground (modo requerido pela Render)
CMD apache2-foreground

