<?php
  include_once('db.php');

  session_start();
  //Me conecto al motor de BD que corre en localhost, con el usuario root (sin password), y selecciono la BD del proyecto
  $conectar=conn();
  //Recibo el porcentaje y el Id de categoría desde el formulario
  $marc = $_POST['marca'];
  $mod = $_POST['modelo'];
  $pat = $_POST['patente'];
  $prec = $_POST['precio'];
  $tipo = $_POST['vehiculo'];
  $ima = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  
  //Realizo la consulta SQL (llamada al Proc Almacenado)
  //$respuesta = mysqli_query($conectar, "CALL NewCar('$marc','$mod','$pat','$tipo','$prec','$rut','$ima')");

  $sql = mysqli_query($conectar,"INSERT INTO vehiculos(marca,modelo,patente,precio,imagenes,tipoV)
                                 VALUES('$marc','$mod','$pat','$prec','$ima','$tipo')");
?>