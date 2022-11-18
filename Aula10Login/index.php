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
        echo 'Sucesso';
    } else {
        # Significa falha de Login
        echo 'Falha no Login';
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="bg-dark text-light">
    <div class="container-fluid col-sm-3 mt-5">
        <div class="row">
            <h2 class="text-center">Login</h2>
        </div>
        <form action="index.php" method="POST">
            <div class="form-floating mb-3 mt-3">
                <input type="email" class="form-control bg-dark text-light" placeholder="nome@exemplo.com" name="email">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control bg-dark text-light" placeholder="******" name="senha">
                <label for="floatingPassword">Senha</label>
            </div>
            <div class="form-floating">
                <div class="row">
                    <button type="submit" class="btn btn-outline-success mt-3" name="bt_logar">Logar-se</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>