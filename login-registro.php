<?php
include_once('db.php');

$Usuar= $_POST['usuario'];
$nombre = $_POST['nombre'];
$usuario = $_POST['Nombre de usuario']
$apell = $_POST['apellido'];
$rut = $_POST['rut'];
$direcc = $_POST['direc'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$contrasena = md5($_POST['contrasena']);

$conectar=conn();


$query = "INSERT INTO registro_usuario(usuario, clave, rut, nombre, apellido, direccion, numerocontacto, correoelectronico)
            VALUES('$Usuar', '$contrasena', '$rut', '$nombre', '$apell', '$direcc', '$telefono', '$email' )";
>>>>>>> main

// Verificar que el correo no se repita y ya este inscrito

$verificar_correo = mysqli_query($conectar, "SELECT * FROM registro_usuario WHERE correoelectronico='$email' ");
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
$verificar_usuario = mysqli_query($conectar, "SELECT * FROM registro_usuario WHERE usuario='$Usuar' ");
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
        window.location.replace("login.html");
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