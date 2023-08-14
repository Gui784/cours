<?php

// syntaxe au dessus pour ouvrir un passage php
// il est conseillé de le laisser ouvert si on ne fait que du traitement PHP.
// c'est plus facile pour débug et on peut aussi le fermer mais plus difficile a corriger en cas de problémes 

// Intrsuction d'affichage utilisé

echo "Bonjour , Je suis Guillaume. <br>";

// le ; est une fin d'instruction , il est obligatoire pour signifier cet ordre au navigateur , sinon erreur PHP
// une seconde instruction est possible avec PHP avec le mot print , mais il n'est que trés peu utilisé , dans pratiquement aucun script.

?>

<!-- Passage contracté en PHP -->
<!-- Il n'ecessite pas d'echo , il est implicite , il ne sert quen pour afficher -->

<?= "Nous sommes lundi" ?>

<?php

// Affichage non conventionel (print_r et var_dump)
// L'affichage non conventionnel ne sert que durant la période de développement du site . Il est utile pour le développeur , pas pour le visiteur du site
// Le jour où le site est mis en ligne , il faut mettre tous les print_r et var_dump en commentaire ou les supprimer !!!!

// Je déclare une variable pour ensuite la tester
$prenom = 'Guillaume';

// La balise <pre></pre> qui entoure le print_r est utile pour mieux lire les informations que l'on veut récupérer
echo "<pre>";

print_r(gettype($prenom)) ;

echo "</pre>";

// Les commentaires en php

// 1er type de commentaire 

/*
2éme type de commentaire sur plusieurs lignes
*/

#3éme type de commentaire 

// mix PHP et HTML

echo '<h1>Salut</h1>';

echo 'Nous sommes <strong>Lundi</strong>';

echo'<div class = "heure">L\'école commence à 9h00<br></div>';

?>

<!-- Ls syntaxes eu dessus ne sont pas autorisés , même si elles sont justes . Elles altérerons trop les passages d'un langage à l'autre.
C'est dit code " sale " -->

<h1><?php echo "Bonjour"; ?></h1> 
<?php echo " Nous sommes " ?> <strong>Lundi</strong> <?php echo " et il est 15h" ?>;

<!-- Le code PHP n'est pas visible dans le code source de la page c'est la preuve que le navigateur ne peut pas 
gérer ce langage seulement les langages du front -->