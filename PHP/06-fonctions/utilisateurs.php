
<?php
include "../nav.php";

// La fonction utilisateur , par opposition à prédéfinie est celle qui n'existe pas.
// Que nous allons codé pour notre propre bespoin par rapport aux fonctionnalités du site.

function salut($prenom) {

   echo "Salut" . $prenom . "<br>";

}

// paramétre qui sera donné au moment ou celui ci est éxécuté et il est envoyé en ligne 146 pour être concaténé avec le reste de la chaîne de caractéres .
salut(' Guillaume ');