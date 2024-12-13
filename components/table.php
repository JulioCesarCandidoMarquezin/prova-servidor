<div class="table-responsive mt-4">
    <table class="table table-bordered table-hover table-striped">
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

<style>
    .table {
        border-radius: 0.5rem;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table th, .table td {
        vertical-align: middle;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1; 
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9; 
    }

    .table-bordered {
        border: 1px solid #dee2e6; 
    }

    .table-bordered th, .table-bordered td {
        border: 1px solid #dee2e6; 
    }
</style>