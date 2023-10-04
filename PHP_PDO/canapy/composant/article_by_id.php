<!-- Start Column -->



<div class="col-12 col-md-4 col-lg-3 mb-5">
    <a class="product-item" href="single_article.php?id_article=<? echo $_GET['id_article'] ?>">
        <img src="images/upload/<?php echo $article['image']; ?>" class="img-fluid product-thumbnail">
        <h3 class="product-title"><?php echo $article['title']; ?></h3>
        <strong class="product-price"><?php echo $article['price']; ?>€</strong>

        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label class="text-black" for="fname">Titre de l'article</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="text-black" for="lname">Prix</label>
                        <input type="number" class="form-control" step="0.01" name="price">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-black" for="email">Image de l'article</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group mb-5">
            </div>
        </form>

</div>
</a>
</div>

<!-- End Column -->