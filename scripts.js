"use strict";

//----Variablen----

//Language Switchers
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

//Video Buttons
var popup = document.getElementById("videoPopup"),
    source = document.getElementById("videoSource");

//----Funktionsaufrufe----
init();

window.onload = function() {checkScroll()};
window.onscroll = function() {checkScroll()};
window.onkeydown = function(ev) {checkKeyPress(ev)};


//----Funktionen----

function checkKeyPress(keyEvent) {
  if(keyEvent.keyCode == 27) {
    hideVideo();
  }
}

//Scroll Buttons
function checkScroll() {
  if (document.body.scrollTop > (document.body.scrollHeight / 3) || document.documentElement.scrollTop > (document.documentElement.scrollHeight / 4)) {
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

//Language Switchers
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

//Video Buttons
function popupVideo(src) {
  source.setAttribute("src", src);
  popup.classList.toggle("show");
}

function hideVideo() {
  if(popup.classList.contains("show")) {
    if(!popup.paused) {
      popup.pause();
    }
    popup.classList.toggle(("show"));
  }
}
