    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!"><img style="height: 50px;" src="backoffice/img/logo/logo_ia.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                </ul>

                <?php if (empty($_SESSION)) { ?>

                    <h3 style="margin:auto;">Bienvenue !</h3>

                    <form class="d-flex" style="margin-right: 10px;">
                        <a class="btn btn-outline-dark" href="backoffice/login.php">
                            <i class="bi-box-arrow-in-right me-1"></i>
                            connexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="backoffice/register.php">
                            <i class="bi-file-earmark-diff me-1"></i>
                            inscription
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                <?php } else { ?>

                    <h3 style="margin:auto;">Bienvenue <?php echo $_SESSION['firstname'] ?> ! </h3>

                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="./backoffice/lib/deconnexion.php">
                            <i class="bi-file-earmark-diff me-1"></i>
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
                            <a class="btn btn-outline-dark" href="./backoffice/index.php">
                                <i class="bi-file-earmark-diff me-1"></i>
                                Dashboard
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>

                <?php }
                } ?>

                    <button  class="btn btn-outline-dark flex-shrink-0 " type="button">
                    <i class="bi-cart-fill me-1"></i>
                     Panier
                    </button>
            </div>
        </div>
    </nav>