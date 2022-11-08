<?php
include_once('db.php');
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$conectar=conn();

// query o consulta
$query = "INSERT INTO users(nombre, correo, usuario, contrasena)
            VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

// Verificar que el correo no se repita y ya este inscrito

$verificar_correo = mysqli_query($conectar, "SELECT * FROM users WHERE correo='$correo' ");
// si existe una fila con el mismo correo
if(mysqli_num_rows($verificar_correo) > 0){
    ?>
    <script>
        alert("Este correo ya esta registrado, intenta con otro");
        window.location = "login-register.html";
    </script>
    <?php
    exit();
}

// verifica que el usuario no se repita
$verificar_usuario = mysqli_query($conectar, "SELECT * FROM users WHERE usuario='$usuario' ");
// si existe una fila con el mismo correo
if(mysqli_num_rows($verificar_usuario) > 0){
    ?>
    <script>
        alert("Este usuario ya esta registrado, intenta con otro");
        window.location = "login-register.php";
    </script>
    <?php
    exit();
}

// ejecuta la query
$ejecutar = mysqli_query($conectar, $query);

if ($ejecutar) {
    ?>
    <script>
        window.location.replace("login-register.php");
        window.alert("El usuario se ha registrado correctamente");
    </script>
    <?php
} else {
    ?>
    <script>
        window.location.replace("login-register.php");
        window.alert("Ups, algo ha ocurrido, intenta de nuevo");
    </script>
    <?php
}

// cierra la conexion con la bd
mysqli_close($conectar);

?>