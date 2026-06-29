<?php
include("../config/conexion.php");

$sql = "SELECT * FROM fichajes ORDER BY fecha_registro DESC";
$resultado = mysqli_query($conexion,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Fichajes</title>
<link rel="stylesheet" href="../assets/css/index-fichajes.css">

</head>

<body>

<header>
<h1>Mercado de Fichajes</h1>
</header>
<div class="dropdown">

    <button class="dropbtn">
        ☰ Menú
    </button>

    <div class="dropdown-content">
        <a href="../dashboard/dashboard.php">Dashboard</a>
        <a href="../partidos/index.php">Competiciones</a>
    </div>

</div>
<div style="padding:20px;">
<a class="btn" href="crear_fichaje.php"> Nuevo Fichaje</a>
</div>

<div class="container">

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<div class="card">

    <div class="top-card">

        <img class="foto"
        src="../assets/img/fichajes/<?php echo $fila['foto_jugador']; ?>">

        <div class="nombre">
            <?php echo $fila['nombre']; ?>
        </div>

        <div class="posicion">
            <?php echo $fila['posicion']; ?>
        </div>

        <div class="club">

            <img class="escudo"
            src="../assets/img/rivales/<?php echo $fila['escudo_equipo_anterior']; ?>">

            <span>
                <?php echo $fila['equipo_anterior']; ?>
            </span>

        </div>

    </div>

    <div class="info">

        <div class="info-row">
            <span class="label">Edad</span>
            <span class="valor"><?php echo $fila['edad']; ?></span>
        </div>

        <div class="info-row">
            <span class="label">Nacionalidad</span>
            <span class="valor"><?php echo $fila['nacionalidad']; ?></span>
        </div>

        <div class="info-row">
            <span class="label">Costo</span>
            <span class="valor">
                €<?php echo number_format($fila['costo']); ?>
            </span>
        </div>

        <div class="info-row">
            <span class="label">Fecha</span>
            <span class="valor">
                <?php echo $fila['fecha_fichaje']; ?>
            </span>
        </div>

        <div class="info-row">

            <span class="badge <?php echo strtolower($fila['tipo_operacion']); ?>">
                <?php echo $fila['tipo_operacion']; ?>
            </span>

            <span class="badge <?php echo strtolower($fila['estado']); ?>">
                <?php echo $fila['estado']; ?>
            </span>

        </div>

    </div>

    <?php if($fila['estado']=="Pendiente"){ ?>

    <a class="btn"
    href="completar_fichaje.php?id=<?php echo $fila['id']; ?>">
        Completar Fichaje
    </a>

    <?php } ?>

</div>

<?php } ?>

</div>

</body>
</html>