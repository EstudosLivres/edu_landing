<?php

// Replace this with your own email address
$siteOwnersEmail = 'itsarifulislam@gmail.com';

if($_POST) {

	$name = trim(stripslashes($_POST['contactName']));
	$email = trim(stripslashes($_POST['contactEmail']));
	$subject = trim(stripslashes($_POST['contactSubject']));
	$contact_message = trim(stripslashes($_POST['contactMessage']));
	$error = "";

	// Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Por favor, informe seu nome.";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Por favor, insira um e-mail válido.";
	}
	// Check Message
	if (strlen($contact_message) < 5) {
		$error['message'] = "Verifique se você digitou sua mensagem.";
	}
	// Subject
	if ($subject == '') {
		$subject = "Rent$ Edu Contact Form Submission";
	}


	// Set Message
	$message = "Email from: " . $name . "<br />";
	$message .= "Email address: " . $email . "<br />";
	$message .= "Message: <br />";
	$message .= $contact_message;
	$message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";

	// Set From: header
	$from =  $name . " <" . $email . ">";

	// Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


	if (!$error) {

		ini_set("sendmail_from", $siteOwnersEmail); // for windows server
		$mail = mail($siteOwnersEmail, $subject, $message, $headers);

		if ($mail) { echo "OK"; }
		else { echo "Something went wrong. Please try again."; }

	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;

		echo $response;

	} # end else - there was a validation error

}

?>