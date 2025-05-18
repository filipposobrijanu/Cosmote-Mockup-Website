<?php

session_start();

if(isset($_SESSION['sescount'])){

    $_SESSION['sescount'] = $_SESSION['sescount'] + 1;

}
else{

    $_SESSION['sescount'] = 0;
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Πληροφορίες │ COSMOTE.gr
    </title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon1.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/popup.css">
    <!---->
    <style>

        .active {

            color: #1f508f;
            font-weight: 800;
        }
        .cosmlogo{
            width: 8em; 
            padding: 0.4em; 
            border-radius: 0.5em;

            padding-bottom: 0;
        }


        .tablee{
            font-family: Zona; 
            font-size: 1em; 
            padding-top: 0.7em; 
            padding-bottom: 0.7em; 
            margin-left: auto; 
            margin-right: auto;
        }
        .mapp{

            width: 30em;
            margin-top: 0em;
            padding-bottom: 0;


            
        }
    
    </style>
</head>
<body>
    <script>
        document.body.className = 'fade';
        document.addEventListener("DOMContentLoaded", () => {
        
        document.body.className = '';
 
    });
    </script> 
    <header class="menu">
        <p id="topan" class="announcement"><a style="text-decoration: none;" href="https://www.cosmote.gr/cs/cosmote/gr/online-offers.html"><span class="mon-pros">ΜΟΝΑΔΙΚΕΣ ΠΡΟΣΦΟΡΕΣ</span></a> ΜΟΝΟ ΓΙΑ <span style="font-weight: 800;">ΣΗΜΕΡΑ!</span></p>
    <ul class="nav">
        <li><a  href="index.php">
            <img class="logo" src="../../assets/Cosmote_logo.svg.png" alt="Cosmote Logo">
        </a>
        </li><span id="hide_small_res">
        <li class="men"><a  href="index.php">ΑΡΧΙΚΗ</a></li>
        <li class="men"><a href="news.php">ΝΕΑ</a></li>
        <li class="men"><a href="contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
        <li class="men"><a class="active" href="about.php">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
        <li class="men"><a href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
        <li class="men"><a id="blinking" href="ereuna.php">ΕΡΕΥΝΑ</a></li>
        <li><div class="padd"><a class="login-icon" href="login.php"><img src="../../assets/user-icon.svg" alt="login icon"></a></div></li>
        </span>
<span id="show_small_res">
        <li><div class="dropdown-icon_pad"><a onclick="show_sidenav()"><img class="dropdown-icon" src="../../assets/dropdown.png"></a></div></li></span>
    </ul>

    <div id="dropdownnav">
        <ul class="nav2">
            <li class="men"><a href="index.php">ΑΡΧΙΚΗ</a></li>
            <li class="men"><a href="news.php">ΝΕΑ</a></li>
            <li class="men"><a href="contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
            <li class="men"><a class="active"  href="about.php">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
            <li class="men"><a href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
            <li class="men"><a id="blinking" href="ereuna.php">ΕΡΕΥΝΑ</a></li>
            <li class="men"><a class="login-icon2" href="login.php"><img src="../../assets/user-icon.svg" alt="login icon"></a></li>
        <br></ul>
        </div>
    <hr id="horline" class="navhr1">
    <!--<hr class="navhr">-->

    </header>

    <?php
    if($_SESSION['sescount'] == 0)
    {echo "<div id='blur-bg' class='blurbg'></div><div class='form-popup' id='pop'><form class='form-container'><img class='newyearicon' src='../../assets/newyear.png'><h1>Καλή Χρονιά!</h1><p>Η οικογένεια <span style='font-family: Poppins; font-weight: 800;'>COSMOTE</span> σας εύχεται όλους σας καλή χρονιά και χρόνια πολλά!</p><input onclick='Kleisimo()'  type='button' class='kleisimo_but' value='Κλείσιμο'></input></form></div>"
    ;}
    
    ?>

    <section>
        <div>
            <p id="head" class="announcement"><a style="text-decoration: none;" href="https://www.cosmote.gr/cs/cosmote/gr/online-offers.html"><span class="mon-pros">ΜΟΝΑΔΙΚΕΣ ΠΡΟΣΦΟΡΕΣ</span></a> ΜΟΝΟ ΓΙΑ <span style="font-weight: 800;">ΣΗΜΕΡΑ!</span></p>
            <ul class="nav">
                <li><a  href="index.php">
                    <img class="logo" src="../../assets/Cosmote_logo.svg.png" alt="Cosmote Logo">
                </a>
                </li><span id="hide_small_res">
        <li class="men"><a class="active" href="index.php">ΑΡΧΙΚΗ</a></li>
        <li class="men"><a href="news.php">ΝΕΑ</a></li>
        <li class="men"><a href="contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
        <li class="men"><a href="about.php">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
        <li class="men"><a href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
        <li class="men"><a id="blinking" href="ereuna.php">ΕΡΕΥΝΑ</a></li>
        <li><div class="padd"><a class="login-icon" href="login.php"><img src="../../assets/user-icon.svg" alt="login icon"></a></div></li>
        </span>
<span id="show_small_res">
        <li><div class="dropdown-icon_pad"><a href="#"><img class="dropdown-icon" src="../../assets/dropdown.png"></a></div></li></span>
            </ul>
        </div>

        <div style="text-align: center;">

            <h1 style="margin-top: 0; padding-top: 0; padding-bottom: 0; font-family: Poppins;"  id="monprosfora" class="top-text">COSMOTE ™</h1>

            <p class="newsp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Η <b>Cosmote</b> αποτελεί ενιαία εμπορική μάρκα για όλα τα προϊόντα και τις υπηρεσίες του Ομίλου ΟΤΕ σε σταθερή και κινητή τηλεφωνία, 
                ευρυζωνικές υπηρεσίες, συνδρομητική τηλεόραση και ολοκληρωμένες λύσεις τεχνολογίας πληροφοριών και επικοινωνιών (ICT). 
                Το κεντρικό μήνυμα της εμπορικής μάρκας Cosmote είναι «ένας κόσμος, καλύτερος για όλους».</p>
            <img class="cosmlogo" src="../../assets/favicon.png" alt="Cosmote Logo">

            <h1 style="margin-top: 0em;  padding-bottom: 0; padding-top: 0.8em;"  id="monprosfora" class="top-text">Ιστορία</h1>

            <p style="margin-bottom: 0;" class="newsp">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Η εταιρεία συστάθηκε ως Κυψελοειδές Λειτουργικό Σύστημα Κινητών Τηλεπικοινωνιών Α.Ε. τον Οκτώβριο του 1997. Τον Απρίλιο του 1998 προστίθεται η Cosmote ως διακριτικός τίτλος, όνομα που ξεκίνησε και τυπικά την εμπορική λειτουργία ένα χρόνο μετά, σηματοδοτώντας τη δραστηριοποίηση του Ομίλου ΟΤΕ στην κινητή τηλεφωνία και συμπληρώνοντας ένα εκατομμύριο συνδρομητές. Τον Ιούλιο του 1999 η εταιρεία μετατράπηκε στην τωρινή Cosmote Κινητές Τηλεπικοινωνίες Α.Ε.
                Το 2001 απέκτησε άδεια κινητής τηλεφωνίας 3ης γενιάς (UMTS) στην Ελλάδα, ενώ το 2006 ανακοίνωσε την εξαγορά της Γερμανός Group, της πιο πετυχημένης τηλεπικοινωνιακής αλυσίδας λιανικής στη νοτιοανατολική Ευρώπη.
                Το 2009 ολοκληρώθηκε η μεταβίβαση στην Telekom Slovenije του 100% της Cosmofon και της Germanos Skopje, θυγατρικών της Cosmote, σε συνέχεια εξαγοράς του 40% του ΟΤΕ από την Deutsche Telekom, καθώς η τελευταία διατηρούσε ήδη μια θυγατρική ανταγωνιστική εταιρεία στην Βόρεια Μακεδονία.               
                Το 2010, αναβάθμισε το δίκτυό της, διαθέτοντας ευρυζωνικές ταχύτητες μέχρι 42,2 Mbps καθοδικής ζεύξης και 5,8 Mbps ανοδικής ζεύξης, ενώ ήταν η πρώτη που εγκαινίασε στην Ελλάδα, σε πιλοτική βάση, δίκτυο κινητής τηλεφωνίας τέταρτης γενιάς, τεχνολογίας LTE, με ταχύτητες 100 Mbps. Το 2014 ήταν η πρώτη που προχώρησε σε πιλοτικές δοκιμές κινητού ευρυζωνικού δικτύου 4G+, για ταχύτητες έως και τα 300 Mbps.          
                Τον Οκτώβριο του 2015, καθιερώθηκε ως ενιαία εμπορική μάρκα για όλα τα προϊόντα και υπηρεσίες του Ομίλου ΟΤΕ. Στο πλαίσιο αυτό διατέθηκαν εμπορικά το Cosmote One, ένα «σχήμα» υπηρεσιών επικοινωνίας και ψυχαγωγίας που καλύπτει τις σύγχρονες τηλεπικοινωνιακές ανάγκες των καταναλωτών για ομιλία, Διαδίκτυο και ψυχαγωγία, και το Cosmote Business One ένα «σχήμα» υπηρεσιών σταθερής, κινητής, διαδικτύου, υπηρεσιών υπολογιστικής νέφους και τηλεφωνικού κέντρου για επιχειρήσεις.
                Το 2018 ο Όμιλος ΟΤΕ αποφάσισε να εισέλθει σε νέες αγορές, με αιχμή αρχικά την παροχή ασφαλιστικών υπηρεσιών μέσω του COSMOTE Insurance, αλλά και των υπηρεσιών ηλεκτρονικών πληρωμών μέσω του COSMOTE Payments.</p>
                
        </div>
        <div style="text-align: center;">
            <table class="tablee">

                <h1 style="margin-top: 0em; padding-top: 0.7em;"  id="monprosfora" class="top-text">Λογότυπα</h1>

                <tr>
                    <th>1998-2005</th>
                    <th>2005-26.10.2015</th>
                    <th>26.10.2015-σήμερα</th>
                </tr>
                <tr>
                    <td><img class="logotable" src="../../assets/1.png" alt="Cosmote Logo"></td>
                    <td><img class="logotable" src="../../assets/2.png" alt="Cosmote Logo"></td>
                    <td><img class="logotable" src="../../assets/3.png" alt="Cosmote Logo"></td>

                </tr>
            </table>
        </div>
        
        <div class="container">

        <span class="hidemap">
            <h1 style="margin-top: 0em; padding-bottom: 0;"  id="monprosfora" class="top-text">Επίσημος Συνεργάτης</h1>
            <img class="mapp" src="../../assets/partner.png" usemap="#mymap" >
            <map name="mymap">
                <area shape="rect" coords="20,30,250,200" href="https://www.cosmote.gr/"
                target="_blank">
                <area shape="rect" coords="300,30,450,226"
                href="https://www.t-mobile.com/" target="_blank">
            </map>
    </span>
            </div>   
            
            <div class="container">

                <h1 style="margin-top: 0em; padding-bottom: 0; padding-top: 0;"  id="monprosfora" class="top-text">Δημιουργός Ιστότοπου</h1>

                <p style="text-align: center; margin-bottom: 0em;" class="newsp">

                    <b>Όνομα</b> - Φίλιππος Ομπριζάνου<br>
                    <b>Αριθμός Μητρώου </b> - Π23137 <br>
                    <b>Τόπος Γέννησης </b> - ΑΡΓΟΣ, ΔΗΜΟΣ ΝΑΥΠΛΙΕΩΝ<br>
                    <b>Ηλεκτρονικό Ταχυδρομείο </b> - p23137@unipi.gr

                </p>
                <p style="font-weight: bold; color:#030303; font-size: 1.7em; margin-bottom: 0em; margin-top: 0;"  class="newsh">Εκπαίδευση</p>
                <p style="text-align: center; margin-bottom: 0em; margin-top: 0;" class="newsp">

                    <em>Απόφοιτος</em> του 2ου Γενικού Λυκείου Ναυπλίου. (2023)

                </p>
                <p style="font-weight: bold; color:#030303; font-size: 1.7em; margin-bottom: 0em; margin-top: 0;"  class="newsh">Δεξιότητες</p>
                <p style="text-align: center; margin-bottom: 0em; margin-top: 0;" class="newsp" >

                    Δημιουργικότητα<br>
                    Επίλυση προβλημάτων<br>
                    Παραγωγικότητα<br>
                    <del>Προσαρμοστικότητα</del>&nbsp;&nbsp;<ins>Κριτική Σκέψη</ins><br>

                </p>
                <p style="font-weight: bold; color:#030303; font-size: 1.7em; margin-bottom: 0em; margin-top: 0;" class="newsh">Ενδιαφέροντα</p>
                <p style="text-align: center; margin-bottom: 0em; margin-top: 0;" class="newsp">

                    Γυμναστήριο<br>
                    Καλαθοσφαίρηση<br>
                    Σκάκι<br>
                    Προγραμματισμός<br>
                    Μοντάζ

                </p>
                <p style="font-weight: bold; color:#030303; font-size: 1.7em; margin-bottom: 0em; margin-top: 0;"  class="newsh">Επιπλέον Επιτεύγματα</p>
                <div style="text-align: center;  margin-bottom: 3em; margin-top: 0;" class="newsp">
                    <ol type="I" reversed class="newsp" style="margin-bottom: 0em; margin-top: 0; display: inline-block; text-align: left;">
                        <li>Άριστη γνώση της ελληνικής γλώσσας ως μητρική γλώσσα.</li><br>
                        <li>Άριστη γνώση της ρουμάνικης γλώσσας ως μητρική γλώσσα.</li><br>
                        <li>Βασικές γνώσεις της γερμανικής γλώσσας.</li><br>
                        <li>Βασικές γνώσεις της ισπανικής γλώσσας, κάτοχος Α2 επιπέδου.</li><br>
                        <li>Βασικές γνώσεις της ρωσικής γλώσσας, κάτοχος Β1 επιπέδου.</li><br>
                        <li>Άριστη γνώση της αγγλικής γλώσσας, κάτοχος C2 επιπέδου.</li>
                    </ol>

                </div>


            <a href="#head">
                <img id="arrow" class="arrow hide" src="../../assets/arrow.png" alt="Arrow">
            </a>
        </section>
        
    <footer id="footer">

        <div class="intro">
            <ul class="foot1">
                <li class="pad"><a href="https://www.facebook.com/cosmote"><img class="social" src="../../assets/fb.png" alt="Facebook Logo"></a></li>
                <li class="pad"><a href="https://www.youtube.com/user/cosmote"><img class="social" src="../../assets/yt.png" alt="YouTube Logo"></a></li>
                <li class="pad"><a href="https://www.instagram.com/cosmote_greece/"><img class="social" src="../../assets/insta.png" alt="Instagram Logo"></a></li>
                <li class="pad"><a href="https://twitter.com/cosmote"><img class="social" src="../../assets/x.png" alt="Twitter Logo"></a></li>
            </ul>

          </div>

        <hr class="navhr" style="background-color: #00afe9;">

        <div class="intro">
            <div class="container">
                <ul class="foot">
                    <li class="pad"><a class="footext" href="https://www.cosmote.gr/cs/otegroup/gr/corp_homepage.html">OTE</a></li>
                    <li class="pad"><a class="footext" href="https://www.cosmote.gr/cs/otegroup/en/cosmote_ae.html">COSMOTE</a></li>
                    <li class="pad"><a class="footext" href="https://www.cosmote.gr/cs/otegroup/gr/thigatrikes.html">ΛΟΙΠΕΣ ΘΥΓΑΤΡΙΚΕΣ</a></li>
                    <li class="pad"><a class="footext" href="https://www.cosmote.gr/cs/otegroup/gr/investor_relations.html">ΕΠΕΝΔΥΤΙΚΕΣ ΣΧΕΣΕΙΣ</a></li>
                </ul>
            </div>
          </div>
          
        <a href="https://www.t-mobile.com/">
            <img class="tmobilelogo" src="../../assets/t-mobile.png" alt="Member of T-Mobile Group Logo">
        </a>

        <div class="BOTTOMannouncement">
        <p class="pow">© 2023, COSMOTE , Powered by Filippos Obrijanu</p>
        </div>
    </footer>
    <script src="../js/arrow_mov.js" type="text/javascript"></script>
    <script src="../js/popup.js" type="text/javascript"></script>
    <script src="../js/showSideNav.js" type="text/javascript"></script>
</body>
</html>