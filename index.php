<?php
    $casa= array("ajolotes", "halcones", "teporingos");
    $aleat = array_rand($casa, 1);
    $href= "./statics/styles/inicio-registro_".$casa[$aleat].".css";
    $link_registro= "http://localhost/Curso_Web/Actividades_CW/Act_casas/dynamics/php/Registro.php";
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='$href'.css>
        <title>Casas Curso Web 2023</title>
    </head>
    <body>
    <!--Este div va a ser el cuadro que contiene el form de inicio de sesión
    y que tiene el botón para dirigirse al registro en caso de necesitarlo 
    ninguno va a contener los Post o Get para no interferir con los que esten trabajando 
    en el php o js ni id´s para no confundir a los que esten en css -->
    <center><div id='forms'>
        <h1>Bienvenidx!</h1>
        <br>
        <h2>Ingresa tus datos</h2>
        <br>
        <form>
            <label>Nombre:
                <input type='text'>
            </label>
            <br> <br>
            <label>Contraseña:
                <input type='text'>
            </label>
            <br> <br>
            <button type='submit'>Enviar</button>
            <br> <br>
        </form>
        <form>
            <h5>¿Aún no tienes una cuenta?</h5>
            <br> 
            <button><a href='http://localhost/Curso_Web/Actividades_CW/Act_casas/dynamics/php/registro.php'>Registrate aquí!</a></button>
        </form>
    </div></center>
</body>
</html>";
?>
