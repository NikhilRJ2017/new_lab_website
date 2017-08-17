<?php

	$name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['comments'];

    if (empty($name) || empty($visitor_email) || empty(message)) {
    	echo "Name and email are mandatory";
        exit();
    }


	$email_from = 'manlab.net16.net';
	$email_subject = "New Form submission";
	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".

    $to = "jadhavnikhil86@gmail.com";
    $headers = "From: $email_from \r\n";
	mail($to,$email_subject,$email_body,$headers);

?>