<?php
// Caminho da pasta onde estão os arquivos
$arquivo = __DIR__ . '/uploads/temp.txt'; // Altere o nome e caminho conforme necessário

if (file_exists($arquivo)) {
    unlink($arquivo);
    echo "✅ Arquivo deletado: temp.txt";
} else {
    echo "⚠️ Arquivo não encontrado.";
}
?>