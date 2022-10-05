<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

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
    $mail->Body = "BUY ONE SOCK GET THREE SOCKS. WE ARE SELLING SOCKS FOR FREE BASICALLY. HELP OUT YOUR COMMUNITY BY BUYING THESE AMAZING FAIR TRADE VEGAN SOCKS. YOU CAN ALSO SAVE TURTULES SINCE IT IS NOT MADE OF PLASTIC. IT IS CRAZY HOW GOOD THIS DEAL IS. YOU ARE BASICALLY ROBBING US. I COULD CALL THE POLICE. HMMMMMM I REALLY SHOULD CALL THE POLICE. I WILL CALL THE POLICE YOU NASTY CRIMINAL!!!!";
    // $_POST["message"];
    $mail->send();
    echo "
    <script>
    alert('sent succesfully')
    </script>
    ";
}


?>