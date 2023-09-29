<?php


require_once("db_connexion.php");



if (!empty($_POST)) {

    extract($_POST);

     $image = $_FILES['image']['name'];   

    if (!empty($title) && !empty($description) && !empty($price) && !empty($city) && !empty($postal_code) && !empty($image)) {

        $sqlProduct = "INSERT INTO `produit`(`title`, `description` , `price`,  `city`, `postal_code`, `image`) VALUES ('$title','$description','$price','$city','$postal_code','$image')";

        if (mysqli_query($db_connect, $sqlProduct)) {

            echo "Produit crée";

           
        } else {

            echo "Echec lors de la création";
        }

        $folder = "../img/";
        $imgResult = $folder . $image;

        $tmpName = $_FILES["image"]["tmp_name"];

        $type = $_FILES["image"]["type"];

        if ($type == "image/jpeg" || $type == "image/png" || $type == "image/webp" || $type == "image/jpg") {

            if (move_uploaded_file($tmpName, $imgResult)) {

                echo "Image uploadé avec succés ";

                header("Location: ../index.php");

            } else {

                echo "Echec de l'upload";
            }
    
        }

    }
}
        