<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from ='https://adityakumar393.github.io/website/Contact.html'; 
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

 $to='adityakumar42174@gmail.com';
 $headers="From: $email_from \r\n";
 $headers .="Reply-To:$visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);
 header("Location: Contact.html");

?>
