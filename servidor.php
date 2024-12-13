<?php

include_once(__DIR__ . '/database/cler.php');
include_once(__DIR__ . '/utils/utils.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'] ?? '';

    switch ($acao) {
        case 'criar':
            $nome = $_POST['nome'];
            $idade = (int)$_POST['idade'];
            $salario = (float)$_POST['salario'];
            $sexo = $_POST['sexo'];
            $cidade = $_POST['cidade'];

            validate($nome, $idade, $salario, $sexo, $cidade);
            criar($nome, $idade, $salario, $sexo, $cidade);
            break;

        case 'editar':
            $id = (int)$_POST['codigo'];
            $nome = $_POST['nome'];
            $idade = (int)$_POST['idade'];
            $salario = (float)$_POST['salario'];
            $sexo = $_POST['sexo'];
            $cidade = $_POST['cidade'];

            validate($nome, $idade, $salario, $sexo, $cidade);
            editar($id, $nome, $idade, $salario, $sexo, $cidade);
            break;

        case 'remover':
            $id = (int)$_POST['codigo'];
            remover($id);
            break;

        default:
            die("Ação inválida.");
    }

    header("Location: /index.php");
}