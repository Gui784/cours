<?php

foreach ($articles as $produit) {

?>

    <div class="col-12 col-md-4 col-lg-3 mb-5">
        <a class="product-item" href="single_article.php?id_article=<?php echo $produit['id_article'];?>">


            <img src="images/upload/<?= $produit['image'] ?>" class="img-fluid product-thumbnail">
            <h3 class="product-title"><?= ucfirst($produit['title']); ?></h3>
            <strong class="product-price"><?= $produit['price']; ?> €</strong>

            <span class="icon-cross">
                <img src="images/cross.svg" class="img-fluid">
            </span>
        </a>
    </div>

<?php
}
?>