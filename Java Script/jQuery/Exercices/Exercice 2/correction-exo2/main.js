/* 1 - Ajoute la class newClass au paragraphe #p1, #p3. Ils doivent s'afficher en bleu */
$('#p1, #p3').addClass("newClass");

/* 2 - Créer un bouton qui permet de mettre en gras le paragraphe #p2 
et de supprimer ce caractère en gras quand on clique dessus */
$('#start').click(function () {
    $('#p2').toggleClass("bold");
});

/* 3 - Change le background du paragraphe 4 en jaune */
$('#p4').css("background", "yellow");