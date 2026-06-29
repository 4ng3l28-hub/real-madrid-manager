<?php
include(__DIR__ . "/../config/conexion.php");

$id = intval($_GET['id']);

// Buscar jugador
$sql = "SELECT * FROM jugadores WHERE id = $id";
$resultado = mysqli_query($conexion, $sql);
$jugador = mysqli_fetch_assoc($resultado);

// Validación si no existe
if (!$jugador) {
    die("❌ Jugador no encontrado");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Jugador</title>

<link rel="stylesheet" href="../assets/css/editar-jugador.css">


</head>

<body>

<div class="contenedor">

<h1>Editar Jugador</h1>

<form action="actualizar.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $jugador['id']; ?>">

<label>Nombre</label>
<input type="text" name="nombre" value="<?php echo $jugador['nombre']; ?>" required>

<label>Posición</label>
<input type="text" name="posicion" value="<?php echo $jugador['posicion']; ?>" required>

<label>Edad</label>
<input type="number" name="edad" value="<?php echo $jugador['edad']; ?>" required>

<label>Nacionalidad</label>
<input type="text" name="nacionalidad" value="<?php echo $jugador['nacionalidad']; ?>" required>

<label>Dorsal</label>
<input type="number" name="dorsal" value="<?php echo $jugador['dorsal']; ?>" required>

<label>Estado</label>

<?php
$estado = ["Activo", "Lesionado", "Suspendido", "Vendido"];
?>

<select name="estado" required>
    <?php foreach ($estado as $estado) { ?>
        <option value="<?php echo $estado; ?>"
            <?php if ($jugador['estado'] == $estado) echo "selected"; ?>>
            <?php echo $estado; ?>
        </option>
    <?php } ?>
</select>

<label>Valor de mercado</label>
<input type="number" name="valor_mercado" value="<?php echo $jugador['valor_mercado']; ?>" required>


<label>Cambiar imagen</label>
<input type="file" name="foto">

<button type="submit">Guardar cambios</button>

</form>

</div>

</body>
</html>