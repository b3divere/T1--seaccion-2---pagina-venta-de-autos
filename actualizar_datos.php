<?php

include("db.php");
$con=conn();

$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$apellido=$_POST['apellido'];
$rut=$_POST['rut'];
$direccion=$_POST['direccion'];
$Ncelular=$_POST['Ncelular'];
$correo=$_POST['correo'];

$sql="UPDATE usuarios SET  nombre='$nombre'
,usuario='$usuario',apellido='$apellido',direccion='$direccion',Ncelular='$Ncelular'
,correo='$correo' WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: datosusuario.php");
    }
?>