<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Aula 8</title>
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
        // Classes - Construct
        echo "<p class='display-6'>Construct</p>";
        # No exemplo anterior, as propriedades já estavam predefinidas: 
        # #nome = 'Maria';
        # $codnome = 'Professora';
        # A ideia é trabalhar com esta propriedade de forma dinâmica, para isto devemos utilizar o CONSTRUCT

        // Construct
        # É um método especial dentro de uma classe que é executado automaticamente é criado um objeto a partir da classe
        # Este método é definido de uma forma especial com dois "underscores".

        class Humano
        {
            private $nome;      # Indica que estas são propriedades são visíveis apenas pelos métodos (funções) dentro da classes.
            private $codnome;   # Os objetos não sabem, não conhecem estas propriedades. Apenas conhecem o método (a função) quando for "public"

            # Esta função é executada de forma automática quando se instancia um objeto desta classe.
            function __construct($n, $c){
                $this->nome = $n;   #this-> nome vai receber o valor de $n
                $this->codnome = $c; #this->codnome vai receber o valor de $c
            }
            public function funCodNome(){
                return $this->nome. " ". $this->codnome;
            }
        }
        echo "<hr>";

        // Classes - Construct sem parâmetro
        echo "<p class='display-6'>Construct sem Parâmetro</p>";
        # Detalhe. 
        # Apenas para o caso de funções Construct sem parâmetros podemos alterar a forma de instanciação do objeto

        class Humano2
        {
            function __construct()
            {
                // codigo ...
            }
        }
        $homem = new Humano2;   #Funciona sem parenteses quando a função construct não possuir parâmetros pode ou não ter parenteses.
        $mulher = new Humano2;
        echo "<hr>";

        # Classes somente com propriedades
        # Sem qualquer tipo de métodos

        # Exemplo 1
        class Pessoa1{       # Classe apenas com propriedades
            public $nome;
            public $codnome;

        }

        class Pessoa2{      # Classe apenas com métodos
            public function msg(){
                // Método acessível fora da classe
            }
            private function andar(){
                // Método acessível dentro da classe
                // Os objetos não tem visibilidade deste método
            }
            public function movimento(){
                $this->andar();
            }
        }
        // A Classe "Pessoa1" permite o acesso de suas propriedades. Pois o identificador de acesso é "Public"
        $humano1 = new Pessoa1();
        $humano1 ->nome="Joao";
        $humano1->codnome="Acessor";

        $humano2 = new Pessoa2();
        $humano2->movimento();

        

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