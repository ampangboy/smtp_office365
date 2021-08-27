<?php 

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

// Settings
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "smtp.office365.com";    // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "SECRET_USER_EMAIL";            // SMTP account username example
$mail->Password   = "SECRET_PASSWORD";            // SMTP account password example

// Content
$mail->isHTML(true);                       // Set email format to HTML
$mail->AddAddress("username@domain.com", "recipient-name");
$mail->SetFrom("SECRET_USER_EMAIL", "from-name");
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();