<?php
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
        </div></center>
    </body>
    </html>";
?>
