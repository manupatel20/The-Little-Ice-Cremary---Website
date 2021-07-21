<!DOCTYPE html>
<html land="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us-send mail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="style-contact-me-send-mail.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert='';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='icecream.cremary@gmail.com';
        $mail->Password='creamice25';
        $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port='587';

        $mail->setFrom('icecream.cremary@gmail.com');
        $mail->addAddress('icecream.cremary@gmail.com');

        $mail->isHTML(true);
        $mail->Subject='Message Received(Contact page)';
        $mail->Body="<h3>Name: $name <br/>Email: $email<br/>Message : $message</h3>";

        $mail->send();
        $alert='<div class="alert-success">
                    <span>Message Sent!  Thank you for contacting me.</span>
                 </div>';
    }
    catch(Exception $e){
        $alert='<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                </div>';
    }
}


?>
</body>
</html>