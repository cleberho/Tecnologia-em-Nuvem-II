FROM php:8.2-apache

ENV PORT=8080

# Ativa mod_rewrite
RUN a2enmod rewrite

# Atualiza as permissões dos arquivos que serão servidos
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Altera configuração de porta
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf && \
    sed -i "s/<VirtualHost \*:80>/<VirtualHost \*:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# Garante que o Apache permite acesso ao diretório
RUN echo '<Directory /var/www/html>' >> /etc/apache2/apache2.conf && \
    echo '    Options Indexes FollowSymLinks' >> /etc/apache2/apache2.conf && \
    echo '    AllowOverride All' >> /etc/apache2/apache2.conf && \
    echo '    Require all granted' >> /etc/apache2/apache2.conf && \
    echo '</Directory>' >> /etc/apache2/apache2.conf

EXPOSE ${PORT}
CMD ["apache2-foreground"]
