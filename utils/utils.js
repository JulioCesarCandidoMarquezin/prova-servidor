function limpar_campos() {
    document.getElementById('codigo').value = '';
    document.getElementById('nome').value = '';
    document.getElementById('idade').value = '';
    document.getElementById('salario').value = '';
    document.getElementById('sexo').value = 'M';
    document.getElementById('cidade').value = '';
    document.getElementById('acao').value = 'criar';
}

function editar_ator(codigo, nome, idade, salario, sexo, cidade) {
    document.getElementById('codigo').value = codigo;
    document.getElementById('nome').value = nome;
    document.getElementById('idade').value = idade;
    document.getElementById('salario').value = salario;
    document.getElementById('sexo').value = sexo;
    document.getElementById('cidade').value = cidade;
    document.getElementById('acao').value = 'editar';

}

function validar_formulario() {
    const nome = document.getElementById('nome').value;
    const idade = document.getElementById('idade').value;
    const salario = document.getElementById('salario').value;
    const cidade = document.getElementById('cidade').value;

    if (!/^[a-zA-Z\s]+$/.test(nome)) {
        alert("O nome deve conter apenas letras e espaços.");
        return false;
    }

    if (idade <= 0) {
        alert("A idade deve ser um número positivo.");
        return false;
    }

    if (salario < 0) {
        alert("O salário deve ser um número positivo.");
        return false;
    }

    if (!/^[a-zA-Z\s]+$/.test(cidade)) {
        alert("A cidade deve conter apenas letras e espaços.");
        return false;
    }

    return true;
}
