
<?php
include "../nav.php";

$couleur = "bleu";

// Je déclare une variable en lui affectant une valeur

switch($couleur) {

    case "vert":
        echo "La couleur est bien verte";
    break;

 // un break pour passer à la case suivante si celui si n'est pas vérifié.
//  le break doit étre codé pour chaque case , sinon meme si la case est vérifié , il va aller tester le code suivant

    case "bleu":
        echo "La couleur est bien bleu <br>";
    break;

    case "rouge":
        echo "La couleur eszt bien rouge";
    break;

    default:
        echo "La couleur est bien bonne";
    

}

// code la même en if / else if

if($couleur == "jaune"){

    echo "La couleur est bien jaune <br>";

} else if($couleur =="rouge") {

    echo "La couleur est bien rouge <br>";

} else if($couleur == "bleu") {

    echo "La couleur est bien bleu <br>";

}
