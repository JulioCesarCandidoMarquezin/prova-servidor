<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Salário</th>
                <th>Sexo</th>
                <th>Cidade</th>
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