<?php
include("../config/conexion.php");

$foto = $_FILES['foto_jugador']['name'];

move_uploaded_file(
$_FILES['foto_jugador']['tmp_name'],
"../assets/img/fichajes/".$foto
);

$escudo = $_FILES['escudo_equipo_anterior']['name'];

move_uploaded_file(
$_FILES['escudo_equipo_anterior']['tmp_name'],
"../assets/img/rivales/".$escudo
);

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$nacionalidad = $_POST['nacionalidad'];
$posicion = $_POST['posicion'];
$equipo = $_POST['equipo_anterior'];
$costo = $_POST['costo'];
$tipo = $_POST['tipo_operacion'];
$fecha = $_POST['fecha_fichaje'];

$sql = "INSERT INTO fichajes(

nombre,
foto_jugador,
edad,
nacionalidad,
posicion,
equipo_anterior,
escudo_equipo_anterior,
costo,
tipo_operacion,
fecha_fichaje

)

VALUES(

'$nombre',
'$foto',
'$edad',
'$nacionalidad',
'$posicion',
'$equipo',
'$escudo',
'$costo',
'$tipo',
'$fecha'

)";

mysqli_query($conexion,$sql);

header("Location:index.php");