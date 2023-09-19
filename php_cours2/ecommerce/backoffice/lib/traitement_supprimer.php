<?php 

require_once("db.php");

$idproduit = $_GET["idproduit"];

$sqlDelete = "DELETE FROM product WHERE `id_product` = $idproduit ";

if(mysqli_query($db_connect , $sqlDelete)){

header("Location: ../index.php");

} else {

    echo "Echec lors de la suppression du produit" ; 

}



?>