const sundeshform = document.getElementById("sundesh");
const eggrafhform = document.getElementById("bash");
const bgcolor = document.getElementById("bgcolor");
const spacer = document.getElementById("spacerr");

function switchtoeggrafh(){

    sundeshform.style.display = "none";
    eggrafhform.style.display = "block";
    bgcolor.style.backgroundColor = "#c5e2c0";
    spacer .style.backgroundColor = "#c5e2c0";
    document.title = "Εγγράψου τώρα";

}
function switchtosundesh(){

    sundeshform.style.display = "block";
    eggrafhform.style.display = "none";
    bgcolor.style.backgroundColor = "#d1ddee";
    spacer .style.backgroundColor = "#d1ddee";
    document.title = "Συνδέσου τώρα";
    

}