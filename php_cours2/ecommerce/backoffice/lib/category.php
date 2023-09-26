<?php



$sqlSelectCategory = "SELECT * FROM `category` c WHERE EXISTS ( SELECT 1 FROM `product` p WHERE p.`id_category` = c.`id_category` )";
$tableSelectCategory = mysqli_query($db_connect, $sqlSelectCategory);

$category = mysqli_fetch_all($tableSelectCategory, MYSQLI_ASSOC);

 ?>

