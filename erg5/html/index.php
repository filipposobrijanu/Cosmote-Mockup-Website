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


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $xronos = $_POST['xronos'];
    if($xronos>0){

    $charge = xrewsh($xronos);


    if(isset($_POST['count'])){
      if(!($_SESSION['count'])){

          $_SESSION['count'] = 1;
          $_SESSION['sun'] = 0;
          $_SESSION['gr2'] = 0;

      }
      else{

          $count = $_SESSION['count'] + 1;
          $_SESSION['count'] = $count;
          $sunolo = $_SESSION['sun'] + $charge;
          $_SESSION['sun'] = $sunolo;

          if($charge>=2){

            $callsgr2 = $_SESSION['gr2'] + 1;
            $_SESSION['gr2'] = $callsgr2;
          }       
      }
    }

      $myfile = fopen("data.txt", "a");
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
            Κινητή Τηλεφωνία │ COSMOTE.gr
        </title>
        <link rel="icon" type="image/x-icon" href="../files/favicon1.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <header style="background-color: #fefefe;">
            <p class="announcement"><b>--- <span style="background-color:#1f508f; color: white; border-radius: 1vw; padding-left: 0.5vw; padding-right: 0.5vw; padding-bottom: 0.1vw;padding-top: 0.1vw;">ΜΟΝΑΔΙΚΕΣ</span> ΠΡΟΣΦΟΡΕΣ ΜΟΝΟ ΓΙΑ <span style="background-color: white; color: black; border-radius: 1vw; padding-left: 0.5vw; padding-right: 0.5vw; padding-bottom: 0.1vw;padding-top: 0.1vw;">ΣΗΜΕΡΑ</span>, <a style="color: white;" href="https://www.cosmote.gr/hub/"><span class="anaka">ΑΝΑΚΑΛΥΨΕ</span></a> ΤΙΣ ΤΩΡΑ! ---</b></p>
            
            <div>
                <a>
                    <img class="logo" src="../files/Cosmote_logo.svg.png" alt="Cosmote Logo">
                </a>
            </div>

            <hr style="background-color:#7eb023; border: none; height: 0.15em; margin: 0;">
            
        </header>

        <form class="intro" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div id="form1">

            <P id="toptext" class="labelhead">Κλήσεις Τηλεφωνίας</P>

            <hr style="background-color:#eeeeee; border: none; height: 0.2em; margin: 0;">

            <P class="labelhead">Διάρκεια ομιλίας (σε δευτερόλεπτα)</P>

            <?php
              
              if($charge!==null){

                $temp = $xronos;
              }
              echo "<input id='xronos' class='inputt' type='text' name='xronos' placeholder='Εισάγετε τον χρόνο ομιλίας σας' value='$temp' required>"

            ?>

            <hr style="background-color:#eeeeee; border: none; height: 0.2em; margin: 0;">

            
            <?php

              if($charge!==null){

                echo "<p id='result'>Η χρέωσή σας είναι: <b>".$charge."€</b>.</p>";
                
              }
              
            ?>

            <input class="button" type="submit" value="Υπολογισμός Χρέωσης" name="count">
            <input style="background-color: #1a1a1a;" class="button" type="button" id="terma" value="Τερματισμός" name="butn1" onclick="end()">

          </div>

          <div id="form2" class="intro1">


            <P id="toptext" class="labelhead">Κλήσεις Τηλεφωνίας</P>

            <hr style="background-color:#eeeeee; border: none; height: 0.2em; margin: 0;">

            <?php 

            if($_SESSION['count'] >= 1){
              $pos = number_format(($_SESSION['gr2']/$_SESSION['count'])*100,2);
              echo "<P id='pos'>Ποσοστό των κλήσεων με χρέωση από 2 ευρώ και πάνω:<b> ".$pos."%</b>.</P>";
            }
            
            ?>

            <br>
            <br>
            <hr style="background-color:#7eb023; border: none; height: 0.2em; margin: 0;">
            <br>
            <hr style="background-color:#1f508f; border: none; height: 0.2em; margin: 0;">
            <br>
            <br>

          </div>

        </form>

        <p class="pow"> Powered by Filippos Obrizanou</p>


        <footer style="background-color: #fefefe;">
            <hr style="background-color:#00afe9; border: none; height: 0.15em; margin: 0; margin-bottom: 2em;">
          <div class="intro">
            <ul class="foot1">
                <li class="pad"><a href="https://www.facebook.com/cosmote"><img class="social" src="../files/fb.png" alt="Facebook Logo"></a></li>
                <li class="pad"><a href="https://www.youtube.com/user/cosmote"><img class="social" src="../files/yt.png" alt="YouTube Logo"></a></li>
                <li class="pad"><a href="https://www.instagram.com/cosmote_greece/"><img class="social" src="../files/insta.png" alt="Instagram Logo"></a></li>
                <li class="pad"><a href="https://twitter.com/cosmote"><img class="social" src="../files/x.png" alt="Twitter Logo"></a></li>
            </ul>

          </div>
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
          <div class="intro">
            <a href="https://www.t-mobile.com/">
                <img class="tmobilelogo" src="../files/t-mobile.png" alt="Member of T-Mobile Group Logo">
            </a>

          </div>

            <p class="BOTTOMannouncement">© 2023, COSMOTE</p>

        </footer>
        <script>
    
    function end() {

      document.getElementById('form1').style.display = 'none';

      document.getElementById('form2').style.display = 'block';

    }


    var sun =  <?php echo $_SESSION['sun'];?>;
    var calls =  <?php echo $_SESSION['count'];?>;
    if(sun>10 || calls>=10){

      setTimeout(end,1);


    }
    
    </script>
    </body>
</html>