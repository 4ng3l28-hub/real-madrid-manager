<?php

include("../config/conexion.php");

header("Content-Type: application/json");

if(!isset($_GET['id'])){
    echo json_encode([
        "error" => "No se recibió el ID del jugador"
    ]);
    exit();
}

$id = intval($_GET['id']);

$sql = "SELECT * FROM jugadores WHERE id = $id";

$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) > 0){

    $jugador = mysqli_fetch_assoc($resultado);

    echo json_encode($jugador);

}else{

    echo json_encode([
        "error" => "Jugador no encontrado"
    ]);

}
?>