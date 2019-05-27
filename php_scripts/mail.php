<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer(true);

$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$social = $_POST['social'];
if (isset($_POST['plan']) && isset($_POST['origin'])) {
    $plan = $_POST['plan'];
    $origin = $_POST['origin'];
}
$website = $_POST['website'];
$message = $_POST['message'];

try {
    //Server settings
    // $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    // $mail->isSMTP();                                            // Set mailer to use SMTP
    // $mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    // $mail->Username   = 'user@example.com';                     // SMTP username
    // $mail->Password   = 'secret';                               // SMTP password
    // $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    // $mail->Port       = 587;                                    // TCP port to connect to

    // //Recipients
    // $mail->setFrom('from@example.com', 'Mailer');
    // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    // // $mail->addAddress('ellen@example.com');               // Name is optional
    // // $mail->addReplyTo('info@example.com', 'Information');
    // // $mail->addCC('cc@example.com');
    // // $mail->addBCC('bcc@example.com');

    // // Content
    // $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Subject = 'Here is the subject';
    // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // $mail->send();
    http_response_code(200);
    echo "Thank you for writing to us. We will get back to you shortly.";
} catch (Exception $e) {
	http_response_code(500);
    echo "Oops! Something went wrong and we couldn't send your message.";
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>