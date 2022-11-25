<?php
session_start();
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <title>Aula 11</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <?php include "navbar.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <div class="container-fluid col-sm-6">
        <p class='display-6'>Conexão com Banco de Dados</p>
        <h6>Exibição 1</h6>
        <?php
        # Fazer rapidamente uma conexão e leitura de dados da BD
        $admin = new PDO("mysql:host=localhost;dbname=bancoteste;charset=utf8", "root", "");

        // $dsn = Data Source Name (Sevidor MySQL)
        // mysql:host   = localhost;
        // dbname       = Banco de Dados;
        // charset      = Opções não obrigatórias
        // Utilizador = "root"
        // $password = null,
        // $options = null,

        // Para conter os dados da tabela (Em um determinado formato)
        $dados = $admin->query("SELECT * FROM fornecedor");

        // Um método FETCH do PDO de busca todos os dados armazenados
        // ASSOC é um formato de Array associativo

        $fornecedor = $dados->fetchALL(PDO::FETCH_ASSOC);

        echo '<pre>';
        print_r($fornecedor);
        ?>
        <hr>
        <h6>Exibição 2</h6>
        <?php
        $admin = new PDO("mysql:host=localhost;dbname=bancoteste;charset=utf8", "root", "");
        $dados = $admin->query("SELECT * FROM fornecedor");
        $fornecedor = $dados->fetchALL(PDO::FETCH_ASSOC);
        ?>
        <table class="table text-light">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>        
                <?php
                    foreach($fornecedor as $fornec):
                ?>
                <tr>
                    <td><?= $fornec["cd_funcionario"]?></td>
                    <td><?= $fornec["nm_funcionario"]?></td>
                    <td><?= $fornec["nm_email"]?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>Total Fornecedores: <strong><?= count($fornecedor) ?></strong></p>
    </div>


</body>

</html>