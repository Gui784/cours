alert("Entrez un chiffre entre 1 et 100 ");

var solution = Math.floor(Math.random() * 100) + 1;

// Décommentez temporairement cette ligne pour mieux vérifier le programme
/*console.log("(La solution est " + solution + ")");*/

// TODO : complétez le programme

var nombre = 0;

for (var nombreEssais = 1; nombreEssais < 7; nombreEssais++) {

	nombre = Number(prompt("Entrez un nombre entre 1 et 100"));

	document.write("Essai numéro : " + nombreEssais + "." + " Vous avez entré le nombre " + nombre); //J'ai ajouté le numéro d'essais et le nombre choisi pour un meilleur suivi

	if ((nombre < 1)||(nombre > 100)) {
		document.write("Ce nombre n'est pas autorisé, merci d'entrer un nombre entre 1 et 100");
	}	 

	else if (nombre < solution) {
		document.write(" Le nombre à trouver est plus grand");
	}
	else if (nombre > solution) {
	document.write("Le nombre à trouver est plus petit");
	}
	else if (nombre === solution) {
		document.write("Félicitation, la réponse était bien " + solution);
		break;
	}		

}

if (nombre !== solution) {
	document.write("Dommage, tu n'as pas trouvé la réponse dans les 6 essais impartis. La réponse était " + solution);
}