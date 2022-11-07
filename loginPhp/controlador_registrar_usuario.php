<?php

if (!empty($_POST["boton"])){ //se verifica que se presiona el boton 
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["gmail"])) {  //se verifica si los campos esan vacios 
        echo '<divnclass="alert alert-danger"> UNO DE LOS CAMPOS ESTA VACIO </div>';  // mensaje que se muestra si no se an registrado datos
    } else{
        $nombre=$_POST[""];
        $apellid=$_POST[""];
        $gmail=$_POST[""];
        $usuario=$_POST[""];
        $contrase=$_POST[""];
        $sql=$conexion->query(" INSERT INTO tabla(datos de la tabla) VALUES('','','','','') ");//se hace la consuta a la bd
        if ($sql==1){
            echo '<divnclass="alert alert-danger"> USUARIO REGISTRADO CORRECTAMENTE </div>';//mensaje de registro exitoso
            header("location: inscripcion.html");
        }else {
            echo '<divnclass="alert alert-danger"> ERROR AL REGISTRAR </div>';//mensaje de registro fallido
        }
    }

?>

// agregar al html 
include("loginPhp/controlador_registrar_usuario.php");