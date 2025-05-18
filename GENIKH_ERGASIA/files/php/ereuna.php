<?php

session_start();

global $calls;
global $callsgr2;
global $sunolo;
global $charge;

global $temp;
$temp = "";


function xrewsh($xronos) {

  $mins = ceil($xronos / 60);
  if($mins<=3){

    $xrew = 0.06 * $mins;

  }
  else{

    $xrew = 0.06 * 3 + ($mins-3) * 0.04;

  }
  return $xrew;

}

if(isset($_SESSION['sescount'])){

    $_SESSION['sescount'] = $_SESSION['sescount'] + 1;

}
else{

    $_SESSION['sescount'] = 0;
    
}


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $xronos = $_POST['xronos'];
    if($xronos>0){

    $charge = xrewsh($xronos);


    if(isset($_POST['count'])){
      if(isset($_SESSION['count'])){

        $_SESSION['count'] = $_SESSION['count'] + 1;
        $sunolo = $_SESSION['sun'] + $charge;
        $_SESSION['sun'] = $sunolo;

        if($charge>=2){

            $callsgr2 = $_SESSION['gr2'] + 1;
            $_SESSION['gr2'] = $callsgr2;
          }      


      }
      else{

          $_SESSION['count'] = 1;
          $_SESSION['sun'] = 0;
          $_SESSION['gr2'] = 0;
 
      }
    }

      $myfile = fopen("../data.txt", "a");
      $text = "ΚΛΗΣΗ: ".$_SESSION['count']." ΔΙΑΡΚΕΙΑ: ".$xronos." ΧΡΕΩΣΗ: ".$charge."\n";
      fwrite($myfile, $text);
      
    }

  }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Έρευνα │ COSMOTE.gr
    </title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon1.png">
    <!---->
    <link rel="stylesheet" href="../css/ereuna.css">
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
        <li class="men"><a  href="challenge.php">ΠΡΟΚΛΗΣΗ</a></li>
        <li class="men"><a class="active"  href="ereuna.php">ΕΡΕΥΝΑ</a></li>
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
            <li class="men"><a class="active" href="ereuna.php">ΕΡΕΥΝΑ</a></li>
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
        <div style="margin-bottom: 0em;">
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

        <div class="halftone-bgg">
            <form class="intro" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

                    <div id="form1">

                    <P id="toptext" class="labelhead">Κλήσεις Τηλεφωνίας</P>

                    <P class="labelhead"><b>Διάρκεια ομιλίας</b> (σε δευτερόλεπτα)</P>

                    <?php
                    
                    if($charge!==null){

                        $temp = $xronos;
                    }
                    echo "<input id='xronos' class='inputt' type='number' name='xronos' placeholder='Εισάγετε τον χρόνο ομιλίας σας' value='$temp' required>"

                    ?>
                    
                    <?php

                    if($charge!==null){

                        echo "<p id='result'>Η χρέωσή σας είναι: <b>".$charge."€</b>.</p>";
                        
                    }
                    
                    ?>

                    <input id="ypologismos_btn" class="button" type="submit" value="Υπολογισμός Χρέωσης" name="count">
                    <input style="background-color: black; color:white;" class="button" type="button" id="cancel" value="Τερματισμός" name="butn1" onclick="end()">

                </div>

                <div id="form2" class="intro1">


                    <P id="toptext" class="labelhead">Κλήσεις Τηλεφωνίας</P>

                    <?php 

                    if($_SESSION['count'] >= 1){
                    $pos = number_format(($_SESSION['gr2']/$_SESSION['count'])*100,2);
                    echo "<P id='pos'>Ποσοστό των κλήσεων με χρέωση από 2 ευρώ και πάνω:<b> ".$pos."%</b>.</P>";
                    }
                    
                    ?>


                    <hr style="background-color:#469c36; border: none; height: 0.2em; margin: 0;">
                    <br>
                    <hr style="background-color:#327626; border: none; height: 0.2em; margin: 0;">
                    <br>


                </div>

            </form>

        </div>

        <div style="background-color:black;">
        <a href="#head">
            <img id="arrow" class="arrow hide" src="../../assets/arrow.png" alt="Arrow">
        </a>
        </div>
    </section>

    <footer id="footer" >

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
    <script>
    
    function end() {

    document.getElementById('form1').style.display = 'none';

    document.getElementById('form2').style.display = 'block';


    }

    var sun =  <?php echo $_SESSION['sun'];?>;
    var calls =  <?php echo $_SESSION['count'];?>;
    if(sun>10 || calls>=100 ){

    setTimeout(end,1);
     
    }




</script>
</body>
</html>