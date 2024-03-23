<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
$subject = "New contact request: $_POST['subject']";
$message = $_POST['message'];
$headers = 'From: ' . $_POST['fullname'] . "\r\n" .
           'Reply-To: ' . $_POST['email']. "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail('georgefr15@gmail.com.com', $subject, $message, $headers);

die('Thank you for your email');
}