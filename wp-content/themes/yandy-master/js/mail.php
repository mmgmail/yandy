<?php
/**
 * Created by PhpStorm.
 * User: silverbloom1
 * Date: 4/20/2017
 * Time: 2:03 PM
 */
include_once 'class_phpmailer.php';
$mail       =   new PHPMailer();
$toAddress  =   'cheers@youandyours.com';
$name = $_POST['name'];
$title = $_POST['title'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$message_body = '<b>Name</b> : '.$name.'<br><b>Email</b> : '.$email.'<br><b>Phone</b> : '.$phone.'<br><b>What This About</b> : '.$title.'<br><b>Message</b> : '.$message;
// $mail->IsSendmail();
$mail->Host     = "localhost"; // SMTP servers
//$mail->isSMTP();
//$mail->Port = 2500;
// $mail->Sender   = 'cheers@youandyours.com';
// $mail->From     = 'cheers@youandyours.com';
$mail->FromName =  "You and Yours Distilling Co";
$mail->IsHTML(true);   // send as HTML
$mail->CharSet = 'utf-8';
//$mail->AddAddress('qwerty.qq185@gmail.com');
$mail->AddAddress($toAddress);
$mail->addReplyTo($email, $name);
$mail->Subject  = 'Contact from Y and Y site';
$mail->Body     = $message_body;
$mail->AltBody  = $message_body;
$mail->Send();
$mail->ClearAddresses();
$mail->ClearCCs();
$mail->ClearBCCs();

echo true;
