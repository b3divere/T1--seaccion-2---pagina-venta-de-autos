<?php
// sesion iniciada
session_start();

include_once('db.php');
$usua = $_POST['usuario'];
$contrasena = md5($_POST['clave']);

// conectar con base de datos
$conectar=conn();

// query para validar si el correo usado esta en la base de datos
$validar_login = mysqli_query($conectar, "SELECT * FROM Usuarios WHERE usuario='$usua' and clave='$contrasena'");

// si encuentra algun usuario o correo que existe
if(mysqli_num_rows($validar_login) > 0){
// sesion iniciada
    $_SESSION['usuario'] = $usua;
    header("location: index.html");
    exit();
}else{
    ?>
    <script>
        alert("Usuario ingresado no existe, por favor verifique los datos introducidos");
        window.location = "login.php";
    </script>
    <?php
    exit();
}
?>