<?php
    /*No quise interferir con el trabajo de la base de datos y los de php, pero aquí solo
    hay que cambiar que dependiendo la casa q elija pues va a mandarlo al css indicado, 
    por lo mientras lo dejé en aleatorio, se podría quedar, pero es mejor que coincida con la casa*/
    $casa = array ("Ajolotes","Teporingos","Halcones");
    $aleat = array_rand($casa,1);
    $href= "./statics/css/B".$casa[$aleat].".css";


echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='$href'.css>
    <title>Registro</title>
    <link rel='icon' href='../media/Ajolote.png' type='image/x-png'>
</head>
<body>
<center><h1>Bienvenidx nuevx usuarix!</h1></center>
<!--El div de el form de registro-->
<br><br>
<center><div id='forms'>
<br><br><br><br><br><br><br><br>
    <form>
        Porfavor ingresa tus datos <br><br>
        <label for='Nombre'>Nombre:
            <input type='text' name='Nombre'>
        </label>
        <br> <br>
        <label>Contraseña:
            <input type='text'>
        </label>
        <br> <br>
        <button type='submit' value='Registrame'> Registrame</button>
        <br> <br>
    </form>
</div>
</center>
</body>
</html>";
    ?>
