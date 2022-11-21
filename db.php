<?php
// funcion el cual conecta con la base de datos utilizada y el servidor
function conn(){
$hostname = "db.inf.uct.cl";
$usuariodb = "A2022_rgutierrez";
$passworddb = "A2022_rgutierrez";
$dbname = "A2022_rgutierrez";
 //generando la conexion con el servidor
 $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
 return $conectar;
}
?>