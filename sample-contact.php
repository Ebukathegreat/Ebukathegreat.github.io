<?php

$username = $_POST['name'];

$user_email = $_POST['email'];

$password = $_POST['password'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$email_from = 'info@Ebukathegreat.github.io';

$email_to = 'kingieme@yahoo.com';

$email_subject = 'New Form Submission';

$email_body = "Username: $username \r\n".
              "Email: $user_email \r\n".		
			  "Password: $password \r\n".
			  "Subject: $subject \r\n".
			  "Message: $message \r\n" ;
			  
$headers = "From: $email_from \r\n" ;

$heaaders .= "Reply To: $user_email \r\n" ;	

mail($email_to,$email_subject,$message,$headers);

header("Location: Sample-Contact-Form1.html")		  


?>
