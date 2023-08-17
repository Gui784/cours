<?php

include "../Nav_global/nav.php";

// PDO est une surcouche de PHP et directement intégrés à ce dernier depuis PHP 5.1

// PDO permete de connecter notre projet à sa base de données , puis de mêler du langage PHP avec de srequetes en SQL

// PDO est l'abréviation de PHP Data Object est une extension définissant l'interface pour accéder à une base données avec PHP . Elle est orientée objet.

// La connexion avec la base de données va être différente en fonctionn de l'hébergeur dans notre cas notre base de données est en local

$pdo = new PDO('mysql:host=localhost; dbname=haribo','root' , '' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

echo "<pre>";

// get_class_methods permet de récupérer toutes les methods disponible avec l'objet

print_r(get_class_methods($pdo));


echo "</pre>";

$req = $bdd->prepare('SELECT*FROM bonbon');

try {
    // Exécute la requête et récupère les résultats
    $result = $pdo->query($query);

    // Affiche les résultats
    echo "<pre>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
    echo "</pre>";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}


// Requête SQL pour sélectionner toutes les lignes de la table "bonbons"
$query = "SELECT * FROM bonbons";

try {
    // Prépare la requête
    $stmt = $pdo->prepare($query);

    // Exécute la requête
    $stmt->execute();

    // Récupère les résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affiche les résultats
    echo "<pre>";
    print_r($results);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}