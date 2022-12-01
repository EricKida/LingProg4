<?php
session_start();
require_once 'config.php';

// Transforma todos os dados em variáveis locais
$c =  $_POST['cd_ssd'];
$n  = $_POST['nm_ssd'];
$nm = $_POST['nm_marca_ssd'];
$qt = $_POST['qt_armazenamento_ssd'];
$vl = $_POST['vl_preco_ssd'];
$_SESSION['c'] = $_POST['cd_ssd'];
 
// Update do Produto com baseado no que foi informado no $_POST
$sql = "UPDATE ssd 
        SET nm_ssd='$n', nm_marca_ssd='$nm', qt_armazenamento_ssd='$qt', vl_preco_ssd='$vl' 
        WHERE cd_ssd='$c'";
if (mysqli_query($conn, $sql)) {
  // Se ocorrer tudo dentro do previsto, o usuário é redirecionado para a página inicial (ele não percebe alterações)
  header("location: ../calc.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>