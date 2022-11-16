<?php

if (isset($_POST['enviar'])){
    if (!empty($_POST['name'] && !empty($_POST['ape'] && !empty($_POST['mail'] && !empty($_POST['message']))))){
        $name = $_POST['name'];
        $ape = $_POST['ape'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];
        $header = "From: noreply@example.com" . "\r\n";
        $header = "Reply-To: noreply@example.com" . "\r\n";
        $header = "X-Mailer: PHP/". phpversion(); 
        $mail = @mail($mail,$name,$ape,$message,$header);
        if ($mail) {
            echo "<h1>¡Mail enviado exitosamente</h1>";
        }
    }


}