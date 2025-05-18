arrow = document.getElementById("arrow");

var myScrollFunc = function() {
var y = window.scrollY;

if (y >= 100) {

    arrow.className = "arrow show"
} 
else {

    arrow.className = "arrow hide"

}}

window.addEventListener("scroll", myScrollFunc);