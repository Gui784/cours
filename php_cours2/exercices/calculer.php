<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>formulaire inscription</title>
    <style type="text/css">
        td {
            height: 40px;
        }
    </style>
</head>

<body>

    <form method="Post">
        <fieldset>
            <table>
                <tr>
                    <td><label>Nombre 1</label></td>
                    <td><input type="text" placeholder="saisir votre nombre 1" name="nombre1" /> </td>
                </tr>
                <tr>
                    <td><label>Nombre 2</label></td>
                    <td><input type="text" placeholder="saisir votre nombre 2" name="nombre2" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" name="calculer" value="calculer" /> 
                    <input type="reset" value="Annuler" /></td>
                </tr>
            </table>
        </fieldset>
        </form>

<?php

$nombre1 = $_POST["nombre1"]; 
$nombre2 = $_POST["nombre2"];

$resultat = ($nombre1 + $nombre2);
echo "<br>" . $resultat . "<br>";

?>

</body>

</html>