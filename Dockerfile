# Usa a imagem oficial do PHP com servidor embutido
FROM php:8.2-cli

# Define o diretório de trabalho dentro do container
WORKDIR /var/www/html

# Copia os arquivos da aplicação para dentro do container
COPY . .

# Expõe a porta 8000 (ou a que você preferir)
EXPOSE 8000

# Comando para iniciar o servidor PHP embutido
CMD ["php", "-S", "0.0.0.0:8000"]
