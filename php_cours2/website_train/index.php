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
        <style>
            form{
                width: 400px;
                margin: auto;
            }
        </style>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: <?php echo $_POST['colornav']. "!important" ?>">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!" style="color: <?php echo $_POST['colorSecond'] ?>">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!" style="color: <?php echo $_POST['colorSecond'] ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!" style="color: <?php echo $_POST['colorSecond'] ?>">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: <?php echo $_POST['colorSecond'] ?>" >Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!" style="color: <?php echo $_POST['colorSecond'] ?>">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!" style="color: <?php echo $_POST['colorSecond'] ?>">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!" style="color: <?php echo $_POST['colorSecond'] ?>">New Arrivals</a></li>
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
        <header class="bg-dark py-5" style="background-color: <?php echo $_POST['colorFirst']. "!important" ?>">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" style="color: <?php echo $_POST['colorSecond'] ?>">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0" style="color: <?php echo $_POST['colorSecond'] . "!important" ?>">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5"style="background-color: <?php echo $_POST['colornav']. "!important" ?>">
            <div class="container px-4 px-lg-5 mt-5" style="display:flex;">

                <form method="POST" enctype="multipart/form-data"> 
                    <div class="form-group">
                        <label for="exampleInputColor">Couleur du Bandeau</label>
                        <input type="color" class="form-control" id="colorFirst" name="colorFirst">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputColor">Couleur Navbar / Fond </label>
                        <input type="color" class="form-control" id="colornav" name="colornav">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputColorTxt">Couleur du Texte</label>
                        <input type="color" class="form-control" id="colorSecond" name="colorSecond">
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
                


                <?php



            if(!empty($_POST)){


            if(!empty($_POST['title_header']) && !empty($_POST['title']) && !empty('subtitle'));


                $data2 = array(
                 'colorFirst' => $_POST['colorFirst'],
                 'colorSecond' => $_POST['colorSecond'],  
                 'colornav' => $_POST['colornav'],                                   
                 'title_p' => $_POST['title_p'],
                 'text_p' => $_POST['text_p'],
                 'price' => $_POST['price'],
                );

                $type = $_FILES['image_p']['type'];

                $jsonData = json_encode($data2);

                if($type = "image/png" || $type =  "image/jpeg" || $type =  "image/jpg"){

                $nomJSON = fopen('logs/donnees.json','w');
                fwrite($nomJSON , $jsonData);
                fclose($nomJSON);

                }else {

                    echo "Veuillez refaire le formulaire en vérifiant l'extension de l'image";

                };
                
                  

                move_uploaded_file($_FILES['image_p']['tmp_name'], '../website_train/assets/' . basename($_FILES['image_p']['name']));

                };

                $a = 2;
                $b = 12;
                $r = $a + $b;

                ?>



                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <div class="col mb-5" style="width: 400px">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo "../website_train/assets/" . $_FILES['image_p']['name']; ?>" alt="image" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" style="color: <?php echo $_POST['colorSecond'] ?>"><?php echo $_POST['title_p'] ?></h5>
                                    <!-- Product reviews-->
                                    <h4 class="fw-bolder" style="color: <?php echo $_POST['colorSecond'] ?>"><?php echo $_POST['text_p'] ?></h4>

                                    <!-- Product price-->
                                    <p style="color: <?php echo $_POST['colorSecond'] ?>"><?php echo $_POST['price'] ?> € </p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" style="color: <?php echo $_POST['colorSecond'] ?>">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark" style="background-color: <?php echo $_POST['colorFirst']. "!important" ?>">
            <div class="container"><p class="m-0 text-center text-white" style="color: <?php echo $_POST['colorSecond'] ."!important" ?>"> Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>



    </body>
</html>
