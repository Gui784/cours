// alert("tt");

var moyenne = parseFloat(prompt("Quel est ta moyenne au bac?"));

if(moyenne < 10){
    document.write(`Tu est recalé`);
    // J'affiche qu'il est recalé sur le site

    }else if((moyenne >=10) && (moyenne <12)){
        // sinon, si la moyenne est entre 10 et 12

        document.write(`Tu passes !`)
        // J'affiche que le candidat passe

    }else if((moyenne >=12) && (moyenne <=20)){
        document.write(`bravo pour la mention`)
        // J'affiche qu'il a une mention
    }else{

        document.write(`Vous n'avait pas saisi une moyenne correcte (en 0 et 20)`)
    }