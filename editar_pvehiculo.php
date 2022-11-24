<?php

include("db.php");
$con=conn();

$id_vehiculo = $_GET['id'];

$sql="SELECT * FROM vehiculos WHERE id_vehiculo = '$id_vehiculo'";

$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Publicacion</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/f810ecf29a.js" crossorigin="anonymous"></script> >
	<link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" type= "image/x-icon" href="images/favicon.ico">	

</head>  
<body>
 <form action="editar_publicacion.php" method="POST" class="formulario">
    
    <h1>Edita tu publicacion</h1>

    <div class="contenedor">
        <input type= "hidden" name="id_vehiculo" value="<?php echo $row['id_vehiculo']?> ">
     
        <div class="input-contenedor">
            <i class="fas fa-car icon"></i>
            <input type="text" name="marca" placeholder="Marca" value= "<?php echo $row['marca']?>" Required >
         
        </div>
        <div class="input-contenedor">
            <i class="fas fa-car icon"></i>
            <input type="text" name="modelo" placeholder="Modelo" value= "<?php echo $row['modelo']?>" Required >
            
        </div>

        <div class="input-contenedor">
            <i class="fas fa-car icon"></i>
            <input type="text" name="patente" placeholder="Patente" value= "<?php echo $row['patente']?>" Required >
            
        </div>

        <div class="input-contenedor">
            <i class="fas fa-car icon"></i>
            <input type="text" name="precio" placeholder="Precio" value= "<?php echo $row['precio']?>" Required >
            
        </div>
        <div class="input-contenedor">
        <p>
            Tipo De Vehi­culo:<br>

            <input type="radio" name="Vehiculo" value="Automovil" Required > Automovil <br>
            <input type="radio" name="Vehiculo" value="Motocicleta"> Motocicleta <br>
            <input type="radio" name="Vehiculo" value="Camion"> Camion <br>
            <input type="radio" name="Vehiculo" value="CasaRodante"> CasaRodante <br>
            <input type="radio" name="Vehiculo" value="Bus"> Bus <br>
            <input type="radio" name="Vehiculo" value="Maquinaria"> Maquinaria <br>
         
        </div>
        <div >
            <i class="fas fa-image icon"></i>
         <input type="file" name="img" Required>
        </div>
        <br>

        <input type="submit" name="enviar" value="Editar" class="button" Required >
    </div>
    </form>
</body>
</html>