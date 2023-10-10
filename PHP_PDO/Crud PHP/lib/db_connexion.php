<?php

// session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "entreprise";

try {
    
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname" , $username , $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Erreur de connexion à la base de données : " . $e->getMessage());

}
