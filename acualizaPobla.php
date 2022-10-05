<?php
//Este programa PHP debe guardarse con el nombre:  acualizaPobla.php

//Me conecto al motor de BD que corre en localhost, con el usuario root (sin password), y selecciono la BD del proyecto
 $bd = mysqli_connect("localhost","root", "","world");
  
//Recibo el porcentaje y el Id de categoría desde el formulario
  $nom  = $_GET["nombre"];
  $ape =  $_GET["apellido"];
  $nume = $_GET["numero"]
  $corre = $_GET["correo"]
//Realizo la consulta SQL (llamada al Proc Almacenado)
$respuesta = mysqli_query($bd, "CALL ActualizaPoblacionPais($nom, $ape,$nume, $corre)");
  

//Muestro un mensaje si todo estuvo bien.
if($respuesta)
   echo "Los precios fueron actualizados";
else
   echo "Ocurrió un error";
?>