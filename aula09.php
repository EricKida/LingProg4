<!doctype html>
<html lang="pt-BR">

<head>
    <title>Aula 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">
    <?php require_once "navbar.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <div class="container-fluid col-sm-6">
        <p class='display-6'>Get</p>
        <form action="Aula09Php/Get_Busca.php" method="GET">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Texto</label>
                    <input type="text" class="form-control bg-dark text-light" placeholder="Insira o texto" name="palavra_1" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Outro texto</label>
                    <input type="text" class="form-control bg-dark text-light" placeholder="Insira outro texto" name="palavra_2" required>
                </div>
                <button type="submit" class="btn btn-success mb-1">Pesquisar</button>
            </div>
        </form>
    </div>

    </div>
    <hr>
    <div class="container-fluid col-sm-6">
        <p class='display-6'>Post</p>
        <form action="Aula09Php/Post_Busca.php" method="POST">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control bg-dark text-light" placeholder="Insira o seu email" name="email" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control bg-dark text-light" placeholder="Insira sua senha" name="senha" required>
                </div>
                <button type="submit" class="btn btn-success mb-1" name="submit_post">Pesquisar</button>
            </div>
        </form>
    </div>
    <hr>
    <div class="container-fluid col-sm-6">
        <p class='display-6'>Css</p>
        <button class="button-css">RGB</button>
    </div>
    <hr>
    <div class="container-fluid col-sm-6">
        <p class='display-6'>Bootstrap</p>
        <?php
        // Bootstrap - Apenas com CSS
        # É um Framework - Um pacote de recursos para o desenvolvimento de sites responsivos "front-end" de código aberto.
        # Contém modelos baseados em HTML, CSS e Javascript para vários componentes
        ?>
    </div>
    <hr>
    <div class="container-fluid col-sm-6">
        <p class='display-6'>Sanitize</p>
        <form action="Aula09Php/Post_Busca.php" method="POST">
            <div class="row g-3 mb-2">
                <div class="col-md-12">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control bg-dark text-light" placeholder="Insira seu nome" name="nome_sanitize" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control bg-dark text-light" placeholder="Insira seu email" name="email_sanitize" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Senha</label>
                    <input type="password" class="form-control bg-dark text-light" placeholder="Insira sua senha" name="senha_sanitize" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Idade</label>
                    <input type="number" min="15"  step="1" class="form-control bg-dark text-light" placeholder="Insira sua idade" name="idade_sanitize" required>
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Peso</label>
                    <input type="number" min="2.4" step="0.1" class="form-control bg-dark text-light" placeholder="Insira seu peso" name="peso_sanitize" required>
                </div>
                <button type="submit" class="btn btn-success mb-1" name="submit_sanitize">Pesquisar</button>
            </div>
    </div>
    </form>
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

    .button-css {
        background-color: red;
        border-radius: 10px;
        animation: btn-css 0.5s ease infinite;
        width: 100%;
    }

    @keyframes btn-css {
        0% {
            background-color: red
        }

        15% {
            background-color: orange
        }

        30% {
            background-color: yellow
        }

        45% {
            background-color: green
        }

        60% {
            background-color: blue
        }

        85% {
            background-color: purple
        }

        100% {
            background-color: red
        }
    }
</style>