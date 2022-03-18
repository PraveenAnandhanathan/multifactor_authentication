<?php
session_start();
$email=$_SESSION["email"];
$otp=$_SESSION["otp"];
// echo $otp;
if((time()-$_SESSION['timestamp']) > 60){
  $otp = "INVALID";
}
error_reporting(E_ERROR | E_PARSE);
$msg = "";
$msg = $_SESSION["msg"];

if (isset($_POST['submit'])){
      $emailotp=$_POST['otp'];
      $enc_key=$_POST['key'];

      ########TAMIL_REMAPPING########
      $emailotp = str_replace("கா", "f", $emailotp);
      $emailotp = str_replace("ஙா", "g", $emailotp);
      $emailotp = str_replace("சா", "h", $emailotp);
      $emailotp = str_replace("ஞா", "i", $emailotp);
      $emailotp = str_replace("டா", "j", $emailotp);
      $emailotp = str_replace("ணா", "k", $emailotp);
      $emailotp = str_replace("தா", "l", $emailotp);
      $emailotp = str_replace("நா", "m", $emailotp);
      $emailotp = str_replace("பா", "n", $emailotp);
      $emailotp = str_replace("மா", "o", $emailotp);
      $emailotp = str_replace("யா", "p", $emailotp);
      $emailotp = str_replace("ரா", "q", $emailotp);
      $emailotp = str_replace("லா", "r", $emailotp);
      $emailotp = str_replace("வா", "s", $emailotp);
      $emailotp = str_replace("ழா", "t", $emailotp);
      $emailotp = str_replace("ளா", "u", $emailotp);
      $emailotp = str_replace("றா", "v", $emailotp);
      $emailotp = str_replace("னா", "w", $emailotp);
      
      $emailotp = str_replace("கி", "x", $emailotp);
      $emailotp = str_replace("ஙி", "y", $emailotp);
      $emailotp = str_replace("சி", "z", $emailotp);
      $emailotp = str_replace("ஞி", "1", $emailotp);
      $emailotp = str_replace("டி", "2", $emailotp);
      $emailotp = str_replace("ணி", "3", $emailotp);
      $emailotp = str_replace("தி", "4", $emailotp);
      $emailotp = str_replace("நி", "5", $emailotp);
      $emailotp = str_replace("பி", "6", $emailotp);
      $emailotp = str_replace("மி", "7", $emailotp);
      $emailotp = str_replace("யி", "8", $emailotp);
      $emailotp = str_replace("ரி", "9", $emailotp);
      $emailotp = str_replace("லி", "0", $emailotp);
      $emailotp = str_replace("வி", "/", $emailotp);
      $emailotp = str_replace("ழி", "=", $emailotp);
      $emailotp = str_replace("ளி", "+", $emailotp);

      $emailotp = str_replace("அ", "A", $emailotp);
      $emailotp = str_replace("ஆ", "B", $emailotp);
      $emailotp = str_replace("இ", "C", $emailotp);
      $emailotp = str_replace("ஈ", "D", $emailotp);
      $emailotp = str_replace("உ", "E", $emailotp);
      $emailotp = str_replace("ஊ", "F", $emailotp);
      $emailotp = str_replace("எ", "G", $emailotp);
      $emailotp = str_replace("ஏ", "H", $emailotp);
      $emailotp = str_replace("ஐ", "I", $emailotp);
      $emailotp = str_replace("ஒ", "J", $emailotp);
      $emailotp = str_replace("ஓ", "K", $emailotp);
      $emailotp = str_replace("ஔ", "L", $emailotp);
      $emailotp = str_replace("ஃ", "M", $emailotp);
      
      $emailotp = str_replace("க", "N", $emailotp);
      $emailotp = str_replace("ங", "O", $emailotp);
      $emailotp = str_replace("ச", "P", $emailotp);
      $emailotp = str_replace("ஞ", "Q", $emailotp);
      $emailotp = str_replace("ட", "R", $emailotp);
      $emailotp = str_replace("ண", "S", $emailotp);
      $emailotp = str_replace("த", "T", $emailotp);
      $emailotp = str_replace("ந", "U", $emailotp);
      $emailotp = str_replace("ப", "V", $emailotp);
      $emailotp = str_replace("ம", "W", $emailotp);
      $emailotp = str_replace("ய", "X", $emailotp);
      $emailotp = str_replace("ர", "Y", $emailotp);
      $emailotp = str_replace("ல", "Z", $emailotp);
      $emailotp = str_replace("வ", "a", $emailotp);
      $emailotp = str_replace("ழ", "b", $emailotp);
      $emailotp = str_replace("ள", "c", $emailotp);
      $emailotp = str_replace("ற", "d", $emailotp);
      $emailotp = str_replace("ன", "e", $emailotp);

      ########AES_DECRYPTION########
      $cipher = "aes-256-cbc"; 
      $encryption_key = $enc_key; 
      // $iv_size = openssl_cipher_iv_length($cipher); 
      // $iv = openssl_random_pseudo_bytes($iv_size);
      $iv = "1234567812345678";
      $emailotp = openssl_decrypt($emailotp, $cipher, $encryption_key, 0, $iv);

      ########MAC FETCH########
      // ob_start();
      // system('getmac');
      // $Content = ob_get_contents();
      // ob_clean();
      // $mac = substr($Content, strpos($Content,'\\')-20, 17);
      $ip = file_get_contents("http://ipecho.net/plain");

      $conn = mysqli_connect("localhost", "root", "","tourism_pal");
      $query = mysqli_query($conn, "SELECT * from customers WHERE email='$email'");
      while($row = mysqli_fetch_array($query)){
        $dbip= $row['ip']; 
        if($otp == $emailotp){
          if($ip == $dbip){
            header("Location: qr.php");
          }
          else{
            echo "<script type='text/javascript'>alert('IP Address Mismatches');</script>";
          }
        }
        else{
          echo "<script type='text/javascript'>alert('Invalid OTP');</script>";
          // echo "<script type='text/javascript'>document.getElementById('invalid').innerHTML = 'Invaild';</script>";
        }
      }
      
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tourism Pal</title>
    <link rel="icon" href="icon/tp.png">
    <link href="sheet.css" rel="stylesheet" type="text/css">
    <script src="script1.js" type="text/javascript"></script>
    <style>
          #div1{
                height: 500px;
                padding-top: 100px;
            }
    </style>
    <!-- <script>
      function startTimer(duration, display) {
          var timer = duration, minutes, seconds;
          setInterval(function () {
              minutes = parseInt(timer / 60, 10);
              seconds = parseInt(timer % 60, 10);
              minutes = minutes < 10 ? "0" + minutes : minutes;
              seconds = seconds < 10 ? "0" + seconds : seconds;
              display.textContent = minutes + ":" + seconds;
              if (--timer < 0) {
                  timer = duration;
              }
          }, 1000);
      }
      window.onload = function () {
          var min = 60 * 1,
          display = document.querySelector('#time');
          startTimer(min, display);
      };
    </script> -->
  </head>
  <body>
    <form action="" method="POST">
     <div id="div1" align="center">
       <h1>Verify TE-OTP <?php if(isset($msg)){ echo $msg; } else { echo ''; }?></h1>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="text" name="otp" id="otp" placeholder="Enter the OTP" required>
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="text" name="key" id="key" placeholder="Enter the Encryption Key" required>
       </div><br><br>
       <div><p><a id="a1" href="otp.php">Resend OTP in</a></p><span id="time">1:00</span></div><br><br>
       <input type="submit" value="VERIFY" id="button" name="submit"><br><br>
       <?php
          if($msg == ""){
            echo '<p><a id="a1" href="ipreplace.php">Update Device\'s IP Address</a></p>';
          }
          else{
          }
       ?>
       
     </div>
    </form>
  </body>
</html>