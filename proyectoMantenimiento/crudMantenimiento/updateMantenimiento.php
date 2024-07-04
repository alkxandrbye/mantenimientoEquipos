<?php 
    include "../conexion.php";
    $conexion = conexion();

    $idMantenimiento = $_POST["idMantenimiento"];
    $idEquipo = $_POST["idEquipo"];
    $tipo = $_POST["tipoMantenimiento"];
    $problema = $_POST["problemaMantenimiento"];
    $descripcion = $_POST["descripcionMantenimiento"];
    $fecha = $_POST["fechaMantenimiento"];
    $monitor = $_POST["codMonitor"];
    $ssql = "update mantenimiento
            set idEquipo='.$idEquipo.', tipoMantenimiento='".$tipo."', 
                problemaMantenimiento='".$problema."', descripcionMantenimiento='".$descripcion."', 
                fechaMantenimiento='".$fecha."', codMonitor='.$monitor.'
            where idMantenimiento=".$idMantenimiento;
    
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }
    $conexion->close();
?>