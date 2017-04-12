<?php

$name = $_POST["name"];
$email = $_POST["email_address"];
$message = $_POST["message"];
$contact_message = "You were sent an email from " . $name . ". Thier email address is " . $email . " and thier message is " . $message;


print_r(json_encode($_POST)); 

?>