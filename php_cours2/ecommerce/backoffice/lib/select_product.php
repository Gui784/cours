<?php 

if (!empty($_GET['category'])){

$getCat = $_GET['category'];
$sqlCategoryVerif = "SELECT * FROM category WHERE `id_category` = $getCat";
$tableCategoryVerif = mysqli_query($db_connect , $sqlCategoryVerif);

if (mysqli_num_rows($tableCategoryVerif)== 1) {

    $sqlCategoryVerif = "SELECT * FROM category WHERE `id_category` = $getCat";
    $tableCategoryVerif = mysqli_query($db_connect, $sqlCategoryVerif);

    $products = mysqli_fetch_all($tableSelectProduct , MYSQLI_ASSOC);

} else {

    header('Location: index.php');

}


} else {

$sqlSelectProduct = " SELECT * FROM product INNER JOIN user ON product.id_user = user.id_user" ;
$tableSelectProduct = mysqli_query($db_connect , $sqlSelectProduct);

$product = mysqli_fetch_all($tableSelectProduct , MYSQLI_ASSOC);

}

?>