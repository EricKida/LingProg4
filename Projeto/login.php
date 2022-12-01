<?php
// Inicia Sessão
session_start();
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

    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6" id="img_background"></div>

                <div class="col-sm-6 bg-dark" style="height: 100vh;">

                    <h3 class="text-center text-light mt-5 pt-5">LOGIN</h3>
                    <form method="post" action="index.php">
                        <center>
                            <div class="form-floating mt-3 text-light col-sm-6">
                                <input type="name" class="form-control bg-dark text-light" placeholder="a" name="user"
                                    required>
                                <label for="floatingInput">Insira seu nome</label>
                            </div>
                            <div class="form-floating col-sm-6">
                                <button type="submit" class="btn btn-outline-primary mt-3" style="width: 100%;">Logar-se</button>
                            </div>
                        </center>

                    </form>
                </div>

            </div>
        </div>
    </div>


</body>

</html>

<!-- Estilo Background -->
<style>
    #img_background {
        background: url(https://images2.alphacoders.com/698/698137.jpg);
        background-repeat: repeat-x;
        background-size: 160%;
        filter: brightness(10%);
        background-position: 0%;
        animation: moveBG 20s ease infinite;
    }

    @keyframes moveBG {
        0% {
            background-position: 10%;
        }

        50% {
            background-position: 40%;
        }

        100% {
            background-position: 10%;
        }
    }
</style>