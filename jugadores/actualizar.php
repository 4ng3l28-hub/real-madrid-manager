<?php
include("../config/conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$posicion = $_POST['posicion'];
$edad = $_POST['edad'];
$nacionalidad = $_POST['nacionalidad'];
$dorsal = $_POST['dorsal'];
$valor = $_POST['valor_mercado'];
$estado = $_POST['estado'];

$foto_sql = "";

// Manejo de imagen
if (!empty($_FILES['foto']['name'])) {
    $foto = $_FILES['foto']['name'];
    $ruta = "uploads/" . basename($foto);

    move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);

    $foto_sql = ", foto='$foto'";
}

// UPDATE único y correcto
$sql = "UPDATE jugadores SET 
    nombre='$nombre',
    posicion='$posicion',
    edad='$edad',
    nacionalidad='$nacionalidad',
    dorsal='$dorsal',
    valor_mercado='$valor',
    estado='$estado'
    $foto_sql
WHERE id=$id";

mysqli_query($conexion, $sql);

header("Location: index.php");
?>