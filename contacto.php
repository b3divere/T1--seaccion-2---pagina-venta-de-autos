<?php

if (isset($_POST['Enviar'])) {
    if (!empty($_POST['Nombres']) && !empty($_POST['Apellidos']) && !empty($_POST['Correo']) && !empty($_POST['msg'])) {
        $nom = $_POST['Nombres'];
        $ape = $_POST['Apellidos'];
        $cor = $_POST['Correo'];
        $msg = $_POST['msg'];
        $header = "From: autoonlineuct@gmail.com" . "\r\n";
        $header. = "Reply-to: autoonlineuct@gmail.com" . "\r\n";
        $header. = "X_Mailer: PHP/". phpversion();
        $mail = mail($cor, $nom, $ape, $msg, $header); 
        if ($mail) {
            echo "<h4>Mail enviado correctamente!</h4>";

        }
    }
}




?>