<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Συνδέσου τώρα │ COSMOTE.gr
    </title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon1.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/popup.css">
    <!---->
    <style>

        .cosmlogo{
            width: 8em; 
            padding: 0.4em; 
            border-radius: 0.5em;
        }

        .top-text{

            text-align: center;
            background-color:#469c36;
            margin: 0;
            font-family:Zona;
            color: white;
            font-size: 2.5em;
            padding: 0.2em;
            border-radius: 0.5em;
            margin-top: 1em;

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
        <li class="men"><a href="about.php">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
        <li class="men"><a href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
        <li class="men"><a  class="active"id="blinking" href="ereuna.php">ΕΡΕΥΝΑ</a></li>
        <li><div class="padd"><a class="login-icon" href="login.php"><img src="../../assets/user-icon.svg" alt="login icon"></a></div></li>
        </span>
<span id="show_small_res">
        <li><div class="dropdown-icon_pad"><a onclick="show_sidenav()"><img class="dropdown-icon" src="../../assets/dropdown.png"></a></div></li></span>
    </ul>

    <div id="dropdownnav">
        <ul class="nav2">
            <li class="men"><a  href="index.php">ΑΡΧΙΚΗ</a></li>
            <li class="men"><a href="news.php">ΝΕΑ</a></li>
            <li class="men"><a href="contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
            <li class="men"><a href="about.php">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
            <li class="men"><a href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
            <li class="men"><a id="blinking" href="ereuna.php">ΕΡΕΥΝΑ</a></li>
            <li class="men"><a class="login-icon2" href="login.php"><img src="../../assets/user-icon.svg" alt="login icon"></a></li>
        <br></ul>
        </div>
    <hr id="horline" class="navhr1">
    <!--<hr class="navhr">-->

    </header>


    <section id="bgcolor" style="background-color: #d1ddee;">
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
        <div id="spacerr" class="spacer"></div>
        <form id="sundesh" method="post" action="find.php" >

            <P id="toptext33" class="labelhead">Σύνδεση</P>

            <label class="trigger" for="email">Email</label>
            <input class="inputt" type="text" name="findemail" id="findemail" placeholder="Email" required>
            <p class="frash">Συμπληρώστε το όνομά σας</p>

            <!--<label class="trigger" for=password>Κωδικός</label>
            <input class="inputt" type="password" name="password" placeholder="Κωδικός"  id="password" required>
            <p class="frash">Συμπληρώστε τον κωδικό σας</p>-->


            <input class="button-log" type="submit" value="Σύνδεση">
            <p class="den-exeis">Δεν έχεις λογαριασμό;&nbsp;&nbsp;<a class="ftiaje" style="color: #030303;" href="#head" onclick="switchtoeggrafh()">Φτιάξε το δικό σου!</a></p>

        </form>

        <form id="bash" method="post" action="mydata.php">

            <P id="toptext" class="labelhead">Εγγραφή</P>

            <P class="labelhead">Προσωπικά στοιχεία</P>

            <label class="trigger" for="title">Τίτλος</label> <br>
            <input class="poin" type="radio" name="title" value="Κύριος" checked> Κύριος
            <input class="poin" type="radio" name="title" value="Κυρία"> Κυρία
            <p class="frash">Συμπληρώστε τον τίτλο σας</p>

            <label class="trigger" for="name">Όνομα</label>
            <input class="inputt" type="text" name="name" id="name" placeholder="Όνομα (π.χ. Γιώργος)">
            <p class="frash">Συμπληρώστε το όνομά σας</p>

            <label class="trigger" for="lastname">Επώνυμο</label>
            <input class="inputt" type="text" name="lastname" id="lastname" placeholder="Επώνυμο (π.χ. Παπαδόπουλος)">
            <p class="frash">Συμπληρώστε το επώνυμό σας</p>


            <label class="trigger" for="birthdate">Ημερομηνία Γέννησης</label>
            <input class="inputt" id="poin1" type="date" name="birthdate" min="1980-01-01" max="2022-12-31">
            <p class="frash">Συμπληρώστε την ημερομηνία γέννησής σας</p>

            <label class="trigger" for="country">Χώρα Κατοικίας</label>
            <select class="poin" name="country">
              <option value="Ελλάδα" selected>Ελλάδα</option>
              <option value="Τουρκία">Τουρκία</option>
              <option value="Ιταλία">Ιταλία</option>
              <option value="Αλβανία">Αλβανία</option>
              <option value="Βουλγαρία">Βουλγαρία</option>
            </select>
            <p class="frash">Συμπληρώστε την χώρα κατοικίας σας</p>


            <label class="trigger" for="oik">Οικογενειακή Κατάσταση</label>
            <select class="poin" name="oik">
              <option value="Έγγαμος">Έγγαμος</option>
              <option value="Άγαμος">Άγαμος</option>
            </select>
            <p class="frash">Συμπληρώστε την οικογενειακή κατάστασή σας</p>


            <p class="labelhead">Στοιχεία επικοινωνίας</p>


            <label class="trigger" for="address"><span class="apar">* </span>Διεύθυνση Κατοικίας</label>
            <input class="inputt" type="text" name="address" id="address" placeholder="Διεύθυνση Κατοικίας" required>
            <p class="frash">Συμπληρώστε την διεύθυνσή σας</p>

          
            <label class="trigger" for="city">Πόλη</label>
            <input class="inputt" type="text" name="city" id="city" size="10" maxlength="15" placeholder="Πόλη (π.χ. Πειραιάς)">
            <p class="frash">Συμπληρώστε την πόλη σας</p>
          
            <label class="trigger" for="perioxh">Περιοχή/Περιφέρεια</label>
            <input class="inputt" type="text" id="perioxh" name="perioxh" placeholder="Περιοχή/Περιφέρεια (π.χ. Αττική)">
            <p class="frash">Συμπληρώστε την περιφέρειά σας</p>

          
            <label class="trigger" for="tax">Ταχυδρομικός Κώδικας</label>
            <input class="inputt" type="text" name="tax" id="tax" placeholder="Τ.Κ. (π.χ. 18χχχ για Πειραιά)">
            <p class="frash">Συμπληρώστε τον ταχυδρομικό κώδικά σας</p>

          
            <label class="trigger" for="phone">Τηλέφωνο</label>
            <input class="inputt" type="tel" name="phone" id="phone" placeholder="Τηλέφωνο (π.χ. +30 69χχχχχχχχχχχ για Ελλάδα)">
            <p class="frash">Συμπληρώστε το τηλέφωνό σας</p>

          
            <label class="trigger" for="email">Email</label>
            <input class="inputt" type="email" name="email" id="email" placeholder="Email">
            <p class="frash">Συμπληρώστε την ηλεκτρονική διεύθυνσή σας</p>


            <p class="labelhead">Δημιουργία κωδικού πρόσβασης</p>


            <label class="trigger" for="username"><span class="apar">* </span>Συνθηματικό</label>
            <input class="inputt" type="text" name="username" id="username" required>
            <p class="frash">Συμπληρώστε το συνθηματικό σας</p>

          
            <label class="trigger" for=password><span class="apar">* </span>Κωδικός</label>
            <input class="inputt" type="password" name="password" id="password" required>
            <p class="frash">Συμπληρώστε τον κωδικό σας</p>

            <p class="oroi"> Έχω διαβάσει και αποδέχομαι τους <a style="color: #565b65;" href="https://www.cosmote.gr/cs/cosmote/gr/cosmotehomedporoikaiproipotheseis.html">Όρους & Προϋποθέσεις</a></p>
            <input class="inputt" id="check" type="checkbox" name="terms" required> 

            <input class="button" type="submit" value="Εγγραφή">
            <input id="cancel" class="button" type="reset" value="Ακύρωση">

            <p class="den-exeis">Έχεις ήδη λογαριασμό;&nbsp;&nbsp;<a class="ftiaje" style="text-decoration: none; color: #030303;" href="#head" onclick="switchtosundesh()">Συνδέσου τώρα!</a></p>


        </form>

        <div id="spacerr" class="spacer"></div>

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
    <script src="../js/switchlogforms.js"></script>
    <script src="../js/showSideNav.js" type="text/javascript"></script>
</body>
</html>