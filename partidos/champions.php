<?php
include("../config/conexion.php");

$sql = "SELECT * FROM partidos WHERE competicion='Champions League'";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Champions League</title>
<link rel="stylesheet" href="../assets/css/champions.css">

</head>

<body>

<header>
    <img class="logo" src="../assets/img/ligas/champions.png" alt="Champions League">
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
<a class="add-btn" href="crear.php?competicion=Copa del Rey">
     Agregar Partido
</a>

<div class="container">

<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>

<?php
$escudo = !empty($fila['escudo_rival']) ? $fila['escudo_rival'] : 'default.png';
?>

<div class="card">

    <div class="titulo">
        Real Madrid vs <?php echo $fila['rival']; ?>
    </div>

    <img class="escudo" src="../assets/img/rivales/<?php echo $escudo; ?>">

    <div class="resultado">
        <?php echo $fila['resultado']; ?>
    </div>

    <div class="info-box">

        <div class="info-item">
            📅 <span><?php echo $fila['fecha_partido']; ?></span>
        </div>

        <div class="info-item">
            🏟 <span><?php echo $fila['estadio']; ?></span>
        </div>

    </div>

    <div class="observaciones">
        <?php echo $fila['observaciones']; ?>
    </div>

    <a class="btn-edit" href="editar_partido.php?id=<?php echo $fila['id']; ?>">
         Editar
    </a>

</div>

<?php } ?>

</div>


</body>
</html>