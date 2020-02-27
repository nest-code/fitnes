<?php
$to      = 'ernestomanurung@gmail.com.com';
$subject = 'Hallo';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: ernestoandreyulian@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>