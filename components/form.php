<form action="/servidor.php" method="POST" onsubmit="return validar_formulario()" class="p-4 bg-light rounded shadow">
    <h2 class="mb-4">Adicionar/Editar Ator</h2>

    <input type="hidden" name="codigo" id="codigo" value="">
    <input type="hidden" name="acao" id="acao" value="criar">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" required>
    </div>
    <div class="mb-3">
        <label for="idade" class="form-label">Idade</label>
        <input type="number" class="form-control" name="idade" id="idade" required>
    </div>
    <div class="mb-3">
        <label for="salario" class="form-label">Salário</label>
        <input type="number" class="form-control" name="salario" id="salario" required>
    </div>
    <div class="mb-3">
        <label for="sexo" class="form-label">Sexo</label>
        <select class="form-select" name="sexo" id="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="button" class="btn btn-warning" onclick="limpar_campos()">Limpar tudo</button>
</form>