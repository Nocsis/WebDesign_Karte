"use strict";

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
    /*document.body.scrollTop = 0; //Safari
    document.documentElement.scrollTop = 0; //Chrome, Firefox, IE and Opera*/
}

function scrollToBottom() {
    window.scroll({top: document.body.scrollHeight, behavior: 'smooth'});
    window.scroll({top: document.documentElement.scrollHeight, behavior: 'smooth'});
}