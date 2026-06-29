<?php
include("../config/conexion.php");

$id = $_POST['id'];
$precio = $_POST['precio_venta'];
$fecha = $_POST['fecha_venta'];

$sql = "UPDATE ventas 
        SET precio_venta='$precio', fecha_venta='$fecha'
        WHERE id='$id'";

mysqli_query($conexion, $sql);

header("Location: index.php");
exit();
?>