<?php 

// session_start();

echo "<pre>";
print_r($_FILES);
echo "</pre>";

if(!empty($_FILES)){

    $image = $_FILES['image']['name'];
    $tmpName = $_FILES["image"]["tmp_name"];
    $iduser = $_SESSION["id_user"];
    $type = $_FILES["image"]["type"];

     if ($type == "image/jpeg" || $type == "image/png" || $type == "image/webp" || $type == "image/jpg") {

        $folder = "img/avatar/";
        $upload = $folder.$image;

        if (move_uploaded_file($tmpName , $upload )) {
           
            header("Location: index.php");
            // echo "Image mise à jour" ; 

        } else{

            // echo "Echec du transfert" ; 

        }

        $sqlUpdateImage = "UPDATE user SET `image_user` = '$image' WHERE `id_user` = $iduser ";
        mysqli_query($db_connect , $sqlUpdateImage);

        $_SESSION['image'] = $image;

     } else {

        echo "Image non prise en charge" ; 

     }    
     
     



}
