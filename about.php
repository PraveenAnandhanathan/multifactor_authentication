<?php
    session_start();
    $email=$_SESSION["email"];
    //   if((time()-$_SESSION['timestamp']) > 180){
    //     header("Location: expire.php");
    //   }
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>Tourism Pal</title>
    <link rel="icon" href="icon/tp.png">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <style>
        ::-webkit-scrollbar {
          display: none;
        }
        /* cursor types */
        html{
          cursor:url(icon/heart.cur), auto;
        }
        input{
          cursor:url(icon/text.cur), auto;
        }
        a,#button,select{
          cursor:url(icon/heart2.cur), auto;
        }
        ::placeholder{
          color: rgba(131, 240, 121, 0.363);
        }
        :focus::placeholder {
          color: transparent;
        }
        *:focus{
          outline: none;
        }
        body{
          user-select: none;
          background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,0.7)), url(icon/wedbg.png) center center /cover;
          height: 100vh;
          font-size: 18px;
          text-align: center;
          margin: 0%;
          font-family: Arial;
          min-width:600px;
        }
        #div1{
          /* background-color:rgba(0, 0, 0, 0.6); */
          height: 100%;
          width: 100%;
          font-size:20px;
        }
        #menu{
          background: linear-gradient(to right, #1f6632 , #32a852);
          height: 80px;
          text-align: left;
          position: fixed;
          top:0%;
          width: 100%;
        }
        footer{
          background: linear-gradient(to right, #1f6632 , #32a852);
          height: 80px;
          position:relative;
          bottom:0%; 
          padding-top:10px; 
          padding-bottom:70px;
        }
        footer i{
            margin-right: 10px;
            margin-left: 10px;
        }
        #fadeshow1{
          display: inline-block; 
          position: relative;
          bottom: 20px;
        }
        @media only screen and (max-width: 700px) { 
          #fadeshow1 { 
            display: none; 
          } 
        }
        a:link,a:visited{
          margin: 10px;
          text-decoration: none;
          color: black;
        }
        a:hover{
           color: yellowgreen;
         }
         a:link#a1, a:visited#a1{
           color: white;
           text-decoration: underline;
         }
         a:hover#a1{
           color: yellowgreen;
         }
         #divcen{
           color: white;
           text-shadow: 2px 2px 2px black;
           padding-top: 300px;
         }
         input{
          border: 0px solid #32a852;
          border-bottom: 3px solid #32a852;
          background: transparent;
          color: #32a852;
          width:300px;
          height:40px;
          font-size: 20px;
          margin: -2px;
          padding: 10px;
         }
         #button{
          background-color: #32a852;
          color: #32a852;
          border: 0px solid gray;
          padding: 5px;
          height: 40px;
          width: 100px;
          font-size: 20px;
          margin: 20px;
         }
         #img1{
          text-align: left; 
          background-color: white; 
          height: 400px; 
          width: 500px; 
          margin: 20px;
          display: inline-block;
         }
         #img2{
          text-align: left; 
          background-color: white; 
          height: 160px; 
          width: 500px; 
          margin: 40px;
          margin-top: 0px;
         }
         #chinna{
          display: inline-block;
         }
         #chinna2{
           display: inline-block;
         }
         #button{
            border:2px solid #32a852;
            padding:5px 20px;
            background:linear-gradient(#32a852,#32a852) center/100% 0px no-repeat;
            transition:0.2s all linear;
          }
          #button:hover {
            background-size:100% 100%;
            color: black;
          }
          video{
            height: 100%;
            width: 100%;
            position: relative;
          }
          input:-webkit-autofill,
          input:-webkit-autofill:hover,
          input:-webkit-autofill:focus,
          input:-webkit-autofill:active {
              -webkit-animation: autofill 0s forwards;
              animation: autofill 0s forwards;
          }
          @keyframes autofill {
              100% {
                  background: transparent;
                  color: #32a852;
              }
          }
          @-webkit-keyframes autofill {
              100% {
                  background: transparent;
                  color: #32a852;
              }
          }
          /* #heart{
            position: relative;
            width: 100%;
            height: 100%;
            background: #fff url(icon/heart.svg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100px;
          } */
      </style>

      <script>
            function suggestion(){
              var p1=/^eu/;
              var p2=/^si/;
              var p3=/^an/;
              var p4=/^th/;
              var p5=/^ba/;
              var p6=/^no/;
              var p7=/^1/;
              var p8=/^5/;
              var p9=/^6/;
              var p10=/^8/;
              var country = document.getElementById("country");
              var budget = document.getElementById("budget");
              if(country.value == "" && budget.value == ""){
                document.getElementById("suggestion").innerHTML = "No Match Found. <a href='city.php'>Click</a>for specified search";
              }
              else{
                  if (country.value.match(p1)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Europe</a>";
                  }
                  if (country.value.match(p2)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Singapore</a>";
                  }
                  if (country.value.match(p3)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Andaman</a>";
                  }
                  if (country.value.match(p4)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Thailand</a>";
                  }
                  if (country.value.match(p5)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Bali</a>";
                  }
                  if (country.value.match(p6)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>North East</a>";
                  }
                  if (budget.value.match(p7)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>North East</a>";
                  }
                  if (budget.value.match(p8)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Andaman</a>, <a href='city.php'>Bali</a>";
                  }
                  if (budget.value.match(p9)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Thailand</a>, <a href='city.php'>Singapore</a>";
                  }
                  if (budget.value.match(p10)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Europe</a>";
                  }
                  if (country.value.match(p1) && budget.value.match(p7)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Europe</a>";
                  }
                  if (country.value.match(p2) && budget.value.match(p8)){
                    document.getElementById("suggestion").innerHTML = "SUGGESTIONS:  <a href='city.php'>Singapore</a>";
                  }
              }
            }
      </script>
    </head>
    <body>
      <form action="">
        
      <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
      }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      <div id="menu">
        <div style="float: right; margin: 25px;">
          <span id="google_translate_element" style="position: absolute; right: 600px;"></span>
          <span style="color:yellow"><?php if(isset($email)){ echo $email; } else { echo 'No Name Set'; }?></span>
          <a href="about.php" style="color:white"><big>About</big></a>
          <a href="city.php">Home</a>
          <a href="services.php">Booking</a>
          <a href="index.php"  onclick="return confirm('Are you sure to logout?');">Logout</a>
        </div>
        <img style="padding:18px;display: inline-block; position:relative;top:5px;" src="icon/tp.png" width="30px" alt="">
        <h3 id="fadeshow1" >TOURISM PAL</h3>
      </div>

      <div>
        <video src="icon/videoplayback.mp4#t=10" autoplay muted loop></video>
        <!-- <div id="heart"></div> -->
      </div>
      

      <div id="div1">
        <div id="divcen">
          <h1>The Best way of Finding Destination Spots</h1>
          <p>Search for the Tourist Spots</p>
        </div>
        <div>
          <input type="search" placeholder="Countries" id="country">&nbsp;OR&nbsp;
          <input type="search" placeholder="Landmarks" id="budget">
          <input type="button" value="FIND" id="button" onclick="return suggestion()">
          <div id="suggestion"></div>
        </div>
        <div style="margin-top: 10%;">
          <!-- <a id="a1" href="services.php">Search for Vendors</a> -->
        </div>

        <script type="text/javascript">
            let video = document.querySelector('video');
            window.addEventListener('scroll',function(){
              let value = 1+window.scrollY/-600;
              video.style.opacity = value;
            })
        </script>
      </div>
      <footer>
        <p align="center">satisfying your services</p>
        <h2 align="center">Tourism Pal</h2>
        <i class="fa fa-facebook-square" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-youtube-play" aria-hidden="true"></i>
        <i class="fa fa-pinterest" aria-hidden="true"></i>
      </footer>
    </form>
    </body>
  </html>
