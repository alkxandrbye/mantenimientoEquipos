<?php 
    include "../conexion.php";
    $conexion = conexion();

    // Recuperamos los datos del formulario
    $idMantenimiento = $_POST["idMantenimiento"];
    $idEquipo = $_POST["idEquipo"];
    $tipo = $_POST["tipoMantenimiento"];
    $problema = $_POST["problemaMantenimiento"];
    $descripcion = $_POST["descripcionMantenimiento"];
    $fecha = $_POST["fechaMantenimiento"];
    $monitor = $_POST["codMonitor"];

    // Sentencia SQL
    $ssql = "insert into mantenimiento
            values ('$idMantenimiento', '$idEquipo', '$tipo', '$problema', '$descripcion', '$fecha', '$monitor')";
    
    // Ejecutamos y comprobamos
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }
    $conexion->close();
?>