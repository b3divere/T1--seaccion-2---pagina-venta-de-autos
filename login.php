<?php
// inicia sesion
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: datosusuario.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Acceso a Cuenta</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/f810ecf29a.js" crossorigin="anonymous"></script>	<link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" type= "image/x-icon" href="images/favicon.ico">	

</head>  
    <body>
        <form action="login_usuario.php" method="POST" class="formulario">
        
            <h1>Accede a tu Cuenta</h1>
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type="text" name="usuario" placeholder="Nombre de usuario">    
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" name="contrasena" placeholder="Contraseña">
            
                </div>
                <input type="submit" value="Aceptar" class="button">
                <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
                <p>¿No tienes una cuenta? <a class="link" href="registrar.html">Registrate </a></p>
            </div>
        </form>
    </body>
</html>