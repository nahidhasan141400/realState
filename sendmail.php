<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';

// echo "start the mail";
echo "mail send...ing....";

if(true){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nahidhasan141400@gamil.com';
    $mail->Password = 'dimujgxmovhdkigb';
    $mail->SMTPSequre = 'ssl';
    $mail->Port = 456;

    $mail->setForm('nahidhasan141400@gamil.com');
    $mail->addAddress("nahidhasan.opt@gmail.com");

    $mail->Subject = "tets";
    $nahid = "the name of sender :"+$_POST["name"]+"; Or Phone:"+$_POST["phone"]+";and massage is =>"+$_POST["message"];
    $mail->Body = "hi" ;
    $mail->send();

    echo "mail send";
}else{
    echo "mail not send!!";
}

?>
<!-- dimujgxmovhdkigb -->