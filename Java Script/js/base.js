// commentaire sur une ligne 

/*

Ici je fais un commentaire sur plusieurs lignes 

*/ 


// -- 1 : Déclarer une variable en JS

//  var Prenom ;


// --2 : Affecter une valeur à une variable

//  Prenom="Guillaume";
// var Prenom="Guillaume";


// -- 3 : Une instruction se termine toujours par un poinbt virgule
// aussi il est possible d'écrire plusieurs instruction sur une seule ligne

// instr_1
// instr_2 ; instr_3


//  -- 4 : Afficher une boîte de dialogue (2 façons)

// alert("Super tu est arrivé sur mon site !");
// window.alert("Super tu est arrivé sur mon site !");


// -- 5 : Afficher dans la console (ici , la valeur de ma variable Prenom)

// console.log(Prenom);


// -- 6 : Afficher dans la page web 

// document.write("A la pause je prend un café");


// -- 7 : Demander à l'utilisateur une valeur (2 façons)

// window.prompt("Question : Quel jour sommes nous ? " , "jour de la semaine");
// prompt("Question : Quel jour sommes nous ? " , "jour de la semaine");

// Pour manipuler cette valeur je n'oublie pas de la stocker 

// var jour=prompt("Question : Quel jour sommes nous ? " , "jour de la semaine");
// console.log(jour)


// -- 8 : Attention /!\ le JS esy sensible à la case ("case sensitive")

// mavariable # maVariable # ma_variable
//                                camel case    snake case


// -- 9 : Une variable ne pas commencer par un chiffre ,
//  ne doit contenir que des caractéres alphanumériques et ne peut pas être un mot réservé
//  (var,for,...des éléments natifs du langages JS)


// -- 10 : une variable peut être déclarée de façon explicite 

// façon explicite
// var fruit;
// fruit = "Peche";

// façon implicite
// var fruit_2 = "Pomme";


/*

~~~~~~~~~~  LES TYPES DE VARIABLES ~~~~~~~~~~~~

*/ 


// -- 1 : Chaîne de caractéres (string)

 var vacances = "2023";
 var destination = "Italie";
// console.log(vacances , destination);


// -- 2 : Un nombre entier (integer ou int)

 var annee = 2023;
// console.log(annee);


// -- 3 : Nombre décimal (float)

 var nombre_a_virgule = -4.54;
// console.log(nombre_a_virgule);


// -- 4 : un booléen (boolean = VRAI/FAUX ou TRUE/FALSE)

var unBooleen = false;


// -- 5 : Les Constantes 

/* 

La déclaration const permet de créer une constance accessible uniquement en lecture
Contrairement a une variable sa valeur ne peut plus être modifié par réaffectation plus bas dans le code
Une constante ne peut pas être déclarer à nouveau dans le même script

*/ 

// Par convention les constantes sont en majuscule

const PAYS ="France";
const AN = "2020";
const BIRTH =2020;


// -- 6 : typeof permet de connaitre le type de ma variable

// console.log(vacances);
console.log(typeof vacances);
console.log(typeof annee);

// En JS les variables sont auto-typées 
// On peut convertir une variable de type NUMBER en STRING et inverssement avec les fonctions natives de JS$
// la fonction parseInt() renvoie un entier à partir d'une chaîne de caractéres

var unChiffre = "12";
console.log(unChiffre);
console.log(typeof unChiffre);

// STRING => NUMBER

unChiffre = parseInt(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

// Je ré-affecte une valeur
unChiffre = "12.22";
console.log(unChiffre);
console.log(typeof unChiffre);

// STRING => FLOAT

unChiffre = parseFloat(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

// NUMBER => STRING
var nb_en_lettres = 258;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

var nb_en_lettres = nb_en_lettres.toString();
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

