<?php

include("db.php");
$con=conn();

$id_vehiculo = $_POST['id_vehiculo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$patente = $_POST['patente'];
$precio = $_POST['precio'];
$tvehiculo = $_POST['Vehiculo'];
$img = $_POST['img'];

$sql="UPDATE vehiculos SET `marca`='$marca',`modelo`='$modelo',`patente`='$patente',
`precio`='$precio',`imagenes`='$img',
`tipoV`='$tvehiculo' WHERE id_vehiculo = '$id_vehiculo'";

$query=mysqli_query($con,$sql);

if($query){
        Header("Location: datosusuario.php");
    }
?>
