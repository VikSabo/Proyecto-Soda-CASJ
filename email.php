<?php
require("PHPMailer_5.2.4/class.phpmailer.php");

$mail = new PHPMailer;

//$mail->SMTPDebug = 2;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'itcrprueba001@gmail.com';                 // SMTP username
$mail->Password = 'holamundo';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

//$mail->setFrom('vsaborio4@gmail.com', 'Mailer');
$mail->addAddress('marlonca15@hotmail.com');               // Name is optional


$mail->Subject = 'Lo he logrado!!';
$mail->Body    = 'Increiblemente lo he logrado XD';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}