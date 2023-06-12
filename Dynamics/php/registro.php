<?php
    require "config.php";
    $conexion= connect();

    

    if(!$conexion)
    {
        echo("No se pudo conectar con la base de datos");
    }
    else
    {
        $usuario=(isset($_POST['usuario']) && $_POST["usuario"] != "")? $_POST['usuario'] : "";
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
    $casa= array("ajolotes", "halcones", "teporingos");
    $aleat = array_rand($casa, 1);
    $href= "../../statics/styles/inicio_registro_".$casa[$aleat].".css";
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Registro</title>
        <link rel='icon' href='../media/Ajolote.png' type='image/x-png'>
        <link rel='stylesheet' href='$href'>
    </head>
    <body>
        <center><div id='forms'>
            <h1>Bienvenidx nuevx usuarix!</h1>
            <!--El div de el form de registro-->
            <br><br><br><br>
                <form >
                    <label>Nombre:
                        <input type='text' name='nombre'>
                    </label>
                    <br> <br>
                    <label>Contraseña:
                        <input type='password' name='contrasena'>
                    </label>
                    <br> <br>
                    <button type='submit'>Enviar</button>
                    <br> <br>
                </form>
        </div></center>
    </body>
    </html>";
?>
