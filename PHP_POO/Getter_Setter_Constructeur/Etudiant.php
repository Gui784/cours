<?php 

class Etudiant{

// Propriété privée
private $prenom;

public function __construct($arg){

    // __construct :Méthode appellée automatiquement lors de l'instanciation de la classe ('new') On ne peut pas déclarer 2 constructeur 

    echo "Intanciation , Nous avons reçu l'information suivante: $arg" ;
    $this->setPrenom($arg); 
    
}

public function setPrenom($arg){

    $this->prenom = $arg;

}

public function getPrenom(){

    return $this->prenom;

}

}

$etudiant1 = new Etudiant('Guillaume');
// __construct() est appelé automatiquement , nous avons mis un argument aprés le nom de la classe qui attérit directement dans le constructeur .

echo "<br> Prénom : " . $etudiant1->getPrenom();
//__construct() sera équivalent du init avec session_start() , connexion à la BDD , autoload , etc
// __construct est une méthode magique