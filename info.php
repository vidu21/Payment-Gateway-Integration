<?php
$name = $_POST['Full Name'];
$visitor_email = $_POST['Email'];

$email_from = 'varunrana1999@gmail.com';
$email_subject = 'Query';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email";

              $to = "varunrana8@gmail.com";
$headers= "From: $email_from \r\n" ;
$headers= "Reply To: $visitor_email \r\n" ;

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");