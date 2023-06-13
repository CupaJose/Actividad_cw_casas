<?php
    require "config.php";
    $conexion= connect();

    if(!$conexion)
    {
        echo("No se pudo conectar con la base de datos");
    }
    else
    {
        $usuario=(isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "";
        $contrasena=(isset($_POST['contrasena']) && $_POST["contrasena"] != "")? $_POST['contrasena'] : "";
        $casa=(isset($_POST['casa']) && $_POST["casa"] != "")? $_POST['casa'] : "";

        $usuario_sanitizado = filter_var($usuario, FILTER_SANITIZE_STRING);
        $contrasena_sanitizada = filter_var($contrasena, FILTER_SANITIZE_STRING);
        $casa_sanitizada = filter_var($casa,FILTER_SANITIZE_STRING);

        $longuser=strlen($usuario_sanitizado);
        $longcon=strlen($contrasena_sanitizada);

        if($casa_sanitizada=="Ajolotes")
            $casa_id = 1;
        else if($casa_sanitizada=="Halcones")
            $casa_id = 2;
        else if($casa_sanitizada=="Teporingos")
            $casa_id = 3;
        else
            $longcon = 0;

        if ($longcon>=8 && $longuser>=8){
            $peticion="INSERT INTO usuario (nombre, contrasenia, puntos_usuario, casa) VALUES ('$usuario_sanitizado', '$contrasena_sanitizada', 0, $casa_id)";
            $query =mysqli_query ($conexion,$peticion);
            $peticion2 = "SELECT * FROM usuario";
            $query2= mysqli_query($conexion,$peticion2);
            $respuesta = [];
        
            while($datos = mysqli_fetch_array($query2))
            {
                array_push($respuesta,$datos);
            }
            echo json_encode($respuesta);        
        }
        else{
            echo json_encode(false);
        }
    }
?>