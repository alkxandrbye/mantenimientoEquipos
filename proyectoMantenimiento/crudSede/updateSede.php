<?php 
    include "../conexion.php";
    $conexion = conexion();

    $idSede = $_POST["idSede"];
    $nombreSede = $_POST["nombreSede"];

    $ssql = "update sede
            set nombreSede='".$nombreSede."'
            where idSede=".$idSede;
    
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }
    $conexion->close();
?>