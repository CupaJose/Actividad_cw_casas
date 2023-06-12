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

        $longuser=strlen($usuario);
        $longcon=strlen($contrasena);

        if ($longcon>=8 && $longuser>=8){
            $peticion="INSERT INTO usuario (nombre, contrasenia) VALUES ('$usuario', '$contrasena')";
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
    
    }
?>