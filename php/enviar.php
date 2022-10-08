<?php

$email = $_POST['email'];
$message = $_POST['mensaje'];

$header = 'From: '. $email. "\r\n";
$hedaer .= "X-Mailer: PHP/" . phpversion()."\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$para = 'mariasolarroyoc@gmail.com';
mail($para,utf8_decode($message),$header);

header("Location:../html/contacto.html")



?>