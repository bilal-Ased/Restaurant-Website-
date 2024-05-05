<?php 
$message = $_POST["message"]; 
$subject = "New Message"; 
$emailTo = "mughalbilal89@gmail.com"; 
 
mail($emailTo, $subject, $message); 
?> 