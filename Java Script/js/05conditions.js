// Structure de base IF

if (true){
//par défaut la condition à vérifier le IF vérifie si elle est vraie

// ----- CODE -----


}
var nb1 = 10;
if  (nb1 < 50){
    
    console.log("nb1 est bien inférieur à 50")

}

// ELSE

if (true){

    // ---- code si VRAI ----

}
else{

    // ---- code si FAUX ----

}

if  (nb1 > 50){
    
    console.log("nb1 est bien supérieur à 50")

}

else{

     console.log("nb1 est bien inférieur à 50")   

}

// EXERCICE

// On utilise le if pour vérifier l'age de l'internaute

// si il est majeure je le souhaite la bienvenue
// si il rdt mineur je lui signale et le renvoie dans un autre site

// 1- Je déclare la majorité légal
var majoriteFR = 18;

// 2- DEmander l'age en s'assurant que nous avons un NUMBER
var age = parseInt(prompt("Indiquez votre age"))

// -3 Je vérifie si mon internaute est majeur

if (age >= majoriteFR){

    alert("Bienvenue , vous pouvez accéder a se site")

}

else{

    // si il est mineur je lui signale
    alert("Désolé , vous n'avez pas accés a se site")

    // et ensuite je redirige sur un autre site
    document.location.href="https://www.google.fr/"

}


