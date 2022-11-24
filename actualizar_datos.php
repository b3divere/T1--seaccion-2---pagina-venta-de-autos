<?php

include("db.php");
$con=conn();

$nombre = $_POST['nombre'];
$ape = $_POST['apellido'];
$telefono = $_POST['Ncontacto'];
$email = $_POST['correo'];
$direcc = $_POST['direccion'];

$sql="UPDATE `Usuarios` SET `nombre`='$nombre',`apellido`='$ape',`Ncontacto`='$telefono',
`correo`='$email',`direccion`='$direcc' WHERE 1";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: datosusuario.php");
    }
?>