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
        Επικοινωνία │ COSMOTE.gr
    </title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon1.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/popup.css">
    <!---->
    <style>

            .prot{

                text-align: center;
                margin: 0;
                font-family:Zona;
                color: #f7f7f7;
                background-color: #565b65;
                font-size: 2em;
                padding: 0.2em;
                border-radius: 0.5em;
                margin-left: 15em;
                margin-right: 15em;
                margin-bottom: 1em;
                margin-top: 1em;
            }


        @keyframes moveBox {
            0% { bottom: 10%; left: 5%; }
            25% { bottom: 10%; left: 80%; }
            50% { bottom: 85%; left: 80%; }
            75% { bottom: 85%; left: 5%; }
            100% { bottom: 10%; left: 5%; }
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
    <img class="moving-box" src="../../assets/techsupport.png" alt="Cosmote Logo">
    <header class="menu">
        <p id="topan" class="announcement"><a style="text-decoration: none;" href="https://www.cosmote.gr/cs/cosmote/gr/online-offers.html"><span class="mon-pros">ΜΟΝΑΔΙΚΕΣ ΠΡΟΣΦΟΡΕΣ</span></a> ΜΟΝΟ ΓΙΑ <span style="font-weight: 800;">ΣΗΜΕΡΑ!</span></p>
    <ul class="nav">
        <li><a  href="index.php">
            <img class="logo" src="../../assets/Cosmote_logo.svg.png" alt="Cosmote Logo">
        </a>
        </li><span id="hide_small_res">
        <li class="men"><a  href="index.php">ΑΡΧΙΚΗ</a></li>
        <li class="men"><a href="news.php">ΝΕΑ</a></li>
        <li class="men"><a class="active" href="contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
        <li class="men"><a href="about.php">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
        <li class="men"><a href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
        <li class="men"><a id="blinking" href="ereuna.php">ΕΡΕΥΝΑ</a></li>
        <li><div class="padd"><a class="login-icon" href="login.php"><img src="../../assets/user-icon.svg" alt="login icon"></a></div></li>
        </span>
<span id="show_small_res">
        <li><div class="dropdown-icon_pad"><a onclick="show_sidenav()"><img class="dropdown-icon" src="../../assets/dropdown.png"></a></div></li></span>
    </ul>

    <div id="dropdownnav">
        <ul class="nav2">
            <li class="men"><a  href="index.php">ΑΡΧΙΚΗ</a></li>
            <li class="men"><a href="news.php">ΝΕΑ</a></li>
            <li class="men"><a class="active" href="contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
            <li class="men"><a href="about.php">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
            <li class="men"><a href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
            <li class="men"><a id="blinking" href="ereuna.php">ΕΡΕΥΝΑ</a></li>
            <li class="men"><a class="login-icon2" href="login.php"><img src="../../assets/user-icon.svg" alt="login icon"></a></li>
        <br></ul>
        </div>
    <hr  id="horline" class="navhr1">
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

            <h1 style="margin-top: 0em; padding-top: 0%;"  id="monprosfora" class="top-text">Επικοινώνηστε μαζί μας!</h1>

            <p style="text-align: center; margin-top: 0; margin-bottom: 0em;" class="newsp">Στην <strong>COSMOTE</strong> η ικανοποίηση των αναγκών σας είναι η προτεραιότητά μας.<br>
                Είμαστε ενθουσιασμένοι που θέλετε να επικοινωνήσετε μαζί μας! <br>
                Εάν έχετε οποιαδήποτε απορία ή πρόβλημα προς επίλυση,<br>παρακαλούμε απευθυνθείτε με τη χρήση <b>email</b> στην ομάδα μας <i>παρακάτω</i>.</p>

            <div style="margin-top: 0; margin-bottom: 1em;">
                <a id="ypo_but" class="pronomia_but" href="mailto:p23137@unipi.gr?subject=Γεια!&body=Πώς μπορώ να σας βοηθήσω;"><strong>Υποστήριξη / Επικοινωνία</strong></a>
                
                <p id="den_thes" class="den-thes">Δεν θες να χρησιμοποιήσεις email;&nbsp;&nbsp;<span class="pata" onclick="changethl()">Πάτα εδώ</span></p>
            
                <form id="thlform" method="post">

                   
        
                    <label class="trigger" for="name"><b>Όνομα</b></label>
                    <input class="inputt" type="text" name="name" id="name" placeholder="Όνομα" required>
                    <p class="frash">Συμπληρώστε το όνομά σας</p>
        
                    <label class="trigger" for="thlefwno"><b>Τηλέφωνο</b></label>
                    <input class="inputt" type="number" pattern="[0,9]" name="thlefwno" placeholder="Τηλέφωνο" id="thlefwno" required>
                    <p class="frash">Συμπληρώστε το τηλέφωνό σας</p>

                    <label class="trigger" for="mhnuma"><b>Μήνυμα</b></label>
                    <textarea oninput="validateInput(event)"  rows="8" cols="80" class="inputt"  id="mhnuma" required></textarea>
                    <p class="frash">Συμπληρώστε το μήνυμά σας</p>
        
        
                    <input class="button" type="submit" value="Αποστολή" onclick="showResults()">
                    <input id="cancel" class="button" type="reset" value="Ακύρωση">

                    <p class="den-thes">Δεν θες να χρησιμοποιήσεις τηλέφωνο;&nbsp;&nbsp;<span class="pata" onclick="changeemail()">Πάτα εδώ</span></p>
                    
        
                </form>
            
            </div>

            <p id="div4" class="divider"></p>

            <h1 style="margin-top: 0em;" id="monprosfora" class="top-text">Υποστήριξη Συσκευών</h1>

            <div id="susk_div">
                <p class="susk_text"><span style="font-size: 1.1em; font-weight: bold; color: #565b65;">
                    <a href="https://help.cosmote.gr/system/templates/selfservice/gnosisgr/#!portal/201600000002048/drivers/201600000002584"><img class="ypo_img" 
                    src="../../assets/adslrouters.jpg"></a>
                    
                    <br><br>ADSL/VDSL Routers</span>

                </p>

                <p class="susk_text"><span style="font-size: 1.1em; font-weight: bold; color: #565b65;">
                    <a href="https://help.cosmote.gr/system/templates/selfservice/gnosisgr/#!portal/201600000002048/drivers/201600000002584"><img class="ypo_img" 
                    src="../../assets/mobilebroadband.jpg"></a>
                    
                    <br><br>Mobile Broadband</span>
                </p>

                <p class="susk_text"><span style="font-size: 1.1em; font-weight: bold; color: #565b65;">
                    <a href="https://help.cosmote.gr/system/templates/selfservice/gnosisgr/#!portal/201600000002048/drivers/201600000002584"><img class="ypo_img" 
                    src="../../assets/product1.jpg"></a>
                    
                    <br><br>Smartphones</span>
                </p>

                <p class="susk_text"><span style="font-size: 1.1em; font-weight: bold; color: #565b65;">
                    <a href="https://help.cosmote.gr/system/templates/selfservice/gnosisgr/#!portal/201600000002048/drivers/201600000002584"><img class="ypo_img" 
                    src="../../assets/product8.jpg"></a>
                    
                    <br><br>Αποκωδικοποιητές COSMOTE TV</span>
                </p>

            </div>

            <div style="margin-bottom: 2em;" class="container">
                
                <h1 style="margin-top: 0em; "  id="monprosfora" class="top-text">Προτεινόμενο βίντεο</h1>
                <iframe src="https://www.youtube.com/embed/j5UFA0vMXPg?si=hkYjh0cXQCkxqYob&autoplay=1&mute=1&loop=1"
                title="YouTube video player" class="vid" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen></iframe>
                <p style="text-align: center; margin-bottom: 3em; margin-top: 3em;" class="newsp">"COSMOTE <b>Hints & Tips</b> - Οδηγίες εγκατάστασης εξοπλισμού σε Ευρυζωνική Τηλεφωνική Γραμμή (PSTN)."</p>
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
    <script src="../js/showResults.js" type="text/javascript"></script>
    <script src="../js/popup.js" type="text/javascript"></script>
    <script src="../js/changeepikoinwnia.js" type="text/javascript"></script>
    <script src="../js/showSideNav.js" type="text/javascript"></script>
</body>
</html>