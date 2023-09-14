<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../user/src/Exception.php';
require '../user/src/PHPMailer.php';
require '../user/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail1 = new PHPMailer(true);

try {
    //Server settings
    $mail1->SMTPDebug = 0;                      //Enable verbose debug output
    $mail1->isSMTP();                                            //Send using SMTP
    $mail1->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail1->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail1->Username   = 'usman67483@gmail.com';                     //SMTP username
    $mail1->Password   = 'wseskygevvrftcxw';                               //SMTP password
    $mail1->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail1->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail1->setFrom('usman67483@gmail.com', 'usman');
    $mail1->addAddress($semail, $sname);     //Add a recipient             //Name is optional
    $mail1->addReplyTo('usman67483@gmail.com', 'usman');

    // //Attachments
    // $mail1->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail1->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail1->isHTML(true);                                  //Set email format to HTML
    $mail1->Subject = 'Feedback Action !';
    $mail1->Body    = "Your feedback: <b>".$sfeed."</b> was read and carefully considered. We have a message for you regarding our app: '<b>".$sufeed."</b>'";
    $mail1->AltBody = 'Admin:Usman Ahmed';

    $mail1->send();
    echo 'Message has been sent';
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail1->ErrorInfo}";
}



?>