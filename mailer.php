<?php

require('PHPMailer/PHPMailerAutoload.php'); //PHPMailer file
function sendMail($to, $subject, $message){ //send email
 $mail = new PHPMailer;
 $mail->isSMTP();
 $mail->Host = 'localhost';
 $mail->Port = 25;
 $mail->CharSet = 'UTF-8';

 //Set initial mail headers
 $mail->From = "carillon@bcp.org";
 $mail->FromName = "The Carillon";
 $mail->AddBCC('carillon@bcp.org');
 $mail->AddAddress($to);
 $mail->Subject = $subject;
 $mail->Body = $message;
 $mail->IsHTML(true);

 return $mail->send(); //will return true if sending worked
}


sendMail($email, $emailSubject, $emailMessage);

?>
 