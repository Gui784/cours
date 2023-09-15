<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Nos Voyages</h1>
</header>

<section id="produit">
    <?php include 'produit.php' ?>
</section>
<!-- Ajout du lien de la page d'ajout du voyage -->

<a href="ajouter_voyage.php" class="redirection-ajout-voyage">Ajouter un Voyage</a>

<section id="footer">
    <?php include 'footer.php' ?>
</section>



</body>
</html>