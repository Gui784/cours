<?php

session_start();

// require_once("db_connexion.php");

$nom = isset($_POST['nom']) ? $_POST['nom'] : "";
/* $nom est une variable qui est définie en fonction de la valeur de $_POST['nom'].
isset($_POST['nom']) vérifie si la clé "nom" existe dans le tableau $_POST, ce qui signifie que le formulaire a été soumis avec un champ appelé "nom".
Si la clé "nom" existe dans $_POST, la variable $nom prendra la valeur de $_POST['nom'].
Si la clé "nom" n'existe pas dans $_POST, la variable $nom prendra une valeur vide (c'est-à-dire "").
*/

/* Equvalent a ca $nom = isset($_POST['nom']) ? $_POST["nom"] : "";
if (isset($_POST['nom'])) {
 
    $nom = $_POST['nom'];
 
} else {
 
    $nom = "";
 
}
*/

$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
$login = isset($_POST['login']) ? $_POST['login'] : "";
$pass = isset($_POST['pass']) ? $_POST['pass'] : "";
$repass = isset($_POST['repass']) ? $_POST['repass'] : "";
$valider = isset($_POST['valider']) ? $_POST['valider'] : "";

$erreur = "";

if (isset($valider)) {

    if (empty($nom) || empty($prenom) || empty($login) || empty($pass) || empty($repass)) {

        $erreur = "Tous les champs sont obligatoires";

    } elseif ($pass != $repass) {

        $erreur = "Les mots de passe ne corrspondent pas !";

    } else {

        require_once("db_connexion.php");

        $sel = $conn->prepare("SELECT id FROM utilisateurs WHERE login=? LIMIT 1");

        /* $sel = $conn->prepare("SELECT id FROM utilisateurs WHERE login=? LIMIT 1");

        $sel : C'est une variable qui va contenir la préparation de la requête SQL. Elle est généralement nommée de manière significative pour indiquer qu'il s'agit d'une requête SELECT.

        $conn : représente une connexion à la base de données. Dans la plupart des cas, il s'agit d'un objet de connexion créé en utilisant une extension PHP comme PDO (PHP Data Objects) ou MySQLi.

        prepare() : C'est une méthode utilisée pour préparer une requête SQL. Cela permet de créer une requête SQL paramétrée dans laquelle vous pouvez remplacer des valeurs spécifiques par des paramètres.

        "SELECT id FROM utilisateurs WHERE login=? LIMIT 1" : C'est la requête SQL elle-même. Cette requête sélectionne la colonne "id" dans la table "utilisateurs" où la colonne "login" correspond à une valeur spécifiée. Le ? est un espace réservé pour un paramètre. Le LIMIT 1 signifie que la requête renverra au maximum une seule ligne correspondante.

        Une fois que la requête est préparée, vous pouvez la réutiliser avec différentes valeurs pour le paramètre "login". Vous devrez ensuite exécuter la requête en passant la valeur du paramètre.
        */

        $sel->execute([$login]);
        $row = $sel->fetch(PDO::FETCH_ASSOC);

        if ($row) {

            $erreur = "Ce login existe déjà";
        } else {

            $hashedPass = md5($pass);

            $ins = $conn->prepare("INSERT INTO utilisateurs (nom , prenom , login , pass) VALUES (?,?,?,?)");

            if ($ins->execute([$nom, $prenom, $login, $hashedPass])) {

                header("Location: login.php");
                exit();
            } else {

                $erreur = "Une erreur est survenue lors de l'inscription";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">

    <style>
        form {
            text-align: center;
        }


        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .erreur {
            color: #cc0000;
            margin-bottom: 10px;
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        label {
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>Inscription</h1>
    <div class="erreur"><?php echo $erreur ?></div>
    <form name="fo" method="post" action="">
        <input type="text" name="nom" placeholder="Nom" value="<?php echo $nom ?>" /><br />
        <input type="text" name="prenom" placeholder="Prénom" value="<?php echo $prenom ?>" /><br />
        <input type="text" name="login" placeholder="Login" value="<?php echo $login ?>" /><br />
        <input type="password" name="pass" placeholder="Mot de passe" /><br />
        <input type="password" name="repass" placeholder="Confirmer Mot de passe" /><br />
        <input type="submit" name="valider" value="S'inscrire" />
    </form>
</body>

</html>