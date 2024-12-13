<?php

function validate(string $nome, int $idade, float $salario, string $sexo, string $cidade) {
    if (!preg_match("/^[a-zA-Z\s]+$/", $nome)) {
        die("O nome deve conter apenas letras e espaços.");
    }
    if ($idade <= 0) {
        die("A idade deve ser um número positivo.");
    }
    if ($salario < 0) {
        die("O salário deve ser um número positivo.");
    }
    if (!in_array($sexo, ['M', 'F'])) {
        die("O sexo deve ser M ou F.");
    }
    if (!preg_match("/^[a-zA-Z\s]+$/", $cidade)) {
        die("A cidade deve conter apenas letras e espaços.");
    }
}