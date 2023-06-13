<?php
    require "config.php";
    $conexion = connect();

    session_start();

    echo $_SESSION["usuario"];

    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <script src='../js/puntos.js'></script>
        <link rel='stylesheet' href='../../statics/css/puntos.css'>
        <title>Casas cw</title>
    </head>
    <body>
        <header>
            <h1> Bienvenidx ".$_SESSION['usuario'].", espero que estes teniendo un día genial</h1>
        </header>
        <main>
            <div id='info-puntos'></div>
        </main>
    </body>
    </html>";
?>