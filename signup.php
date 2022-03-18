<?php
      $conn = mysqli_connect("localhost", "root", "","tourism_pal");

      if (isset($_POST['submit'])){
          session_start();
          $email=$_POST['email'];
          $email2=$_POST['email2'];
          $pass=$_POST['pass'];
          $hashed = hash("sha512", $pass);
          $hashed_pass = password_hash($hashed, PASSWORD_DEFAULT);
          $key=$_POST['key'];
          $key2=$_POST['key2'];
          $number=$_POST['number'];

          //GETTING IP
          // ob_start();
          // system('getmac');
          // $Content = ob_get_contents();
          // ob_clean();
          // $mac = substr($Content, strpos($Content,'\\')-20, 17);
          $ip = file_get_contents("http://ipecho.net/plain");

          //RANDOM GENERATOR
          $n=64;
          $char = '0123456789';
          $rand = '';
          for ($i = 0; $i < $n; $i++) {
              $index = rand(0, strlen($char) - 1);
              $rand .= $char[$index];
               
          }

          //SECURITY CODE
          $codefilename = $email. " - Security Code.txt";
          $myfile = fopen($codefilename, "w") or die("Unable to open file!");
          $txt = $rand;
          fwrite($myfile, $txt);
          fclose($myfile);

          //HASHING SECCRITY CODE
          $hashedcode = hash("sha512", $rand);
          
          if($email == $email2){
            $query = "INSERT INTO customers(email,password,enckey,enckey1,phone,ip,code) VALUES ('$email','$hashed_pass','$key','$key2','$number','$ip','$hashedcode')";
            mysqli_query($conn,$query);
            // $_SESSION['message'] = "You are now logged in";
            header("Location: index.php");
            // echo '<a href="Security Code.txt">Click da</a>';
          }
          else{
            echo "<script type='text/javascript'>alert('Email does not match');</script>";
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
    <link href="sheet.css" rel="stylesheet" type="text/css" />
    <script src="script1.js" type="text/javascript"></script>
  </head>
  <body>
    <form action=""  method="POST">
     <div id="div1" align="center">
       <h1>Signup with Tourism Pal</h1>
       <br><br>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email" placeholder="Email Address" required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
       </div>
       <div id="textdes">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input type="text" name="email2" placeholder="Re-enter Email Address"  required pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="password" name="pass" id="pass" placeholder="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$">
          <label style="top:337px;"><i class="fa fa-eye" aria-hidden="true"></i><input type="checkbox" name="sh" id="sh" onclick="showpass()" style="visibility: hidden;"></label>
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="text" name="key" id="key" placeholder="Key 1 for Encryption" required>
       </div>
       <div id="textdes">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input type="text" name="key2" id="key2" placeholder="Key 2 for Encryption" required>
       </div>
       <div id="textdes">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <input type="text" name="number" placeholder="10 digit mobile no." required pattern="^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$">
       </div>
       <br><br>
       <input type="submit" value="REGISTER" id="button" name="submit">
       <p>Already have an account? <a href="index.php">LOG IN</a> </p>
     </div>
    </form>
  </body>
</html>
