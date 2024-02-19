<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer Autoloader
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
require 'path/to/PHPMailer/src/Exception.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// Set mailer to use SMTP


// Set sender email and name
$mail->setFrom($email, $name);

// Set recipient email
$mail->addAddress('facelessintech@gmail.com');

// Set email subject
$mail->Subject = 'New Request for LinkedIn Banner';

// Construct the message
$mail->Body = "Name: $name\nEmail: $email\nLinkedIn Link: $linkedinLink";

// Send the email
try {
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
