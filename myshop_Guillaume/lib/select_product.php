<?php

require_once("db_connexion.php");


    $sqlProduit = "SELECT * FROM produit ";
    $tableProduit = mysqli_query($db_connect, $sqlProduit);

    $produit = mysqli_fetch_all($tableProduit, MYSQLI_ASSOC);


?>