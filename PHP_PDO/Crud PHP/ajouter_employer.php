<?php

session_start();

require_once("lib/db_connexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérez les données du formulaire
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $sexe = $_POST['sexe'];
    $service = $_POST['service'];
    $dateEmbauche = $_POST['dateEmbauche'];
    $salaire = $_POST['salaire'];
    $idSecteur = $_POST['idSecteur'];

    // Exécutez la requête SQL d'ajout de la voiture
    $query = "INSERT INTO employe (prenom, nom, sexe, service, dateEmbauche, salaire , idSecteur) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$prenom, $nom, $sexe, $service, $dateEmbauche, $salaire, $idSecteur]);

    // Redirigez après l'ajout
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employé</title>
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h1 style="color: white;">Ajouter un employé</h1>
                        <form class="requires-validation" method="post" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="prenom" placeholder="Prenom" required>
                            </div>

                            <br>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="nom" placeholder="Nom" required>
                            </div>

                            <br>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="sexe" placeholder="Genre" required>
                            </div>

                            <br>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="service" placeholder="Service" required>
                            </div>

                            <br>

                            <div class="col-md-12">
                                <input class="form-control" type="date" name="dateEmbauche" placeholder="Date D'embauche" required>
                            </div>

                            <br>

                            <div class="col-md-12">
                                <input class="form-control" type="number" name="salaire" placeholder="Montant du salaire" required>
                            </div>

                            <br>

                            <div class="col-md-12">
                                <input class="form-control" type="number" name="idSecteur" placeholder="ID du Secteur" required>
                            </div>

                            <br>

                            <div class="form-button mt-3">
                                <input type="submit" value="Ajouter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    (function() {
        'use strict'
        const forms = document.querySelectorAll('.requires-validation')
        Array.from(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

</html>