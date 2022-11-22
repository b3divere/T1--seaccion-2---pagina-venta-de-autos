<?php
    // pagina HTML nueva creada para editar algun dato
    include("db.php");

    // con el metodo request recogemos la variable creada del input que es tipo "Hidden" 
    $us = $_REQUEST['usuario'];
    $conectar = conn();

    // consulta que muestra los datos que coinciden con el respectivo usuario
    $sql = "SELECT * FROM usuarios WHERE usuario = '$us'";

    // ejecuta la consulta
    $query = mysqli_query($conectar, $sql);
    
    $fila = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html class="no-js">
   <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Contacto</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
   <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
   <meta name="author" content="FreeHTML5.co" />

     <!-- Facebook and Twitter integration -->
   <meta property="og:title" content=""/>
   <meta property="og:image" content=""/>
   <meta property="og:url" content=""/>
   <meta property="og:site_name" content=""/>
   <meta property="og:description" content=""/>
   <meta name="twitter:title" content="" />
   <meta name="twitter:image" content="" />
   <meta name="twitter:url" content="https://twitter.com/Autoonlineuct" />
   <meta name="twitter:card" content="" />

   <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
   <link rel="shortcut icon" type= "image/x-icon" href="images/favicon.ico">

   <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
   
   <!-- Animate.css -->
   <link rel="stylesheet" href="css/animate.css">
   
   <!-- Magnific Popup -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- Bootstrap  -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <!-- Icomoon Icon Fonts-->
   <link rel="stylesheet" href="css/icomoon.css">
   <!-- Theme style  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- Modernizr JS -->
   <script src="js/modernizr-2.6.2.min.js"></script>


   </head>
   <body>
   
   <div id="fh5co-wrap">
       <header id="fh5co-header">
           <div class="container">
               <nav class="fh5co-main-nav">
                   <ul>
                       <li><a href="index.html"><span>Inicio</span></a></li>
                       <li><a href="vehiculos.html"><span>Vehículos</span></a></li>
                       <li><a href="inscripcion.php"><span>Vende tu vehiculo aqui</span></a></li>
                       <li><a href="contacto.html"><span>Contacto</span></a></li>
                       <li class="item-r"><a href="cerrar_sesion.php">Cerrar sesion</a></li>
                       <a href="datosusuario.html"><img src="images/usuario.png" width="45" height="45" align="left"></a>
                    </ul>
               </nav>
           </div>
           <h1>Edita algun dato</h1>
       </header>
    <br>
    <div class="container">
        <form action="editarDatos.php" method="POST">
            <input type="Hidden" name="usuario" value="<?php echo $fila['usuario']?>">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['nombre']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['usuario']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="<?php echo $fila['apellido']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Rut</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['rut']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Direccion</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['direccion']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input type="text" class="form-control" placeholder="Comentario" name="comentario" value="<?php echo $fila['telefono']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['correo']?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $fila['conttrasena']?>">
            </div>
            <div class="container">
                <button type="submit" class="btn btn-primary">Editar datos</button>
                <a href="index.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>