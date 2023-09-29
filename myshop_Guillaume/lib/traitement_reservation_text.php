<?php

require_once("db_connexion.php");


if (!empty($selectProduct['reservation_text'])) {

        $sqlProduct = "INSERT INTO `produit`(`reservation_text`) VALUES ('$reservation_text')";

        if (mysqli_query($db_connect, $sqlProduct)) {

            echo "Réservation Validée";

            header("Location: ../index.php");

        } else {

            echo "Echec de la réservation";
        }

}



?>