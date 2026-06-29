<?php

include("../config/conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM fichajes WHERE id=$id";
$resultado = mysqli_query($conexion,$sql);

$fichaje = mysqli_fetch_assoc($resultado);
$foto = $fichaje['foto_jugador'];

copy(
    "../assets/img/fichajes/" . $foto,
    "../assets/img/jugadores/" . $foto
);
$sqlJugador = "INSERT INTO jugadores(

foto,
nombre,
edad,
nacionalidad,
posicion,
estado

)

VALUES(

'{$fichaje['foto_jugador']}',
'{$fichaje['nombre']}',
'{$fichaje['edad']}',
'{$fichaje['nacionalidad']}',
'{$fichaje['posicion']}',
'Activo'

)";

mysqli_query($conexion,$sqlJugador);

mysqli_query(
$conexion,
"UPDATE fichajes
SET estado='Completado'
WHERE id=$id"
);

header("Location:index.php");