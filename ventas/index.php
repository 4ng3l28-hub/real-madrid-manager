<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login/login.php");
    exit();
}

include("../config/conexion.php");

$sql = "SELECT
ventas.*,
jugadores.nombre,
jugadores.foto
FROM ventas
INNER JOIN jugadores
ON ventas.jugador_id = jugadores.id
ORDER BY ventas.fecha_venta DESC";

$resultado = mysqli_query($conexion,$sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Ventas</title>

<link rel="stylesheet" href="../assets/css/index-ventas.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="contenedor">

    <div class="top">

        <h1>
            <i class="fas fa-sack-dollar"></i>
            Ventas de Jugadores
        </h1>

        <div>

            <a href="../dashboard/dashboard.php" class="btn volver">

                <i class="fas fa-arrow-left"></i>

                Dashboard

            </a>

            <a href="vender.php" class="btn nuevo">

                <i class="fas fa-plus"></i>

                Nueva Venta

            </a>

        </div>

    </div>

<table>

<thead>

<tr>

<th>Foto</th>

<th>Jugador</th>

<th>Equipo Destino</th>

<th>Precio</th>

<th>Fecha Venta</th>

<th>Acciones</th>

</tr>

</thead>

<tbody>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td>

<img
src="../assets/img/jugadores/<?php echo $fila['foto']; ?>"
class="foto">

</td>

<td>

<?php echo $fila['nombre']; ?>

</td>

<td>

<?php echo $fila['equipo_destino']; ?>

</td>

<td>

$ <?php echo number_format($fila['precio_venta'],0,",","."); ?>

</td>

<td>

<?php echo $fila['fecha_venta']; ?>

</td>

<td>


<a href="eliminar-venta.php?id=<?php echo $fila['id']; ?>"
   class="btn-eliminar"
   onclick="return confirm('¿Seguro que deseas eliminar esta venta?');">

    <i class="fas fa-trash"></i>
    Eliminar

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>

</html>