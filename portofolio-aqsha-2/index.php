<?php 

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'syamada676@gmail.com';

	$email_subject = 'New form Submission';

	$email_body = "User name: ".  $name." \n".
						"User Email:" .$visitor_email." \n".
							"User message:" . $message;

	$to = 'wasd160104@gmail.com';

	$headers = "From: $email_from \r\n";

	$headers .= "reply to: $visitor_email \r\n"

	mail($to, $email_subject, $email_body, $headers);

	header("Location: index.html")
 ?>