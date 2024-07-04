<?php 
    include "../conexion.php";
    $conexion = conexion();

    $id = $_GET["id"];

    $ssql = "delete from sala
            where idSala =".$id;
    
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }

    $conexion->close();
?>