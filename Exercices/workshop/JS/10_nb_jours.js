// alert("tt")

var mois = parseInt(prompt("Quels mois choissiez-vous","<saisir un chiffre entre 1 et 12>"));

if(mois === 2){// si on a choisi Février => 2 

    document.write(`Le mois numéro ${mois} (Février) fait 28 jours.`)

}else if((mois === 4) || (mois === 6) || (mois === 9) || (mois === 11)){
    //si on a choisi un mois qui fait 30jours

    document.write(`Le moi numéro ${mois} fait 30jours`)
}else if ((mois === 1) || (mois === 3) || (mois === 5) || (mois === 7) || (mois === 8) || (mois === 10) || (mois === 12)){
    //si on a choisi un mois qui fait 31jours

    document.write(`Le moi numéro ${mois} fait 31jours`)
    
}else{
    document.write(`Votre choix ${mois} n'est pas dans le calendrier.`)
}