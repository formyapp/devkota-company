<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
	

$email_from = "info@sdevkota.com.np";

$email_subject = "New enquiry in website";

$email_body = "User Name: $name. \n".
				"User Subject: $subject.\n".
				"User Email: $visitor_email.\n";


$to = "devkotasunil@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail ($to,$email_subject,$email_body,$headers);

header("location: contact.html");

?>