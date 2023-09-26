<?php 

session_start();

require_once("db.php");

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

if (!empty($_POST)) {

    extract($_POST);

     $image = $_FILES['image']['name'];

     if (!empty($title) && !empty($description) && !empty($prix) && !empty($stock) && !empty($discount) && !empty($image)){


     $iduser = $_SESSION["id_user"];

     $title = str_replace("'" , "''" , $title);
     $description = str_replace("'" , "''" , $description);     

     $sqlProduct = "INSERT INTO `product`(`title`, `price`, `description`, `image`, `stock`, `id_user`, `discount`) VALUES ('$title','$prix','$description','$image','$stock','$iduser','$discount')";

     if ( mysqli_query($db_connect , $sqlProduct )){

        echo "Produit crée" ; 

     } else {

        echo "Echec lors de la création" ; 
     }

     $folder = "../img/";
     $imgResult = $folder.$image ;

     $tmpName = $_FILES["image"]["tmp_name"];

     $type = $_FILES["image"]["type"];

     if ($type == "image/jpeg" || $type == "image/png" || $type == "image/webp" || $type == "image/jpg") {
        
        if (move_uploaded_file( $tmpName , $imgResult )){

        echo "Image uploadé avec succés " ; 
        
        header("Location: ../index.php");


     } else {

        echo "Echec de l'upload" ; 

     }  

     } 

    }

}

