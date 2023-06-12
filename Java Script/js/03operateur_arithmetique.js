// alert("Hi");


// -- 1 : Addition

// INFO : je peut déclarer plusieurs variables à la suite 

// je déclare mes variables
var nb1 ,nb2 , resultat;

// j'affecte des valeurs

nb1= 10;
nb2 = 5;

// j'utilise les variables avec un calcul

resultat = nb1 + nb2;

// j'affiche mon résultat sur la console

console.log(resultat);


// -- 2 : Soustractions

// soustraction de nb1 - nb2 avec l'opérateur "-"

resultat = nb1 - nb2 ;
console.log(resultat);


// -- 3 : Multiplications

// multiplication de nb1 * nb2 avec l'opérateur "*"

resultat = nb1 * nb2 ;
console.log(resultat);

// -- 4 : Divisions

// division avec l'opérateur "/"

resultat = nb1 / nb2 ;
console.log(resultat);

// -- 5 : Modulo

// Le modulo retourne le reste d'une division 
// modulo de nb1 % nb2 avec l'opérateur "%"

resultat = nb1 % nb2 ;
console.log(resultat);

// est maintenant je ré-affecte une valeur

nb1 = 11;
resultat = nb1 % nb2;
console.log("Le rest de la division de " +  nb1  + " par " +  nb2  + " est égal à : " + resultat);

// -- 6 : Ecritures simplifiés 

nb1 = 15;
nb1 = nb1 + 5;
// égal à 20

nb1 += 10;
// nb1 lui même + 10

console.log('le résultat de "nb1 += 10;" est ' + nb1 ); 

// égal à 30 , alternance de guillemet simples et doubles pour ne pas casser ma chaine de charactères

// Si j'utilise un ' (apostrophe) dans une phrase cpncaténée , je peux échapper le caractère à l'aide d'un anti-slash "\"
