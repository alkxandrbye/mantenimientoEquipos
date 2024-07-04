<?php 
    include "../conexion.php";
    $conexion = conexion();

    $idMarca = $_POST["idMarca"];
    $nombreMarca = $_POST["nombreMarca"];

    $ssql = "update marca
            set nombreMarca='".$nombreMarca."'
            where idMarca=".$idMarca;
    
    if($conexion->query($ssql)){
        echo "exito";
    }else{
        echo "error: {$conexion->error}";
    }
    $conexion->close();
?>