<?php 

Class User{


    public $db;


    public function __construct($db){

        $this->db = $db;

    }

    public function register($form){

        echo "<pre>";
        print_r($form);
        echo "</pre>";

        extract($form);
        
        if($password == $repeatPassword && strlen($password) >= 8 ){

            // echo "Vos mots de passe sont similaires" ; 

          $verifEmail = $this->db->prepare("SELECT * FROM user WHERE `email` = :email");
          $verifEmail->bindParam(':email' , $email);
          $verifEmail->execute();

          $nb_ligne = $verifEmail->rowCount();

          if ($nb_ligne == 0) {
            
            $cryptedPass = md5($password);

            $power = 0;
            echo "wshh" ; 

            // echo "Email Valide" ; 

            $insertUser = $this->db->prepare("INSERT INTO user (`firstname`,`lastname`,`email`,`password`,`power`) VALUES (:firstname , :lastname , :email , :password , :power)");
            $insertUser->bindParam(':firstname' , $firstname);
            $insertUser->bindParam(':lastname' , $lastname);
            $insertUser->bindParam(':email' , $email);
            $insertUser->bindParam(':password' , $cryptedPass);
            $insertUser->bindParam(':power' , $power);

            $insertUser->execute();

            
          } else {

            // echo "Email deja existant" ; 

        }
   
        } else {

            // echo "Le mot de passe n'est pas identique ou inférieur à 8 caractéres" ; 

        }



    }

    public function login($connect){

        extract($connect);

        $cryptedPass = md5($password);

        $login = $this->db->prepare("SELECT * FROM user WHERE `email` = :email AND `password` = :password ");

        $login->bindParam(':password' ,$cryptedPass );
        $login->bindParam(':email' , $email);

        $login->execute();

        $nb_ligne = $login->rowCount();


        if ($nb_ligne == 1){

            $userInfo = $login->fetch(PDO::FETCH_ASSOC);

           $_SESSION['id_user'] = $userInfo['id_user'];
           $_SESSION['firstname'] = $userInfo['firstname'];            
           $_SESSION['lastname'] = $userInfo['lastname'];
           $_SESSION['email'] = $userInfo['email'];
           $_SESSION['power'] = $userInfo['power'];

        } else {

            echo "<p style="."color:red"."> Erreur dans le mot de passe ou l'adresse mail vérifié vos champs !</p>" ; 

        }
    }

    public function deconnect(){

       session_unset();
       session_destroy();
       header("Location: ../index.php");

    }


}

?>