<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula 6</title>
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
        // Controle de Fluxo (Loops) - While
        echo "<p class='display-6'>While</p>";
        # São utilizadas para controlar um código ou bloco de código repetidas vezes.
        # Para este controle de fluxo(while) o código interno pode nunca ser executado, pois o teste pode inibir a exibição do código
        
        # Exemplo 1
        $x = 1;
        echo "<div class='col-sm-12'><table class='text-center'><tr><th>Ciclo While</th></tr>";
        while($x < 10){
            echo "<tr><th>" . $x++ . "</th></tr>";
        }
        echo "</table></div>";
        echo "<br><hr>";

        // Controle de Fluxo (Loops) - DoWhile
        echo "<p class='display-6'>DoWhile</p>";
        # Diferentemente do controle de fluxo WHILE, o DOWHILE executa o bloco de código pe realiza o teste lógico depois

        # Exemplo 1
        $x = 1;
        echo "<div class='col-sm-12'><table class='text-center'><tr><th>Ciclo DoWhile</th></tr>";
        do{
            echo "<tr><th>" . $x++ . "</th></tr>";

        }while($x < 10);
        echo "</table></div>";
        echo "<br><hr>";

        // Controle de Fluxo (Loops) - For
        echo "<p class='display-6'>For</p>";
        # Permite executar um bloco de código em um determinado número de vezes
        # Este "laço" constitui de 3 parâmetros
            # 1 - Valor inicial numérico: utilizado para controlar o número de "loops"
            # 2 - Condição: Avalia o contador para o encerramento do "loop"
            # 3 - Incremento ou Decremento: Altera o valor do contador
        # A variável é criada e inicializada dentro do laço

        # Exemplo 1
        echo "<div class='row'><div class='col-sm-1'><table class='text-center'><tr><th>Ciclo For</th></tr>";
        for($x = 1; $x < 10; $x++){
            echo "<tr><th>" . $x . "</th></tr>";

        }
        echo "</table></div>";

        # Exemplo 2
        $x = 1;
        echo "<div class='col-sm-1'><table class='text-center'><tr><th>Ciclo For</th></tr>";
        for(; $x < 10; $x++){
            echo "<tr><th>" . $x . "</th></tr>";

        }

        echo "</table></div>";
        
        # Exemplo 3 - Array
        echo "<div class='col-sm-2'><table class='text-center'><tr><th>Array</th><th>Ciclo For</th></tr>";
        $nomes = ['Paulo', 'Maria', 'Ana'];
        for($i = 0; $i < sizeof($nomes); $i++){
            echo "<tr><td>Nome</td><td>" . $nomes[$i] . "</td></tr>";

        }

        echo "</table></div>";

        # Exemplo 4
        echo "<div class='col-sm-1'><table class='text-center'><tr><th>Controle</th><th>z</th></tr>";
        for($controle = 1, $z=10; $controle < 10; $controle++, $z--){
            echo "<tr><th>" . $controle . "</th>";
            echo "<th>" . $z . "</th></tr>";

        }

        echo "</table></div></div>";
        echo "<br><hr>";

        // Controle de Fluxo (Loops) - ForEach
        echo "<p class='display-6'>ForEach</p>";
        # Permite executar um bloco de código a partir de valores de um "Array"
        # Notar que não há necessidade de se inciar uma variável, nem realizar o incremento/decremento desta variável
        # O ciclo passa automaticamente de forma sequencial em cada elemento do "array"
        # Note também que cada elemento do "array" é carregado na variável logo após a declaração de "AS"
        
        # Exemplo 1
        $nomes = ["Mari" , "Ada", "Lena"];
        echo "<div class='col-sm-12'><table class='text-center'><tr><th>Ciclo foreach</th></tr>";
        foreach($nomes as $nome){
            echo "<tr><td>" . $nome . "</td></tr>";
        }
        echo "</table></div>";
        echo "<br><hr>";

    ?>
    </div>
    
</body> 
</html>


<style>
    table, th, td {
        border:1px solid white;
    }
    th, td{
        width: 200px;
    }
    table{
        transition: 0.2s ease;
        transform: scale(1,1);
    }
    table:hover{
        transform: scale(1.05, 1.05);
    }
</style>