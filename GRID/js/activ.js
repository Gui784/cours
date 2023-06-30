// Navigation avec les liens actif sur la page 

// 1- Ajout de l'ID #activ_nav sur la balise nav 
// 2- Vérifier que la classe .activ est bien dans le fichier CSS
// 3- Créer la fonction setActiv() pour ajouter la class .activ sur le lien URL en cours

function setActiv(){

    // On cible les balises <a> enfants de l'ID #activ_nav et elles seront stockées dans un tableau ARRAY
    nav_a = document.getElementById("activ_nav").
    getElementByTagName("a");
    // Je fait une boucle qui parcours toute la longueur du tableau avec la propriété .lenght
    for(var i = 0; i < nav_a.length; i++){

          // document.location renvoie des informations sur l'URL en cours de consultation
          // indexOf renvoie la position d'une string dans une chaine de caratères (si le mot ou bout de mot recherché n'est pas trouvé indexOf renvoie -1, s'il trouve il renvoie la position)
          // donc ici, nous examinons l'URL de la page active pour valider si dans cette URL le lien de ma balise <a> existe, si oui indexOf renvoie un chiffre forcément supérieur à 0

          if (document.location.href.indexOf(nav_a[i].href) >= 0) {
               // dès lors, j'ajoute la classe .activ au lien en cours
               nav_a[i].className = "activ";
          }

    }

}

/*
 * Navigation avec les liens actifs sur la page en cours
 *
 * 4- Enfin, j'appelle ma fonction au chargement de ma page
 */
window.onload = setActiv();