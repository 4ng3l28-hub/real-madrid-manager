<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login/login.php");
    exit();
}

include("../config/conexion.php");

if(isset($_GET['id'])){

    $id = intval($_GET['id']);

    $sql = "DELETE FROM ventas WHERE id = $id";

    mysqli_query($conexion,$sql);

}

header("Location: index.php");
exit();

?>