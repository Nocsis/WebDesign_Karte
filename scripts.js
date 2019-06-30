"use strict";

//----Variablen----

//Language Switchers
var deutsch = document.getElementById('de_click'),
    english = document.getElementById('en_click'),
    de_txt = document.querySelectorAll('.de'),
    en_txt = document.querySelectorAll('.en'),
    nb_de = de_txt.length,
    nb_en = en_txt.length,
    map = document.getElementsByClassName("mapBG")[0];

deutsch.addEventListener('click', function() {switchGerman();});

english.addEventListener('click', function() {switchEnglish();});

//Video Buttons
var videoPopup = document.getElementById("videoPopup"),
    videoContainer = document.getElementById("videoContainer"),
    videoClose = document.getElementById("videoClose"),
    descriptionPopup = document.querySelectorAll(".map-popup"),
    nb_descriptions = descriptionPopup.length;

//----Funktionsaufrufe----
init();

window.onload = function() {checkScroll()};
window.onscroll = function() {checkScroll()};
window.onkeydown = function(ev) {checkKeyPress(ev)};
videoClose.onclick = function() {hideVideo()};


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

function switchGerman() {
  language(deutsch,english);
  map.classList.remove("en-map");
}

function switchEnglish() {
  language(english,deutsch);
  if(!map.classList.contains("en-map")) {
    map.classList.add("en-map");
  }
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
  videoContainer.innerHTML = "<video controls autoplay id=\"videoPlayer\"> <source src=\""+src+"\" type=\"video/mp4\"> </video>";
  videoPopup.classList.toggle("show");
}

function hideVideo() {
  if(videoPopup.classList.contains("show")) {
    videoPopup.classList.toggle(("show"));
    videoContainer.innerHTML = "";
  }
}

function popupDescription(element) {
  for(var i = 0; i < nb_descriptions; i++) {
    if(descriptionPopup[i].classList.item(1) == element.classList.item(1)
    && descriptionPopup[i].classList.item(2) == element.classList.item(2)) {
      descriptionPopup[i].classList.toggle("show");
    }
  }
}

function hideDescription(element) {
  for(var i = 0; i < nb_descriptions; i++) {
    if(descriptionPopup[i].classList.item(1) == element.classList.item(1)
    && descriptionPopup[i].classList.item(2) == element.classList.item(2)) {
      descriptionPopup[i].classList.toggle("show");
    }
  }
}
