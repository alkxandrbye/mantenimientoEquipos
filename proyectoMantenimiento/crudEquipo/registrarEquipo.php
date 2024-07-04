<?php 
    include "../conexion.php";
    $conexion = conexion();

    // Recuperamos los datos del formulario
    $tipoEquipo = $_POST["tipoEquipo"];
    $idEquipo = $_POST["idEquipo"];
    $idMarca = $_POST["idMarca"];
    $idSala = $_POST["idSala"];

    // Sentencia SQL
    $ssql = "insert into equipo
            values ('$idEquipo', '$tipoEquipo', '$idSala', '$idMarca')";
    
    // Ejecutamos y comprobamos
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }
    $conexion->close();
?>