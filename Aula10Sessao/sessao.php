<?php 
# O objetivo do teste é o de verificar que o conteúdo criado na sessão (no programa Aula10.php) continua existindo e pode
//ser utilizado por outras páginas
session_start();
echo "<h2>Teste de Sessão</h2>";
echo "Nome: {$_SESSION['nome']}<br>
      Idade: {$_SESSION['idade']}<br>";
echo "ID: " . session_id();
//session_unset();  
//session_destroy();
?>
