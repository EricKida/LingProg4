<?php
session_start();
require_once 'config.php';

// Transforma todos os dados em variáveis locais
$n  = $_POST['nm_ssd'];
$nm = $_POST['nm_marca_ssd'];
$qt = $_POST['qt_armazenamento_ssd'];
$vl = $_POST['vl_preco_ssd'];
 
// Insert no Banco de Dados utilizando MySQLI
$sql = "INSERT INTO ssd (cd_ssd, nm_ssd, nm_marca_ssd, qt_armazenamento_ssd, vl_preco_ssd) VALUES (NULL, '$n', '$nm', '$qt', '$vl')";
if (mysqli_query($conn, $sql)) {
  // Se ocorrer tudo dentro do previsto, o usuário é redirecionado para a página inicial (ele não percebe alterações)
  header("location: ../index.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>