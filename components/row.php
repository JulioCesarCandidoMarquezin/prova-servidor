<?php 
echo "
    <tr>
        <td>{$ator['codigo']}</td>
        <td>{$ator['nome']}</td>
        <td>{$ator['idade']}</td>
        <td>{$ator['salario']}</td>
        <td>{$ator['sexo']}</td>
        <td>{$ator['cidade']}</td>
        <td>
            <button class='btn btn-warning btn-sm' onclick='editar_ator({$ator['codigo']}, \"{$ator['nome']}\", {$ator['idade']}, {$ator['salario']}, \"{$ator['sexo']}\", \"{$ator['cidade']}\")'>
                Editar
            </button>
            <form action='/servidor.php' method='POST' style='display:inline;'>
                <input type='hidden' name='codigo' value='{$ator['codigo']}'>
                <input type='hidden' name='acao' value='remover'>
                <button type='submit' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza que deseja remover este ator?\")'>Remover</button>
            </form>
        </td>            
    </tr>
";
?>