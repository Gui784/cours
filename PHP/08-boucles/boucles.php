<?php

include "../Nav_global/nav.php";


// 1 - Boucle while

// J'initialise ma variable $i en lui affectant la valeur 0
// Souvent on initialise à 0 car le premier indice d'un tableau est l'indice 0

$i = 0;

/* Dans les paranthéses on donne la condition pour que la boucle puisse fonctionner 

    while($i <= 20) 

Tant que la condition est respectée , on éxécute ce qui est dans ce bloc d'instruction

        echo "Tour de boucle" . $i . "..." . "<br>";

*/

while($i <= 20) {

    if($i == 10){

        echo "Tour de boucle" . $i . "<br>";

    } else {

        echo "Tour de boucle" . $i . "..." . "<br>";

    }

    $i++;

}

// 2 - Boucle do while() pas très utilisée , presque jamais

$i = 0;

do {

    echo "Tour de boucle" . $i . "***" . "<br>";
    $i += 2;

} while ($i <=10);

// 3 - bouclr for()

echo "<br>";

for($i = 0 ; $i < 10 ; $i ++) {

    echo "ligne" . $i . "<br>";

}

// 03 bis utilisation d'une boucle for pour créer un sélecteur

echo '<br>';

echo "<form>";
    
    echo "<select>";

      echo "<option selected>Sélectionnez l'année</option>";

      for($annee = date('Y') ; $annee >= date('Y') - 100; $annee--){

        echo "<option>" . $annee . "</option>";

      }

    echo "</select>";

echo "</form>";

// 4 - double for imbriquée

echo "<br>";

echo "<table border='1' style='border-collapse:collapse'>";

    echo "<tr>";

    for($i = 1 ; $i <= 10 ; $i ++){

        echo "<td> $i </td>";

    }

    echo "</tr>";

echo "</table>";

echo "<br>";

echo "<table border='1' style='border-collapse:collapse'>";

    for($ligne = 0 ; $ligne <= 9 ; $ligne ++){

        echo "<tr>";

        for($cellule = 0; $cellule <= 9 ; $cellule ++){

            echo "<td>" . (10*$ligne + $cellule) +1 . "</td>";

        }

        echo "</tr>";
    }

echo "</table>";
