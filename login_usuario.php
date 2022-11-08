<?php
// sesion iniciada
session_start();

include_once('db.php');
$usuar = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// conectar con base de datos
$conectar=conn();

// query para validar si el correo usado esta en la base de datos
$validar_login = mysqli_query($conectar, "SELECT * FROM users WHERE correo='$usuar' 
and contrasena='$contrasena'");

// si encuentra algun usuario o correo que existe
if(mysqli_num_rows($validar_login) > 0){
    // sesion iniciada
    $_SESSION['usuario'] = $correo;
    header("location: bienvenida.html");
    exit();
}else{
    ?>
    <script>
        alert("Usuario ingresado no existe, por favor verifique los datos introducidos");
        window.location = "login-register.html";
    </script>
    <?php
    exit();
}

?>