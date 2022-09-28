<?php
require 'phpmail/PHPMailerAutoload.php';
$mail=new PHPMailer;

//$mail->isSMTP();
$mail-> Host='smtp.gmail.com';
$mail-> Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='csamutha4@gmail.com';
$mail->Password='emmbdptjaftegucb';

$mail->setFrom('csamutha4@gmail.com','Amutha');
$mail->addAddress('ammuamuthacs194@gmail.com');
$mail->addReplyTo('csamutha4@gmail.com');


$mail->isHTML(true);
$mail->Subject='PHP test mail';
$mail->Body='<h1 align =center> This is test mailer</h1>';


if(!$mail->send()) {
    echo "Message sending faild";
}
else {
    echo "Mail send successfully";
}




?>