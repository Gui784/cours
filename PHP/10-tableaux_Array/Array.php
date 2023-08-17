<?php
include "../Nav_global/nav.php";

// Une variable permet de stocker des valeurs

$listePrenom = "Asuna , Naruto , Kazuto , Hinata";

echo $listePrenom . "<br>";

$tableauPrenom = array("Asuna" , "Naruto" , "Kazuto" , "Hinata");

echo "<pre>" ; print_r($tableauPrenom) ; "</pre>";

// var_dump va afficher le nombre d'octets par mots

echo "<pre>" ; var_dump($tableauPrenom) ; "</pre>";

echo "<br>";

echo $tableauPrenom[1] . "<br>";

// Autre syntaxe pour déclarer un tableau.
// Elle est plus pratique que la premiére pour ajouter des éléments au tableau au fur et à mesure de notre code si on ne les connait pas tous au départ.

$listePays[] = "France"; 
$listePays[] = "Japon";
$listePays[] = "Espagne";
$listePays[] = "Italie";
$listePays[] = "Maroc";
$listePays[] = "Roumanie";

// Boucle foreach adapté aux tableaux

foreach($listePays as $indice => $valeur) {

    echo "<p>" . $valeur . " a pour indice " . $indice . "</p>";

}

// foreach version ul/li

echo "<ul>";

foreach($listePays as $indice => $valeur) {

    echo "<li>La valeur" . $valeur ." a pour indice " . $indice ."</li>";

}

echo "</ul>";

// Permet d'afficher les tableaux sous forme de chaîne de caractéres 
// Sépare chaque élément avec le 1er argument de la fonction , ici c'est le tiret.

echo "<p>" . implode(' - ' , $tableauPrenom) . "</p>";

// Count et Sizeof

// Affiche le nombre d'éléments dans un tableau

echo count($tableauPrenom) . "<br>";

echo sizeof($tableauPrenom) . "<br>";