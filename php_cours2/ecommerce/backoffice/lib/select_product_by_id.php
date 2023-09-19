<?php 

$idprd = $_GET["idproduit"];
  
$sqlSelectProduct = " SELECT * FROM `product` WHERE `id_product` = $idprd ";
$tableSelectProduct = mysqli_query($db_connect , $sqlSelectProduct);
echo $sqlSelectProduct ; 
$product = mysqli_fetch_all($tableSelectProduct , MYSQLI_ASSOC);



?>