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
        Πρόκληση │ COSMOTE.gr
    </title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon1.png">
    <!---->
    <link rel="stylesheet" href="../css/challenge.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/popup.css">
    
</head>
<body>
    <header class="menu" >
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
        <li class="men"><a class="active" href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
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
            <li class="men"><a href="about.php">ΠΛΗΡΟΦΟΡΙΕΣ</a></li>
            <li class="men"><a class="active"  href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
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
        <div style="margin-bottom: 2em;">
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
        <script>
            document.body.className = 'fade';
            document.addEventListener("DOMContentLoaded", () => {
            
            document.body.className = '';
     
        });
        </script>
        
        <div class="bor">

            <div class="top">
                <h1  class="top1">Διαιρετότητα αριθμού</h1>
                <h4 class="top2">με το 3, το 4 και το 7 (βάσει <a style="color: #1f508f;" href="https://eistoapeiron.blogspot.com/2020/01/kritiria-diairetotitas-1-18.html">...</a>)</h4>
            </div>
            
            <form>
    
                <input id="inp" placeholder="Καταχωρήστε έναν αριθμό" type="text" name="inp">
                <BR>
                <input id="button" type="button" value="Καταχώρηση" required>
                <p id="result"></p>
    
            </form>
    
            <p class="foot_text">Powered by Filippos Obrijanu</p>
            
        </div>
    
        <a href="#head">
            <img id="arrow" class="arrow hide" src="../../assets/arrow.png" alt="Arrow">
        </a>
        
    </section>

    <footer id="footer" style="margin-top: 1em;">

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
    <script src="../js/challenge.js" type="text/javascript"></script>
    <script src="../js/popup.js" type="text/javascript"></script>
    <script src="../js/showSideNav.js" type="text/javascript"></script>
</body>
</html>