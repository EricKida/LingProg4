<?php
// Inicia Sessão
session_start();

// Verifica se usuário está logado, se não redireciona para a página de login
if (isset($_POST["user"]) || isset($_SESSION['user'])) {
    if (isset($_POST["user"])) {
        $_SESSION['user'] = $_POST["user"];
    }
} else {
    header("location: login.php");
}

// Chamar o arquivo que contém a configuração de conexão com o Banco de Dados
require_once 'inc/config.php';

// Select Para Exibir todos os elementos da tabela "ssd"
$dados = $admin->query("SELECT * FROM ssd");
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

    <div class="col-sm-12 container-fluid mt-5 pt-4">
        <div class="row">
            <div class="row">
                <!-- Início do Foreach para exibir todos os produtos listados no banco de dados -->
                <?php foreach ($produto as $prodt): ?>
                <div class="col-6 mt-3">
                    <div class="card" id="<?= $prodt["cd_ssd"] ?>">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $prodt["nm_ssd"] ?>
                            </h5>
                            <li><b>Marca: </b>
                                <?= $prodt["nm_marca_ssd"] ?>
                            </li>
                            <li><b>Espaço: </b>
                                <?= $prodt["qt_armazenamento_ssd"] ?> GB
                            </li>
                            <li><b>Preço: </b>R$ <?= $prodt["vl_preco_ssd"] ?>,00</li>
                            <form action="calc.php" method="POST">
                                <!-- Esse botão envia para o método POST o número de qual elemento pertence para depois ser recuperado na próxima página -->
                                <button value="<?= $prodt["cd_ssd"] ?>" name="cd" type="submit"
                                    class="btn btn-primary mt-4" style="width:100%"></i>Ver Item</a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Fim do Foreach para exibir todos os produtos listados no banco de dados -->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>


</html> 
