<?php

include("../config/conexion.php");

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$nacionalidad = $_POST['nacionalidad'];
$posicion = $_POST['posicion'];
$dorsal = $_POST['dorsal'];
$estado = $_POST['estado'];
$valor = $_POST['valor_mercado'];


$foto = "";

if (!empty($_FILES['foto']['name'])) {
    $foto = $_FILES['foto']['name'];
    $ruta = "../assets/img/jugadores/" . basename($foto);

    move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
}

// INSERT
$sql = "INSERT INTO jugadores (
    foto,
    nombre,
    edad,
    nacionalidad,
    posicion,
    dorsal,
    estado,
    valor_mercado
) VALUES (
    '$foto',
    '$nombre',
    '$edad',
    '$nacionalidad',
    '$posicion',
    '$dorsal',
    '$estado',
    '$valor'
)";

mysqli_query($conexion, $sql);

header("Location: index.php");
?>