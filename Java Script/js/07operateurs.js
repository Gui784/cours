// l'opérateur ET : && ou AND

// Si je cumule 2 conditions :

// => prenom === prenomLogin
// => age === ageLogin

// Pour que les 2 correspondent pour être validés il faut les associer 

if ((prenomLogin === prenom) && (ageLogin === age)){

    // Je ne rentre ici que si les 2 conditions sont VRAIES

}

/*

if ((A) && (B)){

=> si A est FAUX et B est VRAI => FAUX
=> si A est VRAI et B est FAUX => FAUX
=> si A est FAUX et B est FAUX => FAUX
=< si A est VRAI et B est VRAI => VRAI

}


*/


// L'opérateur OU : || ou OR 

/*
if ((C) || (D)){

=> si C est FAUX et D est VRAI => VRAI
=> si C est VRAI et D est FAUX => VRAI
=> si C est FAUX et D est FAUX => FAUX
=> si C est VRAI et D est VRAI => VRAI

}

*/

// L'opérateur "!" signifie : le contraire de ...

var utilisateurLog = true;

if(!utilisateurLog){

}

if(utilisateurLog == false){

}

