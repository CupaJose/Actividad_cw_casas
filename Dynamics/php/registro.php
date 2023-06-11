<?php
$include = include("./config.php");
$conexion= connect();

if ($include && $conexion){
    $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : "";
    $contrasena=(isset($_POST['contrasena']) && $_POST["contrasena"] != "")? $_POST['contrasena'] : "";

    $longuser=strlen($usuario);
    $longcon=strlen($contrasena);

    if ($longcon>=8 && $longuser>=8){
        $peticion="INSERT INTO usuario VALUES ('$usuario', '$contrasena')";
        $query =mysqli_query ($conexion,$peticion);
    }

    
}
?>