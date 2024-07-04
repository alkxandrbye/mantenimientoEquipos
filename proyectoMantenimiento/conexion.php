<?php 
    function conexion(){
        $mysqli_conexion = new mysqli("localhost", "root", "", "mantenimientoequipos");
        if ($mysqli_conexion->connect_errno){
            echo "Error de conexion: " . $mysqli_conexion->connect_errno;
            exit;
        }
        return $mysqli_conexion;
    }
?>