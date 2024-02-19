$email = $_POST["email"]; // Make sure the form field name matches
$name = $_POST["name"];
$linkedinLink = $_POST["message"]; // Assuming "message" is the LinkedIn link
$to = "facelessintech@gmail.com";
$subject = "New Request for LinkedIn Banner";
$headers = "From: $email\n";

// Construct the message
$message = "Name: $name\n";
$message .= "Email: $email\n";
$message .= "LinkedIn Link: $linkedinLink\n";

mail($to, $subject, $message, $headers);
