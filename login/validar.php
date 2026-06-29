<?php

session_start();

include("../config/conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios 
        WHERE usuario='$usuario'
        AND password='$password'";

$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) > 0){

    $datos = mysqli_fetch_assoc($resultado);

    $_SESSION['id'] = $datos['id'];
    $_SESSION['usuario'] = $datos['usuario'];
    $_SESSION['rol'] = $datos['rol'];

    header("Location: ../dashboard/dashboard.php");

}else{

    echo "
    <script>
        alert('Usuario o contraseña incorrectos');
        window.location='login.php';
    </script>
    ";

}

?>