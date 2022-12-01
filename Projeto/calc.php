<?php
// Inicia Sessão
session_start();

// Chamar o arquivo que contém a configuração de conexão com o Banco de Dados
require_once 'inc/config.php';

// Select Para Exibir todos os elementos da tabela "ssd"

// Puxa o código do produto pelo name="cd" via POST
if (isset($_POST['cd'])) {
    $cd = $_POST['cd'];
}else if (isset($_SESSION['c'])) {
    $cd = $_SESSION['c'];
}
$dados = $admin->query("SELECT * FROM ssd WHERE cd_ssd = '$cd'");
$produto = $dados->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSD</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>

<body>
    <!-- IMPORTA A NAVBAR -->
    <?php require_once "inc/navbar.php" ?>

    <?php foreach ($produto as $prodt): ?>
    <div class="col-sm-12 container-fluid mt-5 pt-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Produto</h5>
                        <p class="card-text">
                            <?= $prodt["nm_ssd"] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Marca do Produto</h5>
                        <p class="card-text">
                            <?= $prodt["nm_marca_ssd"] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Armazenamento do Produto</h5>
                        <p class="card-text">
                            <?= $prodt["qt_armazenamento_ssd"] ?> GB
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Valor do Produto</h5>
                        <p class="card-text">R$ <?= $prodt["vl_preco_ssd"] ?>,00</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            <button class="btn btn-outline-danger float-end mx-1" data-bs-toggle="modal"
                                data-bs-target="#modalDelete_1"><i class="bi bi-trash-fill"></i></button>
                            <button class="btn btn-outline-warning float-end" data-bs-toggle="modal"
                                data-bs-target="#modalEdit_1"><i class="bi bi-pencil-fill"></i></button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</body>


</html>

<?php foreach ($produto as $prodt): ?>
<div class="modal fade" id="modalEdit_1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="inc/editprodt.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="nm_ssd" placeholder='<?= $prodt["nm_ssd"] ?>'
                                value='<?= $prodt["nm_ssd"] ?>' required>
                            <input type="text" class="form-control mt-3" name="nm_marca_ssd"
                                placeholder='<?= $prodt["nm_marca_ssd"]; ?>' value='<?= $prodt["nm_marca_ssd"]; ?>'
                                required>
                            <input type="number" class="form-control mt-3" name="qt_armazenamento_ssd"
                                placeholder='<?= $prodt["qt_armazenamento_ssd"]; ?> '
                                value='<?= $prodt["qt_armazenamento_ssd"]; ?>' required>
                            <input type="number" class="form-control mt-3" name="vl_preco_ssd"
                                placeholder='<?= $prodt["vl_preco_ssd"]; ?>' value='<?= $prodt["vl_preco_ssd"]; ?>'
                                required>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-warning" name="cd_ssd" value="<?= $prodt["cd_ssd"]; ?>">Atualizar
                    Produto</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>

<?php foreach ($produto as $prodt): ?>
<div class="modal fade" id="modalDelete_1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tem certeza que deseja excluir este Produto?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <ul>
                        <li><b>Código: </b> <?= $prodt["cd_ssd"]; ?></li>
                        <li><b>Nome: </b><?= $prodt["nm_ssd"]; ?></li>
                        <li><b>Marca: </b><?= $prodt["nm_marca_ssd"]; ?></li>
                        <li><b>Armazenamento: </b><?= $prodt["qt_armazenamento_ssd"]; ?> GB</li>
                        <li><b>Valor: </b>R$<?= $prodt["vl_preco_ssd"]; ?>,00</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <form action="inc/deleteprodt.php" method="POST">
                    <button type="submit" class="btn btn-danger" name="cd_ssd" value="<?= $prodt["cd_ssd"]; ?>">Excluir
                        Produto</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>