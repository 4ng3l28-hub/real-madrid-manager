<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Nuevo Fichaje</title>
<link rel="stylesheet" href="../assets/css/crear-fichaje.css">
</head>

<body>
<div class="top-bar">

    <a href="index.php" class="btn-volver">
        <i class="fas fa-arrow-left"></i>
        Volver
    </a>

</div>
<form action="guardar_fichaje.php"
method="POST"
enctype="multipart/form-data">

<input type="text" name="nombre" placeholder="Nombre" required>

<input type="file" name="foto_jugador" required>

<input type="number" name="edad" placeholder="Edad">

<input type="text" name="nacionalidad" placeholder="Nacionalidad">

<label>Posición</label>

<select name="posicion" required>
    <option value="">Seleccionar posición</option>

    <option value="Portero">Portero</option>

    <option value="Defensa Central">Defensa Central</option>
    <option value="Lateral Derecho">Lateral Derecho</option>
    <option value="Lateral Izquierdo">Lateral Izquierdo</option>

    <option value="Mediocentro Defensivo">Mediocentro Defensivo</option>
    <option value="Mediocentro">Mediocentro</option>
    <option value="Mediocentro Ofensivo">Mediocentro Ofensivo</option>

    <option value="Extremo Derecho">Extremo Derecho</option>
    <option value="Extremo Izquierdo">Extremo Izquierdo</option>

    <option value="Delantero Centro">Delantero Centro</option>
    <option value="Segundo Delantero">Segundo Delantero</option>
</select>

<input type="text" name="equipo_anterior" placeholder="Equipo anterior">

<input type="file" name="escudo_equipo_anterior">

<input type="number" name="costo" placeholder="Costo">

<select name="tipo_operacion">
    <option value="Compra">Compra</option>
    <option value="Cesion">Cesión</option>
</select>

<input type="date" name="fecha_fichaje">

<button type="submit">
Guardar
</button>

</form>

</body>
</html>