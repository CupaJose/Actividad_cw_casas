<?php
    require "config.php";
    $conexion= connect();
    
    session_start();

    $peticion = "SELECT nombre, contrasenia, puntos_usuario, casa FROM usuario WHERE nombre=\"".$_SESSION['usuario']. "\" AND contrasenia=\"".$_SESSION['contrasenia']."\"";
    $query = mysqli_query($conexion,$peticion);
    $datos = mysqli_fetch_assoc($query);
    echo json_encode($datos);
?>