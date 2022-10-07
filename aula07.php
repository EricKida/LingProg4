<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula 7</title>
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
        // Funções Anônimas
        echo "<p class='display-6'>Funções Anônimas</p>";
        # São funções sem uma nomeação. Surgiram a partir da versão 5 ou > do PHP.
        # As funções precisam ter um ; no final das chaves.

        # Exemplo 1 - Sem parâmetro
        echo "<strong>Sem Parâmetro</strong><br>";
        $x = function(){
            echo "Exemplo de função anônima<br><br>";
        };
        # Forma de chamar a função requer o uso de uma variável.
        $x();
        # Observe que a variável $x funciona como o meio de chamada da função

        # Exemplo 2 - Com parâmetro
        echo "<strong>Com Parâmetro</strong><br>";
        $msg = function($texto){
            echo "A mensagem de parametro é $texto<br><br>";
        };
        $msg('Eric Kida');


        # Exemplo 3 - Com Return
        echo "<strong>Com Return</strong><br>";
        $msg2 = function($par1){
            echo "A mensagem de parametro é $par1<br>";
            return "Retorna parametro recebido<br><br>";
        };
        echo $msg2('Eric Kida');

        # Exemplo 4 - Com Variáveis de Escopo Global
        echo "<strong>Com Variáveis Globais</strong><br>";
        $x1 = 50;
        $x2 = 30;
        $varFunction = function($x3) use($x1, $x2){
            echo "$x3 * $x1  = " . ($x3*$x1) . "<br>";
            echo "$x3 * $x2  = " . ($x3*$x2) . "<br>";
            # Esta função demostra o uso da visibilidade de uso de variáveis definididas externamente a função
        };
        echo $varFunction(2);

        echo "<hr>";

        // Classes
        echo "<p class='display-6'>Classes</p>";
        # Podemos entender uma classe com um molde para criarmos objetos.
        # Exemplo: a classe animal, permite a partir dela criar objetos animais de vários tipos, compartilhando o mesmo modelo. Porém, com característica diferentes

        # Exemplo 1 - Classe Teórico
        # Class Humano
        # > cabelo          propriedade/característica
        # > genero          propriedade
        # > peso            propriedade
        # > caminhar        método/função

        # Exemplo 1.1 de Objeto Classe
        # homem > Humano
        # > cabelo      preto
        # > genero      masculino
        # > peso        65
        # > caminhar()

        # Exemplo 1.2 de Objeto Classe
        # homem > Humano
        # > cabelo      ruivo
        # > genero      feminino
        # > peso        50
        # > caminhar()

        // Introdução
        # Uma classe é definida em PHP pela declaração "class" seguido do nome da classe e também possui chaves delimitadoras do código
        # Por conveção do PSR-1 (Define os padrões básicos de codificação do PHP)
        # O nome de uma classe deve ser: StudlyCaps, PascalCase e MixedCase
        # https://www.php-fig.org/psr/psr-1/

        # Exemplo 1 - Definição de Classe Teórico
        class AnimalMamifero{   # Utilizando padrão com: primeira letra Capital

            # Define-se as Propriedades e Métodos nesta sessão
            # Propriedades: são variáveis em PHP armazem as características do objeto.
            # São conhecidas como "Fields" (campos) ou atributos de uma classe. Precisam ter uma definição de acesso (visibilidade) específico (public, private)
            # Métodos: São Funções que definem o que o objeto pode fazer
        }

        
        # Exemplo 2 - Definição de Classe Prático
        class FiguraGeometrica{
            # Definindo as propriedades
            public $largura, $altura, $x, $y;

            # Definindo um método
            function CalcArea($a, $b){
                return ($a * $b);
            }
        }

        // Classes - Objetos e Instâncias
        # Pra trabalhar com classes precisamos instanciar uma classe
        # Para acessar às propriedades de uma classe, dentro dos métodos da classe, é preciso utilizar a pseudovariável "$this" seguida de um operador "->".
        # A construção de uma classe eme PHP não exige que esja criada antes do código principal

        # Exemplo 1
        class Humano{
            # Propriedades
            public $nome    = 'Maria';     # public é um modificador de acesso (visibilidade)
            public $codnome = 'Professora';

            # Métodos
            public function nomeCompleto(){
                return $this->codnome . " " . $this->nome;
                $nome = 'Teste';
                # Note que para acessar a propriedade "nome", definida como "public $nome", foi necessário utilizar a pseudovariavel com o operador: "$this->" 
                # Variável "$nome" definida abaixo do "return" embora tenha o mesmo nome, não é a propriedade definida como "public $nome". É apenas uma variável da função
            }
        }

        # Instanciação de um Objeto

        # Um objeto - Uma variável a partir da Classe
        #Instanciar um objeto significa criar um objeto a partir da classe, atribuindo à variável a expressão "new" e o nome da classe
        $homem = new Humano();

        # Criamos um objeto novo de nome "homem" a partir da classe Humano.
        # Podemos agora acessar as propriedades e métodos do objeto
        echo $homem ->nomeCompleto();




        echo "<hr>";

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