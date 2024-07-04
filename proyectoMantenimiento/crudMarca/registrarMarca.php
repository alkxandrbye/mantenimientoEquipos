<?php 
    include "../conexion.php";
    $conexion = conexion();

    // Recuperamos los datos del formulario
    $id = $_POST["idMarca"];
    $nombre = $_POST["nombreMarca"];

    // Sentencia SQL
    $ssql = "insert into marca
            values ('$id', '$nombre')";
    
    // Ejecutamos y comprobamos
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}</p>";
    }
    $conexion->close();
?>