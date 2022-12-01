<?php
session_start();
require_once 'config.php';

// Transforma todos os dados em variáveis locais
$c =  $_POST['cd_ssd'];

// Delete no Produto baseado no que foi informado no $_POST
$sql = "DELETE FROM ssd 
        WHERE cd_ssd='$c'";
if (mysqli_query($conn, $sql)) {
  // Se ocorrer tudo dentro do previsto, o usuário é redirecionado para a página inicial (ele não percebe alterações)
  header("location: ../index.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>