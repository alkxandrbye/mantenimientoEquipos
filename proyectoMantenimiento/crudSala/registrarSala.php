<?php 
    include "../conexion.php";
    $conexion = conexion();

    // Recuperamos los datos del formulario
    $idSala = $_POST["idSala"];
    $nombreSala = $_POST["nombreSala"];
    $idSede = $_POST["idSede"];


    // Sentencia SQL
    $ssql = "insert into sala
            values ('$idSala', '$nombreSala', '$idSede')";
    
    // Ejecutamos y comprobamos
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }
    $conexion->close();
?>