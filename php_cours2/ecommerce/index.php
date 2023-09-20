<?php

session_start();

require_once('./backoffice/lib/db.php'); // Fichier qui donne accés à la BDD 
require_once('./backoffice/lib/select_product.php'); //requête SQL SELECT de la table produit

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MyShop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>



<body>
    <!-- Navigation-->
<?php 

include_once("./composant/nav.php");

?>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>


    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php

                foreach ($product as $key) {

                ?>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sold badge -->
                            <?php

                            if (!empty($key['discount'])) {

                            ?>

                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale <?php echo " -" . $key['discount'] . "%"  ?></div>

                            <?php } ?>

                            <!-- Product image-->
                            <img class="card-img-top" style="height: 200px;" src="./backoffice/img/<?php echo $key['image'] ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $key["title"] ?></h5>
                                    <!-- Product price-->
                                    
                                    <?php

                                    if (!empty($key['discount'])) {

                                    ?>
                                        <del style="color: gray;"> <?php echo $key["price"] . "€" ?> </del>

                                        <br>

                                        <p style="font-size:larger ;"><?php echo "". $key['price'] - (($key['discount'] / 100) * $key['price']) . " €"; ?> </p> 

                                <?php } else{ ?>                                     
                                    
                                    <p style="font-size:larger ;"><?php echo $key["price"] . "€" ;  ?></p>
                                    
                                    <?php } ?>
  
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./single_article/page_produit.php?idproduit=<?php echo $key["id_product"] ?>">Consulter</a></div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>