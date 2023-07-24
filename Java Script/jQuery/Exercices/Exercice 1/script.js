$('.add').click(function(){

var contenu = $('input').val();

 $('ul').append( "<li>"+ contenu +"</li>" );

 $('.reset').click(function(){

 $('ul').empty();

 });

});

