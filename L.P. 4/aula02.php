<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula 2</title>
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

    //Variáveis

    $nome = "Eric"; #String
    $aula = 'PHP'; #String
    $idade = 19; #Int
    $peso = 63.5; #Float
    $altura = 1.69; #Float

    echo "<div><p class='display-6'>Utilizando as variáveis: </p>";
    echo "Meu nome: $nome";
    //Aspas Simples não reconhece variável
    //echo '<br>Minha idade $idade';
    //Concatenação de String com '.'
    echo '<br>Minha idade: '.$idade;
    //Ver 2 Utilizando as Variáveis
    echo "<p>Meu nome $nome Tenho $idade anos de idade.<br>";
    echo "Minha altura e peso são $altura e $peso respectivamente</div><hr>";

    //Informações sobre Variáveis
    echo '<p class="display-6">Informações sobre Variáveis: </p>';
    var_dump($nome);
    echo "<br>";
    var_dump($idade);
    echo "<br>";
    var_dump($peso);
    echo "<br><hr>";

    //Trabalhando com Variaveis de Variaveis
    echo "<p class='display-6'>Variaveis de Variaveis</p>";
    # Uma Variavel
    $x = "Oi";
    # Variavel da Variavel
    $$x = "Mundo";
    echo "$x <br>";
    echo "${$x} <br>";
    echo "Variavel $x e variavel variavel ${$x}<br><hr>";

    // Trabalhando com Constantes
    # São utilizadas com variáveis cujo conteúdo não devem mudar.
    # Como padrão são definidas com letras maiúsculas
    echo "<p class='display-6'>Trabalhando com Constantes</p>";
    define("TAXA", 0.5); # Define uma variável constante de nome TAXA com 50%
    define("JUROS", 0.01); # Define outra variável constante de nome de JUROS com 1%
    # Utilizar estas variaveis
    echo "Valor da taxa: ". TAXA . "% <br>";
    echo "Valor do juros igual a: ". JUROS . "% <br><hr>";
    
    // Formatação de Variáveis Numéricas
    # Utilizando numberformat()
    echo "<p class='display-6'>Formatação de Variáveis Numéricas</p>";
    $val = 75.5; #Float
    echo "Apresentando <strong>SEM</strong> formatação<br>";
    echo "Valor da Variavel: $val <br>";
    echo "Tipo de Variavel: ";
    var_dump($val);
    
    echo "<br><br>Apresentando <strong>COM</strong> formatação<br>";
    $valFormat = number_format($val, 2, ',' , '.');
    echo "Valor da Variavel: $valFormat<br>";
    echo "Tipo de Variavel: ";
    var_dump($valFormat);
    echo "<br><hr>";

    // Tipos de Dados/Variaveis
    # As  variaveis podem ser de diferentes tipos de dados
    # A mesma variável pode conter diferentes tipos de dados

    # Atribuições de tipos diferentes para a mesma variável
    $variavel = 100;
    $variavel = "cem";

    # Apesar das variáveis serem de tipo implícito
    # Alguns tipos de variáveis
    $inteiro = 777;                       // São valores sem casas decimais
    $float = 77.3;                        // São valores com casas decimais
    $bool = true; # false                 // Assume valores Falso/Verdadeiro
    $string = "AaÁá_1";                   // Cadeia de Caracteres
    $array = [1,2,3]; # $array = [a,b,c]; // Coleção de Valores
    $nulo = null;                         // Valor Nulo / Vazio
    # $pessoa = new Pessoa();             // Objeto com propriedades e métodos

    // Operadores - O que é / Operador de Atribuição
    # São símbolos que permitem executar operações matemáticas ou operações lógicas
    # Operador de atribuição utilizando o sianl de "="

    echo "<p class='display-6'>Operadores</p>";
    echo '$var <strong>=</strong> 100; - Operador de Atribuição "="<br>';
    $var = 100;
    echo $var;
    echo "<br><br>";
    // Alguns Operadores de Atribuição
    $a = 10;              # Define $a como 10
    $b = 20;              # Define $b como 20
    $x = $y = $z = 100;   # Define $x, $y e $z como 100

    // Operadores Matemáticos
    # + Adição
    $resultadoAdicao = $a + $b;
    echo "$a + $b = " . $resultadoAdicao . " - Soma<br>";

    # - Subtração
    $resultadoSubtracao = $a - $b;
    echo "$a - $b = " . $resultadoSubtracao . " - Subtração<br>";

    # * Multiplicacão
    $resultadoMultiplicacao = $a * $b;
    echo "$a * $b = " . $resultadoMultiplicacao . " - Multiplicacão<br>";

    # / Divisão
    $resultadoDivisao = $a / $b;
    echo "$a / $b = " . $resultadoDivisao . " - Divisão <br>";

    # R Módulo
    $resultadoModuloExato = $b % $a; 
    echo "$b % $a = " . $resultadoModuloExato . " - Módulo <br>";
    $resultadoModuloResto = 10 % 3;
    echo "10 % 3 = " . $resultadoModuloResto . " - Módulo c/ Resto<br>";

    # Potenciação
    $resultadoPotenciacao = $a ** 2;
    echo "$a ² = " . $resultadoPotenciacao . " - Potenciação <br>";

    ?>
    </div>
</body> 
</html>

