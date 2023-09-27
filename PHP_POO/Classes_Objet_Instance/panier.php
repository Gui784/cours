<?php 


class Panier{

// Propriété publique
public $nbProduit;
// Cette propriété stockera le nombre de produits dans le panier

// Méthode public
public function ajouterArticle(){

    // Traitements
    return "L'article à bien été ajouté !";
    // Cette méthode renvoie un message de confirmation 


}

// Méthode protégée (accessible uniquement dans la classe et ses classes dérivées)
protected function retirerArticle(){

    // Traitements
    return "L'article à bien été retiré !";
    // Cette méthode renvoie un message de confirmation 



}

// Méthode privée (accessible uniquement dans la classe)
private function affichageArticle(){

    // Traitements
    return "Voici les articles !";
    // Cette méthode renvoie un message de confirmation


}

}

// ------------------------------------------------------

$panier1 = new Panier;
// new Panier = Instanciation(permet de déployer l'objet issue de la classe Panier et permet de passer d'une classe à l'objet)
// $panier1 représente un objet
var_dump($panier1);
// var_dump affiche des informations sur l'objet , y compris son type , son nom de classe et sa référence

$panier1 ->nbProduit = 5;
//  On assigne la valeur à la propriété publique $nbProduit de l'objet $panier1

echo "<br>Panier 1 : " . $panier1->nbProduit . " produits <br>"; 
// On affiche la propriété publique $nbProduit de l'objet $panier1

echo "<br>Panier 1 : " . $panier1->ajouterArticle() . "  <br>" ; 
// On appelle ici la méthode public ajouterArticle() de l'objet $panier1 et affiche le résultat

// echo "<br>Panier 1 : " . $panier1->retirerArticle() . "  <br>" ;
// On tente d'appeler la méthode protégée retirerArticle() , ce qui génére une erreur 

// echo "<br>Panier 1 : " . $panier1->affichageArticle() . "  <br>" ;
// On tente d'appeler la méthode privée afichageArticle() , ce qui génére une erreur 

$panier2 = new Panier ;
// Création d'un nouvel objet $panier2 à partir de la class Panier

$panier2->nbProduit = 10;
echo "<br> Panier 2 : " . $panier2->nbProduit . " produits <br>";
//  On assigne la valeur à la propriété publique $nbProduit de l'objet $panier2


?>