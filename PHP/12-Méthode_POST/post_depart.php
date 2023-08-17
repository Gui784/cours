<?php

include "../Nav_global/nav.php";

?>

<!-- Un formulaire codé en HTML et CSS n'a pas d'utilité . On doit lui ajouter un traitement PHP pour pouvoir récupérer les infos renseignées dedans et les utiliser plus tard .C'est PHP qui va rendre dynamique le formulaire , sinon , ce n'est qu'un simple affichage -->

<!-- Pour que le formulaire soit connecté à la méthode POST , il faut absolument écrire dans la balise form method = POST action qui sert à autre chose -->

<form method=POST action="">
    <!-- Dans les attributs du champ Prénom ci dessous , seul name = prenom est important , obligatoire en PHP , pour que les informations puissent être récupérées et envoyées en BDD . for (dans label et id dans input n'ont aucune importance pour PHP et l'envoi en BDD . Ils sont par contre utiles en affichage pour l'UX , améliore l'expérience utilisateur) -->

    <!-- L'attribut name est indispensable  pour que les données puissent être envoyé en BDD -->

    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre Prénom">
    <br><br>
    <label for="description">Description</label>
    <textarea name="description" id="description" cols="15" rows="3" placeholder="Votre description"></textarea>
    <br><br>
    <label for="annee">Année de naissance</label>
    <select name="annee" id="annee">
        <?php

            for($annee = date('Y'); $annee >= date('Y') -100 ; $annee --) {

                echo "<option> $annee </option>";

            }

        ?>
    </select>
    <br><br>
    <input type="submit" value="Soumettre">


</form>

<!-- Si je n'écris pas cette condition if($_POST) j'aurais droit aux warning , undefined key prenom , undefined key description etc... C'est normal , au premier changementb de la page , le formulaire est vide , aucune info n'a encore transitée d'ou le undefined  -->

<!-- Ci dessous , syntaxe contractée pour une condition if() . Elle permet de générer p;lus rapidement du code HTML que si on était dans un grand passage PHP nécessitant beaucoup d'echo -->

<?php if($_POST): ?>

<!-- J'ai besoin de la supergloba $_POST pour récupére les infos qui ont transité dans le formulaire , je crochéte ensuite aà l'indice qui m'interesse -->

<ul>

<li>Prénom : <?= $_POST['prenom'] ?></li>
<li>Description : <?= $_POST['description'] ?></li>
<li>Année de naissance: <?= $_POST['annee'] ?></li>

</ul>    

<!-- La syntaxe contractée if() nécessite pour fermer mon endif sinon erreur PHP -->

<?php endif; ?>