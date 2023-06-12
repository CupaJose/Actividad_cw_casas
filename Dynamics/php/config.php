<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    CONST DBPASS = "";
    CONST DB = "casas_cw";

    function connect()
    {
        $conexion = mysqli_connect(DBHOST,DBUSER,DBPASS,DB);
        return $conexion;
    }
?>