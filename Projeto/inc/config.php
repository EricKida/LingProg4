<!-- Define as Regras do MySQL para logar no PHP-->
<?php 
    // Host do Banco de Dados
    define('MYSQL_HOST', 'localhost');

    // Nome do Banco de Dados
    define('MYSQL_DATABASE', 'projetossdshop');

    // Nome do Usuário do Banco de Dados
    define('MYSQL_USER', 'root');

    // Senha do Banco de Dados
    define('MYSQL_PASSWORD', '');


// Tenta a conexão com o Banco de Dados
    try{
        $admin = new PDO(
            "mysql:host=" . MYSQL_HOST . ";" .
            "dbname=" . MYSQL_DATABASE . "; charset=utf8",
                MYSQL_USER,
                MYSQL_PASSWORD
            );
    }

// Erro Com o Banco de Dados

catch(PDOException $e){
    echo "Erro com o Banco de Dados: ".$e->getMessage();
}

// Erro Genérico
catch(Exception $e){
    echo "Erro Generico: ".$e->getMessage();
}

// Optei também por utilizar MySQLI pois estava tendo alguns problemas com o PDO.

$servername = "localhost";
$database = "projetossdshop";
$username = "root";
$password = "";
// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

?>



