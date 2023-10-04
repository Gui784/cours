<?php

if (!empty($_POST)) {

    extract($_POST);


    $image = $_FILES['image']['name'];

    if (!empty($_POST['price']) && !empty($_POST['title']) && !empty($_FILES))  {

    $stmt = $db->prepare("INSERT INTO article (title, price , image) VALUES (:title, :price , :image)");
    
    $stmt->bindParam(':title', $title , PDO::PARAM_STR);
    $stmt->bindParam(':price', $price , PDO::PARAM_INT);
    $stmt->bindParam(':image', $image );

    $stmt->execute();

        $file_tmp_name = $_FILES['image']['tmp_name'];
        $folder = "images/upload/";
        $file_dest = $folder . $image;
        move_uploaded_file($file_tmp_name, $file_dest);
        
    }



}


?>