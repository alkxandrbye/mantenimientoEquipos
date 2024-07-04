<?php 
    include "../conexion.php";
    $conexion = conexion();

    $codMonitor = $_POST["codMonitor"];
    $nombreMonitor = $_POST["nombreMonitor"];

    $ssql = "update monitor
            set nombreMonitor='".$nombreMonitor."'
            where codMonitor=".$codMonitor;
    
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: " . $conexion->error;
    }
    $conexion->close();
?>
