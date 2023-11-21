<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
	$email = $_POST['email'];
    $message = $_POST['message'];

    // Format the email body
    $subject = "Wedding Response from : " $name;
    $body = "Name: " . $name . "\n\n" . "Message: " .$message;

    // Send the email
    $to = "peslider@gmail.com";
    $headers = "From: " .$name . "\r\n";

    if(mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again.";
    }
}
?>