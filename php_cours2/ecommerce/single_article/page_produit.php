<?php

session_start();

require_once('../backoffice/lib/db.php'); // Fichier qui donne accés à la BDD 
require_once('../backoffice/lib/select_product.php'); //requête SQL SELECT de la table produit

// echo "<pre>";
// print_r($product);
// echo "</pre>";

$idProduit = $_GET['idproduit'];

$productSelect = mysqli_fetch_all(mysqli_query($db_connect, "SELECT * FROM `product` WHERE id_product = $idProduit"), MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Item - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!"><img style="height: 50px;" src="../backoffice/img/logo/logo_ia.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                </ul>

                <?php if (empty($_SESSION)) { ?>

                    <h3 style="margin:auto;">Bienvenue !</h3>

                    <form class="d-flex" style="margin-right: 10px;">
                        <a class="btn btn-outline-dark" href="../backoffice/login.php">
                            <i class="bi bi-box-arrow-in-right"></i>
                            connexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="../backoffice/register.php">
                            <i class="bi bi-r-circle"></i>
                            inscription
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                <?php } else { ?>

                    <h3 style="margin:auto;">Bienvenue <?php echo $_SESSION['firstname'] ?> ! </h3>

                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="../backoffice/lib/deconnexion.php">
                            <i class="fa-solid fa-rectangle-list" style="color: #000000;"></i>
                            Déconnexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                <?php } ?>

                <br>

                <?php if (!empty($_SESSION)) {

                    if ($_SESSION['user_statut'] == 2) {

                ?>


                        <form class="d-flex">
                            <a class="btn btn-outline-dark" href="../backoffice/index.php">
                                <i class="bi bi-gear"></i>
                                Dashboard
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>

                <?php }
                } ?>
                <form class="d-flex" style="margin-right: 10px;">
                    <a class="btn btn-outline-dark" href="../backoffice/panier.php">
                        <i class="bi bi-cart"></i>
                        Panier
                        <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../backoffice/img/<?php echo $productSelect[0]['image']  ?>" /></div>
                <div class="col-md-6">
                    <div class="small mb-1"></div>
                    <h1 class="display-5 fw-bolder"><?php echo $productSelect[0]['title'] ?></h1>
                    <div class="fs-5 mb-5">
                        <?php

                        if (!empty($productSelect[0]['discount'])) {

                        ?>
                            <del style="color: gray;"> <?php echo $productSelect[0]["price"] . "€" ?> </del>

                            <br>

                            <p style="font-size:larger ;"><?php echo "" . $productSelect[0]['price'] - (($productSelect[0]['discount'] / 100) * $productSelect[0]['price']) . " €"; ?> </p>

                        <?php } else { ?>

                            <p style="font-size:larger ;"><?php echo $productSelect[0]["price"] . "€";  ?></p>

                        <?php } ?>

                    </div>
                    <p class="lead"><?php echo $productSelect[0]['description'] ?></p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $i = 0;
                foreach ($product as $related) {
                    // echo $related["id_product"];
                    $i++;

                    if ($related["id_product"] != $idProduit && $i <= 4) {
                ?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <?php

                                if (!empty($related['discount'])) {

                                ?>

                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale <?php echo " -" . $related['discount'] . "%"  ?></div>

                                <?php } ?>
                                <!-- Product image-->
                                <img class="card-img-top" style="height: 200px;" src="../backoffice/img/<?php echo $related["image"] ?>" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $related["title"] ?></h5>
                                        <?php

                                        if (!empty($related['discount'])) {

                                        ?>
                                            <del style="color: gray;"> <?php echo $related["price"] . "€" ?> </del>

                                            <br>

                                            <p style="font-size:larger ;"><?php echo "" . $related['price'] - (($related['discount'] / 100) * $related['price']) . " €"; ?> </p>

                                        <?php } else { ?>

                                            <p style="font-size:larger ;"><?php echo $related["price"] . "€";  ?></p>

                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="index.php?idproduit= <?php echo $related['id_product'] ?>">Consulter</a></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class=" py-5 bg-dark">
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