<?php

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'thecodedaniel@gmail.com';

$subject = 'New message from ' . $name;
$emailBody = "Name: $name\n";
$emailBody .= "Email: $email\n";
$emailBody .= "Message: $message\n";

$headers = array(
    'From' => $email,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' . phpversion(),
    'X-Priority' => '1'
);

$headerLines = '';
foreach ($headers as $key => $value) {
    $headerLines .= $key . ': ' . $value . "\r\n";
}

// Send the email
if (mail($to, $subject, $emailBody, $headerLines)) {
    echo 'email-sent';
} else {
    echo 'email-failed';
}
