<?php 
    include "../conexion.php";
    $conexion = conexion();

    // Recuperamos los datos del formulario
    $id = $_POST["idSede"];
    $nombre = $_POST["nombreSede"];

    // Sentencia SQL
    $ssql = "insert into sede
            values ('$id', '$nombre')";
    
    // Ejecutamos y comprobamos
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}</p>";
    }
    $conexion->close();
?>