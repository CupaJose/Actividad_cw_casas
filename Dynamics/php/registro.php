<?php
    $casa= array("ajolotes", "halcones", "teporingos");
    $aleat = array_rand($casa, 1);
    $href= "../../statics/styles/inicio-registro_".$casa[$aleat].".css";
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Registro</title>
        <script src='../js/script.js'></script>
        <link rel='icon' href='../../media/Ajolote.png' type='image/x-png'>
        <link rel='stylesheet' href='$href'>
    </head>
    <body>
        <center><div id='forms'>
            <h1>Bienvenidx nuevx usuarix!</h1>
            <!--El div de el form de registro-->
            <br><br><br><br>
                <form id='registro-form'>
                    <label>Nombre:
                        <input type='text' name='nombre'>
                    </label>
                    <br> <br>
                    <label>Contraseña:
                        <input type='password' name='contrasena'>
                    </label>
                    <br> <br>
                    <button type='button' id='btnregistro'>Enviar</button>
                    <br> <br>
                </form>
        </div></center>
    </body>
    </html>";
?>
