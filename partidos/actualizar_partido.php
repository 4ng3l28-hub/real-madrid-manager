<?php
include("../config/conexion.php");

$id = $_POST['id'];
$competicion = $_POST['competicion'];

$rival = $_POST['rival'];
$resultado = $_POST['resultado'];
$fecha = $_POST['fecha_partido'];
$estadio = $_POST['estadio'];
$observaciones = $_POST['observaciones'];

$img_sql = "";

// Si suben nueva imagen
if (!empty($_FILES['escudo_rival']['name'])) {

    $escudo = $_FILES['escudo_rival']['name'];
    $ruta = "../img/rivales/" . $escudo;

    move_uploaded_file($_FILES['escudo_rival']['tmp_name'], $ruta);

    $img_sql = ", escudo_rival='$escudo'";
}

// UPDATE
$sql = "UPDATE partidos SET
    rival='$rival',
    resultado='$resultado',
    fecha_partido='$fecha',
    estadio='$estadio',
    observaciones='$observaciones'
    $img_sql
WHERE id=$id";

mysqli_query($conexion, $sql);

// Redirección según competición
switch($competicion){

    case "Liga":
        header("Location: liga.php");
        break;

    case "Copa del Rey":
        header("Location: copa.php");
        break;

    case "Champions League":
        header("Location: champions.php");
        break;

    default:
        header("Location: index.php");
        break;
}

exit();
?>