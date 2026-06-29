<?php

include("../config/conexion.php");

header("Content-Type: application/json");

if(!isset($_GET['id'])){

    echo json_encode([
        "error"=>"No se recibió el ID"
    ]);

    exit();

}

$id = intval($_GET['id']);

$sql = "SELECT * FROM equipos WHERE id=$id";

$resultado = mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado)>0){

    echo json_encode(mysqli_fetch_assoc($resultado));

}else{

    echo json_encode([
        "error"=>"Equipo no encontrado"
    ]);

}

?>