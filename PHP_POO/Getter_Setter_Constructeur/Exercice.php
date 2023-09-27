<?php 

// Exercie:
// Créer une classe Membre , avec les propriétés pseudo et mdp
// le pseudo doit etre inférieur à 11 caractéres  et supérieur à 0 ET QUE CE SOIT UN STRING 

// OBJECTIF : Affiche le pseudo et le mdp
 
class Membre{

    private $pseudo;
    private $mdp;

    public function __construct($arg , $arg1){

        $this->setPseudo($arg);
        $this->setMdp($arg1);

    }

    public function setPseudo($arg){

        if(is_string($arg)){

            if ((strlen($arg) > 0) && (strlen($arg) < 15)){

                $this->pseudo = $arg;

            } else {

                echo "Le Pseudo ne respecte pas les limites de caractéres <br>" ; 

            }

        } else {

            echo "Le Pseudo n'est pas une chaine de caractéres <br>" ; 

        }

}

    public function getPseudo(){

        return $this->pseudo;
        
    }

    public function setMdp($arg1){

         $this->mdp = $arg1;
          
    }

    public function getMdp(){

        return $this->mdp ;

    }

}

$compte = new Membre ('Guillaume ' ,' mdp12345');

echo "Pseudo : " . $compte->getPseudo() . " <br> Mot de passe : " . $compte->getMdp() ."<br>" ; 

?>