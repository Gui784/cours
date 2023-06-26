'use strict'
//  Mode strict du Javascript

// 1- Variable

// Recherche du bouton dans l'arbre DOM = Document Objet Model
var buton = document.getElementById("toggle-rectangle");

// Recherche du rectangle dans l'arbre DOM

var rectangle = document.querySelector('.rectangle');

//  2 - Fonctions 

//  1-- fonction au click du buton

function onClickButon(){

    rectangle.classList.toggle('hide');

}