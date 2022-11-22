<?php
include_once('db.php');

$nombre = $_POST['nombre'];
$ape = $_POST['apellido'];
$user = $_POST['usuario'];
$telefono = $_POST['Ncontacto'];
$rut = $_POST['rut'];
$email = $_POST['correo'];
$direcc = $_POST['direccion'];
$contrasena = md5($_POST['clave']);

$conectar=conn();

// query o consulta
$query = "INSERT INTO `Usuarios`(`nombre`, `apellido`, `usuario`, `Ncontacto`, `rut`, `correo`, `direccion`, `clave`) 
VALUES ('$nombre','$ape','$user','$telefono','$rut','$email','$direcc','$contrasena')";

// Verificar que el correo no se repita y ya este inscrito

$verificar_correo = mysqli_query($conectar, "SELECT * FROM Usuarios WHERE correo='$email'");
// si existe una fila con el mismo correo
if(mysqli_num_rows($verificar_correo) > 0){
    ?>
    <script>
        alert("Este correo ya esta registrado, intenta con otro");
        window.location = "registrar.html";
    </script>
    <?php
    exit();
}

// verifica que el usuario no se repita
$verificar_usuario = mysqli_query($conectar, "SELECT * FROM Usuarios WHERE usuario='$usuario'");
// si existe una fila con el mismo correo
if(mysqli_num_rows($verificar_usuario) > 0){
    ?>
    <script>
        alert("Este usuario ya esta registrado, intenta con otro");
        window.location = "registrar.html";
    </script>
    <?php
    exit();
}

// ejecuta la query
$ejecutar = mysqli_query($conectar, $query);

if ($ejecutar) {
    ?>
    <script>
        window.location.replace("login.php");
        window.alert("El usuario se ha registrado correctamente");
    </script>
    <?php
} else {
    ?>
    <script>
        window.location.replace("registrar.html");
        window.alert("Ups, algo ha ocurrido, intenta de nuevo");
    </script>
    <?php
}

// cierra la conexion con la bd
mysqli_close($conectar);

?>