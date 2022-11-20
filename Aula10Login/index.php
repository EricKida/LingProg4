<?php
session_start(); // Inicia a sessão
// O processo de login vai exigir um BD com uma tabela para validação
# Fazer conexão e consulta com o BD.

// Porém, neste primeiro momento vamos utilizar um conjunto de variáveis
$email_bd = 'eric@fatec.sp.gov.br';     // Preenche variavel com email
$senha_bd = '123';                      // Preenche variavel com senha

# Verificar se a informação foi enviada do formulário de Login
if (isset($_POST['bt_logar'])) {          // Se existe informações enviadas pelo formulário para capturar estas informações
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == $email_bd && $senha == $senha_bd) {     // Verificar se os dados do formulário são iguais aos que estão cadastrados no BD
        # Processo de Login está validado, significa encaminhar o usuário para uma página restrita.
        //header('location: perfil.php');
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-square-fill"></i>
                <strong>Sucesso!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
    } else {
        # Significa falha de Login
        echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-square-fill"></i>
                <strong>Falha no Login</strong>, verifique as informações novamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="text-light" id="background_body">
    <div class="container-fluid col-sm-4 pt-3 pb-4 bg-dark rounded-4" style="margin-top: 5%">
        <div class="row">
            <h2 class="text-center">Login</h2>
        </div>
        <form action="index.php" method="POST">
            <div class="form-floating mb-3 mt-3">
                <input type="email" class="form-control bg-dark text-light" placeholder="nome@exemplo.com" name="email" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control bg-dark text-light" placeholder="******" name="senha" required>
                <label for="floatingPassword">Senha</label>
            </div>
            <div class="form-floating">
                    <button type="submit" class="btn btn-outline-success mt-3" name="bt_logar" style="width: 100%">Logar-se</button>
            </div>
            <div class="form-floating text-center mt-3">
                    <a id="help_a" data-bs-toggle="modal" data-bs-target="#modalId">Precisa de Ajuda?</a>
            </div>
        </form>
    </div>
</body>


</html>

<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css");
#help_a{
    text-decoration: none;
    border-bottom: 3px solid white;
    color: white;
    cursor: pointer;
    transition: 0.2s ease;
}
#help_a:hover{
    transition: 0.2s ease;
    border-bottom: 3px solid #198754;
}

body{
    background: url(https://images.wallpaperscraft.com/image/single/leaves_plant_bw_167185_1920x1080.jpg);
    opacity: 0.9;
}

</style>

<!-- Modal -->
<div class="modal fade text-dark" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Ajuda</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <strong>E-mail:</strong> eric@fatec.sp.gov.br<br>
                    <strong>Senha:</strong> 123
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var modalId = document.getElementById('modalId');

    modalId.addEventListener('show.bs.modal', function (event) {
          let button = event.relatedTarget;
          let recipient = button.getAttribute('data-bs-whatever');
    });
</script>

