<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                          			   // Passing `true` enables exceptions
try {
    //Server settings
    
    $mail->isSMTP();                                    	   // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; 						  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            	 	 // Enable SMTP authentication
    $mail->Username = 'xamscoop@gmail.com';                 // SMTP username
    $mail->Password = 'djmaza.com';                        // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;    
       


    //Recipients
    $mail->setFrom('ashish@xamscoop.com', 'xamscoop verification');
    $mail->addAddress('ashish2mail9@gmail.com', 'Joe User');     // Add a recipient
     $mail->addAddress('ashish.kmr@live.com', 'Joe User');


    //Content
    $mail->isHTML(true);                                 	 // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}