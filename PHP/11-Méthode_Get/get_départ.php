<?php
include "../Nav_global/nav.php";

// La méthode GET(Superglobale) permet de véhiculer des informations dans l'URL pour les récupérés sur un autre fichier pour un affichage spécial

// Premiére exemple : Je récupére les indformations sur la même page

// Deuxiéme exemple : En récupérant les infos sur une autre page 
// Dans l'attribut href , d'abord j'indique le nom du fichier ou je veux récupére les infos , puis j'écris "?" pour envoyer les infos . Chaque infos étant séparée de la précédente
// target = '_blank' permet d'ouvrir la nouvelle page dans un autre onglet

if(!$_GET){

    echo "<button><a href = 'get_arriver.php?produit=Gateaux&variete=Fraise&prix=12' target='_blank'>Tester</a></button>";

}