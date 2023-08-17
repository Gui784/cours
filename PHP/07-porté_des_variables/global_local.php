
<?php
include "../Nav_global/nav.php";

// les variables déclarées dans l'un des deux espaces ne sont pas reconnues automatiquement dans l'autre espace

// Du global vers le local 
// ci dessous , la variable $pays déclarée dans l'espace global ne sera paq reconnue dans l'espace local si je n'utilise pas le mot clé global pour importer ma variable dans l'espace local.

$pays = "France";

function affichePays() {

    global $pays;

    echo $pays;
    
}

echo affichePays() . "<br>";

// du local au global

function afficheJour() {

    $jour = "Mercredi";

    // Pour récupérer la valeur de la variable $jour dans mon espace global , je dois utiliser le mot clé return sinon erreur .

    return $jour;

    // La ligne en dessous ne s'affichera pas car tout ce qui est codé aprés return n'est pas calculé.

    echo "Demain nous serons samedi";
 
}

echo afficheJour() . "<br>";