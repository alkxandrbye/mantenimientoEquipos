<?php 
    include "../conexion.php";
    $conexion = conexion();

    // Recuperamos los datos del formulario
    $id = $_POST["codMonitor"];
    $nombre = $_POST["nombreMonitor"];

    // Sentencia SQL
    $ssql = "insert into monitor
            values ('$id', '$nombre')";
    
    // Ejecutamos y comprobamos
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }
    $conexion->close();
?>