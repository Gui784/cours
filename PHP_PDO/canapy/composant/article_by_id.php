<!-- Start Column -->



<div class="col-12 col-md-4 col-lg-3 mb-5">
    <a class="product-item" href="cart.php">
        <img src=" images/upload/<?php echo $article['image']; ?>" class="img-fluid product-thumbnail">
        <h3 class="product-title"><?php echo $article['title']; ?></h3>
        <strong class="product-price"><?php echo $article['price']; ?>€</strong>

        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>

        <form method="post" action="cart.php">
            <input type="hidden" name="id_article" value="<?php echo $article['id_article']; ?>">
            <input type="hidden" name="title" value="<?php echo $article['title']; ?>">
            <input type="hidden" name="price" value="<?php echo $article['price']; ?>">
            <input type="hidden" name="image" value="<?php echo $article['image']; ?>">
            <input type="submit" value="ajouter au panier">
            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">

        </form>

</div>

<!-- End Column -->