FROM php:8.2-apache

# Copia seu código-fonte para o Apache
COPY public/ /var/www/html/

# Substitui a porta padrão (80) pela porta fornecida pela Render ($PORT)
# Isso garante que o Apache escute na porta correta
RUN apt-get update && apt-get install -y vim && \
    echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    sed -i 's/Listen 80/Listen ${PORT}/' /etc/apache2/ports.conf && \
    sed -i 's/<VirtualHost \*:80>/<VirtualHost \*:${PORT}>/' /etc/apache2/sites-available/000-default.conf

# Render define PORT automaticamente, mas adicionamos um fallback
ENV PORT=8080

# Expõe a porta corretamente
EXPOSE ${PORT}

# Entrypoint personalizado que substitui a variável ${PORT} no momento da execução
CMD ["/bin/bash", "-c", "apache2-foreground"]

