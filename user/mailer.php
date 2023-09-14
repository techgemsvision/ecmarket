<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'usman67483@gmail.com';                     //SMTP username
    $mail->Password   = 'wseskygevvrftcxw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('usman67483@gmail.com', 'usman');
    $mail->addAddress($email, $fname);     //Add a recipient             //Name is optional
    $mail->addReplyTo('usman67483@gmail.com', 'usman');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);   
     if($total1>=168 && $total1<356){                             
    $mail->Subject = 'Reciept Style Tech Gems Congratz';
    $mail->Body = "
    <html>
    <head>
    <title></title>
    </head>
    <body>                
    <div style='width:800px;background:#fff;border-style:groove;'>
    <div style='width:100%;text-align:left; text-align:center'><h1>Style Tech Gems e-commerece Market</h1><br><h3>Congratz</h3></div>
    <hr width='100%' size='2' color='#A4168E'>
    <div style='width:50%;height:20px; text-align:right;margin-
    top:-32px;padding-left:390px;'><a href='your url' style='color:#00BDD3;text-
    decoration:none;'> 
    Admin</a> | <a href='your url' style='color:#00BDD3;text-
    decoration:none;'>Usman </a> </div>
    <h2 style='width:50%;height:40px; text-align:right;margin:0px;padding-
    left:390px;color:#B24909;'>Order Reciept</h2>
    <div style='width:50%;text-align:right;margin:0px;padding-
    left:390px;color:#0A903B'> Tracking ID:".$track." </div>
    <h4 style='color:#ea6512;margin-top:-20px;'> Hello, " .$fname."
    </h4>
    <div style='width:50%;text-align:right;margin:0px;padding-
    left:390px;color:#0A903B'>Achieve Coupan Code : ".$dname." </div>
    <div style='width:50%;text-align:right;margin:0px;padding-
    left:390px;color:#0A903B'>Achieve Coupan Discount : ".$discount." </div>
    <p><b>Congratulations!</b>You ve made a purchase exceeding 49999, which has earned you a special 20% discount coupon for your next order. Utilize this coupon to enjoy savings of up to 40% on your upcoming purchase. Stay with us and avail more fantastic offers!'</p>
    <hr/>
    <div style='height:210px;'>
    <table cellspacing='0' width='100%' >
    <thead>
    <col width='80px' />
    <col width='40px' />
    <col width='40px' />
    <tr>          
    <th style='color:#0A903B;text-align:left;'>User Details</th>                           
    <th style='color:#0A903B;text-align:left;'>Further Details</th>
    <th style='color:#0A903B;text-align:left;'>Purchasing Items</th>                                                                            
    </tr>
    </thead>
    <tbody>   
    <tr>
    <td>".$email."<br>".$city."<br>".$phone."<br>".$address."</td>
    <td>".$co."<br>".$cd."<br>".$branch."<br>".$date."<br>".$month."</td>
    <td><a href='http://localhost/ecmarket/user/track.php'>http://localhost/ecmarket/user/track.php</a> Click this link and check your purchasing details</td>
    </tr>   
    <tr>
    </tbody> 
    </table>                        
    <hr width='100%' size='1' color='black' style='margin-top:10px;'>                          
    <table cellspacing='0' width='100%' style='padding-left:300px;'>
    <thead>       
    <tr>                                        
    <th style='color:#0A903B;text-align:right;padding-bottom:5px;'>Quantity:</th>
    <th style='color:black;text-align:left;padding-bottom:5px;padding-
    left:10px;'>" .$qtn1."</th>                                        
    </tr>                                                                
    <tr>                                        
    <th style='color:#0A903B;text-align:right;padding-bottom:5px;width:70%'>Price:</th>
    <th style='color:black;text-align:left;padding-bottom:5px;padding-
    left:10px;width:30%'>" .$total1." $</th>
    </tr>
    </thead>   
    </table>             
    </div> 
    </div>              
    </body>
    </html>";
    if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
    echo 'Message has been sent';
    }
    echo "<script type='text/javascript'> document.location = './'; </script>";
    ?>
    <?php 
    $mail->AltBody = 'Admin:Usman Ahmed';
     } 


     elseif($total1>356){                             
        $mail->Subject = 'Reciept Style Tech Gems Congratz';
        $mail->Body = "
        <html>
        <head>
        <title></title>
        </head>
        <body>                
        <div style='width:800px;background:#fff;border-style:groove;'>
        <div style='width:100%;text-align:left; text-align:center'><h1>Style Tech Gems e-commerece Market</h1><br><h3>Congratz</h3></div>
        <hr width='100%' size='2' color='#A4168E'>
        <div style='width:50%;height:20px; text-align:right;margin-
        top:-32px;padding-left:390px;'><a href='your url' style='color:#00BDD3;text-
        decoration:none;'> 
        Admin</a> | <a href='your url' style='color:#00BDD3;text-
        decoration:none;'>Usman </a> </div>
        <h2 style='width:50%;height:40px; text-align:right;margin:0px;padding-
        left:390px;color:#B24909;'>Order Reciept</h2>
        <div style='width:50%;text-align:right;margin:0px;padding-
        left:390px;color:#0A903B'> Tracking ID:".$track." </div>
        <h4 style='color:#ea6512;margin-top:-20px;'> Hello, " .$fname."
        </h4>
        <div style='width:50%;text-align:right;margin:0px;padding-
        left:390px;color:#0A903B'>Achieve Coupan Code : ".$dname." </div>
        <div style='width:50%;text-align:right;margin:0px;padding-
        left:390px;color:#0A903B'>Achieve Coupan Discount : ".$discount." </div>
        <p><b>Congratulations!</b>You ve made a purchase exceeding 99999, which has earned you a special 40% discount coupon for your next order. Utilize this coupon to enjoy savings of up to 40% on your upcoming purchase. Stay with us and avail more fantastic offers!'</p>
        <hr/>
        <div style='height:210px;'>
        <table cellspacing='0' width='100%' >
        <thead>
        <col width='80px' />
        <col width='40px' />
        <col width='40px' />
        <tr>          
        <th style='color:#0A903B;text-align:left;'>User Details</th>                           
        <th style='color:#0A903B;text-align:left;'>Further Details</th>
        <th style='color:#0A903B;text-align:left;'>Purchasing Items</th>                                                                            
        </tr>
        </thead>
        <tbody>   
        <tr>
        <td>".$email."<br>".$city."<br>".$phone."<br>".$address."</td>
        <td>".$co."<br>".$cd."<br>".$branch."<br>".$date."<br>".$month."</td>
        <td><a href='http://localhost/ecmarket/user/track.php'>http://localhost/ecmarket/user/track.php</a> Click this link and check your purchasing details</td>
        </tr>   
        <tr>
        </tbody> 
        </table>                        
        <hr width='100%' size='1' color='black' style='margin-top:10px;'>                          
        <table cellspacing='0' width='100%' style='padding-left:300px;'>
        <thead>       
        <tr>                                        
        <th style='color:#0A903B;text-align:right;padding-bottom:5px;'>Quantity:</th>
        <th style='color:black;text-align:left;padding-bottom:5px;padding-
        left:10px;'>" .$qtn1."</th>                                        
        </tr>                                                                
        <tr>                                        
        <th style='color:#0A903B;text-align:right;padding-bottom:5px;width:70%'>Price:</th>
        <th style='color:black;text-align:left;padding-bottom:5px;padding-
        left:10px;width:30%'>" .$total1." $</th>
        </tr>
        </thead>   
        </table>             
        </div> 
        </div>              
        </body>
        </html>";
        if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
        echo 'Message has been sent';
        }
        echo "<script type='text/javascript'> document.location = './'; </script>";
        ?><?php
        $mail->AltBody = 'Admin:Usman Ahmed';
         } 
    else{
        $mail->Subject = 'Reciept Style Tech Gems';
        $mail->Body = "
        <html>
        <head>
        <title></title>
        </head>
        <body>                
        <div style='width:800px;background:#fff;border-style:groove;'>
        <div style='width:100%;text-align:left; text-align:center'><h1>Style Tech Gems e-commerece Market</h1></div>
        <hr width='100%' size='2' color='#A4168E'>
        <div style='width:50%;height:20px; text-align:right;margin-
        top:-32px;padding-left:390px;'><a href='your url' style='color:#00BDD3;text-
        decoration:none;'> 
        Admin</a> | <a href='your url' style='color:#00BDD3;text-
        decoration:none;'>Usman </a> </div>
        <h2 style='width:50%;height:40px; text-align:right;margin:0px;padding-
        left:390px;color:#B24909;'>Order Reciept</h2>
        <div style='width:50%;text-align:right;margin:0px;padding-
        left:390px;color:#0A903B'> Tracking ID:".$track." </div>
        <h4 style='color:#ea6512;margin-top:-20px;'> Hello, " .$fname."
        </h4>
        <div style='width:50%;text-align:right;margin:0px;padding-
        left:390px;color:#0A903B'>Achieve Coupan Code : No Acheieve </div>
        <div style='width:50%;text-align:right;margin:0px;padding-
        left:390px;color:#0A903B'>Achieve Coupan Discount : No Acheieve </div>
        <p>Thank You for Order </p>
        <hr/>
        <div style='height:210px;'>
        <table cellspacing='0' width='100%' >
        <thead>
        <col width='80px' />
        <col width='40px' />
        <col width='40px' />
        <tr>          
        <th style='color:#0A903B;text-align:left;'>User Details</th>                           
        <th style='color:#0A903B;text-align:left;'>Further Details</th>
        <th style='color:#0A903B;text-align:left;'>Purchasing Items</th>                                                                            
        </tr>
        </thead>
        <tbody>   
        <tr>
        <td>".$email."<br>".$city."<br>".$phone."<br>".$address."</td>
        <td>".$co."<br>".$cd."<br>".$branch."<br>".$date."<br>".$month."</td>
        <td><a href='http://localhost/ecmarket/user/track.php'>http://localhost/ecmarket/user/track.php</a> Click this link and check your purchasing details</td>
        </tr>   
        <tr>
        </tbody> 
        </table>                        
        <hr width='100%' size='1' color='black' style='margin-top:10px;'>                          
        <table cellspacing='0' width='100%' style='padding-left:300px;'>
        <thead>       
        <tr>                                        
        <th style='color:#0A903B;text-align:right;padding-bottom:5px;'>Quantity:</th>
        <th style='color:black;text-align:left;padding-bottom:5px;padding-
        left:10px;'>" .$qtn1."</th>                                        
        </tr>                                                                
        <tr>                                        
        <th style='color:#0A903B;text-align:right;padding-bottom:5px;width:70%'>Price:</th>
        <th style='color:black;text-align:left;padding-bottom:5px;padding-
        left:10px;width:30%'>" .$total1." $</th>
        </tr>
        </thead>   
        </table>             
        </div> 
        </div>              
        </body>
        </html>";
        if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
        echo 'Message has been sent';
        }
        echo "<script type='text/javascript'> document.location = './'; </script>";
        ?><?php
        $mail->AltBody = 'Admin:Usman Ahmed';
    }

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>