<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name. \n".
                "User email: $visitor_email. \n".
                  "subject: $visitor. \n".
                  "User message: $message. \n";

$to = 'mijang7921@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Replay-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
