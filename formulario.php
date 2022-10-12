<?php
//Este programa PHP debe guardarse con el nombre:  acualizaPobla.php

//Me conecto al motor de BD que corre en localhost, con el usuario root (sin password), y selecciono la BD del proyecto
 $bd = mysqli_connect("localhost","root", "","world");
  
//Recibo el porcentaje y el Id de categoría desde el formulario
  $rut  = $_GET["rut"];
  $nom =  $_GET["nombre"];
  $ape = $_GET["apellido"];
  $dire = $_GET["direccion"];
  $ncontac = $_GET["ncontacto"];
  $corre = $_GET["correo"];
//Realizo la consulta SQL (llamada al Proc Almacenado)
$respuesta = mysqli_query($bd, "CALL ActualizaPoblacionPais($rut, $nom, $ape, $dire, $ncontac, $corre)");
  $marc  = $_GET["marca"];
  $mod =  $_GET["modelo"];
  $pat = $_GET["patente"];
  $prec = $_GET["precio"];
//Realizo la consulta SQL (llamada al Proc Almacenado)
$respuesta = mysqli_query($bd, "CALL ActualizaPoblacionPais($marc, $mod, $pat, $prec");

//Muestro un mensaje si todo estuvo bien.
if($respuesta)
   echo "Los precios fueron actualizados";
else
   echo "Ocurrió un error";
?>