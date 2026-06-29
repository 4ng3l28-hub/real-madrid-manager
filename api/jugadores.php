<?php

include("../config/conexion.php");

header("Content-Type: application/json");

$sql="SELECT *
FROM jugadores
WHERE estado='Activo'
ORDER BY nombre";

$resultado=mysqli_query($conexion,$sql);

$datos=[];

while($fila=mysqli_fetch_assoc($resultado)){

$datos[]=$fila;

}

echo json_encode($datos);