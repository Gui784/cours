// [ source: https://github.com/oc-courses/intro-javascript ]
/* 
* Exo 1: * Ecrivez un programme qui fait saisir un nom de jour à l'utilisateur,
* puis affiche le nom du jour suivant.
* S'il y a des erreurs de saisie (jour incorrect), cela doit être géré !
* A toi de voir comment.
*/

// code ici

var jour = prompt("Quelle jour somme-nous ?");

if(jour === "lundi"){
    document.write("Demain nous serons Mardi");
} 

else if(jour === "mardi"){
    document.write("Demain nous serons Mercredi");
} 

else if(jour === "mercredi"){
    document.write("Demain nous serons Jeudi");
}

else if(jour === "jeudi"){
    document.write("Demain nous serons Vendredi");
}

else if(jour === "vendredi"){
    document.write("Demain nous serons Samedi");
} 

else if(jour === "samedi"){
    document.write("Demain nous serons Dimanche");
}

else if(jour === "dimanche"){
    console.log("Demain nous serons Lundi");
}

else {
    console.log("Jour inconnu");
}

/* 
* Exo 2:
* Complétez ce programme pour afficher l'heure qu'il sera dans une seconde.
* Attention, ce programme est moins simple qu'il en a l'air : validez votre solution 
* en la testant avec les entrées suivantes. Vous devez obtenir les résultats indiqués.
    14h17m59s => 14h18m0s
    6h59m59s => 7h0m0s
    23h59m59s => 0h0m0s (minuit)
*/


let heures = 14; // Faire varier cette variable entre 0 et 23
let minutes = 17; // faire varier cette variable entre 0 et 59
let secondes = 59; // faire varier cette variable entre 0 et 59

// Ajoutez votre code ici

heures = prompt(`Entrez l'heure :`);
minute = prompt(`Entrez les minutes :`);
seconde = prompt(`Entrez les secondes :`);

document.write(`Il est ${heure} h ${minute} m ${seconde} s`);

if((heure >= 0) && (heure <=23) && (minute >= 0) && (minute <=59) && (seconde >= 0) && (seconde <=59)){
    seconde++;

    if(seconde === 60){
        seconde = 0;
        minute++

        if (minute === 60){
            minute = 0;
            heure++;
            
            if(heure === 24){
                heure = 0;
            }
        }
    }

}

/*
* Exo 3 
*
* Ecrivez un programme qui fait saisir la note d'examen d'un étudiant. 
* => utiliser: let moyenne = Number(prompt("Entrez une moyenne de baccalauréat :"));
* puis affiche si ce candidat est recalé (moyenne inférieure à 10), 
* reçu (moyenne entre 10 et 12) 
* ou reçu avec mention (moyenne supérieure ou égale à 12).
* Essayer avec méthode "if... else" 
*
* Tester le même exercice avec "switch" 
*   -> la moyenne est sur 10
*   -> si de 1 à 4: recalé
*   -> si 5: reçu
*   -> + de 5: reçu avec mention
*/
var moyenne = parseFloat(prompt("Quel est ta moyenne au bac?"));

if(moyenne < 10){
    document.write(`Tu est recalé`);
    // J'affiche qu'il est recalé sur le site

    }else if((moyenne >=10) && (moyenne <12)){
        // sinon, si la moyenne est entre 10 et 12

        document.write(`Tu passes !`)
        // J'affiche que le candidat passe

    }else if((moyenne >=12) && (moyenne <=20)){
        document.write(`bravo pour la mention`)
        // J'affiche qu'il a une mention
    }else{

        document.write(`Vous n'avait pas saisi une moyenne correcte (en 0 et 20)`)
    }