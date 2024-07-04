<?php 
    include "../conexion.php";
    $conexion = conexion();

    $nombreSala = $_POST["nombreSala"];
    $idSala = $_POST["idSala"];
    $idSede = $_POST["idSede"];

    
    $ssql = "UPDATE sala  
            SET nombreSala='" . $nombreSala . "', idSede='" . $idSede . "'  
            WHERE idSala=" . $idSala;
    
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }
    $conexion->close();
?>