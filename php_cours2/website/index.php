<?php
                $adminInfo = file_get_contents('logs/donnees.json', true);
                $adminArray = json_decode($adminInfo , true);

                print_r($adminArray);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"><?php echo $_POST['title'] ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="zbi bg-dark py-5" style="background-color: <?php echo $_POST['color'] ."!important";?>">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" ><?php echo $_POST['title_header'] ?></h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php echo $_POST['subtitle'] ?></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">

                <?php

                  echo "Ok";

                ?>

                <form method="post" id="form_user">

                    <label for="email">Email : </label>
                    <input type="email" id="email" name="email" placeholder="Insérez votre Email">

                    <br>

                    <label for="firstname">Prénom</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Votre Prénom">

                    <br>

                    <label for="lastname">Nom</label>
                    <input type="text" id="lastname" name="lastname">

                    <br>

                    <input type="color" name="color">

                    <br>

                    <input type="submit" value="Je m'inscris" name="validate">

                </form>

                <br>
                <br>

                <form method="POST" id="formu">

                <label for="color">Couleur du header</label>

                <br>
                <input type="text" id="title" name="title" placeholder="Titre du site">
                <label type='text'></label>                
                <br>
                <input type="text" id="title_header" name="title_header" placeholder="Titre du header">
                <label type='text'></label>
                <br>
                <input type="text" id="subtitle" name="subtitle" placeholder="Sous titre du header">
                <label type='text'></label>
                <br>
                <input type="file" id="pictures" name="pictures" placeholder="Image du produit">
                <label type='file'></label>
                <br>
                <input type="color" value="color" name="color">
                <input type="submit" value="Mettre à jour">

                <?php

                if(!empty($_POST)){


                    if(!empty($_POST['title_header']) && !empty($_POST['title']) && !empty('subtitle'));

                $title_header = $_POST['title_header'];  
                $title = $_POST['title']; 
                $subtitle = $_POST['subtitle']; 


                $data = array(
                 'color' => $_POST['color'],
                 'titre_header' => $_POST['title_header'],                      
                 'sous_titre' => $_POST['subtitle'],
                 'titre_site' => $_POST['title'],
                 'image' => $_POST['pictures'],
                );

                $jsonData = json_encode($data);

                $nomJSON = fopen('logs/donnees.json','w');
                fwrite($nomJSON , $jsonData);
                fclose($nomJSON);


                };


                
                ?>


                </form>


                <!-- <?php

                // echo "<pre>";
                //  print_r($_POST);
                // echo "</pre>"; -->


                // Si mon prénom fait moins de 5 charactéres affiche un message d'erreur

                // $prenom = $_POST["firstname"];
                // $color = $_POST["color"];


                // if (strlen($prenom) < 5){

                //    echo "non";

                // } else {

                //     echo "oui";

                //     $file = fopen('logs/couleur.txt','a');
                //     $log = "La couleur choisis est : " . $color ;

                //     fwrite($file ,$color);

                //     fclose($file);

                //     echo "<style>.zbi{background-color:$color!important}</style>";
                // }


                // ?>

                

                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                
                <form method="POST" enctype="multipart/form-data"> 
                    <div class="form-group">
                        <label for="exampleInputColor">Couleur du Bandeau</label>
                        <input type="color" class="form-control" id="exampleInputColor" name="colorFirst">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputColorTxt">Couleur du Texte</label>
                        <input type="color" class="form-control" id="exampleInputColorTxt" name="colorSecond">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputimg">Image du produit</label>
                        <input type="file" class="form-control" id="exampleInputimg" name="image_p">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTxt1">Titre du produit</label>
                        <input type="text" class="form-control" id="exampleInputTxt1" name="title_p">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTxt2">Texte du produit</label>
                        <input type="text" class="form-control" id="exampleInputTxt2" name="text_p">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputTxt2">Prix</label>
                        <input type="Number" class="form-control" id="exampleInputTxt2" name="price">
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Envoyer">
                </form>


                            <img class="card-img-top" src="<?php echo $_POST['image'] ?>"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"></h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
