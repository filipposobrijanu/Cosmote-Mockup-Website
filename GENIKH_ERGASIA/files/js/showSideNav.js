function show_sidenav() {
    var drop = document.getElementById("dropdownnav");
    var hr = document.getElementById("horline");

    if (drop.style.display === "block") {
        drop.style.display = "none";
        hr.style.display = "none";
    } else {
        drop.style.display = "block";
        hr.style.display = "block";
    }
    }