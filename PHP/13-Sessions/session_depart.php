<!--  Une session à conserver des informaions temporaire . On peut ouvrir une session pour l'yutilisateur qui a mis un produit dans son panier on n'envoie pas cette information à la BDD , car elle n'est pas définitive . Peut-être va t-il supprimer ce prosuit de son panier , ou ajouter un deuxiéme.  -->

<?php

// Pour qu'une session puisse être débutée et que l'on puisse récupérer ses informations , il faut déclarer en haut du fichier , avant toute chose

session_start();

include "../Nav_global/nav.php";

$_SESSION['prenom'] = "Guillaume";
$_SESSION['statut'] = "admin";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Départ</title>
</head>
<body>
    <button><a href="../13-Sessions/session_arriver.php">Aller ver le profil</a></button>
</body>
</html>