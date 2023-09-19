<?php

// session_start();

require_once("db.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (!empty($_POST)) {

    extract($_POST);

    $image = $_FILES["image"]["name"];

    if (!empty($title) && !empty($description) && !empty($prix) && !empty($stock) && !empty($image)) {

        $idprd = $_GET["idproduit"];

        $sqlUpdate = "UPDATE product SET `title` = '$title' , `price` = '$prix' , `description` = '$description' , `image` = '$image' , `stock` = '$stock'  , `discount` = '$discount' WHERE `id_product` = '$idprd' ";

        if (mysqli_query($db_connect, $sqlUpdate)) {

            echo "Produit modifier";
        } else {

            echo "Echec lors de la modification";
        }

        $folder = "img/";
        $imgResult = $folder . $image;

        $tmpName = $_FILES["image"]["tmp_name"];

        $type = $_FILES["image"]["type"];

        if ($type == "image/jpeg" || $type == "image/png" || $type == "image/webp") {

            if (move_uploaded_file($tmpName, $imgResult)) {

                header("Location: ./index.php");
            } else {

                echo "Echec de l'upload";
            }
        }
    }
}
