// Build the e-mail
$to = 'av2patel94@gmail.com';
$from = "$email";
$subject = "E-Mail Contact Form";
$message = 
"$name at $email said:
$message";
$headers = "From: $email";

// Send the mail using PHPs mail() function
mail($to, $subject, $message, $headers);

// Redirect
header("Location: index.html");

