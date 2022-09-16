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
        echo "<p class='display-6'>Exemplos de Switch</p>";
        echo "Digite um valor: ";
        echo "<form method='get'><input class='input-group-text required' type='text' name='op'><input type='submit' class='btn btn-success'></form><br><br>";
        $op = 1;
        $op = $_GET['op'];
        switch($op){

            case '1':
                echo '<h6>Opção escolhida: </h6>' . $op ;
                
            break;

            case '2':
                echo '<h6>Opção escolhida: </h6>' . $op ;
            break;

            case '3':
                echo '<h6>Opção escolhida: </h6>' . $op ;
            break;
            
            case '4':
                echo '<h6>Opção escolhida: </h6>' . $op ;
            break;

            case '5':
                echo '<h6>Opção escolhida: </h6>' . $op ;
            break;

            default:
                echo '<h6>Opção escolhida: </h6>' . $op ;
            break;
        }
    ?>
    </div>
</body> 
</html>


