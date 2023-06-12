<?php
require "config.php";
$conexion= connect();
if (!$conexion){
    echo "Error en la conexión";
}else{
    $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : false;
    $contrasena=(isset($_POST['contrasena']) && $_POST["contrasena"] != "")? $_POST['contrasena'] : false;

    $usuario_sanitizado = filter_var($usuario, FILTER_SANITIZE_STRING);
    $contrasena_sanitizada = filter_var($contrasena, FILTER_SANITIZE_STRING);

    if ($usuario_sanitizado && $contrasena_sanitizada){
        $sq1 = "SELECT nombre, contrasenia FROM usuario WHERE nombre='$usuario_sanitizado' AND contrasenia='$contrasena_sanitizada'" ;

        $res=mysqli_query($conexion, $sq1);
        $respuesta= mysqli_fetch_assoc($res);

        echo json_encode($respuesta);
    }else{
        echo json_encode(false);
    }
}



?>