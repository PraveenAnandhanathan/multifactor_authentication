<?php

session_start();
$email=$_SESSION["email"];
$msg = "";
$msg = $_SESSION["msg"];
$_SESSION['timestamp'] = time();

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class VerificationCode
{
    public $smtpHost;
    public $smtpPort;
    public $sender;
    public $password;
    public $receiver;
    public $code;

    public function __construct($receiver)
    {
        $this->sender = "tamilcipher@gmail.com";               
        $this->password = "Abcdefgh1.";   
        $this->receiver = $receiver;       
        $this->smtpHost="smtp.gmail.com";        
        $this->smtpPort = 587;

    }
    public function sendMail(){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = $this->smtpHost;   
        $mail->Port = $this->smtpPort;    
        $mail->IsHTML(true);
        $mail->Username = $this->sender;
        $mail->Password = $this->password;
        $mail->Body=$this->getHTMLMessage();
        $mail->Subject = "Your verification code";
        $mail->SetFrom($this->sender,"Verification Codes");
        $mail->AddAddress($this->receiver);
        if($mail->send()){
          echo "MAIL SENT SUCCESSFULLY";
          header("Location: otpverify.php");
          // return true;
          exit;  
        }
        echo "FAILED TO SEND MAIL";
        // return false;

    }
    public function getVerificationCode()
    {
        return (int) substr(number_format(time() * rand(), 0, '', ''), 0, 6);
    }

    public function getHTMLMessage(){
        
        global $email;
        global $msg;

        $conn = mysqli_connect("localhost", "root", "","tourism_pal");
        $query = mysqli_query($conn, "SELECT * from customers WHERE email='$email'");
        while($row = mysqli_fetch_array($query)){
            $enckey= $row['enckey']; 
        }
        mysqli_close($conn);

        $this->code=$this->getVerificationCode();
        $_SESSION["otp"] = $this->code;

        ########AES_ENCRYPTION########
        $cipher = "aes-256-cbc"; 
        $encryption_key = $enckey; 
        // $iv_size = openssl_cipher_iv_length($cipher); 
        // $iv = openssl_random_pseudo_bytes($iv_size); 
        $iv = "1234567812345678";
        $data = $this->code; 
        $this->code = openssl_encrypt($data, $cipher, $encryption_key, 0, $iv); 

        ########TAMIL_MAPPING########
        $this->code = str_replace("A", "???" , $this->code);
        $this->code = str_replace("B", "???" , $this->code);
        $this->code = str_replace("C", "???" , $this->code);
        $this->code = str_replace("D", "???" , $this->code);
        $this->code = str_replace("E", "???" , $this->code);
        $this->code = str_replace("F", "???" , $this->code);
        $this->code = str_replace("G", "???" , $this->code);
        $this->code = str_replace("H", "???" , $this->code);
        $this->code = str_replace("I", "???" , $this->code);
        $this->code = str_replace("J", "???" , $this->code);
        $this->code = str_replace("K", "???" , $this->code);
        $this->code = str_replace("L", "???" , $this->code);
        $this->code = str_replace("M", "???" , $this->code);
        
        $this->code = str_replace("N", "???" , $this->code);
        $this->code = str_replace("O", "???" , $this->code);
        $this->code = str_replace("P", "???" , $this->code);
        $this->code = str_replace("Q", "???" , $this->code);
        $this->code = str_replace("R", "???" , $this->code);
        $this->code = str_replace("S", "???" , $this->code);
        $this->code = str_replace("T", "???" , $this->code);
        $this->code = str_replace("U", "???" , $this->code);
        $this->code = str_replace("V", "???" , $this->code);
        $this->code = str_replace("W", "???" , $this->code);
        $this->code = str_replace("X", "???" , $this->code);
        $this->code = str_replace("Y", "???" , $this->code);
        $this->code = str_replace("Z", "???" , $this->code);
        $this->code = str_replace("a", "???" , $this->code);
        $this->code = str_replace("b", "???" , $this->code);
        $this->code = str_replace("c", "???" , $this->code);
        $this->code = str_replace("d", "???" , $this->code);
        $this->code = str_replace("e", "???" , $this->code);
        
        $this->code = str_replace("f", "??????" , $this->code);
        $this->code = str_replace("g", "??????" , $this->code);
        $this->code = str_replace("h", "??????" , $this->code);
        $this->code = str_replace("i", "??????" , $this->code);
        $this->code = str_replace("j", "??????" , $this->code);
        $this->code = str_replace("k", "??????" , $this->code);
        $this->code = str_replace("l", "??????" , $this->code);
        $this->code = str_replace("m", "??????" , $this->code);
        $this->code = str_replace("n", "??????" , $this->code);
        $this->code = str_replace("o", "??????" , $this->code);
        $this->code = str_replace("p", "??????" , $this->code);
        $this->code = str_replace("q", "??????" , $this->code);
        $this->code = str_replace("r", "??????" , $this->code);
        $this->code = str_replace("s", "??????" , $this->code);
        $this->code = str_replace("t", "??????" , $this->code);
        $this->code = str_replace("u", "??????" , $this->code);
        $this->code = str_replace("v", "??????" , $this->code);
        $this->code = str_replace("w", "??????" , $this->code);
        
        $this->code = str_replace("x", "??????" , $this->code);
        $this->code = str_replace("y", "??????" , $this->code);
        $this->code = str_replace("z", "??????" , $this->code);
        $this->code = str_replace("1", "??????" , $this->code);
        $this->code = str_replace("2", "??????" , $this->code);
        $this->code = str_replace("3", "??????" , $this->code);
        $this->code = str_replace("4", "??????" , $this->code);
        $this->code = str_replace("5", "??????" , $this->code);
        $this->code = str_replace("6", "??????" , $this->code);
        $this->code = str_replace("7", "??????" , $this->code);
        $this->code = str_replace("8", "??????" , $this->code);
        $this->code = str_replace("9", "??????" , $this->code);
        $this->code = str_replace("0", "??????" , $this->code);
        $this->code = str_replace("/", "??????" , $this->code);
        $this->code = str_replace("=", "??????" , $this->code);
        $this->code = str_replace("+", "??????" , $this->code);

        $htmlMessage=<<<MSG
        <!DOCTYPE html>
        <html>
         <body>
            <h1>Your verification code {$msg} is {$this->code}</h1>
            <p>Use this code to verify your account.</p>
         </body>
        </html>        
MSG;
    return $htmlMessage;
    }

}

// pass your recipient's email
$vc=new VerificationCode($email); 
$vc->sendMail(); // MAIL SENT SUCCESSFULLY

?>
