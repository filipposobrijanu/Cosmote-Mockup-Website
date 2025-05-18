function validateInput(event) {
    const input = event.target.value;
    const pattern = /^([\u0370-\u03FF\s]+|[.,!;:])+$/;
    const isValid = pattern.test(input);
    event.target.setCustomValidity(isValid ? "" : "Please enter Greek characters only");
  }

function showResults(){

    const input = document.getElementById("mhnuma").value;;
    const pattern = /^([\u0370-\u03FF\s]+|[.,!])+$/;
    const isValid = pattern.test(input);

    onoma = document.getElementById("name").value;
    thlefwno = document.getElementById("thlefwno").value;
    message = document.getElementById("mhnuma").value;

    if(document.getElementById("name").value != "" && document.getElementById("thlefwno").value != "" && document.getElementById("mhnuma").value != "" && isValid !=false){

    contents="<html><head> <link rel='stylesheet' href='../css/style.css'></head><body style='font-family:Zona; margin:0; background-color: #eaeaea;'><div style='background-color: #f7f7f7; padding-bottom:2em;'><img style='text-align:center; margin-left: 2em; margin-top: 2em;' class='logo' src='../../assets/Cosmote_logo.svg.png' alt='Cosmote Logo'> </div><form style='background-color: #f7f7f7; color: black; max-width: 45em; margin: 0 auto; padding: 2em; border-radius: 2em; font-family: Zona; margin-top: 2em; margin-bottom: 2em; margin-left: 2em; margin-right: 2em;'><h1>Όνομα:</h1> <p>"+onoma+"</p><p id='div4' class='divider'></p><h1>Τηλέφωνο:</h1> <p>"+thlefwno+"</p><p id='div4' class='divider'></p><h1>Μήνυμα:</h1> <p>"+message+"</p></form> <div class='BOTTOMannouncement'><p class='pow'>© 2023, COSMOTE , Powered by Filippos Obrijanu</p></div></body></html>";

    options=" toolbar=0, status=0, scrollbars=0, resizable=0, width=700, height=550, menubar=no, left=100px, top=150px";

    newwindow = window.open("","mywindow",options);

    newwindow.document.write(contents);

    document.getElementById("name").value = "";
    document.getElementById("thlefwno").value = "";
    document.getElementById("mhnuma").value = "";
    }

}