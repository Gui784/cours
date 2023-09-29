<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BizLand Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php


require_once("./lib/traitement_reservation_text.php");
require_once("./lib/select_product.php");


$idProduit = $_GET['idproduit'];

$produitSelect = mysqli_fetch_all(mysqli_query($db_connect, "SELECT * FROM `produit` WHERE id_produit = $idProduit"), MYSQLI_ASSOC);

// echo "<pre>";
// print_r($produitSelect);
// echo "</pre>";

?>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="./createur_produits.php">Créer Un Produit</a></li>
                    <li><a class="nav-link scrollto active" href="./index.php">Consulter Tous les Produits</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section id="product" class="d-flex align-items-center">
        <div class="d-flex">
            <div class="d-flex align-items-center">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body p-4">

                        <?php if ($produitSelect[0]['reservation_text'] == NULL) { ?>
                            <img style="height: 200px;" src="./img/<?php echo $produitSelect[0]['image'];  ?>">
                        <?php } else { ?>
                            <img style="height: 200px;" src="./img/reservation/depositphotos_165024012-stock-illustration-reserved-rubber-stamp.jpg  ?>">
                        <?php } ?>
                        <h5 style="text-transform: uppercase;"> <?php echo $produitSelect[0]['title'];  ?></h5>
                        <p class="small text-muted font-italic"><?php echo $produitSelect[0]['description'] ?></p>
                        <p class="prix"><?php echo $produitSelect[0]['price'];  ?> €</p>
                        <br>
                        <h6 class="ville"><?php echo $produitSelect[0]['city'];  ?></h6>
                        <p class="postal"><?php echo $produitSelect[0]['postal_code'];  ?></p>

                        <?php if ($produitSelect[0]['reservation_text'] == NULL) { ?>
                            <form action="./lib/traitement_reservation_text.php?idproduit=<?php echo $produitSelect[0]["id_produit"] ?>" method="POST">
                                <textarea rows="5" cols="25" name="reservation_text"></textarea>
                                <button type="submit" value="Je Réserve" style="background-color: #1E90FF; color: white;">Je Réserve</button>
                            </form>
                        <?php } else { ?>
                            <p style=" color: white; background-color:red;"></p>
                        <?php } ?>


                    </div>
                </div>
            </div>
    </section>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>