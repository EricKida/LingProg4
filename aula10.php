<?php
session_start();
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <title>Aula 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <?php include "navbar.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <div class="container-fluid col-sm-6">
        <p class='display-6'>Formas de chamar outras páginas</p>
        <li>Include e Require</li>
        <?php
        //    include "navbar.php"
        //    require "navbar.php"
        # Caso o programa no "include" não seja encontrado o PHP gera uma mensagem de aviso "Warning" e continua.
        # Porém, para as situações em que o programa é exigido, deve-se utilizar o "require". 
        # Neste caso, quando o programa requerido não for encontrado, o PHP gera um erro FATAL e para.
        ?>

        <li>Include_once e Require_once</li>
        <?php
        //    include_once "navbar.php"
        //    require_once "navbar.php"
        # Para situações em que o mesmo programa seja incluído, utilizando "include" ou "require", em pontos diferentes do programa, o PHP
        # gera um erro FATAL. Então, é melhor utilizar a extensão _once.
        ?>
    </div>
    <hr>
    <div class="container-fluid col-sm-6">
        <p class='display-6'>Sessões</p>
        <h5>Funções</h5>
        <li>session_start(); - inicia sessão</li>
        <li>$_SESSION['palavra1'] = "palavra2" - define que a variável "palavra1" dentro da sessão tem valor "palavra2"</li>
        <li>session_unset(); - desabilita/limpa as funções da sessão</li>
        <li>session_destroy(); - destroi a sessão</li><br>
        <?php
        // Para trabalhar com sessões no PHP nós utilizamos diversas funções.
        // session_start();

        $_SESSION['nome'] = "Maria";
        $_SESSION['idade'] = 23;
        # As sessões são úteis para compartilhar informações entre páginas diferentes.
        # Para podermos concatenar texto com conteúdo de arrays associativos ou conteúdos de superglobais precisamos utilizar as chaves {}.
        # Pois, são chamadas de string super complexas em PHP.

        echo '
            <div class="col">
                <div class="p-3 bg-light text-dark" style="border-radius: 20px">' . "
                    Nome: {$_SESSION['nome']}, <br>
                    Idade: {$_SESSION['idade']} anos <br>";
        echo "      ID: " . session_id();
        echo '      <br><br><a class="btn btn-dark" href="Aula10Sessao/sessao.php" target="_blank">Visualizar dados em outra página</a>';
        echo '  </div>
            </div>'

        # Para fazer o 'Logout' de sessão em PHP é preciso utilizar as funções de finalização
        // session_unset();
        // session_destroy();
        ?>

    </div>


</body>

</html>

<style>
    table,
    th,
    td {
        border: 1px solid white;
    }

    th,
    td {
        width: 200px;
    }

    table {
        transition: 0.2s ease;
        transform: scale(1, 1);
    }

    table:hover {
        transform: scale(1.05, 1.05);
    }
</style>