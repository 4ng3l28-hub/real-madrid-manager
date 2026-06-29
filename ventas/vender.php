<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Registrar Venta</title>

<link rel="stylesheet" href="../assets/css/vender.css">
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<div class="contenedor">

    <div class="titulo">
        <h1>
            <i class="fas fa-sack-dollar"></i>
            Registrar Venta
        </h1>

        <a href="index.php" class="volver">
            <i class="fas fa-arrow-left"></i>
            Volver
        </a>
    </div>

<form action="guardar-venta.php" method="POST">

<div class="contenido">

    <!-- JUGADOR -->
    <div class="panel">

        <h2><i class="fas fa-user"></i> Jugador</h2>

        <div class="input-group">
            <label>Seleccionar jugador</label>

            <select id="jugador" name="jugador_id">
                <option value="">Seleccione...</option>
            </select>
        </div>

        <div class="card">

            <img id="fotoJugador"
                 src="../assets/img/sistema/fotoplayer.jpg">

            <h3 id="nombreJugador">Seleccione un jugador</h3>

            <p>Posición: <strong id="posicionJugador">-</strong></p>

            <p>Dorsal: <strong id="dorsalJugador">-</strong></p>

            <p>Valor mercado</p>

            <h2 id="valorJugador">$0</h2>

        </div>

    </div>

  
   <div class="panel">

    <h2>
        <i class="fas fa-shield-halved"></i>
        Club comprador
    </h2>

    <div class="input-group">

        <label>Seleccionar equipo</label>

      <select id="equipo" name="equipo_id" required>
    <option value="">Seleccione...</option>
</select>

    </div>

    <!-- CAMPOS OCULTOS -->

    <input
    type="hidden"
    id="equipo_destino"
    name="equipo_destino">

    <input
    type="hidden"
    id="escudo_equipo_destino"
    name="escudo_equipo_destino">

    <div class="card">

        <img id="escudoEquipo"
             src="../assets/img/sistema/fotosis.jpg">

        <h3 id="nombreEquipo">
            Seleccione un equipo
        </h3>

        <p>
            Liga:
            <strong id="ligaEquipo">-</strong>
        </p>

        <p>
            País:
            <strong id="paisEquipo">-</strong>
        </p>

    </div>

</div>

</div>

<!-- VENTA -->
<div class="venta">

    <div class="input-group">
        <label>Precio de Venta</label>

        <input type="number" name="precio_venta" required>
    </div>

    <div class="input-group">
        <label>Fecha de Venta</label>

        <input type="date" name="fecha_venta" required>
    </div>


    <button type="submit">
        <i class="fas fa-check"></i>
        Registrar Venta
    </button>

</div>

</form>

</div>

<script src="../assets/js/ventas.js"></script>

</body>
</html>