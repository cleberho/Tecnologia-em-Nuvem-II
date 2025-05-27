# Usa uma imagem oficial do Node
FROM node:18

# Define o diretório de trabalho
WORKDIR /app

# Copia os arquivos
COPY package*.json ./
RUN npm install

# Copia o restante do código
COPY . .

# Expõe a porta que o Render usa por padrão
EXPOSE 10000

# Usa a variável de ambiente PORT fornecida pelo Render
// ENV PORT=10000
rm formulario.php
rm formulario_2.php

# Inicia a aplicação
CMD ["npm", "start"]

