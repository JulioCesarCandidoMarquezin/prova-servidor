<?php

$host = "mysql";
$banco = "filmes";
$porta = 3306;
$usuario = "root";
$senha = "root";

$conexao = new mysqli($host, $usuario, $senha, $banco, $porta);

if ($conexao->error) 
    die("Erro de conexão");

?>