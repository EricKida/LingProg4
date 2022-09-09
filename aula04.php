<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula 4</title>
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
      // Operadores de Maior e Menor
      # Exemplo
      echo "<p class='display-6'>Operadores de Maior e Menor</p>";

      $n1 = (2 > 3);       #False
      echo "2 > 3 = ";
      if($n1 == 0){
        echo "False<br>";
      }else{
        echo "True<br>";
      }

      $n1 = (2 < 3);       #True
      echo "2 < 3 = ";
      if($n1 == 0){
        echo "False<br>";
      }else{
        echo "True<br>";
      }

      $n1 = (2 >= 3);      #False
      echo "2 >= 3 = ";
      if($n1 == 0){
        echo "False<br>";
      }else{
        echo "True<br>";
      }

      $n1 = (2 <= 3);       #True
      echo "2 <= 3  = ";
      if($n1 == 0){
        echo "False<br>";
      }else{
        echo "True<br>";
      }

      $n1 = (2 < 2);       #False
      echo "2 < 2 = ";
      if($n1 == 0){
        echo "False<br>";
      }else{
        echo "True<br>";
      }
      echo "<hr>";

      // Declarações / Instruções Condicionais
      # São instruções de controle de fluxo do programa de acordo com uma condição lógica
      # Estas condições lógicas são construídas utilizando-se de "Operadores de Comparação" associados com "Operadores Lógicos"
      # O PHP possui várias estruturas condicionais para permitir este controle.
      echo "<p class='display-6'>Declarações / Instruções Condicionais </p>";

      // Declaração IF com "Operadores de Comparação"
      # Define um bloco de código que são executadas se a condição lógica testada for verdadeira;

      echo '<div class="row">'; 

      #Exemplo 1: Teste com variável STRING. Apenas SE (If)
      echo '<div class="card bg-secondary" style="width: 18rem; margin-left: 1%; margin-top: 1%;"><div class="card-body">';
      echo '<div class="card-title h5">Exemplo 1: Teste com variável "STRING"</div>';
      $nome = 'jogo';
      if($nome == 'jogo'){
        echo '<div class="card-text">Este teste será apresentado apenas se a condição lógica testada entre parentese for verdadeira. 
        Significa que este bloco de código entre chaves será executado</div>';
      }
      echo "</div></div>";

      #Exemplo 2: Teste com variável NUMÉRICA. Apenas SE...SE NÃO (IF...ELSE)
      # O teste pode ser realizado com outros tipos de variáveis e, também, possui um código de execução para o caso de teste lógico não verdadeiro
      echo '<div class="card bg-secondary" style="width: 18rem; margin-left: 1%; margin-top: 1%;"><div class="card-body">';
      echo '<div class="card-title h5">Exemplo 2: Teste com variável "NUMÉRICA" e bloco IF executado</div>';
      $idade = 19;
      if($idade <= 18){
        echo '<div class="card-text">Considerando que o valor da variável $idade e menor ou igual a 18, para que este texto seja apresentado</div>';
      }else{
        echo '<div class="card-text">Considerando que o valor da variável $idade e maior a 18, para que este texto seja apresentado</div>';
      }
      echo "</div></div>";
      
      #Exemplo 3: Teste com variável NUMÉRICA. SE...SENÃO...ENTÃO
      # O teste lógico pode fazer mais de uma verificação de VERDADEIRO
      echo '<div class="card bg-secondary" style="width: 18rem; margin-left: 1%; margin-top: 1%;"><div class="card-body">';
      echo '<div class="card-title h5">Exemplo 3: Teste com variável "NUMÉRICA" e bloco IF executado</div>';
      $media = 8;
      if($media <= 3){
        echo '<div class="card-text">REPROVADO<br>Nota menor ou igual a 3</div>';
      }else if($media <= 6){
        echo '<div class="card-text">EXAME<br>Nota menor ou igual a 6</div>';
      }else if($media <= 7){
        echo '<div class="card-text">RECUPERAÇÃO<br>Nota menor ou igual a 7</div>';
      }else{
        echo '<div class="card-text">APROVADO<br>Nota maior que 7</div>';
      }
      echo "</div></div>";

      #Exemplo 4: Podemos deixar de utilizar as chaves, apenas se existir uma única instrução no bloco código
      # O teste lógico pode fazer mais de uma verificação de VERDADEIRO
      echo '<div class="card bg-secondary" style="width: 18rem; margin-left: 1%; margin-top: 1%;"><div class="card-body">';
      echo '<div class="card-title h5">Exemplo 4: Teste com variável "NUMÉRICA" e bloco IF executado</div>';
      $nota = 8;
      if($nota <= 3){
        echo '<div class="card-text">Sem uso de "chaves" no bloco de construção de código IF</div>';
      }else if($nota <= 6){
        echo '<div class="card-text">Sem uso de "chaves" no bloco de construção de código ELSE IF</div>';
      }else if($nota <= 7){
        echo '<div class="card-text">Sem uso de "chaves" no bloco de construção de código ELSE IF</div>';
      }else{
        echo '<div class="card-text">Sem uso de "chaves" no bloco de construção de código ELSE</div>';
      }
      echo "</div></div>";

      echo "</div><hr>"; // Fechando ROW E COL-SM-6

      // Spaceship Operator
      # Um operador de comparação foi adicionado no PHP chamado de "spaceship operator". É O "Tie Fighter" do "Star Wars". <=>
      # Este operador retorna três valores possíveis: [0, 1, -1].
      echo "<p class='display-6'>Spaceship Operator</p>";
      $x = 1 <=> 1;   # Retorna 0   - Indica que os valores da esquerda e da direita são iguais (1 == 1)
      echo '$x = 1 <=> 1> ' . $x . '<br>';
      $x = 3 <=> 2;   # Retorna 1   - Indica que o valor da esquerda é maior que o da direita   (3 > 2)
      echo '$x = 3 <=> 2> ' . $x . '<br>';
      $x = 1 <=> 2;   # Retorna -1  - Indica que o valor da esquerda é menor que o da direita   (1 < 2)
      echo '$x = 1 <=> 2> ' . $x . '<br>';
      echo "<hr>";

      // Operadores Lógicos
      # Frequentemente são utilizados com os "Operadores de Comparação"
      # Permitem 'ligar" várias comparações, gerando uma proposição AND e OR (&& e || respectivamente)
      # Podemos escrever destas formas -> and e or
      echo "<p class='display-6'>Operadores Lógicos && e ||</p>";
      $a = 100;
      $b = 200;
      # Os valores de retorno em x são do tipo booleano (FALSE ou TRUE / 0 e 1).

      $x = ($a < $b) && ($a < 1000); # AND -> TRUE
      $x = (true && true);
      echo '$x' . " = ($a < $b) && ($a < 1000) = ";
      echo $x . " // True<br>";

      $x = ($a > $b) || ($a > 1000); # OR -> TRUE
      $x = (false || false);
      echo '$x' . " = ($a > $b) || ($a > 1000) = ";
      echo $x . " // False";

      $x = ($a < 150) && ($b > 300); # AND -> FALSE
      $x = (true && false);

      $x = ($a < 10) || ($b > 50); # OR -> TRUE
      $x = (true && false);

      $x = ($a == 100) && ($b > $a); # AND -> TRUE
      $x = (true && true);

      # de Inversão de valor lógico = NOT
      $a = false;
      // Inverte o valor booleano com NOT
      $a = !$a; // True
      echo "<br><hr>";

      // Strings
      # Uma "String" é um conunto concatenado de caractéres armazenados em uma variável
      # Podemos definir uma "string" como sendo um conuunto de letras, espaços, símbolos designados como texto.
      # Podem ser delimitadas por:
      # aspas simples ' (single quote);
      # aspas duplas  " (doble quote)
      # Podemos usar uma ou outra, basta manter um padrão no código.
      echo "<p class='display-6'>Strings</p>";
      # Exemplo 1
      $a = 'Esta é uma "string"';
      $b = "Esta é uma outra 'string'";

      echo $a . "<br>";
      echo $b . "<br>";
      echo "<hr>";

      // Concatenação de Strings
      # É um processo de junção de "Strings" por meio de código em tempo de execução.
      echo "<p class='display-6'>Concatenação de Strings</p>";
      # Temos dois operadores de concatenação:
      # .  Concatena "Strings" na variável.
      # .= Concatena com o valor já existente na variável.

      # Exemplo com "."
      $a = 'Patricia' . ' ' . 'Ribeiro' . ' de ' . 'Alencar';
      echo '$a' . " = 'Patricia' . ' ' . 'Ribeiro' . ' de ' . 'Alencar' = ";
      echo $a . "<br><br>";

      $x = 'Jonatas ';
      $y = 'Dias';
      echo '$x' . " = 'Jonatas ' // " . '$y ' . " = Dias //" . ' echo $x . $y = ';
      echo $x . $y . "<br>";

      $x .= "C. ";
      echo '$x .= "C. " // echo $x . $y = ';
      echo $x . $y;
      echo "<hr>";

      // Manipulação de "Strings"
      echo "<p class='display-6'>Manipulação de Strings</p>";

      # Exemplo 1
      $texto = "Frase com x caracteres = 26";
      # Apresentar um caractere da Frase de $texto;
      //echo $texto . "<br>";
      //echo $texto[0] . "<br>";
      //echo $texto[6];

      # Exemplo 2 - Comparação de String
      $a = 'Eric';
      $b = 'Kida';

      $c = ($a == $b); # False
      $d = ($a != $b); # True

      # Exemplo 3 - Funções Nativas
      $texto = 'Frase com x caracteres';
      # Retorna o número de caracteres;
      $num_caractere = strlen($texto);
      echo '$texto = ' . $texto . "<br>";
      echo '$num_caractere = strlen($texto) = ';
      echo $num_caractere . " (Conta os Caracteres de" . ' $texto' . ") <br>";

      # Retorna uma parte do texto a partir de uma determinada posição 
      $parte_texto = substr($texto, 0, 5);
      echo '$parte_texto = substr($texto, 0, 5) = ';
      echo $parte_texto . " (Delimita os caracteres exibidos) <br>";

      # Converte para Letras Maiúsculas
      $texto_maiscula = strtoupper($texto);
      echo '$texto_maiscula = strtoupper($texto) = ';
      echo $texto_maiscula . " (Apresenta o texto inteiro em maiusculo) <br>";

      # Converte para Letras Minúscula
      $texto_minuscula = strtolower($texto);
      echo '$texto_minuscula = strtolower($texto) = ';
      echo $texto_minuscula . " (Apresenta o texto inteiro em minúsculo) <br>";

      # Substituir uma letra por outra
      $texto = 'Frase com x caracteres';
      $subst_letra = str_replace('a', 'x', $texto);
      echo $subst_letra . "<br>";

      # Verifica qual a posição de um caractere
      $texto = 'Frase com x caracteres';
      $posicao = strpos($texto, 'a');
      echo $posicao;


    ?>
    </div>
    
</body> 
</html>


<style>

.card{
  transform: scale(1,1);
  transition: 0.1s ease;
  cursor: pointer;
}
.card:hover{
  transform: scale(1.1,1.1);
  transition: 0.1s ease;
}

</style>