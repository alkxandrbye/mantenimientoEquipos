<?php 
    include "../conexion.php";
    $conexion = conexion();

    $tipoEquipo = $_POST["tipoEquipo"];
    $idEquipo = $_POST["idEquipo"];
    $idMarca = $_POST["idMarca"];
    $idSala = $_POST["idSala"];
    
    $ssql = "UPDATE equipo  
            SET tipoEquipo='" . $tipoEquipo . "', idSala='" . $idSala . "', idMarca='" . $idMarca . "'  
            WHERE idEquipo=" . $idEquipo;
    
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }
    $conexion->close();
?>