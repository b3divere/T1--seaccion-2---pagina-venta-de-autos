<?php

include("db.php");
$con=conn();

$id_vehiculo = $_GET['id'];

$sql="DELETE FROM vehiculos WHERE id_vehiculo = '$id_vehiculo'";

$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: datosusuario.php");
    }
?>