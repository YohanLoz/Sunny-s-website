<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php'; 
require 'PHPMailer.php';
require 'SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);


    $mail->isSMTP();
    $mail->Host ="smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = 'Sunny.Socks.Newsletter@gmail.com';
    $mail->Password ='gdecqaomrikacloh';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    


    $mail->setFrom('Sunny.Socks.Newsletter@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = "Socks On SALE ???????
    NO WAYYYYY!!!!!";
    // $_POST["subject"];
    $mail->Body = '<img src="cid:socks">';  
    $mail->AddEmbeddedImage(dirname(__FILE__) . 
    '/socksadvert.png', 'socks');
    // $_POST["message"];
    $mail->send();
    
     if ($mail->Send()) { header("Location:/sunny-s-website/index.php");  } 

}


?>