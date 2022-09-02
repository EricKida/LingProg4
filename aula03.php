<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body class="bg-dark text-light">
    <?php require_once "navbar.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <div class="container-fluid">
    <?php 
      // Operadores de Atribuição Combinados
      # Permite alterar o valor original de uma variável
      echo "<p class='display-6'>Operadores de Atribuição Combinados</p>";
      $n1 = 10;
      $n1 = $n1 + 10;
      $n1 = $n1 - 7;
      $n1 = $n1 * 2;
      $n1 = $n1 / 2;
      echo "Tradicional<br>";
      echo "<h6>Valor de n1: " . $n1 . "</h6>";

      # Formato Simplificado
      $n1 = 10;
      $n1 += 10;
      $n1 -= 7;
      $n1 *= 2;
      $n1 /= 2;
      echo "Formato Simplificado<br>";
      echo "<h6>Valor de n1: " . $n1 . "</h6><hr>";

      // Operadores de Incremento e Decremento
      # Permitem adicionar ou subtrair uma unidade à variável
      echo "<p class='display-6'>Operadores de Incremento e Decremento</p>";
      $n2 = 1 + 1;
      echo "Tradicional - Incremento<br>";
      echo "<h6>Valor de n2: " . $n2 . "</h6>";

      echo "Pós-Incremento<br>";
      $n2++; // ++$n2 PRÉ
      echo "<h6>Valor de n2: " . $n2 . "</h6>";

      $n2 = 1 - 1;
      echo "Tradicional - Decremento<br>";
      echo "<h6>Valor de n2: " . $n2 . "</h6>";

      echo "Pós-Decremento<br>";
      $n2--; // --$n2; PRÉ
      echo "<h6>Valor de n2: " . $n2 . "</h6><hr>";

      // Operadores de Comparação
      # Permitem a comparação entre valores
      # Verificam igualdade, diferença, maior, menor ou de mesmo tipo
      # Resultado da comparação será sempre um boolean (F/T) ou (0/1)
      echo "<p class='display-6'>Operadores de Comparação</p>";
      // Operador de Igualdade
      $n3 = (2 == 3); #False
      $n3 = (100 == 100); #True
      $n3 = (50 == '50'); #True - Neste caso ocorre uma verificação de igualdade sem a verificação de tipo de variável, somente a comparação de conteúdo (Int para String)
      $n3 = (50 === '50'); #False - Neste caso ocorre a verificação de igualdade e também do tipo de variável;
      # Não conseguimos visualizar o resultado (True ou False), apenas a existência dele.
      echo "Operador de Igualdade: 2 == 3<br>";
      $n3 = (2 == 3);

      if($n3){
        echo "<strong>True</strong><br><br>";
      }else{
        echo "<strong>False</strong><br><br>";
      }

      echo "Operador de Igualdade: 2 == 2<br>";
      $n4 = (2 == 2);

      if($n4){
        echo "<strong>True</strong><br><br>";
      }else{
        echo "<strong>False</strong><br><br>";
      }

      echo "Operador de Igualdade: 2 === '2'<br>";
      $n4 = (2 === '2');

      if($n4){
        echo "<strong>True</strong><br><br>";
      }else{
        echo "<strong>False</strong><br><br>";
      }

      echo "Operador de Diferença: 2 != 3<br>";
      $n5 = (2 != 3);

      if($n5){
        echo "<strong>True</strong><br><br>";
      }else{
        echo "<strong>False</strong><br><br>";
      }

      echo "Operador de Diferença: 2 != 2<br>";
      $n6 = (2 != 2);

      if($n6){
        echo "<strong>True</strong><br><br>";
      }else{
        echo "<strong>False</strong><br><br>";
      }

      echo "Forma Alternativa da Anterior: 10 <> 10<br>";
      $n7= (10 <> 10);

      if($n7){
        echo "<strong>True</strong><br><br>";
      }else{
        echo "<strong>False</strong><br><br>";
      }

      echo "Operador de Diferença: 2 != '2'<br>"; 
      $n8 = (2 != '2'); // Só é verificado o valor, não o tipo de variável

      if($n8){
        echo "<strong>True</strong><br><br>";
      }else{
        echo "<strong>False</strong><br><br>";
      }

      echo "Operador de Diferença: 2 !== '2'<br>";
      $n9 = (2 !== '2'); // É verificado o tipo de dado e seu tipo de variável

      if($n9){
        echo "<strong>True</strong><br><br>";
      }else{
        echo "<strong>False</strong><br><br>";
      }








    ?>
    </div>
</body> 
</html>


