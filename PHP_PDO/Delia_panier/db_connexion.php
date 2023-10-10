<?php

// session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "voiture_db";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname" , $username , $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $query = "SELECT role FROM utilisateurs WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$user_id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Stockez le rôle dans la session pour une utilisation ultérieure
        if ($row) {
            $_SESSION['role'] = $row['role'];
        }
    }

} catch (PDOException $e) {

    die("Erreur de connexion à la base de données : " . $e->getMessage());

}

?>