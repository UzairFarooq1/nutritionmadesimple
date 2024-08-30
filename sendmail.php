<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submitForm'])) {
    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    echo($message);


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication


        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Username   = 'rdbenazir@nutritionmadesimple.uk';                     //SMTP username
        $mail->Password   = 'dkarckvccjnnevkb';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('rdbenazir@nutritionmadesimple.uk', 'Admin@NutritionMadeSimple');
        $mail->addAddress($email, 'User');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Booking Enquiry Form - Nutrition Made Simple';
        $mail->Body    = '<h3>You have got a new Enquiry</h3>
        <h4>Full Name: '.$fullName.'</h4>
        <h4>Email Address: '.$email.'</h4>
        <h4>Phone Number: '.$phone.' </h4>
        <h4>Message: '.$message.' </h4>
        ';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if ($mail->send()) {
            $_SESSION['status'] = "Thank You for contacting Dr.Benazir";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        }
        else {
            $_SESSION['status'] = "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
else{
    header('Location: index.php');
    exit(0);
}

?>