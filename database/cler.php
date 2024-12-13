<?php

include_once(__DIR__ . '/conexao.php');

$table = "Ator";

function criar(string $nome, int $idade, float $salario, string $sexo, string $cidade): bool
{
    global $conexao, $table;
    $stmt = $conexao->prepare("INSERT INTO $table (nome, idade, salario, sexo, cidade) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sisss", $nome, $idade, $salario, $sexo, $cidade);
    return $stmt->execute();
}

function ler(int $codigo): object
{
    global $conexao, $table;
    $stmt = $conexao->prepare("SELECT * FROM $table WHERE codigo = ?");
    $stmt->bind_param("i", $codigo);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_object();
}

function ler_todas(): array
{
    global $conexao, $table;
    $result = $conexao->query("SELECT * FROM $table");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function editar(int $codigo, string $nome, int $idade, float $salario, string $sexo, string $cidade): bool
{
    global $conexao, $table;
    $stmt = $conexao->prepare("UPDATE $table SET nome = ?, idade = ?, salario = ?, sexo = ?, cidade = ? WHERE codigo = ?");
    $stmt->bind_param("sisssi", $nome, $idade, $salario, $sexo, $cidade, $codigo);
    return $stmt->execute();
}

function remover(int $codigo): bool
{
    global $conexao, $table;
    $stmt = $conexao->prepare("DELETE FROM $table WHERE codigo = ?");
    $stmt->bind_param("i", $codigo);
    return $stmt->execute();
}

?>
