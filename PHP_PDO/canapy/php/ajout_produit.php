<?php

if (!empty($_POST)) {

    extract($_POST);

    $image = $_FILES['image']['name'];

    if (!empty($_POST['price']) && !empty($_POST['title']) && !empty($_FILES))  {

    $stmt = $dbh->prepare("INSERT INTO article (title, price , image) VALUES (:title, :price , :image)");
    
    $stmt->bindParam(':title', $title , PDO::PARAM_STR);
    $stmt->bindParam(':price', $price , PDO::PARAM_INT);
    $stmt->bindParam(':image', $image );


    }


}


?>