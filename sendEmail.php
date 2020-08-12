<?php

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];

$finalMessage = $firstName . "\n" . $lastName ."\n". $email . "\n\n". $message;

$recepient = "mroegler@gmail.com";

$subject = "Mail from portfolio website";

mail($recepient,$subject, $finalMessage);

?>