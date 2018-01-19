<?php
$to      = 'kshtjtomar40@example.com';
$name 	 = $_POST["name"];
$email 	 = $_POST["email"];
$subject = $_POST["subject"];
$message = $name ."has sent you this message</ br></ br>" . $_POST["message"];
$headers = 'From: ' . $email . "\r\n" .
    		'Reply-To: webmaster@example.com' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?> 