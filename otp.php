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
        $this->code = str_replace("A", "அ" , $this->code);
        $this->code = str_replace("B", "ஆ" , $this->code);
        $this->code = str_replace("C", "இ" , $this->code);
        $this->code = str_replace("D", "ஈ" , $this->code);
        $this->code = str_replace("E", "உ" , $this->code);
        $this->code = str_replace("F", "ஊ" , $this->code);
        $this->code = str_replace("G", "எ" , $this->code);
        $this->code = str_replace("H", "ஏ" , $this->code);
        $this->code = str_replace("I", "ஐ" , $this->code);
        $this->code = str_replace("J", "ஒ" , $this->code);
        $this->code = str_replace("K", "ஓ" , $this->code);
        $this->code = str_replace("L", "ஔ" , $this->code);
        $this->code = str_replace("M", "ஃ" , $this->code);
        
        $this->code = str_replace("N", "க" , $this->code);
        $this->code = str_replace("O", "ங" , $this->code);
        $this->code = str_replace("P", "ச" , $this->code);
        $this->code = str_replace("Q", "ஞ" , $this->code);
        $this->code = str_replace("R", "ட" , $this->code);
        $this->code = str_replace("S", "ண" , $this->code);
        $this->code = str_replace("T", "த" , $this->code);
        $this->code = str_replace("U", "ந" , $this->code);
        $this->code = str_replace("V", "ப" , $this->code);
        $this->code = str_replace("W", "ம" , $this->code);
        $this->code = str_replace("X", "ய" , $this->code);
        $this->code = str_replace("Y", "ர" , $this->code);
        $this->code = str_replace("Z", "ல" , $this->code);
        $this->code = str_replace("a", "வ" , $this->code);
        $this->code = str_replace("b", "ழ" , $this->code);
        $this->code = str_replace("c", "ள" , $this->code);
        $this->code = str_replace("d", "ற" , $this->code);
        $this->code = str_replace("e", "ன" , $this->code);
        
        $this->code = str_replace("f", "கா" , $this->code);
        $this->code = str_replace("g", "ஙா" , $this->code);
        $this->code = str_replace("h", "சா" , $this->code);
        $this->code = str_replace("i", "ஞா" , $this->code);
        $this->code = str_replace("j", "டா" , $this->code);
        $this->code = str_replace("k", "ணா" , $this->code);
        $this->code = str_replace("l", "தா" , $this->code);
        $this->code = str_replace("m", "நா" , $this->code);
        $this->code = str_replace("n", "பா" , $this->code);
        $this->code = str_replace("o", "மா" , $this->code);
        $this->code = str_replace("p", "யா" , $this->code);
        $this->code = str_replace("q", "ரா" , $this->code);
        $this->code = str_replace("r", "லா" , $this->code);
        $this->code = str_replace("s", "வா" , $this->code);
        $this->code = str_replace("t", "ழா" , $this->code);
        $this->code = str_replace("u", "ளா" , $this->code);
        $this->code = str_replace("v", "றா" , $this->code);
        $this->code = str_replace("w", "னா" , $this->code);
        
        $this->code = str_replace("x", "கி" , $this->code);
        $this->code = str_replace("y", "ஙி" , $this->code);
        $this->code = str_replace("z", "சி" , $this->code);
        $this->code = str_replace("1", "ஞி" , $this->code);
        $this->code = str_replace("2", "டி" , $this->code);
        $this->code = str_replace("3", "ணி" , $this->code);
        $this->code = str_replace("4", "தி" , $this->code);
        $this->code = str_replace("5", "நி" , $this->code);
        $this->code = str_replace("6", "பி" , $this->code);
        $this->code = str_replace("7", "மி" , $this->code);
        $this->code = str_replace("8", "யி" , $this->code);
        $this->code = str_replace("9", "ரி" , $this->code);
        $this->code = str_replace("0", "லி" , $this->code);
        $this->code = str_replace("/", "வி" , $this->code);
        $this->code = str_replace("=", "ழி" , $this->code);
        $this->code = str_replace("+", "ளி" , $this->code);

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
