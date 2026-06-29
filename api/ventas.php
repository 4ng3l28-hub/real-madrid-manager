<?php
include("../config/conexion.php");
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];

/* =======================
   LISTAR VENTAS
======================= */
if ($method == "GET") {

    $sql = "SELECT * FROM ventas ORDER BY fecha_venta DESC";
    $resultado = mysqli_query($conexion, $sql);

    $ventas = [];

    while ($row = mysqli_fetch_assoc($resultado)) {
        $ventas[] = $row;
    }

    echo json_encode($ventas);
    exit;
}

/* =======================
   CREAR VENTA
======================= */
if ($method == "POST") {

    $data = json_decode(file_get_contents("php://input"), true);

    $jugador_id = $data['jugador_id'];
    $equipo_destino = $data['equipo_destino'];
    $precio_venta = $data['precio_venta'];

    // insertar venta
    $sql = "INSERT INTO ventas (jugador_id, equipo_destino, precio_venta)
            VALUES ('$jugador_id','$equipo_destino','$precio_venta')";

    mysqli_query($conexion, $sql);

    // marcar jugador como vendido
    $sql2 = "UPDATE jugadores SET estado='vendido' WHERE id='$jugador_id'";
    mysqli_query($conexion, $sql2);

    echo json_encode([
        "status" => "ok",
        "message" => "Venta registrada"
    ]);

    exit;
}