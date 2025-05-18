arrow = document.getElementById("arrow");
const hr = document.getElementById("horline");
const announcement = document.getElementById("topan");

var myScrollFunc = function() {
var y = window.scrollY;
var y1 = window.scrollY;
if (y >= 100) {

    arrow.className = "arrow show"
} 
else {

    arrow.className = "arrow hide"

}
if(y1>=75){

    hr.style.display = "block";
    announcement.style.display = "none";
}
else if(y1>=50){


    announcement.style.display = "block";

    
}
else{

    hr.style.display = "none";
    announcement.style.display = "block";

}
};

window.addEventListener("scroll", myScrollFunc);