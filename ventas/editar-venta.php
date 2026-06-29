<?php
include("../config/conexion.php");

$id = $_GET['id'];

$result = mysqli_query($conexion, "SELECT * FROM ventas WHERE id = '$id'");
$venta = mysqli_fetch_assoc($result);
?>