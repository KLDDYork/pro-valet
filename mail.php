<?php
$to      = 'Karl.swatman@gmail.com';
$subject = 'Name';
$message = 'Comment';
$headers = 'From: Email' . "\r\n" .
    'Reply-To: Karl.swatman@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 
