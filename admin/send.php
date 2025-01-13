<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if(isset($_POST["send"])){
    $email = $_GET['email'];

    
    $mail = new PHPMailer(true);

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'madhavgouda3@gmail.com';                     //SMTP username
    $mail->Password   = 'lafzkqgpgmmnjlsl';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;

    $mail->setFrom('madhavgouda3@gmail.com');
    $mail->addAddress($email);

    $mail->isHTML(true);                    
                //Set email format to HTML
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["message"];

    $mail->send();
    echo "Message has been sent";
}

?>
