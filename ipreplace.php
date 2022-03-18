<?php
    session_start();
    $email=$_SESSION["email"];

    // ob_start();
    // system('getmac');
    // $Content = ob_get_contents();
    // ob_clean();
    // $mac = substr($Content, strpos($Content,'\\')-20, 17);
    // // echo $mac;
    $ip = file_get_contents("http://ipecho.net/plain");

    $conn = mysqli_connect("localhost", "root", "","tourism_pal"); 
    if(isset($_POST['submit'])){
        $query = "UPDATE customers SET ip='$ip' WHERE email='$email'";
        mysqli_query($conn,$query);
        // $_SESSION['message'] = "You are now logged in";
        header("Location: otp.php");
        $_SESSION["msg"] = "for IP Replace";
    }
    else{
        echo "<script type='text/javascript'>alert('Can't update Try Again');</script>";
    }
    mysqli_close($conn);

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
                height: 450px;
                padding-top: 150px;
            }
    </style>
  </head>
  <body>
    <form action="" method="POST">
     <div id="div1" align="center">
       <h1>Update IP address</h1>
       <!-- <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="text" name="otp" id="otp" placeholder="Enter the OTP" required>
       </div> -->
       <br>
       <h2 style="color: black; background-color: yellow; opacity: 0.8; padding: 20px;"><?php if(isset($ip)){ echo $ip; } else { echo ''; }?></h2><br><br>
       <input type="submit" value="UPDATE" id="button" name="submit"><br><br>
       <p><a id="a1" href="otpverify.php">Go back</a></p>
     </div>
    </form>
  </body>
</html>