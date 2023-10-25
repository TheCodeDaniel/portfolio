<?php

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (isset($emaill) && isset($name) && isset($message)) {
    $to = 'danielainoko402@gmail.com';

    $subject = 'New message from ' . $name;
    $emailBody = "Name: $name\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Message: $message\n";

    $headers = array(
        'From' => $email,
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion(),
        'X-Priority' => '2'
    );

    $headerLines = '';
    foreach ($headers as $key => $value) {
        $headerLines .= $key . ': ' . $value . "\r\n";
    }
    $mail = mail($to, $subject, $emailBody, $headerLines);
    // Send the email
    if ($mail) {
        echo $mail;
        echo 'email-sent';
    } else {

        echo $mail;
        echo 'email-failed';
    }
} else {
    echo "Incomplete fields";
}
