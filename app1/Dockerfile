# Usa a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Copia os arquivos da sua aplicação para o diretório padrão do Apache
COPY . /var/www/html/

# Habilita módulos adicionais do Apache (opcional)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Define a variável de ambiente PORT (Render já define, mas é bom ter default)
ENV PORT=8080

# Substitui o listen do Apache para escutar na porta da variável $PORT
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf && \
    sed -i "s/:80/:${PORT}/" /etc/apache2/sites-available/000-default.conf

# Expõe a porta (mesma da ENV)
EXPOSE ${PORT}
