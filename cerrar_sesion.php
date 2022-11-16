<?php
// cierra sesion
    session_start();
    session_destroy();
    header("location: login.php")

?>