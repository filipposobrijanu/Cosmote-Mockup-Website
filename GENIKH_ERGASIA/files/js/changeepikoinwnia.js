const email = document.getElementById("ypo_but");
const thl = document.getElementById("thlform");
const bottomtext = document.getElementById("den_thes");

function changethl(){

    email.style.display = "none";
    thl.style.display = "block";
    bottomtext.style.display = "none";

}
function changeemail(){

    email.style.display = "block";
    thl.style.display = "none";
    bottomtext.style.display = "block";

}