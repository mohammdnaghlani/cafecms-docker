<?php

function sendEmail(string $email , array $emailData , string $emailTpl) 
{    

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                     //Enable verbose debug output
    $mail->isSMTP();                                           //Send using SMTP
$mail->Host       ='smtp.gmail.com' ;                           //mail.cafeamoozesh.com                      // 'smtp.gmail.com';                      //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
    $mail->Username   = get__env('EMAIL') ;         //admin@cafeamoozesh.com         //SMTP username
    $mail->Password   = get__env('EMAIL_PASSWORD');           //password                         //SMTP password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;           //Enable implicit TLS encryption
    $mail->Port       = 465;   
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true

        )
    );              
    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    // TCP port to connect to
    $mail->CharSet = 'utf-8';
    //$mail->FromName = 'محمد نقلانی بالسینی';
    $mail->ContentType = 'text/html;charset=utf-8';
    //Recipients
    $mail->setFrom('no-ryplay@cafedigi.mn', 'Admin');
    $mail->addAddress($email);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    // $content = "mohammad naghlani" ;
    extract($emailData) ;
    ob_start();
    require createPath('emailtpl.'. $emailTpl);
    $content  = ob_get_clean() ;
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content ;
    $mail->AltBody = $altBody;

    $mail->send();
    echo 'Message has been sent';
} catch (PHPMailer\PHPMailer\Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}						
}