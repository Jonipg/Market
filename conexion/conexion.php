<?php
    $servidor = "localhost";
    $usuarioBD = "root";
    $password = "123456789";
    $baseDaotos = "basetesji";

   $conexion = mysqli_connect($servidor,$usuarioBD,$password,$baseDaotos);

    if(!$conexion == true){
        echo "Error al conectar al servidor :(";
    }
    
    /*
    $conexion = mysqli_connect($servidor,$usuarioBD,$password,$baseDaotos)
    
    OR DIE("ERROR AL CONECTAR AL SERVIDOR DE BD");
    */
?>
