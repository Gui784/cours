<?php 

// echo "Wow" ; 

$connexion = true ;

if(!empty($_POST));{

    extract($_POST);

    if(!empty($email) && !empty($password)){

        $passwordCrypted = md5($password);

        $sqlSelectUser = "SELECT * FROM user WHERE email = '$email' AND password = '$passwordCrypted'";

        $tableSelectUser = mysqli_query($db_connect , $sqlSelectUser);

        $user = mysqli_fetch_assoc($tableSelectUser);

       echo "<pre>";
       print_r($user); 
       echo "</pre>"; 

        if( mysqli_num_rows($tableSelectUser) == 1 ){

            session_start();
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['lastname'] = $user['lastname'];
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['date_register'] = $user['date_register'];
            $_SESSION['user_statut'] = $user['user_statut'];

            if($user['user_statut'] == 0){

                header('Location: ../index.php');

            }elseif($user['user_statut'] == 1){

                header('Location: ../index.php');

            }elseif($user['user_statut'] == 2){

                header('Location: index.php');

            }else {

            $connexion = false;
            $text = "L'adresse mail ou le mot de passe sont incorrecte";

            // echo $text;

        }

        } 

    }

    }

?>