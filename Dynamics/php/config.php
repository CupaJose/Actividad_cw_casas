<?php
    define("DBUSER","alumno");
    define("DBHOST","localhost");
    define("DBPASS","");
    define("DB","casas_cw");

    function connect()
    {
        $conexion = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
        if(!$conexion)
        {
            mysqli_connect_error();
            echo "No se pudo";
        }
        return $conexion;
    }
?>