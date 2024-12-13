<?php

include_once(__DIR__ . '/conexao.php');

$arquivo_sql = "banco.sql";
$sql = file_get_contents($arquivo_sql);
$comandos = explode(";", $sql);

foreach ($comandos as $comando) {
    $comando = trim($comando);
    if ($comando) {  
        if ($conexao->query($comando) !== TRUE) {
            echo "Erro ao executar comando: " . $conexao->error . "\n";
        }
    }
}

header("Location: /index.php");