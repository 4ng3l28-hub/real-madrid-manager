<?php
include("../config/conexion.php");

$id = $_GET['id'];

// Opcional: eliminar también la imagen
$consulta = "SELECT foto FROM jugadores WHERE id=$id";
$resultado = mysqli_query($conexion, $consulta);
$datos = mysqli_fetch_assoc($resultado);

if ($datos['foto']) {
    unlink("uploads/" . $datos['foto']);
}

// eliminar jugador
$sql = "DELETE FROM jugadores WHERE id=$id";
mysqli_query($conexion, $sql);

header("Location: index.php");
?>