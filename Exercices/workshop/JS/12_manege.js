// alert("testt")
//while

var manege = 0;

// while(manege <= 10){
//     document.write(`c'est le tour n°${manege} <br>`);
//     manege++
// }
// document.write("<hr>");



// FOR

// for (var i = 1; i <= 10; i++){
//     document.write(`c'est le tour n°${i} <br>`)
// }
// document.write("<hr>");


// PROMPTE WHILE

var question = parseInt(prompt(`combien de tours voulez faire ?`));
var compteur = 1;
while(compteur <= question){ // while = tant que
    document.write(`c'est le tour n°${compteur} <br>`);
    compteur++
} document.write(`<hr>`);

