<?php 

session_start();

include "../Nav_global/nav.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de <?= $_SESSION['prenom'] ?></title>

</head>
<body>

<?php if(isset($_SESSION)): ?>

    <h1>Bienvenue <?= $_SESSION['prenom'] ?></h1>
    <p>Sur ce site votre statut est : <?= $_SESSION['statut'] ?></p>

<?php endif; ?>
    
</body>
</html>