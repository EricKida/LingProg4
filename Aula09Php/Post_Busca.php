<?php
if(isset($_POST['submit_post'])){
    $email_post = $_POST['email'];
    $senha_post = $_POST['senha'];

    echo "<br>";
    echo "Seu e-mail: $email_post<br>";
    echo "Sua senha: $senha_post<br>";

    var_dump($_POST);
}

if(isset($_POST['submit_sanitize'])){
    $nome_sanitize = $_POST['nome_sanitize'];
    $nome_sanitize = filter_input(INPUT_POST, 'nome_sanitize', FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Nome: $nome_sanitize<br>";

    $email_sanitize = $_POST['email_sanitize'];
    $email_sanitize = filter_input(INPUT_POST, 'email_sanitize', FILTER_SANITIZE_EMAIL);
    echo "E-mail: $email_sanitize<br>";

    $senha_sanitize = $_POST['senha_sanitize'];
    $senha_sanitize = filter_input(INPUT_POST, 'senha_sanitize', FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Senha: $senha_sanitize<br>";

    $idade_sanitize = $_POST['idade_sanitize'];
    $idade_sanitize = filter_input(INPUT_POST, 'idade_sanitize', FILTER_SANITIZE_NUMBER_INT);
    echo "Idade: $idade_sanitize<br>";

    $peso_sanitize = $_POST['peso_sanitize'];
    $peso_sanitize = filter_input(INPUT_POST, 'peso_sanitize', FILTER_SANITIZE_NUMBER_FLOAT);
    echo "Peso: $peso_sanitize<br>";


}

// O elemento FILTER valida as informações que foram passadas dos inputs para o POST/GET antes que elas sejam armazenadas em um banco de dados
// FILTER_SANITIZE_SPECIAL_CHARS - Caracteres
// FILTER_SANITIZE_NUMBER_INT - Números Inteiros
// FILTER_SANITIZE_EMAIL - Email
// FILTER_SANITIZE_NUMBER_FLOAT - Números Decimais
?>
<br><button onclick="goBack()">Voltar</button>
<script>
function goBack() {
    window.history.back()
}
</script>