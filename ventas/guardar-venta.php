<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login/login.php");
    exit();
}

include("../config/conexion.php");

// DATOS DEL FORMULARIO

$jugador = $_POST['jugador_id'];

$equipo = $_POST['equipo_destino'];

$escudo = $_POST['equipo_id'];

$precio = $_POST['precio_venta'];

$fecha = $_POST['fecha_venta'];


// 1. guardar venta
$sql = "INSERT INTO ventas (jugador_id,equipo_destino, equipo_id, precio_venta, fecha_venta)
        VALUES ('$jugador', '$equipo','$equipo_id', '$precio', '$fecha')";
mysqli_query($conexion, $sql);

// 2. marcar jugador como vendido
mysqli_query($conexion, "
UPDATE jugadores 
SET estado = 'vendido'
WHERE id = '$jugador'
");

header("Location: index.php");
exit();
?>