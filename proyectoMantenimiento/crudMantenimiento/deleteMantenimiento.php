<?php 
    include "../conexion.php";
    $conexion = conexion();

    $id = $_GET["id"];

    $ssql = "delete from mantenimiento
            where idMantenimiento =".$id;
    
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }

    $conexion->close();
?>