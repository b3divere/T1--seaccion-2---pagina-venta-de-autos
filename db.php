<?php
    // funcion el cual conecta con la base de datos utilizada y el servidor
    $hostname = "db.inf.uct.cl";
    $usuariodb = "A2022_rgutierrez";
    $passworddb = "A2022_rgutierrez";
    $dbname = "A2022_rgutierrez";
    $conectar = new mysqli($hostname,$usuariodb,$passworddb,$dbname);
    //generando la conexion con el servidor
   