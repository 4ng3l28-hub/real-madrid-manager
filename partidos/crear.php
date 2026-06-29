<?php
$competicion = isset($_GET['competicion']) ? $_GET['competicion'] : "";
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Agregar Partido</title>
<link rel="stylesheet" href="../assets/css/crear-partido.css">

</head>

<body>
    <div class="top-bar">

    <a href="index.php" class="btn-volver">
        <i class="fas fa-arrow-left"></i>
        Volver
    </a>

</div>
<div class="contenedor">
<h2> Agregar Partido</h2>

<form action="guardar.php" method="POST" enctype="multipart/form-data">

    <input type="text" name="rival" placeholder="Rival" required>

    <input type="file" name="escudo_rival" required>

    <input type="date" name="fecha_partido">

    <input type="text" name="estadio" placeholder="Estadio">

    <select name="competicion">
        <option value="Liga" <?php if($competicion=="Liga") echo "selected"; ?>>Liga</option>
        <option value="Copa del Rey" <?php if($competicion=="Copa del Rey") echo "selected"; ?>>Copa del Rey</option>
        <option value="Champions League" <?php if($competicion=="Champions League") echo "selected"; ?>>Champions League</option>
    </select>

    <input type="text" name="resultado" placeholder="Resultado (ej: 2-1)">

    <textarea name="observaciones" placeholder="Observaciones"></textarea>

    <button type="submit">Guardar Partido</button>

</form>
</div>
</body>
</html>
