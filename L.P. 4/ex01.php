<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Ex01</title>
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
      // Ex01 - Escrever um programa documentado que faça:
      # Apresentar operadores de:
      # a) Atribuição;
      # b) Aritmético;
      # c) Módulo;
      # d) Divisão; Produto; Potência
      # e) Combinados
      # f) Pós e Pré Incremento e Decremento;
      // ----------------------------------------------------------------------------------------------------------------------------------------------------------//

      // a) Atribuição;
      echo "<p class='display-6'>A) Atribuição</p>";
      echo '$var <strong>=</strong> 100; - Operador de Atribuição "="<br>';
      $var = 100;
      echo $var;
      echo "<hr>";

      // b) Aritmético;
      echo "<p class='display-6'>B) Aritmético</p>";
      $var2 = 8;
      $var3 = 9;
      $varSoma = $var2 + $var3;
      $varSubtracao = $var2 - $var3;
      $varMultiplicacao = $var2 * $var3;
      $varDivisao = $var2 / $var3;
      echo "$var2 + $var3 = $varSoma<br>";
      echo "$var2 - $var3 = $varSubtracao<br>";
      echo "$var2 * $var3 = $varMultiplicacao<br>";
      echo "$var2 / $var3 = $varDivisao<br><hr>";

      // c) Módulo;
      echo "<p class='display-6'>C) Módulo</p>";
      $var5 = 10;
      $var6 = 2;
      $resultadoModuloExato = $var5 % $var6; 
      echo "$var5 % $var6 = " . $resultadoModuloExato . " - Módulo <br>";
      $resultadoModuloResto = 10 % 3;
      echo "10 % 3 = " . $resultadoModuloResto . " - Módulo c/ Resto<br><hr>";

      // d) Divisão; Produto; Potência;
      echo "<p class='display-6'>D) Divisão; Produto; Potência</p>";
      $var7 = 8;
      $var8 = 2;
      $var9 = 10;
      $resultadoDivisao = $var7 / $var8;
      $resultadoProduto = $var7 * $var8 * $var9;
      $resultadoPotencia = $var7 ** $var8;
      echo "Divisao: $var7 / $var8 = " . $resultadoDivisao . " <br>";
      echo "Produto: $var7 * $var8 * $var9 = " . $resultadoProduto . "<br>";
      echo "Potenciação: $var7 ** $var8 = " . $resultadoPotencia . "<br><hr>";

      // e) Combinados;
      echo "<p class='display-6'>E) Combinados</p>";
      $var10 = 10;
      $var10 = $var10 + 10;
      $var10 = $var10 - 7;
      $var10 = $var10 * 2;
      $var10 = $var10 / 2;
      echo "Tradicional<br>";
      echo '<h6>Valor de $var10: ' . $var10 . "</h6>";

      # Formato Simplificado
      $var11 = 10;
      $var11 += 10;
      $var11 -= 7;
      $var11 *= 2;
      $var11 /= 2;
      echo "Formato Simplificado<br>";
      echo '<h6>Valor de $var11: ' . $var11 . "</h6><hr>";

     // f) Pós e Pré Incremento e Decremento
      echo "<p class='display-6'>F) Pós e Pré Incremento e Decremento</p>";
      $var12 = $var13 = 0;

      $var12++;
      echo 'Pós-Incremento: $var12++ = ' . $var12 . "<br>"; 

      ++$var12;
      echo 'Pré-Incremento: ++$var12 = ' . $var12 . "<br><br>";

      $var13--;
      echo 'Pós-Decremento: $var13-- = ' . $var13 . "<br>"; 

      --$var13;
      echo 'Pré-Decremento: --$var13 = ' . $var13 . "<br>";
    ?>
    </div>
</body> 
</html>


