<?php
// Chamar o aqruivo de variáeis
require_once '../config.php';
$admin = new PDO(
    "mysql:host=" . MYSQL_HOST . ";" .
        "dbname=" . MYSQL_DATABASE . "; charset=utf8",
    MYSQL_USER,
    MYSQL_PASSWORD
);

$dados = $admin->query("SELECT * FROM fornecedor");
$fornecedor = $dados->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid col-sm-4 mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($fornecedor as $fornec) :
                ?>
                    <tr>
                        <td><?= $fornec["cd_funcionario"] ?></td>
                        <td><?= $fornec["nm_funcionario"] ?></td>
                        <td><?= $fornec["nm_email"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>Total Fornecedores: <strong><?= count($fornecedor) ?></strong></p>
    </div>
</body>

</html>