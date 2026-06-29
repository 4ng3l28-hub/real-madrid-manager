<?php

include("../config/conexion.php");

$resultado = mysqli_query($conexion,"SELECT * FROM jugadores");

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Jugadores</title>

<link rel="stylesheet" href="../assets/css/jugadores.css">

</head>

<body>
<a href="../dashboard/dashboard.php">⬅ Volver</a>

<h1>Plantilla del Real Madrid</h1>

<a href="nuevo.php" class="btn">
     Nuevo Jugador
</a>

<table>

    <tr>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Nacionalidad</th>
        <th>Posición</th>
        <th>Dorsal</th>
        <th>Valor</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>

    <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

    <tr>

        <td>
            <img src="../assets/img/jugadores/<?php echo $fila['foto']; ?>" width="80">
        </td>

        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['edad']; ?></td>
        <td><?php echo $fila['nacionalidad']; ?></td>
        <td><?php echo $fila['posicion']; ?></td>
        <td><?php echo $fila['dorsal']; ?></td>
        <td><?php echo "$" . number_format($fila['valor_mercado'], 0, ',', '.'); ?></td>
        <td><?php echo $fila['estado']; ?></td>

        <td>

            <a href="editar.php?id=<?php echo $fila['id']; ?>">
                Editar
            </a>


            

        </td>

    </tr>

    <?php } ?>

</table>

</body>
</html>