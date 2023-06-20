var heure = prompt(`Entrez l'heure :`);
var minute = prompt(`Entrez les minutes :`);
var seconde = prompt(`Entrez les secondes :`);

document.write(`<h3>il est ${heure} h ${minute} m ${seconde} s</h3>`);

if((heure >= 0) && (heure <=23) && (minute >= 0) && (minute <=59) && (seconde >= 0) && (seconde <=59)){
    seconde++;// on incrémente les secondes
    if(seconde === 60){
        // on met les secondes à 0 et passe à la minute suivante
        seconde = 0;
        minute++
        if (minute === 60){
            // on met les minute à 0 et passe a l'heure suivante
            minute = 0;
            heure++;
            if(heure === 24){
                //l'heure suivante est minuit
                heure = 0;
            }
        }
    }
    // l'affichage de l'heure
    document.write(`<h3>Dans une seconde il sera ${heure} h ${minute} m ${seconde} s</h3>`)
}else{
    document.write("Heure incorrecte")
}