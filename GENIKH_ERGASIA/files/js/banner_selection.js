var cir1 = document.getElementById("cir1");
var cir2 = document.getElementById("cir2");
var cir3 = document.getElementById("cir3");

var banner1 = document.getElementById("banner");
var banner2 = document.getElementById("banner2");
var banner3 = document.getElementById("banner3");


    function switch1(){

        banner1.style.display = "block";
        banner2.style.display = "none";
        banner3.style.display = "none";

    }
    function switch2(){

        banner2.style.display = "block";
        banner1.style.display = "none";
        banner3.style.display = "none";

    }
    function switch3(){

        banner3.style.display = "block";
        banner1.style.display = "none";
        banner2.style.display = "none";

    }
