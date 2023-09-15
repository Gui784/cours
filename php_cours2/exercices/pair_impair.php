<?php

$parite = ($_POST["nombre_p"]); 

if($parite == ""){
    echo "Veuillez entrer un chiffre";}

if ($parite % 2 == 0) {
    echo "nombre " .$parite . " est un nombre pair" . "<br>";
} else {
    echo "nombre " . $parite . " est un nombre impair" . "<br>";
}


?>

            <form method="Post">
                <fieldset>
                    <table>
                        <tr>
                            <td><label>Nombre 1</label></td>
                            <td><input type="text" placeholder="saisir votre nombre" name="nombre_p" /> </td>
                        </tr>
                        <tr>
                        <td colspan="2">
                        <input type="submit" name="calculer" value="calculer"/>
                        </td>
                        </tr>
                    </table>
                </fieldset>
            </form>