<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>PHP</h1>
    <h2>Premier cours</h2>

    <?php

      $prenom = "Guillaume";
      echo $prenom;

      $age = 21;
      $vrai = TRUE;
      $float = 19.50;
      
     if($age >= 18){

        echo "<br> L'utilisateur est majeur ";

     } else {

        echo "<br> L'utilisateur est mineur ";

     }

     for($i = 0; $i < 20; $i++)

     echo " <br> <div>Produit numéro $i </div>";

     $color = array('midnightblue' , 'blue' , 'cyan' , 'skyblue');

     var_dump($color);
     echo "<br>";
     print_r($color);

     foreach($color as $c){

     echo "<br> $c ";

     }

     for($o = 0; $o < count($color) ; $o++){

     echo "<br>" . $color[$o];    

     }

    //  créer 4bloc HTML de 50px de largeur et de longueur avec comme background-color les valeurs du tableau color

    for($o = 0; $o < count($color) ; $o++){

        echo "<br> <div style='background-color: $color[$o]; height:50px; width:50px; '></div>";

    }

    function verifAge( $age ){

    if($age >= 18){

     echo "<br> OK";

    } else {

        echo "<br> Erreur accés refuser";

    }

    }

    verifAge(22);
    verifAge(16);
    
    // Créer une fonction initiale qui prend comme paramétres votre Nom et Prénom et qu renvoie la premiére lettre de chaque chaine

    function nameInit($prenom , $nom){

    echo "<br>";

    echo "$prenom[0] $nom[0]";

    echo "<br>" . substr($prenom, 0, 1) . " . " . substr($nom, 0, 1);

    }

    nameInit("Guillaume" , "Kervoern");

    function dice (){

        $result = random_int(0 , 20);
        echo "<br>";
        echo $result ;

        if($result == 20){

            echo "<br> Réussite";

        } elseif($result == 0){

            echo "<br> Echec";

        } else{

            echo "<br>" . $result ;

        }

    }

    dice();


    // Créer une fonction qui prend comme paramétre couleur qui aura pour but de créer un bloc html avec les dimensions précédemment données via les paramétres

    function createDiv($bgcolor){

        $height = random_int(10 , 140) ;
        $width = random_int(10 , 140);

       echo "<div style='height:" .$height ."px;width:" . $width . "px;background-color:" . $bgcolor ."'></div>" ;


    }

    createDiv('red');

    function calculatrice($ch1 , $ch2 , $operation){

        if($operation == "+"){

         echo $ch1 + $ch2;

        } else if ($operation == "-"){

         echo  $ch1 - $ch2;

        }else if ($operation == "*"){

         echo  $ch1 * $ch2;

        }else if ($operation == "/"){

         echo  $ch1 / $ch2;

        }

    }


    calculatrice(10 , 5 ,'+');
    echo "<br>";
    calculatrice(45 , 9 ,'-');
    echo "<br>";
    calculatrice(46 , 20 ,'*');
    echo "<br>";
    calculatrice(500 , 15 ,'/');

    ?>

</body>
</html>