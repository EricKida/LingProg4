<?php
// Inicia Sessão
session_start();
unset($_SESSION['op']);

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

if(isset($_POST['deleteHistoric'])){
    unset($_SESSION['contas']);
}
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

<body class="bg-secondary">
    <!-- IMPORTA A NAVBAR -->
    <?php require_once "inc/navbar.php" ?>

    <div class="col-sm-12 container-fluid mt-5 pt-4">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Histórico de Operações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $contagem = 0;
                for ($i = 1; $i <= 31; $i++) {
                    if (isset($_SESSION['contas'][$i])) {
                        echo "<tr><td class='text-center'>$i</td>";
                        echo "<td class='text-center'>" . $_SESSION['contas'][$i] . "</td><tr>";
                        $contagem++;
                    }
                }
                if($contagem != 0){

                }else{
                    echo "<tr><td class='text-center'>?</td><td class='text-center'>Histórico Vazio</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <form method="post" action="">
            <button class="btn btn-danger container-fluid mb-3" name="deleteHistoric" value='$x'>Limpar Histórico <i
                    class='bi bi-trash-fill'></i></button>
        </form>
    </div>
</body>

</html>

