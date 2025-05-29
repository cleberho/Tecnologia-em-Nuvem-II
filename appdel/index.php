<?php
// Caminho da pasta onde estão os arquivos
$arquivo = __DIR__ . '/uploads/appdel/formulario.php'; // Altere o nome e caminho conforme necessário

if (file_exists($arquivo)) {
    unlink($arquivo);
    echo "✅ Arquivo deletado: formulario.php";
} else {
    echo "⚠️ Arquivo não encontrado.";
}
?>
