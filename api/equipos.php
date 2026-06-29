<?php

include("../config/conexion.php");

header("Content-Type: application/json");

$sql = "SELECT * FROM equipos ORDER BY nombre";

$resultado = mysqli_query($conexion,$sql);

$equipos = [];

while($fila = mysqli_fetch_assoc($resultado)){

    $equipos[] = $fila;

}

echo json_encode($equipos);

?>