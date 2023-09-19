<?php 

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

if(!empty($_FILES)){


    

    $image = $_FILES['image']['name'];
    $tmpName = $_FILES["image"]["tmp_name"];
    $iduser = $_SESSION["id_user"];
    $type = $_FILES["image"]["type"];

     if ($type == "image/jpeg" || $type == "image/png" || $type == "image/webp") {

        $folder = "img/avatar/";
        $imgResult = $folder . $image;

        if (move_uploaded_file($tmpName , $imgResult )) {
           
            // echo "Image mise à jour" ; 

        } else{

            // echo "Echec du transfert" ; 

        }

     }  else {

        echo "Image non prise en charge" ; 

     }      


}




?>