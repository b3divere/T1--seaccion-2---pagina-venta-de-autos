<?php
// inicia una sesion
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("Para ver los datos de usuario antes debes iniciar sesion");
            window.location = "login.php";
        </script>
    ';
    
    session_destroy();
    die();
    $row=mysqli_fetch_array($query);

}
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
   <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
                       <li><a href="vehiculos.php"><span>Vehículos</span></a></li>
                       <li><a href="inscripcion.php"><span>Vende tu vehiculo aqui</span></a></li>
                       <li><a href="contacto.html"><span>Contacto</span></a></li>
                       <li class="item-r"><a href="cerrar_sesion.php">Cerrar sesion</a></li>
                       <a href="datosusuario.php"><img src="images/usuario.png" width="45" height="45" align="left"></a>
                    </ul>
               </nav>
           </div>
       </header>

       <div class="fh5co-hero" style="background-image: url(images/imgazul.jpg);" data-stellar-background-ratio="0.5">
           <div class="overlay"></div>
           <div class="container">
               <div class="row">
                   <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                       <div class="fh5co-intro fh5co-table-cell">
                           <h1 class="text-center">Tus Datos</h1>                
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="fh5co-section">
           <div class="container">
               <div class="row">
                   <div class="col-md-5">
                   <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Apellido</th>
                                        <th>Rut</th>
                                        <th>Dirrecion</th>
                                        <th>Fono</th>
                                        <th>Correo</th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
        
                                            <tr>
                                            <?php 
                                            include("db.php");
                                            $con=conn();
                                            $sql="SELECT * FROM usuarios ";
                                            $query=mysqli_query($con,$sql);
                                            $resul= ($con->query($sql));
                                            while($pin = $resul -> fetch_assoc()){

                                            ?> 
                                                <th><?php  echo $pin['nombre']?></th>
                                                <th><?php  echo $pin['usuario']?></th>
                                                <th><?php  echo $pin['apellido']?></th>
                                                <th><?php  echo $pin['rut']?></th> 
                                                <th><?php  echo $pin['direccion']?></th> 
                                                <th><?php  echo $pin['Ncelular']?></th> 
                                                <th><?php  echo $pin['correo']?></th>    
                                                <th><a actione="actualizar.php?rut=<?php echo $pin['rut'] ?>" class="btn btn-info">Editar</a></th>                                       
                                    
                                            <?php 
                                            }   
                                            ?>
                                           </tr>
                                </tbody>
                            </table>
                   </div>
               </div>
           </div>
       </div>


   </div> 


   <footer id="fh5co-footer">
       <div class="container">
           <div class="row">

               <div class="col-md-3 col-md-push-1">
                   <h3>Más</h3>
                   <ul>
                       <li><a href="vehiculos.html">Productos</a></li>
                       <li><a href="inscripcion.html">Servicios</a></li>
                       <li><a href="contacto.html">Contacto</a></li>
                   </ul>
               </div>
               <div class="col-md-3 col-md-push-1">
                   <h3>Síguenos</h3>
                   <ul class="fh5co-social">
                       <li><a href="https://twitter.com/Autoonlineuct"><i class="icon-twitter"></i> <span>Twitter</span></a></li>
                       <li><a href="https://www.facebook.com/Automotora-online-UCT-107443225441994"><i class="icon-facebook"></i> <span>Facebook</span></a></li>
                       <li><a href="https://www.instagram.com/_auto.online_/"><i class="icon-instagram"></i> <span>Instagram</span></a></li>
                   </ul>
               </div>
           </div>
           <div class="row">
               <div class="col-md-12 fh5co-copyright text-center">
                   <p><small>&copy; 2022 Automotora Derechos Reservados </small>
               </div>
           </div>
       </div>
   </footer>
   
   <!-- jQuery -->
   <script src="js/jquery.min.js"></script>
   <!-- jQuery Easing -->
   <script src="js/jquery.easing.1.3.js"></script>
   <!-- Bootstrap -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Waypoints -->
   <script src="js/jquery.waypoints.min.js"></script>
   <!-- Stellar -->
   <script src="js/jquery.stellar.min.js"></script>
   <!-- Google Map -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
   <script src="js/google_map.js"></script>

   <!-- MAIN JS -->
   <script src="js/main.js"></script>

   </body>
</html>

