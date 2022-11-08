<?php
// funcion el cual conecta con la base de datos utilizada y el servidor
function conn(){
$hostname = "";
$usuariodb = "";
$passworddb = "";
$dbname = "";
 //generando la conexion con el servidor
 $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
 return $conectar;
}
?>