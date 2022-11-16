<?php
include_once('db.php');

$nombre = $_POST['nombre'];
<<<<<<< HEAD
$usuario = $_POST['Nombre de usuario'];
$apell = $_POST['apellido'];
=======
$usuario = $_POST['user'];
$ape = $_POST['apellido'];
>>>>>>> main
$rut = $_POST['rut'];
$direcc = $_POST['direc'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = md5($_POST['contrasena']);

$conectar=conn();

// query o consulta
$query = "CALL NewUser('$nombre','$usuario','$ape','$rut','$direcc','$telefono','$email','$contrasena')";

// Verificar que el correo no se repita y ya este inscrito

$verificar_correo = mysqli_query($conectar, "SELECT * FROM usuarios WHERE correo='$email'");
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
$verificar_usuario = mysqli_query($conectar, "SELECT * FROM usuarios WHERE usuario='$usuario'");
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