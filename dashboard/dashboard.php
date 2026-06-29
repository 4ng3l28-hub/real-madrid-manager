<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login/login.php");
    exit();
}

include("../config/conexion.php");

$jugadores = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM jugadores"));
$partidos = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM partidos"));
$fichajes = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM fichajes"));
$ventas = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM ventas"));

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard | Real Madrid Manager</title>

<link rel="stylesheet" href="../assets/css/dashboard.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="container">


    <div class="sidebar">

        <div class="logo">

            <img src="https://upload.wikimedia.org/wikipedia/en/5/56/Real_Madrid_CF.svg" alt="Logo">

            <h2>Real Madrid Manager</h2>

        </div>

        <div class="menu">


            <a href="../jugadores/index.php">
    <i class="fas fa-users"></i>
    Jugadores
</a>

            <a href="../partidos/index.php">
                <i class="fas fa-futbol"></i>
                Partidos
            </a>

            <a href="../fichajes/index.php">
                <i class="fas fa-money-check-dollar"></i>
                Fichajes
            </a>

             <a href="../ventas/index.php">
                <i class="fas fa-sack-dollar"></i>
                Ventas
            </a>


            <a href="../login/logout.php">
                <i class="fas fa-right-from-bracket"></i>
                Salir
            </a>

        </div>

    </div>

    <!-- CONTENIDO -->

    <div class="main">

        <div class="header">

            <h1>Dashboard</h1>

            <div class="user-box">

                <i class="fas fa-user-circle"></i>

                <span>
                    <?php echo $_SESSION['usuario']; ?>
                </span>

            </div>

        </div>

        <div class="dashboard">

            <div class="cards">

                <div class="card card1">
                    <i class="fas fa-users"></i>
                    <h3>Jugadores</h3>
                    <p><?php echo $jugadores; ?></p>
                </div>

                <div class="card card2">
                    <i class="fas fa-futbol"></i>
                    <h3>Partidos</h3>
                    <p><?php echo $partidos; ?></p>
                </div>

                <div class="card card3">
                    <i class="fas fa-money-check-dollar"></i>
                    <h3>Fichajes</h3>
                    <p><?php echo $fichajes; ?></p>
                </div>

                <div class="card card4">
                    <i class="fas fa-sack-dollar"></i>
                    <h3>Ventas</h3>
                    <p><?php echo $ventas; ?></p>
                </div>

            </div>

        </div>

    </div>

</div>

<script>

const slides = document.querySelectorAll('.slide');

console.log("Slides:", slides.length);

</script>
</body>
</html>