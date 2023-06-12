<?php
include("./config.php");
$conexion= connect();
if (!$conexion){
    echo "Error en la conexión";
}else{
    $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : false;
    $contrasena=(isset($_POST['contrasena']) && $_POST["contrasena"] != "")? $_POST['contrasena'] : false;

    if ($usuario && $contrasena){
    $sq1 = "SELECT nombre, contrasenia FROM usuario WHERE nombre='$usuario' AND contrasenia='$contrasena'" ;
    
    $res=mysqli_query($conexion, $sq1);
    $respuesta= mysqli_fetch_assoc($res);

    echo json_encode($respuesta);
    }else{
        echo json_encode(false);
    }
}



?>