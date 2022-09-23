<!doctype html>
<html lang="pt-BR">

<head>
    <title>Ex03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body class="bg-dark text-light">
    <?php require_once "navbar.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <?php
        echo "<div class='row'><div class='col-sm-2'><p class='display-6'>a) For</p>";
        for($x = 1; $x <= 10; $x++){
            echo "<div class='bg-secondary rounded container-fluid'><strong>Tabuada do $x</strong><hr>";
            for($y = 1; $y <= 10; $y++){
                echo $x . " x " . $y . " = " . ($x*$y) . "<br>";
            }

            echo "</div><br>";
        }
        echo "</div>";

        echo "<div class='col-sm-2'><p class='display-6'>b) While</p>";
        $x = 1;

        while($x <= 10){
            echo "<div class='bg-secondary rounded container-fluid'><strong>Tabuada do $x</strong><hr>";
            $y = 1;
            while($y <= 10){
                echo $x . " x " . $y . " = " . ($x*$y) . "<br>";
                $y++;
            }
            echo "</div><br>";
            $x++;
        }
        echo "</div>";

        echo "<div class='col-sm-2'><p class='display-6'>c)DoWhile</p>";
        $x = 1;

        do{
            echo "<div class='bg-secondary rounded container-fluid'><strong>Tabuada do $x</strong><hr>";
            $y = 1;
            do{
                echo $x . " x " . $y . " = " . ($x*$y) . "<br>";
                $y++;
            }while($y <= 10);
            echo "</div><br>";
            $x++;
        }while($x <= 10);
        echo "</div>";
        

        ?>
    </div>
</body>

</html>
