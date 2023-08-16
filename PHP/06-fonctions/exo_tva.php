
<?php
include "../nav.php";

// Exercice avec une fonction qui permet de calculer la TVA pour un prix HT.

function calculTVA1() {
    // return permet de conserver en mémoire un résultat , récupérable ensuite dans notre code.
    return 100*1.2 . '€ TTC';
}

// J'éxécute en affichant le résultat .
echo calculTVA1() . "<br>";


/* ETAPE 1

elle devra reçevoir le prix en argument , puis elle calculera le prix TTC

OBJECTIF : L a fonction est capable de calculer le prix TTC de n'importe quel  chiffre et pas juste 100

*/

function calculTva2($prix) {

    return $prix * 1.2 . '€ TTC';

}

echo calculTva2(500) . '<br>';

/* ETAPE 2

La fonction doit à présent calculer un prix TTC en fonction de deux arguments qu'on doit lui donner .
Le prix HT mais aussi quel taux de TVA appliquer au prix HT.

*/

function calculTva3($prix , $tva){

    return $prix * $tva . '€ TTC';
    
}

echo calculTva3(500 , 1.055) . "<br>";

echo calculTva3(300 , 1.2);

// Cette fonction prend toujours deux arguments , sauf que celui concernant le taux TVA va recevoir une valeur par défaut ($taux = 1.2).

function calculTva4($prix , $taux = 1.2){

    return $prix * $taux . '€ TTC';
    
}

// Au moment de l'éxécution si je donne qu'un argument (100) alors ma fonction va lui appliquer le taux par défaut (1.2) 

echo calculTva4(100) . "<br>";

// Si par contre je précise le prix mais aussi le taux alors ce dernier va écraser la valeur du taux par défaut er la remplacer par la nouvelle valeur .

echo calculTva4(100,1.055) . "<br>";
