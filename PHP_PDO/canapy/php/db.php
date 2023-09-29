<?php 

$user = "root";
$pass = "";
$db_name = "canapy" ;
$server = "localhost";

$host = $_SERVER['HTTP_HOST'];

try {
    $dbh = new PDO("mysql:host=$server;dbname=$db_name", $user, $pass);
} catch (PDOException $e) {

    $error_msg = "<p style='color:red'>" . $e->getMessage() . "</p>";    

    if ($host == "localhost") {

    echo $error_msg ;

    }

    // tenter de réessayer la connexion après un certain délai, par exemple
}



?>