<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '../../classes/phpmailer/vendor/autoload.php';

echo "string";
exit;
//Create an instance; passing `true` enables exceptions

if ($data = form_control()) {

	$message = '<b>Name:</b> ' . $data['name'] . "<br>" . 
	'<b>Email:</b> ' . $data['email'] . "<br><br>" . 
	'<b>Message:</b> <br>' . $data['message'];

	$mail = new PHPMailer(true);

	try {
		$mail->setLanguage('tr');
		//$mail->SMTPDebug = 2;                
    //$mail->isSMTP();                                           
		$mail->Host       = $setting['smtpserver'];                     
		$mail->SMTPAuth   = true;                                  
		$mail->Username   = $setting['smptusername'];                  
		$mail->Password   = $setting['smtppassword'];                              
		$mail->SMTPSecure = 'SSL';           
		$mail->Port       = $setting['smtpport'];    
		$mail->CharSet = 'UTF-8';                                

		$mail->setFrom($setting['smptusername'], 'Contact | ' . $setting['site_name']);
		$mail->addAddress($setting['smptusername'], $data['name']);            
		$mail->addReplyTo($data['email'], 'Answer | ' . $setting['site_name']);


		$mail->isHTML(true);                                
		$mail->Subject = 'Contact | ' . $setting['site_name'];
		$mail->Body    = $message;

		$mail->send();
		$json["success"] = "Message has been sent.";
	} catch (Exception $e) {
	//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		$json["error"] = "Something went wrong.";
	}
}
else{
	$json["error"] = "Please fill in all fields.";

}