<?php
// funcion el cual conecta con la base de datos utilizada y el servidor
include_once('db.php');

/* Consulta SQL de SELECT */

$sql = "SELECT * FROM vehiculos";

/* Se ejecuta la consulta SQL */

$resultado = $conectar->query($sql);
$response = array();

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $response[] = $row;
    }
    exit(json_encode($response));
} else{
    $response['error'] = "error" . $conectar->error;
        exit(json_encode($response));
}

/* Se cierra la conexion */
$conectar->close();
?>