<?php

for($i = 4;$i <= 12; $i++){

    
    echo $i . "<br>";

}

echo "<hr>";

function naturalNumber($num){

    if($num>=1){

    echo "$num <br/>";    
    NaturalNumber($num-1);

    }


}

NaturalNumber(10);   

echo "<hr>";

$n = 10;  // Nombre de lignes du triangle

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo "\n" . "<br>";
}

echo "<hr>";

echo "<table border='1' style='border-collapse:collapse'>";

    for($ligne = 1 ; $ligne <= 5 ; $ligne ++){

        echo "<tr>";

        for($cellule = 1; $cellule <= 5; $cellule ++){

            echo "<td style='width:20px ; text-align:center'>" . ($ligne * $cellule)  . "</td>";

        }

        echo "</tr>";
    }

echo "</table>";



?>