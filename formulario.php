<?php

session_start();
//Me conecto al motor de BD que corre en localhost, con el usuario root (sin password), y selecciono la BD del proyecto
 $bd = mysqli_connect("localhost","root", "","tienda");

//Recibo el porcentaje y el Id de categoría desde el formulario
  $rut = $_SESSION['rut'];
  $marc = $_GET['marca'];
  $mod = $_GET['modelo'];
  $pat = $_GET['patente'];
  $prec = $_GET['precio'];
  $tipo = $_GET['Vehiculo'];
  
//Realizo la consulta SQL (llamada al Proc Almacenado)

$respuesta = mysqli_query($bd, "CALL NewCar('$marc','$mod','$pat','$tipo','$prec','$rut')");

?>