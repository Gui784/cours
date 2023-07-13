alert("Bonjour, nous allons vérifier ensemble ta vitesse");

var vitesse = parseInt(prompt("A quel vitesse roule tu ?"));

if(vitesse <= 50){

    document.write("Félicitation tu roule à la bonne vitesse. Tu roule à" + " " + vitesse + "km/h");

    var image = document.createElement("img");
    image.src = "../img/content.png";
    document.body.appendChild("image");

}else if ((vitesse > 51) && (vitesse <= 64)){

    document.write("Fais un effort et roule plus doucement. Tu roule à" + " " + vitesse + "km/h");

}else if ((vitesse > 64) && (vitesse <= 80)){

    document.write("Tu roule vite là ralentis ! Tu roule à" + " " + vitesse + "km/h");

}

else{

    document.write("Tu va beaucoup trop vite , arréte d'avoir le pied loud ! Tu roule à" + " " + vitesse + "km/h");    

}






