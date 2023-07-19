// [ source: https://github.com/oc-courses/intro-javascript ]


// ===== Les variables ======

/* 
* Exo 1: Ecrivez un programme qui affiche votre nom, puis votre âge.
*/

let prenom = prompt("Entrez votre prénom");
let age = prompt("Entrez votre age");

alert("Bonjour , " + prenom + " tu as " + age + "ans");

/* 
* Exo 2: 
* Ecrivez un programme qui calcule et affiche le résultat de l'addition, 
* de la soustraction, de la multiplication et de la division de 9 par 3.
*/

var a = 9
var b = 3

c = a + b;
d = a * b;
e = a - b;
f = a / b;
console.log(c , d , e)


/* 
* Exo 3: 
* Observez le programme puis tentez de prévoir les valeurs affichées lors de son exécution.
* Vérifiez vos prévisions en l'exécutant.
*/

console.log(4 + 5); 9
console.log("4 + 5"); 4 + 5
console.log("4" + "5"); 45

/* 
* Exo 4: 
* Observez le programme et tentez de prévoir les valeurs finales de chaque variable.
* Vérifiez vos prévisions en l'exécutant.
*/

var a = 2;
a -= 1;
a++;
var b = 8;
b += 2;
var c = a + b * b; 102 
var d = a * b + b; 30
var e = a * (b + b); 40
var f = a * b / a; 10
var g = b / a * a; 10
console.log(a, b, c, d, e, f, g);


/* 
* Exo 5: 
* Complétez le programme pour convertir une tempéraure des degrés Celsius en degrés Fahrenheit.

/* C'est à Daniel Gabriel Fahrenheit que l'on doit l'invention des thermomètres 
en graduation Fahrenheit. Au début, ses thermomètres sont à l'alcool (1709), 
mais il remplace rapidement l'alcool par du mercure (1715), permettant à ses 
outils de mesure de fournir des données comparables. En 1742, un autre 
scientifique, Anders Celsius, propose une nouvelle graduation au thermomètre. 
La conversion entre les échelles est donnée par [°F] = [°C] x 9/5 + 32. 
*/


var tempCel = 37.1;

var tempFah = tempCel * 9 / 5 + 32;
console.log(tempFah);

var temphFah = 98.78;


/* 
* Exo 6: 
* Complétez le programme afin qu'il permute les valeurs des deux variables.
* Il existe plusieurs solutions à cet exercice. 
* Astuce : vous n'êtes pas limité(e) à l'utilisation de deux variables.
*/

// Tapez votre code ici (sans rien modifier d'autre !)
var nombre1 = 5;
var nombre2 = 3;
var nombre3 = 1;

var nombre3 = nombre2;
var nombre2 = nombre1;
var nombre1 = nombre3;

console.log(nombre1); 
console.log(nombre2); 

let pokemonDispo = 'pikachu';
if (pokemonDispo === 'pikachu'){

    alert("pikachu attaque éclair");

} else{
    alert("Je prends la fuite");
}

let nombre = Number(prompt("Entrez un nombre"));
if (nombre > 0){

    console.log(nombre + " est positif");

}else {

    console.log(nombre + " est négatif ou nul");

}

outil1 = "fourchette";
outil2 = "couteau";

if ((outil1 === "fourchette") && (outil2 === "couteau")){

    console.log("Je mange mon plat de tajine");

}
if ((outil1 === "fourchette") || (outil2 === "couteau")){

    console.log("Je mange mon crumble au pomme");

}

let meteo = prompt("Quel temps fait-il dehors ?");

if (meteo === "soleil"){
    alert("Sortez en t-shirt.");
} else if (meteo === "vent"){
    alert("Sortez en pull.");
}else if (meteo === "pluie"){
    alert("Sortez en blouson.");
}else if (meteo === "neige"){
    alert("Restez au chaud à la maison.");
}else{
    alert("Je n'ai pas compris !");
}