<div class="table-responsive mt-4">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Salário</th>
                <th>Sexo</th>
                <th>Cidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $atores = ler_todas();

                foreach ($atores as $ator) {
                    include (__DIR__ . '/row.php'); 
                }
            ?>
        </tbody>
    </table>
</div>