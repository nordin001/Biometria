<?php
/**
 * 
 *
 * Noureddine Tallal
 * Sprint 0 :Proyecto Medio ambiente
 *insertar datos en la base de datos  
 *devolver los datos de la base de datos
 *
 * ---------------------Me faltan los tests--------------------------------
 */
include './conexion.php';//tenia que ser conectado antes idiot 
function bbddInsert($Medicion,$TipoSensor,$Latitud,$Longitud ){//parte en la que mandamos una sentecia sql a la base de datos

    $sql = "INSERT INTO `datossensor` (`Medicion`, `TipoSensor`,`Latitud`,  `Longitud`) VALUES ('$Medicion', '$TipoSensor','$Latitud','$Longitud')";//meter estos valores
    if (mysqli_query(Conectar(), $sql)) {

        return true;

    } else {
        return false;
    }
}

function buscarBBDD(){
    $sql = "SELECT * FROM `datossensor`";
    return mysqli_query(Conectar(),$sql);
}