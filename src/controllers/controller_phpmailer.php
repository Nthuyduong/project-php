<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
function sendEmailUserForgotPassword($email,$name,$code){
    // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'hienttm.aof@gmail.com';// SMTP username
    $mail->Password = 'nlfeakfiixpsutym'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('hienttm.aof@gmail.com', 'AGURI JEWELRY');
    $mail->addAddress($email, $name); // Add a recipient

    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'Verification Code';
    $mail->Body =   '<h2>Verification Code</h2>
                    <p>Dear '.$name.',</p>
                    <p>Here is your verification code:</p>
                    <h3>'.$code.'</h3>
                    <p>This code is valid for 10 minutes.</p>
                    <p>Please use this code to proceed with the verification process.</p>
                    <p>If you didn\'t request this code, you can ignore this email.</p>
                    <p>Best regards,</p>
                    <p>AGURI JEWELRY</p>
                    ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   
    return true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    return false;
}
}
