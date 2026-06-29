<?php
include("../config/conexion.php");

$id = intval($_GET['id']);

$sql = "SELECT * FROM partidos WHERE id=$id";
$resultado = mysqli_query($conexion, $sql);
$partido = mysqli_fetch_assoc($resultado);

if (!$partido) {
    die("Partido no encontrado");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Partido</title>

<link rel="stylesheet" href="../assets/css/editar-partido.css">

</head>
<body>
<div class="top-bar">

    <a href="index.php" class="btn-volver">
        <i class="fas fa-arrow-left"></i>
        Volver
    </a>

</div>
<div class="contenedor">

<h1>Editar Partido</h1>

<form action="actualizar_partido.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $partido['id']; ?>">
<input type="hidden" name="competicion" value="<?php echo $partido['competicion']; ?>">

<label>Rival</label>
<input type="text" name="rival" value="<?php echo $partido['rival']; ?>">

<label>Resultado</label>
<input type="text" name="resultado" value="<?php echo $partido['resultado']; ?>">

<label>Fecha</label>
<input type="date" name="fecha_partido" value="<?php echo $partido['fecha_partido']; ?>">

<label>Estadio</label>
<input type="text" name="estadio" value="<?php echo $partido['estadio']; ?>">

<label>Observaciones</label>
<textarea name="observaciones"><?php echo $partido['observaciones']; ?></textarea>


<label>Cambiar escudo </label>
<input type="file" name="escudo_rival">

<button type="submit">Guardar cambios</button>

</form>

</div>

</body>
</html>