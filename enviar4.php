<?php
$name = $_POST['name'];
$ape = $_POST['ape'];
$mail = $_POST['mail'];
$message = $_POST['message'];
echo $name,$ape,$mail,$message;
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

// mail($para, $asunto, utf8_decode($message), $header);

// El mensaje
//$mensaje = "Línea 1\r\nLínea 2\r\nLínea 3";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
//$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviarlo
//mail('autoonlineuct@gmail.com', 'Mi título', $mensaje);

header("Location:index.html");
?>