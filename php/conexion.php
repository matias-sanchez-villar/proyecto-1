<?php

    $conexion= mysqli_connect ("localhost", "root", "");
        if(mysqli_connect_errno()){ ///verificamos la coneccion
            echo "salio mal";
            exit();
        }
    mysqli_select_db($conexion, "tp9") or die ("no se encuentra la base de datos");///verificamos la base de datos
    mysqli_set_charset($conexion, "utf8"); /// ponemos los caracteres en español

        

?>