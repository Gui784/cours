<?php

// sa fonctionne est similaire a celle d'une variable , elle stocke une valeur récupérable par contre cette valeur ne sera pas modifiable par la suite

//  Une constante se déclare avec le mot clé define elle prend 2 arguments . 
// Le nom de la constante . Le second argument est la valeur de la constante .

define('Ville','Poissy');


// les constantes magiques sont des constantes déjà codées mise à notre disposition (il y'en a beaucoup : https://www.php.net/manual/fr/language.constants.magic.php)

// cette constante donne le chemin physique jusqu'au fichier (file)
echo __FILE__ . '<br>';
// celle-ci donne le chemin physique jusqu'au dossier
echo __DIR__ . '<br>';
// cette dernière donne la ligne où elle est codée
echo __LINE__ . '<br>';

echo Ville . '<br>';

// Il sera utile de stocker une valeur que l'on sait fixe , non variable , dans une constante , par exemple , la valeur de l'URL de site . 
// On pourra le stocker avec define.