<?php 

// Connexion à la base de données 

$mysqli = new mysqli('localhost', 'root', '', 'voyage');

if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données: ' . $mysqli->connect_error);
}


// Vérifiez si un voyage a était sélectionner

if (isset($_POST['id']) ) {
    
    $id = $_POST['id'];

    $sql = "DELETE FROM produits WHERE id = $id";

    if ($mysqli->query($sql)) {
        
        echo "Voyage supprimer avec succés <br>"; 
        echo "<a href='index.php'>Retour à la liste des Voyages</a>" ; 

    } else {

        echo "Erreur lors de la suppression du voyage" .  $mysqli->error ; 

    }

} else {

    echo "Aucun Voyage sélectionné" ; 

}



$mysqli->close();


?>