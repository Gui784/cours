<?php 


Class User{

public $nom;
public $prenom;
public $email;

public function _contsruct($lastname , $firstname , $email){

    $this->nom = $lastname ;
    $this->prenom = $firstname;
    $this->email = $email;


}

public function presentation(){

    echo $this->nom . " " . $this->prenom . ", email : " . $this->email; ; 

}

}

$utilisateur = new User ("Krervoern" , "Guillaume","guillaumek53@gmail.com");
$utilisateur->presentation();

?>