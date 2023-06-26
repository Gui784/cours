// Boucle while

console.log("while");
var ligne = "";
var i = 1 ;

while(i <= 7){

    ligne = ligne + "#" ;
    //  Autres possibilités avec l'opérateur +=
    // ligne += "#" ;
    console.log(ligne);
    i++; 

}

// Boucle for

var diese = "";
var rang;

for ( var rang = 0 ; rang <= 7 ; rang++) {
    
    diese = diese + "#";
    // diese += "#"
    document.write(diese + "<br>");
    
}