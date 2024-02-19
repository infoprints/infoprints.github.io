<?PHP
	$email = $_POST["emailaddress"];
	$to = "facelessintech@gmail.com";
	$subject = "New Request for LinkedIn Banner";
	$headers = "From: $email\n";
	$message = " $message ";
	
	mail($to,$subject,$message,$headers);
?>
