<?php
// Arquivo de configuração da conexão com o banco de dados

$host = getenv("DB_HOST");     // Host do banco, fornecido pelo Render
$usuario = getenv("DB_USER");  // Usuário do banco
$senha = getenv("DB_PASS");    // Senha do banco
$banco = getenv("DB_NAME");    // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
