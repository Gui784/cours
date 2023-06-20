// alert("tt")

for (var i = 1; i <= 10; i++) {
  if (i % 2 === 0) {
    document.write("<h3>" + i + " est pair (1)</h3>");
  } else {
    document.write("<h3>" + i + " est impair (1)</h3>");
  }
}
document.write("<hr>");



// 1ere méthode
var chiffre = parseInt(prompt(`Choisir un nombre entier`));
var chiffreMax = chiffre + 10;

while (chiffre <= chiffreMax) {
  // while = "tant que"
  if (chiffre % 2 === 0) {
    document.write("<h3>" + chiffre + " est pair (2)</h3>");
  } else {
    document.write("<h3>" + chiffre + " est impair (2)</h3>");
  }
  chiffre++;
}
document.write("<hr>");



// 2eme méthode
var nbUser = parseInt(prompt("Ton chiffre ?"));
var nbUserMax = (nbUser + 10);

for (var tour = nbUser; tour < nbUserMax; tour++){
  if (chiffre % 2 === 0) {
    document.write("<h3> " + tour + " est pair </h3> ");
  } else {
    document.write("<h3> " + tour + " est impaire </h3> ");
  }
}