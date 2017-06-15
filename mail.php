<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
function sendmail($to,$subject='subject',$body='this is body',$html=true)
{
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'xxxxxxxxx@gmail.com';                 // SMTP username
$mail->Password = 'password';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('xxxxxxxxxxx', 'abc');

$mail->addAddress($to);               // Name is optional
$mail->addReplyTo('noreply', 'No-reply');


$mail->isHTML($html);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    return 1;
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    return 0;
    echo 'Message has been sent';
}
}
?>