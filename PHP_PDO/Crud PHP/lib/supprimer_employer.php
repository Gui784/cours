<?php

require_once("db_connexion.php");

if (isset($_GET['idEmploye'])) {
    $employe_id = $_GET['idEmploye'];

    // Effectuez l'opération de suppression
    $query = "DELETE FROM employe WHERE idEmploye = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$employe_id]);

    // Redirigez après la suppression
    header("location: ../index.php");
    exit;

} else {

    // Si l'ID n'est pas défini, redirigez vers une page d'erreur ou de gestion des erreurs
    header("location: erreur.php");
    exit;

}

?>