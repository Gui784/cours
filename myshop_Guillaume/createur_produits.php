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
    <link href="./assets/css/form.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<?php

require_once("./lib/db_connexion.php");
require_once("./lib/select_product.php");
require_once("./lib/traitement_createur.php");



?>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="./index.php">Consulter Tous les Produits</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->



        </div>
    </header><!-- End Header -->

    <section style="background-color: #106eea;">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Créer un Produit</h3>
                            <p>Compléter les champs si dessous puis valider </p>
                            <form class="requires-validation" method="POST" action="./lib/traitement_createur.php" enctype="multipart/form-data" novalidate>

                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="title" placeholder="Titre du Produit" required>
                                    <div class="valid-feedback">Titre Valide</div>
                                    <div class="invalid-feedback">Titre Incorrecte !</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="price" placeholder="Prix du Produit" required>
                                    <div class="valid-feedback">Prix Valide</div>
                                    <div class="invalid-feedback">Prix Incorrecte !</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <textarea class="form-control" type="text" name="description" placeholder="Description du Produit" required></textarea>
                                    <div class="valid-feedback">Description Valide</div>
                                    <div class="invalid-feedback">Description Incorrecte !</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="city" placeholder="Ville" required>
                                    <div class="valid-feedback">Ville valide</div>
                                    <div class="invalid-feedback">Cette ville n'existe pas !</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="postal_code" placeholder="Code Postal" required>
                                    <div class="valid-feedback">Code Postal Valide</div>
                                    <div class="invalid-feedback">Ce code postal n'existe pas !</div>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" name="image" placeholder="Choisir une image" required>
                                    <div class="form-button mt-3">
                                        <input style="background-color: midnightblue;" id="submit" type="submit" class="btn btn-primary" value="Créer"></input>
                                    </div>
                            </form>
                        </div>
                    </div>
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

    <script>
        (function() {
            'use strict'
            const forms = document.querySelectorAll('.requires-validation')
            Array.from(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

</body>

</html>