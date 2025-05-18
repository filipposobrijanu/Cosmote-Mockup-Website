<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "personal"; 

$conn = mysqli_connect($servername, $username, $password, $dbname); 

if (!$conn) { 
die("Connection failed: " . mysqli_connect_error()); 
} 

mysqli_set_charset($conn, "utf8"); 

$sql = "SELECT * FROM `bash` WHERE `email`='".$_POST['findemail']."';"; 


echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Τα δεδομένα σου │ COSMOTE.gr
    </title>
    <link rel="icon" type="image/x-icon" href="../../assets/favicon1.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">
    
    <!---->

</head>
<body>

<header style="background-color: #fefefe;">
<p id="head" class="announcement"><a style="text-decoration: none;" href="https://www.cosmote.gr/cs/cosmote/gr/online-offers.html"><span class="mon-pros">ΜΟΝΑΔΙΚΕΣ ΠΡΟΣΦΟΡΕΣ</span></a> ΜΟΝΟ ΓΙΑ <span style="font-weight: 800;">ΣΗΜΕΡΑ!</span></p>

<div style="text-align: center;">
    <a href="index.html">
        <img class="logo" src="../files/Cosmote_logo.svg.png" alt="Cosmote Logo">
    </a>
</div>

<hr id="horline" class="navhr1">

</header>


<section id="bgcolor" style="background-color: #eaeaea;">
';
        

            echo 
            "<P id='toptext31' class='labelhead'>Τα δεδομένα σου</P><table class='tablee'><tr><th>Τίτλος</th>
            <th>Όνομα</th>
            <th>Επώνυμο</th>
            <th>Ημερομηνία Γέννησης</th>
            <th>Χώρα Κατοικίας</th>
            <th>Οικογενειακή Κατάσταση</th>
            <th>Διεύθυνση Κατοικίας</th>
            <th>Πόλη</th>
            <th>Περιοχή/Περιφέρεια</th>
            <th>Ταχυδρομικός Κώδικας</th>
            <th>Τηλέφωνο</th>
            <th>Email</th>
            <th>Συνθηματικό</th>
            <th>Κωδικός</th>"; 

            $result = mysqli_query($conn, $sql); 


            while($row = mysqli_fetch_assoc($result)) { 

                echo "<tr id='rowbg'><td>".$row["title"]."</td><td>".$row["name"]."</td><td>".$row["lastname"]."</td>
                <td>".$row["birthdate"]."</td><td>".$row["country"]."</td><td>".$row["oik"]."</td>
                <td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["perioxh"]."</td>
                <td>".$row["tax"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["username"]."</td>
                <td>".$row["password"]."</td></tr>
                
                ";
                $year = explode('-', $row["birthdate"]);
                $year = $year[0];

                echo "
                
                <script>
                
                var year = parseInt('$year');

                if(year%2 === 0){

                    document.getElementById('rowbg').style.backgroundColor = '#327626';


                }
                else{

                    document.getElementById('rowbg').style.backgroundColor = 'rgb(219, 0, 0)';

                }

                </script>";

            } 
            echo "</table>"; 

        echo '<a href="#head">
            <img id="arrow" class="arrow hide" src="../files/arrow.png" alt="Arrow">
        </a>

    </section>
        
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

    <a href="https://www.t-mobile.com/">
        <img class="tmobilelogo" src="../files/t-mobile.png" alt="Member of T-Mobile Group Logo">
    </a>

    <div class="BOTTOMannouncement">
        <p class="pow">© 2023, COSMOTE , Powered by Filippos Obrijanu</p>
    </div>
    </footer>
    <script src="arrow_mov.js" type="text/javascript"></script>

</body>
</html>';

mysqli_close($conn); 
?> 