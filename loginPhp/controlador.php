<?php

if (!empty($_POST["boton"])){ //se verifica que se presiona el boton 
    if (empty($_POST["usuario"]) and empty($_POST["contrasena"])) {  //se verifica si los campos esan vacios 
        echo '<divnclass="alert alert-danger"> LOS CAMPOS ESTAN VACIOS</div>';  // mensaje que se muestra si no se an registrado datos
    } else{
        $usuario=$_POST["usuario"];
        $clave=$_POST["contrasena"];
        $sql=$conexion->query(" SELECT * FROM tabla WHERE usuario='$usuario' AND contrasena='$clave' ");
        if ($datos=$sql->fetch_object()){
            header("location: index.html"); //redireccionamiento a la pagina
        } else {
            echo '<divnclass="alert alert-danger"> LOS DATOS INGRESADOS SON INCORRECTOS </div>';//mensaje de error en los datos
        }
    }
}

?>


// agregar al html 
include("loginPhp/conexion_bd.php");
include("loginPhp/controlador.php");