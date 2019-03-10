// JavaScript source code

var popup = document.getElementsByClassName('inboxPopup')[0];
var trigger = document.getElementsByClassName('message')[0];
var CloseBtn = document.getElementsByClassName('X')[0];

trigger.addEventListener('click', OpenPopup);
function OpenPopup() {
    popup.style.display = 'block';
}