
<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require ('mail/vendor/autoload.php');

$emailfrom=$_SESSION['temail'];
$namefrom=$_SESSION['tname'];

function sendEmail(){

	//generate a random string and send to email id via a link
		$mail = new PHPMailer(true);                          			   // Passing `true` enables exceptions
			try {
				//Server settings

				$mail->isSMTP();                                    	   // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com'; 						  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                            	 	 // Enable SMTP authentication
				$mail->Username = '';                 // SMTP username
				$mail->Password = '';                        // SMTP password
				$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 465;    

				//Recipients
				$mail->setFrom($emailfrom,$namefrom );
				$mail->addAddress($email);     // Add a recipient

				//Content
				$mail->isHTML(true);                                 	 // Set email format to HTML
				$mail->Subject = 'Change Password Request';
				$mail->Body    = "";
				$mail->send();
			} 
			catch (Exception $e) {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
}
?>