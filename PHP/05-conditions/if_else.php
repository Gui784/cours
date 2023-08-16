

<?php
include "../nav.php";

// Je déclare 5 variables que je vais tester

$a = 22;
$b = 33;
$c = 44;
$d = 55;
$e = 66;

// 1 - if else simple
// le if va tester ( ce qu'on lui dpropose entre les paranthéses)
// si c'est vrai (TRUE) il exécute ce qu'il y a dans le bloc d'instructions.
// Si c'est faux (FALSE) , il exécute ce qui est dans le bloc d'instructions du else

if ($a < $b){

    echo "Vrai $a est bien inférieur à $b <br>";

} else {

    echo "Faux , $a n'est pas inférieur à $b <br>";

}

// en php on est pas obligé de codé le else .
// On peut tester quelque chose et si c'est vrai , on exécute ce qui est dans le bloc d'instruction.
// Mais si c'est faux , si on ne rentre pas dans ce cas de figure , on continue simplement à exécuter la suite du code

if ($b < $c) {

    echo "Vrai , $b est bien supérieur à $c <br>";

}

//  2 - Avec && (and) 
// Avec && , les deux test doivent étre TRUE , sinon on rentre dans le else (le FALSE)

if ($a < $b && $b > $c) {

    echo "Vrais , les deux affirmations sont exactes <br>";

} else {

    echo "Faux , une des deux affirmations n'est pas vérifiée <br>";

}

// 3 - Avec || (OR)
// Avec || (OR) une seule des deux conditions vérifiées est sufisant a entrer dans le TRUE (le bloc d'instructions if).

if($a < $b || $b > $c) {

    echo "Vrai , une des deux affirmations est exacte <br>";

} else {

    echo "Faux , aucune des deux affirmations n'est vérifiée <br>";

}

// 4 - Avec XOR (ou exclusif)
// XOR exige qu'une seule des deux informations soit exacte .
// Si les deux sont exactes ou les deux sont fausses , on rentre dans le else .

if($a < $b XOR $b > $c) {

    echo "Vrai , une des deux affirmations est exacte <br>";

} else {

    echo "Faux , les deux affirmations sont exactes <br>";

}

// 5 - Avec if / else if / else
// Conditions avec trois possibilités . Si la premiére n'est pas vérifié on entre dans la seconde (else if).
// Si cette derniére est toujours fausse on entre dans le (else).

if($a > $b) {

    echo "$a est bien supérieur à $b <br>";

} else if($a != 22) {

    echo "Vrai , $a est différent de 22 <br>";

} else {

    echo "Faux , aucune des deux affirmations est vrai <br>";

}

// 6 - Conditions contractées (appelée aussi ternaire)
// La condition contractée est utilisée quand on doit codé en PHP dans un bloc HTML 
// Elle permet une syntaxe plus condensée
/* if ($a < $b){

    echo "Vrai $a est bien supérieur à $b";

} else {

    echo "Faux $a n'est pas supérieur à $b";

}
*/

// la ternaire si dessus est équivalent de la condition mise en commentaire au dessus

// Entre les paranthéses , on écrit toujours ce que l'on veut tester 
// Aprés le ? on écrit le bloc d'instructions (if)
// Aprés les : on écrit le bloc d'instructions du else

echo ($a < $b) ? "Vrai $a est bien inférieur à $b <br>" : "Faux";

// 7 - if / else avec == et ===

$var = 100;
$var2 = "100";

if ($var == $var2) {

    echo "Vrai , $var est égal à $var2 en valeur <br>";

} else {

    echo "Faux , $var n'est pas égal à $b en valeur <br>";

}

// === teste aussi le type

if ($var === $var2) {

    echo "Vrai $var est strictement égal à $var2 en valeur et en type <br>";

} else {

    echo "Faux $var n'est pas strictement égal à $var2 en valeur et en type <br>";

}

//  8 - if (isset) / else
// isset() est une fonction prédéfinie pour tester si une variable existe , si elle a été déclarée dans le script
// C'est trés utile pour savoir si on continue de codé , à l'éxécuter ou stopper avec un message d'erreur

if(isset($test)){

    echo "La variable test existe <br>";

} else {

    echo "La variable test n'existe pas <br>";

}

$test = TRUE;

// code de la même condition encontractée , en ternaire (utile lorsque l'on est dans un bloc HTML)

echo (isset($test)) ? "La variable test existe <br>" : "La variable test n'existe pas";


