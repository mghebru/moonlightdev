<?php
// Get data from form  
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "mghebru123@gmail.com";
$subject = "This is the subject line";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="First Name = ". $firstName . "\r\n  Last Name = " 
    . $lastName . "\r\n  Phone Number = " 
    . $phoneNumber . "\r\n  Email = " 
    . $email . "\r\n Message =" . $message;

$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:last.html");
?>