<?php
//define the receiver of the email
$to = "$emailid";
//define the subject of the email
$subject = "verification mail"; 
//define the message to be sent. Each line should be separated with \n
$message = "Welcome $firstname $lastname\n\n\n\nJust one more step \n\n We are verifying your Email id. So we can Stop Spaming.\n And also to provide very imortant updates to you. \n\n\n Please use the Following code when it asked for verification code.\n\n\n
	verification code=$code"; 
//define the headers we want passed. Note that they are separated with \r\n
$headers = "From: support@freepdfbookstore.tk \r\n Reply-To: admin@freepdfbookstore.tk";
//send the email
$mail_sent = mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
//echo $mail_sent ? "Mail sent" : "Mail failed";

?>