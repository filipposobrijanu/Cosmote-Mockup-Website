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
        Αρχική │ COSMOTE.gr
    </title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon1.png">
    <!---->
    <link rel="stylesheet" href='../css/style.css'>
    <link rel="stylesheet" href="../css/popup.css">
</head>
<body>
    <header class="menu" >
        <p id="topan" class="announcement"><a style="text-decoration: none;" href="https://www.cosmote.gr/cs/cosmote/gr/online-offers.html"><span class="mon-pros">ΜΟΝΑΔΙΚΕΣ ΠΡΟΣΦΟΡΕΣ</span></a> ΜΟΝΟ ΓΙΑ <span style="font-weight: 800;">ΣΗΜΕΡΑ!</span></p>
    <ul class="nav">
        <li><a href="index.php">
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
        <li><div class="dropdown-icon_pad"><a onclick="show_sidenav()"><img class="dropdown-icon" src="../../assets/dropdown.png"></a></div></li></span>

    
    </ul>
  
    <div id="dropdownnav">
        <ul class="nav2">
            <li class="men"><a class="active" href="index.php">ΑΡΧΙΚΗ</a></li>
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
        <script>
            document.body.className = 'fade';
            document.addEventListener("DOMContentLoaded", () => {
            
            document.body.className = '';
     
        });
        </script>  

        <pclass="announcement1"></p>

        <div style="margin-bottom: 3em;">

            <span id="banner" style="display: block;">

                <p class="phone" id="banner1_change">
                    <span style="font-size: 2.7em"><b>Προσφορά<br>COSMOTE TV</b></span><br><br>
                    Μπες στο κλίμα των<br>Χριστουγέννων με το Cinema<br>Pack μόνο με <b>12€/μήνα</b> & πάρε<br><b>ΔΩΡΟ Wi-Fi extender.</b><br><br><br>
                    <a id="banner_but" class="arxikh_but" href="https://www.cosmote.gr/eshop/global/gadgets/configurator.jsp?productId=prod2260053_prod"><strong>Απόκτησέ το</strong></a>
                    
                    <span id="margindots">
                        <button style="background-color: #469c36; color: #fefefe;" onclick="switch1()" id="cir1" class="circle">•</button>
                        <button onclick="switch2()" id="cir2" class="circle">•</button>
                        <button onclick="switch3()" id="cir3" class="circle">•</button>
                    </span>
                </p>
                <img id="tv_xmas" class="banner" src="../../assets/tvxmas-carousel-desktop.jpg" alt="Cosmote Black Friday">
            </span>

            <span id="banner2" style="display: none;">
                <p class="phone" id="banner2_changepadd"> 
                    <span style="font-size: 2.7em"><b>Κορυφαίες συσκευές</b></span><br><br>
                    έως και <b>ΔΩΡΕΑΝ</b> με<br>προγράμματα COSMOTE<br>GIGAMAX!<br><br><br>
                    <a id="banner_but"  class="arxikh_but" href="https://www.cosmote.gr/eshop/global/gadgets/configurator.jsp?productId=prod2260053_prod"><strong>Πρόλαβέ τες</strong></a>
                    
                    <span id="margindots">
                        <button onclick="switch1()" id="cir1" class="circle">•</button>
                        <button style="background-color: #469c36; color: #fefefe;" onclick="switch2()" id="cir2" class="circle">•</button>
                        <button onclick="switch3()" id="cir3" class="circle">•</button>
                    </span>
                    
                </p>
                <img id="smartphon" class="banner" src="../../assets/smarphones-sub-desk.jpg" alt="Cosmote Black Friday">
            </span>
            <span id="banner3" style="display: none;">
                <p id="banner3_changepadd" class="phone">
                    <span style="font-size: 2.3em"><b>Μαγικά δώρα<br>τεχνολογίας για όλους!</b></span><br><br>
                    Μπες στον μαγικό κόσμο… των<br>Χριστουγέννων!<br><br><br>
                    <a id="banner_but"  class="arxikh_but" href="https://www.cosmote.gr/cs/cosmote/gr/xmas-offers.html"><strong>Ανακάλυψέ τα</strong></a>
                    
                    <span id="margindots">
                        <button onclick="switch1()" id="cir1" class="circle">•</button>
                        <button onclick="switch2()" id="cir2" class="circle">•</button>
                        <button style="background-color: #469c36; color: #fefefe;" onclick="switch3()" id="cir3" class="circle">•</button>
                    </span>
                    
                </p>
                <img id="xmass_without" class="banner" src="../../assets/xmass_without_loyalty_desk.png" alt="Cosmote Black Friday">
            </span>

        </div>
        <div style="display: block; margin-top: 3em; text-align: center;">
            <div class="halftone-bg">
            <p class="pronomia_text"><span style="font-size: 1em; font-weight: bold;">
                <a href="https://www.cosmote.gr/cs/cosmote/gr/nea-programmata-internet.html"><img class="top_img" 
                src="../../assets/fixedCategory.png"></a>
                
                <br><br>
                
            <a class="pronomia_but" href="https://www.cosmote.gr/cs/cosmote/gr/nea-programmata-internet.html
            "><strong>Σταθερό & Internet</strong></a>
            </p>
            
            <p class="pronomia_text"><span style="font-size: 1em; font-weight: bold;">
                <a href="https://www.cosmote.gr/cs/cosmote/gr/programmata-kinitis.html"><img class="top_img" 
                src="../../assets/mobileCategory.png"></a>
                
                <br><br>
                
            <a class="pronomia_but" href="https://www.cosmote.gr/cs/cosmote/gr/programmata-kinitis.html
            "><strong>Κινητή</strong></a>
            </p>

            <p class="pronomia_text"><span style="font-size: 1em; font-weight: bold;">
                <a href="https://www.cosmote.gr/eshop/browse/COSMOTE-TV/COSMOTE-TV-Streaming/COSMOTE-TV-Rate-Plans/COSMOTE-TV-Offers/-/N-qz0fe6
                "><img class="top_img" 
                src="../../assets/tvCategory.png"></a>
                
                <br><br>

            <a class="pronomia_but" href="https://www.cosmote.gr/eshop/browse/COSMOTE-TV/
            COSMOTE-TV-Streaming/COSMOTE-TV-Rate-Plans/COSMOTE-TV-Offers/-/N-qz0fe6"><strong>Τηλεόραση</strong></a>
            </p>

        </div>
            

        </div>

        <div style="text-align: center; background-color: #c5e2c0;">
            <h1 id="monprosfora" class="top-text"><span style="font-family: Poppins;">Top</span> Προτάση</h1>

            <div style="display: block; margin-bottom: 2em;">
                <p class="top-text2">Κινητή</p>

            </div>

            <p class="top_prot_text"><span style="font-size: 1em;">
                <img class="top_prot_img" src="../../assets/mobile-placeholder.svg">
                
                <br><span style="font-size: 1.4em; text-align: center; font-family: Poppins;  font-weight: bold;"><span style="color: #469c36;">COSMOTE
                </span><BR><span style="color: #00afe9; font-family: Poppins;  font-weight: bold;">GIGAMAX 2.5GB</span></span><br><br>
                    <b>5 GB</b> Internet 2.5GB από<br>COSMOTE One<br><br>
                    <b>Απεριόριστα λεπτά</b> προς εθνικά<br>δίκτυα<br><br>
                    <b>2000 SMS</b><br><br><br><br>

                    <b style="font-size: 1.4em; font-family: Poppins; color: #469c36;"><span style="
                    text-decoration: line-through;">35.36€</span>&nbsp;&nbsp;&nbsp;23.00€</b>
                
            <a class="top_prot_but" href="https://www.cosmote.gr/cs/cosmote/gr/programmata-kinitis.html
            "><strong>Μάθε Περισσότερα</strong></a>
            </p>

            <p class="top_prot_text"><span style="font-size: 1em; ">
                <img class="top_prot_img" src="../../assets/mobile-placeholder.svg">
                
                <br><span style="font-size: 1.4em; text-align: center;"><span style="color: #469c36; 
                font-family: Poppins; font-weight: bold;">COSMOTE
                </span><BR><span style="color: #00afe9; font-family: Poppins; font-weight: bold;">GIGAMAX FAMILY UNLIMITED</span></span><br><br>
                    <b>Απεριόριστα GB</b> για πλοήγηση στο<br>Internet<br><br>
                    <b>Απεριόριστα λεπτά</b> προς όλους<br><br>
                    <b>4000 SMS</b><br><br><br><br><br>

                    <b style="font-size: 1.4em; font-family: Poppins; color: #469c36; ">29.00€</b>
                
            <a class="top_prot_but" href="https://www.cosmote.gr/cs/cosmote/gr/programmata-kinitis.html
            "><strong>Μάθε Περισσότερα</strong></a>
            </p>

            <p class="top_prot_text"><span style="font-size: 1em;">
                <img class="top_prot_img" src="../../assets/mobile-placeholder.svg">
                
                <br><span style="font-size: 1.4em; text-align: center;"><span style="color: #469c36; font-family: 
                Poppins; font-weight: bold;">COSMOTE
                </span><BR><span style="color: #00afe9; font-family: Poppins;  font-weight: bold;">GIGAMAX UNLIMITED</span></span><br><br>
                    <b>Απεριόριστα GB</b> για πλοήγηση στο<br>Internet<br><br>
                    <b>Απεριόριστα λεπτά</b> προς εθνικά<br>δίκτυα<br><br>
                    <b>2000 SMS</b><br><br><br><br>

                    <b style="font-size: 1.4em; font-family: Poppins; color: #469c36;">
                        <span style="
                    text-decoration: line-through;">80.35€</span>&nbsp;&nbsp;&nbsp;36.90€</b>
                
            <a class="top_prot_but" href="https://www.cosmote.gr/cs/cosmote/gr/programmata-kinitis.html
            "><strong>Μάθε Περισσότερα</strong></a>
            </p>

            <div  style="background-color: #f9f9f9;">
            <span id="hide_protaseis">
                <h1 style="margin-top:1em;" id="monprosfora" class="top-text">Προτάσεις COSMOTE</h1>
                <div style="margin-bottom: 2em;">
                    <p id="cosm_gigamax_banner" class="phone" >
                        <span style="font-size: 2em; font-family: Poppins;"><b><span style="color: #469c36; margin-bottom:11em;">COSMOTE</span><br><span style="color: #00afe9;">GIGAMAX</span></b></span><br><br>
                        Βρες το πρόγραμμα που<br>ταιριάζει στις ανάγκες σου με<br>πολλά data και ΑΠΕΡΙΟΡΙΣΤΗ<br>ΟΜΙΛΙΑ προς όλους<br><br>
                        <a id="jekina"  class="arxikh_but" href="https://www.cosmote.gr/cs/cosmote/gr/programmata-kinitis.html"><strong>Απόκτησέ το</strong></a>
        
                    </p>
                    <img id="cosmblue" class="banner1" src="../../assets/cosmote-gigamax-lowerbanner-revised-desktop-min.png">
                </div>
                <div>
                    <p id="ftiaje_idan_banner" class="phone">
                        <span style="font-size: 1.6em;"><b>Φτιάξε το ιδανικό<br>πρόγραμμα</b></span><br><br>
                        με υπηρεσίες Κινητής,<br> Σταθερής, Internet & TV και<br>  δημιούργησε το δικό σου<br>  COSMOTE ONE<br><br>
                        <a id="jekina1"  class="arxikh_but" href="https://www.cosmote.gr/eshop/wizard/wizard.jsp"><strong>Ξεκίνα εδώ</strong></a>
        
                    </p>
                    <img class="banner1" src="../../assets/hub-redesign-wizard-new-resized.png">
                </div>
                <h1 style="margin-top: 0em;" id="monprosfora" class="top-text">Ένας κόσμος, καλύτερος για όλους.</h1>
                
                <div style="margin: 0;">
                    <p id="cosmo_blue_banner" class="phone">
                        <span style="font-size: 2em; font-family: Poppins;"><b><span style="color: #469c36;">COSMOTE</span> <span style="color:#00afe9;">BLUE</span></b></span><br><br>Αναλαμβάνουμε δράση για την<br> προστασία της θάλασσάς μας.<br><br><br>
                        <a id="jekina" class="arxikh_but" href="https://www.cosmote.gr/cs/cosmote/gr/blue.html"><strong>Μάθε Περισσότερα</strong></a>
                    </p>
                    <img id="cosmblue" class="banner1" src="../../assets/cosmote-blue-carouselbanner-destkop-resize1.png">
                </div>
            </span>
                <h1 style="margin-top: 0em;" id="monprosfora" class="top-text">Προνόμια COSMOTE</h1>
                <div style="display: block; ">

                        <p class="pronomia_text"><span style="font-size: 1.3em; font-weight: bold;">
                            <a href="https://www.cosmoteinsurance.gr/ci/deals-for-you?utm_medium=banner&utm_
                            source=cosmote.gr&utm_campaign=dfy"><img class="pronomia_img" 
                            src="../../assets/insurance-amaksi-pronomia-gr-meta.jpg"></a>
                            
                            <br><br>COSMOTE Insurance</span><br><br>
                        Ασφάλισε το αυτοκίνητο ή τη μηχανή σου<br>με κωδικό DEALS for YOU<br><br><br>
                        <a class="pronomia_but" href="https://www.cosmoteinsurance.gr/ci/deals-for-you?utm_medium=banner&utm_
                         source=cosmote.gr&utm_campaign=dfy"><strong>Μάθε τα πάντα εδώ</strong></a>
                        </p>
                        
                        <p class="pronomia_text"><span style="font-size: 1.3em; font-weight: bold;">
                            <a href="https://box.gr/"><img class="pronomia_img" 
                            src="../../assets/box-gb.jpg"></a>
                            
                            <br><br>BOX</span><br><br>
                            To μόνο food delivery app που κερδίζεις<br>εκπτώσεις ή GB με κάθε παραγγελία<br><br><br>
                        <a class="pronomia_but" href="https://box.gr/"><strong>Παράγγειλε τώρα</strong></a>
                        </p>

                        <p class="pronomia_text"><span style="font-size: 1.3em; font-weight: bold;">
                            <a href="https://www.cosmote.gr/dealsforyou/"><img class="pronomia_img" 
                            src="../../assets/deals4you-hubbox-meta.png"></a>
                            
                            <br><br>COSMOTE DEALS for YOU</span><br><br>
                            Με το COSMOTE DEALS for YOU έχεις<br>αμέτρητες επιλογές, για να τα ζεις όλα!<br><br><br>
                        <a class="pronomia_but" href="https://www.cosmote.gr/dealsforyou/"><strong>Πάρε κωδικό!</strong></a>
                        </p>
                        

                </div>
            </div> 


            
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
    <script src="../js/banner_selection.js" type="text/javascript"></script>
    <script src="../js/arrow_mov.js" type="text/javascript"></script>
    <script src="../js/popup.js" type="text/javascript"></script>
    <script src="../js/showSideNav.js" type="text/javascript"></script>
</body>
</html>