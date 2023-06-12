// LES BOUCLES

// La boucle FOR

/* 
    for (3 arguments){
        ....code...
    }
 */

for(var i =1; i <= 10; i += 2){

    document.write("<p>Instruction exécutée : " + i + "</p>");

}

// La boucle WHILE (tant que)

//  trés utilisée quand on ne connaît pas le nombre de tours de boucles à l'avance

var j = 1; 
while(j <= 10){

    document.write("<hr><p>Instruction exécutée : " + j +"</p>")
    j++;

}

// EXERCICE

// J'ai 1000€ sur mon compte chaque mois je rajoute 50€ combien de temps me faut il pour avoir 2000€ ?

var euro = 1000;
var temps = 0;

while(euro < 2000){
    euro += 50;
    temps++;

}

document.write("<h3> Sous sur mon compte : " + euro + "</h3>");
document.write("<h3> Jusqu'à 2000€ , il me faut : " + temps + "</h3>");

//  Avec une boucle FOT

var time = 0;
for(var sous = 1000 ; sous < 2000 ; sous += 50);{

    document.write("<h3> Le mois suivant j'ai : " + sous + "</h3>");
    time++;

}

document.write("<h3> Il aura fallut : " + time + " mois </h3>");
