// Les Sélecteurs

$(document).ready(function(){ 

$("#p1").hover(function(){
    $('#p5').hide();
},
    function(){ 
        $('#p5').show();
    } 
);

});

// Les événements 

$('#p1').on({
    mouseenter : function() {
        $("#p5").hide();
    },
    mouseleave: function(){
        $('#p5').show();
    },
    click: function (){
        $('#p4').hide();
    }
});

// Les modifs en jQuery

$(document).ready(function(){

    // Equivalent de textContent
    var myVar = $('#p1').text();
    alert(myVar);

    // Equivalent de innerHTML
    var myVar = $('#p1').html();
    alert(myVar);


});

// Les Valeurs

$(document).ready(function(){

    $('#start').click(function(){
    var myVar = $('#myInput').val();
    alert(myVar); // affiche Hello World !
});

    $('#start').click(function(){
    var myVar = $('div').attr("style");
    console.log(myVar); // affiche background: red
});

});

// Changer les informations 

$('#start').click(function(){
    $('#p1').text("voila mon nouveau texte");
    // essayer ac $('#p1').html("voila mon <b>nouveau</b> texte")
    // essayer ac $('#myInput').val("nouvelle valeur");
    // même chose avec .val()
});

// AJOUTER UN NOUVEL ELEMENT
// .append() ajoute à la fin


$('#start').click(function(){
    $('div').append("<p>Mon nouveau paragraphe</p>")
});


// . prepent() ajoute au début

$('#start').click(function(){
    $('div').prepend("<p>Mon nouveau paragraphe</p>")
});


// .after() met après la div à l'extérieur !


$('#start').click(function(){
    $('div').after("<p>Mon nouveau paragraphe</p>")
});


// .before() met avant la div à l'extérieur de celle ci !


$('#start').click(function(){
    $('div').before("<p>Mon nouveau paragraphe</p>")
});

// Supprimer un élément

// .remove() enleve element + son contenu

    $('#start').click(function(){
        $('#p1').remove();
    });

// .empty vide le contenu mais ne supprime pas l'élément


    $('#start').click(function(){
        $('#p1').empty();
    });
