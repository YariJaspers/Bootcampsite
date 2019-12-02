<?php
// Check for empty fields
if(empty($_POST['companyname']) ||
   empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['number'])		||
   empty($_POST['address']) 	||
   empty($_POST['plaats']) 		||
   empty($_POST['zipcode']) 	||
   empty($_POST['message'])		||
   empty($_POST['role'])		||
   empty($_POST['sector'])		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$companyname = $_POST['companyname']	
$name = $_POST['name'];
$email_address = $_POST['email'];
$number	= $_POST['number']
$address = $_POST['address'];
$plaats = $_POST['plaats'];
$zipcode = $_POST['zipcode'];
$message = $_POST['message'];
$role = $_POST['role'];
$role = $_POST['sector'];
	
// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "@role voor bootkamp:  $companyname";
$email_body = 
				"Bedrijf $companyname wil zich aanmelden als $role, met de sector: $sector
				De gegevens :\n\n
				Bedrijfnaam: $companyname\n\n
				contactpersoon: $name\n\n
				Email: $email_address\n\n
				Nummmer: $number\n\n
				Address: $address\n\n
				Plaats: $plaats\n\n
				Postcode: $zipcode\n\n
				Message:\n$message";

$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;
?>