<?php

// 1 Concatenation simple

$prenom = 'Guillaume';
$nom = 'Kervoern';

// Il y'a deux maniéres de concaténer en PHP
// D'abord la moins utilisé avec une virgule

echo 'Je suis ' ,  $prenom  , ' ' ,$nom, ' <br>';

// La plus utilisé est celle avec les .

echo 'Je suis ' .  $prenom  . ' ' . $nom . ' <br>';

// 2 Concaténation par affectation

$nombre = 'Ko';

echo $nombre .= 15 ;