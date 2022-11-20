<?php
$name = $_POST['name'];
$ape = $_POST['ape'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name." ". $ape  . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());
$para = 'autoonlineuct@gmail.com';
$asunto = 'Formulario recibido';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>