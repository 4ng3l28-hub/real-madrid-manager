<?php
include("../config/conexion.php");

$rival = $_POST['rival'];
$fecha = $_POST['fecha_partido'];
$estadio = $_POST['estadio'];
$competicion = $_POST['competicion'];
$resultado = $_POST['resultado'];
$observaciones = $_POST['observaciones'];

$escudo = $_FILES['escudo_rival']['name'];
move_uploaded_file($_FILES['escudo_rival']['tmp_name'], "../img/rivales/".$escudo);

$sql = "INSERT INTO partidos 
(rival, escudo_rival, fecha_partido, estadio, competicion, resultado, observaciones)
VALUES
('$rival','$escudo','$fecha','$estadio','$competicion','$resultado','$observaciones')";

mysqli_query($conexion, $sql);

header("Location: liga.php");
exit;
?>