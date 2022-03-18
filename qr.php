<?php
    include 'phpqrcode/qrlib.php';
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    $email=$_SESSION["email"];

    $conn = mysqli_connect("localhost", "root", "","tourism_pal");
    $query = mysqli_query($conn, "SELECT * from customers WHERE email='$email'");
    while($row = mysqli_fetch_array($query)){
        $enckey= $row['enckey1']; 
    }
    mysqli_close($conn);

    ########AES_ENCRYPTION & QR GENERATION########
    //RANDOM GENERATOR
    $n=5;
    $char = 'abcdefghijklmnopqrstuvwxyz';
    $rand = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($char) - 1);
        $rand .= $char[$index];
         
    }
    // setcookie("TestCookie", $rand, time()+3600);
    // echo $_COOKIE["TestCookie"];
    // echo $rand;

    //AES ENCRYPTION
    $cipher = "aes-256-cbc"; 
    $encryption_key = $enckey; 
    $ciphertext = openssl_encrypt($rand, $cipher, $encryption_key); 

    //QR GENERATION
    $text = $ciphertext;
    $ecc = 'L';
    $pixel_Size = 8;
    $frame_Size = 2;
    QRcode::png($text, 'qr.png', $ecc, $pixel_Size, $frame_Size);


    $qrotp=$_POST['qrotp'];

    // echo $qrotp;
    // if($qrotp == $rand){
    //   $_SESSION["rand"] = $rand;
    //   $_SESSION["qrotp"] = $qrotp;
    // }
    // if (isset($_POST['submit1'])){
    //   header("Location: qrcheck.php");       
    // }
    // else{
    //   echo "<script type='text/javascript'>alert('Invalid OTP');</script>";
    // }
    $_SESSION["msg"] = "";
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
                height: 620px;
                padding-top: 20px;
            }
    </style>
  </head>
  <body>
    <form action="" method="POST">
     <div id="div1" align="center">
       <h1>Verify QRE-OTP</h1>
       <img src="qr.png" alt="No QR Found"><br><br>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="text" name="qrotp" id="qrotp" placeholder="Enter the OTP in Decrypted format">
       </div><br><br>
      <input type="button" value="VERIFY" id="button" name="verify" onclick="verifyotp()"><br><br><br><br>

       <span><a id="a1" href="https://qrcodescan.in/" target="_blank">Scan your QR Externally ||</a></span>
       <span><a id="a1" href="https://encode-decode.com/aes256-encrypt-online/" target="_blank">Decrypt AES 256 Externally</a></span>
     </div>
    </form>

    <script>
      function verifyotp() {
        var random = '<?php echo $rand; ?>';
        var qrotp = document.getElementById("qrotp").value;
        if(random == qrotp){
          window.location.href = "about.php";
        }
        else{
          alert ("Invalid OTP");
        }
      }
    </script>

  </body>
</html>