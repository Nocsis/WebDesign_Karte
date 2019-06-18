"use strict";

var deutsch = document.getElementById('de_click'),
    english = document.getElementById('en_click'),
    de_txt = document.querySelectorAll('.de'),
    en_txt = document.querySelectorAll('.en'),
    nb_de = de_txt.length,
    nb_en = en_txt.length;

deutsch.addEventListener('click', function() {
    language(deutsch,english);
    });

english.addEventListener('click', function() {
    language(english,deutsch);
    });

init();

window.onload = function() {checkScroll()};
window.onscroll = function() {checkScroll()};



function checkScroll() {
    if (document.body.scrollTop > (document.body.scrollHeight / 4) || document.documentElement.scrollTop > (document.documentElement.scrollHeight / 4)) {
        document.getElementById("upButton").style.display = "block";
        document.getElementById("downButton").style.display = "none";
    }
    else {
        document.getElementById("upButton").style.display = "none";
        document.getElementById("downButton").style.display = "block";
    }
}

function scrollToTop() {
    window.scroll({top: 0, behavior: 'smooth'});
}

function scrollToBottom() {
    window.scroll({top: document.body.scrollHeight, behavior: 'smooth'});
    window.scroll({top: document.documentElement.scrollHeight, behavior: 'smooth'});
}

function init(){
    language(deutsch,english);
}
function language(languageOn,languageOff){
    if (!languageOn.classList.contains('current_lang')) {
        languageOn.classList.toggle('current_lang');
        languageOff.classList.toggle('current_lang');
        }

        if(languageOn.innerHTML == 'DE'){
        display(de_txt, nb_de);
        hide(en_txt, nb_en);
        }

        else if(languageOn.innerHTML == 'EN'){
        display(en_txt, nb_en);
        hide(de_txt, nb_de);
        }   
    }

function display(txt,nb){
    for(var i=0; i < nb; i++){
        txt[i].style.display = 'block';
    }
}

function hide(txt,nb){
    for(var i=0; i < nb; i++){
        txt[i].style.display = 'none';
    }
}       