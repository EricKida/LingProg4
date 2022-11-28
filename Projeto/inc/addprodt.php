<?php
require_once 'config.php';
$admin = new PDO(
    "mysql:host=" . MYSQL_HOST . ";" .
        "dbname=" . MYSQL_DATABASE . "; charset=utf8",
    MYSQL_USER,
    MYSQL_PASSWORD
);


  ?>