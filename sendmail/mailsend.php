<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


    require "phpmailer/src/PHPMailer.php";
    require "phpmailer/src/SMTP.php";
    require "phpmailer/src/Exception.php";

if(isset($_POST['send'])) {
    $mail = new PHPMailer(true);


    $mail ->isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail ->SMTPAuth = true;
    $mail ->Username = "csamutha4@gmail.com";
    $mail ->Password = 'jwwmwefqpulwngvv';
    $mail->SMTPSecure = "ssl";
    $mail ->Port = 465;


    $mail->setfrom('csamutha4@gmail.com');
    $mail->Name = ($_POST["name"]);
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];


    if($mail->send()){
        echo "mail sent sucessfully";
    }
    else{
        echo "mail not sent";
    }


}



?>