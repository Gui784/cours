
<?php
include "../Nav_global/nav.php";
// Les fonctions prédéfinies sont celle qui sont deja codées mise à notre disposition par PHP

// 1 - strlen() et iconv_strlen()
// les deux permettent de tester la longueur d'une chaine de caractéres (pour que par exemple on n'entre pas 200 caractéres pour un pseudo , on va limiter au maximum 20)

$phrase = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, temporibus.";

// Le résultat trouvé sera 80

echo iconv_strlen($phrase) . "<br>";
// iconv_sterln compte seulement les caractéres affichés

echo strlen($phrase) . "<br>";
// strlen utilise le nombre d'octet utilisé pour chaques caractéres

$phrase2 = "étés";

echo iconv_strlen($phrase2) . "<br>";

echo strlen($phrase2) . "<br>";

// 2 - Substring
// Fonctions prédéfinies qui permet de sélectionné une chaîne de caractéres a des endroits précis et supprimer le reste .
// Elle prend 3 paramétres .La chaîne à décuper , le point de départ et le point d'arrivée.
// Je veux conserver la première moitié de ma chaîne de caractéres.

$phrase = "lepoles2023poissyguillaume";

echo substr($phrase , 0 , 16) . "<br>";

echo substr($phrase , 0 , -4) . "<br>";
// Ici substr prendra tous les caractéres sauf les 4 derniers

// 3 - date()
// Celle ci permet de récupérer l'année en cours

echo date("d/m/Y") . "<br>";

echo "&copy;" . date("Y") . " Guillaume " . "<br>";

echo date ("D-M-Y") . "<br>";

// 4 - empty , contrairement à isset() la fonction vérifie la variable qui existe si elle contient une valeur

$phrase3 = " ";
// La variable a du contenu (un espace)
$phrase4 = ""; 
// La variable n'a pas de contenu

if(empty($phrase3)) {

    echo "La variable n'a pas de contenu <br>";

} else {

    echo "La variable a reçu du contenu <br>";

}

if(empty($phrase4)) {

    echo "La variable n'a pas de contenu <br>";

} else {

    echo "La variable a reçu du contenu <br>";

}