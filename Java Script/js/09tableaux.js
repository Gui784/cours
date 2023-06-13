// Crréer un tableau

// var arr = new Array(element0, element1, element2);
// var arr = Array(element0, element1, element2);
// var arr =[element0, element1, element2];

var fruits = ["Apple", "Banana" , "Fraise"];
console.log(fruits.length); //length affiche le nombre d'element(combien des fruits)

// Accéder(via son index) à élément du tableau

var first = fruits[0];
// console.log(first);

// var last = fruits[1];
// console.log(last);


var last = fruits[fruits.length - 1]; // nous accedons a l'index du tableau dans le sens inverse
console.log(last);

// au lieu de changez le tableau on modifie

// 1. Ajouter à la fin du tableau
var newLength = fruits.push('Orange');
console.log(newLength);

// 2. Supprimer le dernier élément du tableau

// Supprime l'élément "Orange"
var last = fruits.shift("Fraise");
console.log(last);