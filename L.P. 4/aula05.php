<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula 5</title>
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
        // Declarações & Instruções Condicionais
        echo "<p class='display-6'>Declarações & Instruções Condicionais</p>";
        # Operadores Lógicos
        # Exemplo 1
        $valor = 20;
        if($valor > 10 && $valor !=30){
            // Executa um código
        }else{
            // Executa outro código
        };

        # Exemplo 2
        # Condição dentro de outra condição
        $valor1= 10;
        if($valor1 >= 0){
            if($valor >= 100){
            echo "O número é maior ou igual a zero";
            }else{
                echo "o numero e positivo, mas menor que 100";
            }
        }else{
            echo "o Numero é negativo";
        }
      
        echo "<br><hr>";

        // Array (Vetor) - O que é
        echo "<p class='display-6'>Array</p>";

        # É uma matriz (unidimensional) que correspone a uma coleção de valores
        # Funciona como uma variável que contém muitos valores.
        # A localização de um desses valores é designada por um índice "array"
        # Exemplo 1
        $valores1 = array(1,2,3,420,30);            #Array Numérico
        $nomes1 = array('Pedro', 'Paulo', 'Ana');    #Array de Texto

        # A partir do PHP 5.x passou-se a representar o array de uma outra forma mais simples
        # Arrays de índice numérico
        $valores2 = [1,2,3,40,50];
        $nomes2 = ['Pedro', 'Ana', 'Paulo'];

        # Os 'arrays' possuem como base o índice 0
        echo 'Valor: ' . $valores2[0] . '<br>';
        echo 'Nome: ' . $nomes2[1] . '<br>';

        # Exemplo nomeado com números
        # Para isto vamos utilizar um "Operador Atribuição (=>);
        $dados = [
            10 => 100,
            20 => 200,
            30 => 300
        ];
        echo 'Valor: ' . $dados[10] . '<br>';

        # Array Numérico
        # Sempre que precisarmos trabalho com 'array' numérico, utilizamos o índice
        $valores = [10, 20, 30];
        $valores[1] = 200; # [10, 200, 30]

        # Podemos ignorar o índice na inclusão de um novo elemento
        $valores[] = 400; # Teremos então a configuração do array [10, 200, 30, 400];
        
        # Para apresentar o conteúdo do 'Array'
        //echo 'O Valor de $valores[1]: ' . $valores[1] . '<br>' . '$valores[2]: ' . $valores[2];
        echo '<br><h6>$valores[ ]: </h6>';
        echo '<table class="text-center"><tr><th>$valores[1]</th><th>$valores[2]</th>';
        echo "</tr><tr><td>$valores[1]</td><td>$valores[2]</td></tr></table>";

        # Array Associativo
        # Ao contrário do array de índice numérico, as chave são do tipo "string"
        $valores1 = [
            'A' => 20,
            'B' => 30,
            'C' => 40,
            'D' => 50
        ];

        echo '<br><h6>Associativo: </h6>';
        echo '<table class="text-center"><tr><th>Antes</th><th>Depois</th>';
        echo "</tr><tr><td>";
        echo $valores1['A'];
        echo "</td><td>";

        $valores1 = [
            'A' => 200,
            'B' => 300  # Sobreposição
        ];

        echo $valores1['A'];
        echo "</td></tr></table>";

        $valores2 = [
            'nome' => "Eric Kida",
            'email' => "@fatec.sp.gov.br",
            'telefone' => "(013) 97..."
        ];

        echo '<br><h6>Dados: </h6>';
        echo '<table class="text-center"><tr><th>Nome</th><th>E-mail</th><th>Telefone</th><tr>';
        echo '<tr><td>' . $valores2['nome'] . '</td><td>' . $valores2['email'] . '</td><td>' . $valores2['telefone'] . '</td></tr></table>';
        
        # Array Misto
        # Podemos criar um array que combine indices numéricos ou nominais (string)
        # Não são utilizados com frequência, pois são mais dificies de gerenciar

        $dados = [
            0 => 10,
            'nome' => 'Eric',
            'sobrenome' => 'Kida',
            10 => 1000,
            11 => 'Endereço'
        ];
        # Dificulta a forma de acessar os dados
        echo '<br><h6>Dados Mistos: </h6>';
        echo '<table class="text-center"><tr><th>0</th> <th>Nome</th><th>Sobrenome</th><th>10</th><th>11</th><tr>';
        echo '<tr><td>' . $dados[0] . '</td><td>' . $dados['nome'] . '</td><td>' . $dados['sobrenome'] . '</td><td>' . $dados[10] . '</td><td>' . $dados[11] . '</td></tr></table>';

        # Array "Multidimensional"
        # São Arrays numéricos ou associativos, cujos valores são outros arrays
        # É uma estrutura multidimensional, pois possui elementos de arrays dentro de um outro array

        # Array Multidimensional Numérico
        $dados = [
            [10, 20, 30, 40],       # Elemento 1 índice 0 "array" do $dados
            [100, 200, 300, 400],   # Elemento 2 índice 1 "array" do $dados
            [                       
                1000,               # Elemento 3 índice 2 "array" do $dados. Sub item 1 - índice 0
                2000,               # Elemento 3 índice 2 "array" do $dados. Sub item 2 - índice 1
                3000,               # Elemento 3 índice 2 "array" do $dados. Sub item 3 - índice 2
                4000                # Elemento 3 índice 2 "array" do $dados. Sub item 4 - índice 3
            ]                       
        ];
        # Como apresentamos estes elementos destes "array" multidimensionais de índice numérico
        echo '<br><h6>Multidimensional Numérico: </h6>';
        echo '<table class="text-center"><tr><td></th><th>0</th><th>1</th><th>2</th><tr>';
        echo '<tr><th>0</th><td>' . $dados[0][0] . '</td><td>' . $dados[1][0] . '</td><td>' . $dados[2][0]  . '</td></tr>';
        echo '<tr><th>1</th><td>' . $dados[0][1] . '</td><td>' . $dados[1][1] . '</td><td>' . $dados[2][1]  . '</td></tr>';
        echo '<tr><th>2</th><td>' . $dados[0][2] . '</td><td>' . $dados[1][2] . '</td><td>' . $dados[2][2]  . '</td></tr>';
        echo '<tr><th>3</th><td>' . $dados[0][3] . '</td><td>' . $dados[1][3] . '</td><td>' . $dados[2][3]  . '</td></tr></table>';

        # Multidimensional Associativo (índice string nominal)
        $dados2 = [
            'cliente' => ['Jose', 'Astolfo', 'Eduardo'],
            'estados' => ['SP', 'RJ', 'MG'],
            'frutas' => ['Maça', 'Banana', 'Laranja']                    
        ];
        # Como apresentamos os elementos deste "array" multidimensional de índice nominal
        echo '<br><h6>Multidimensional Associativo: </h6>';
        echo '<table class="text-center"><tr><td></th><th>Cliente</th><th>Estados</th><th>Fruta</th><tr>';
        echo '<tr><th>0</th><td>' . $dados2['cliente'][0] . '</td><td>' . $dados2['estados'][0] . '</td><td>' . $dados2['frutas'][0]  . '</td></tr>';
        echo '<tr><th>1</th><td>' . $dados2['cliente'][1] . '</td><td>' . $dados2['estados'][1] . '</td><td>' . $dados2['frutas'][1]  . '</td></tr>';
        echo '<tr><th>2</th><td>' . $dados2['cliente'][2] . '</td><td>' . $dados2['estados'][2] . '</td><td>' . $dados2['frutas'][2]  . '</td></tr></table>';

        echo "<br><hr>";
        
        // Declarações e Instruções Condicionais
        # Switch - É uma alternativa ao encadeamento do IF...ELSEIF...ELSE
        echo "<p class='display-6'>Switch</p>";
        $nome = 'Eric';
        # Neste caso, não temos a construção de uma condição lógica. Mas podemos construir a condição lógica e armazená-la em uma variável de teste.
        switch($nome){

            case 'Jonatas':
                echo $nome . ' - Instrução de código 1';
            break;

            case 'Eric':
                echo $nome . ' - Instrução de código 2';
            break;

            case 'Luana':
                echo $nome . ' - Instrução de código 3';
            break;

            default:
                echo $nome . ' - Instrução de código 4';
            break;
        }
        
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