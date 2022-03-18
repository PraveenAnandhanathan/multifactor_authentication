<?php
      $conn = mysqli_connect("localhost", "root", "","tourism_pal");

      if (isset($_POST['submit'])){
          session_start();
          $email=$_POST['email'];
          $pass=$_POST['pass'];
          $hashed = hash("sha512", $pass);
          $_SESSION["email"] = $_POST["email"];
          $_SESSION['timestamp'] = time();
          
          $file = file_get_contents($_FILES["file"]["name"]);
          $code = hash("sha512", $file);

          $query = mysqli_query($conn, "SELECT * from customers WHERE email='$email'");
          while($row = mysqli_fetch_array($query)){
            //$dbemail= $row['email'];
            $dbpassword= $row['password']; 
            $dbcode = $row['code'];
          if (password_verify($hashed, $dbpassword)){
            if ($code == $dbcode){
              header("Location: otp.php");
            }
            else{
              // echo $code;
              echo "<script type='text/javascript'>alert('Invalid Security Code');</script>";
            }
          }
          else{
            echo "<script type='text/javascript'>alert('Invalid Username or Password');</script>";
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
  </head>
  <body>
    <form action="" method="POST" enctype="multipart/form-data">
     <div id="div1" align="center">
       <h1>Login to Tourism Pal</h1>
       <p>Easily using</p>
       <a href="https://www.facebook.com" target="_blank" style="margin-right:20px"><img src="icon/fb.png" width=40px></a>
       <a href="https://aboutme.google.com" target="_blank"><img src="icon/g.png" width=40px></a>
       <p>OR</p>
       <p id="invalid"></p>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email" placeholder="Email Address" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="pass" id="pass" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$">
          <label style="top:320px;"><i class="fa fa-eye" aria-hidden="true"></i><input type="checkbox" name="sh" id="sh" onclick="showpass()" style="visibility: hidden;"></label>
       </div>
       <div id="textdes"  style="text-align: left; padding-top: 20px;">
          <i class="fa fa-key" aria-hidden="true"></i>
          <input type="file" name="file" id=file" class="custom-file-input" style="width: 290px;" title="Select your Security Code">
       </div>
       <a href="forget.php"> <p>Forget password?</p> </a>
       <input type="submit" value="SIGN IN" id="button" name="submit">
       <p>Don't have an account? <a href="signup.php">REGISTER</a> </p>
       <p>OR <a id="a1" href="vendor.php">I'M A TRAVEL AGENCY</a> </p>
     </div>
    </form>
  </body>
</html>
