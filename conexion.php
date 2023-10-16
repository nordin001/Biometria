<?php

/**
 * Noureddine Tallal
 * Sprint 0 :Proyecto Medio ambiente
 * 
 * conexion a la base de datos 
 * 
 */
function Conectar(){

    //conexion en servidor local

    $server = "localhost";
    $user = "root";
    $password = "";
    $dbName = "biometria";
    $mysql=new mysqli("localhost","root","","biometria");

    $conn = mysqli_connect($server, $user, $password, $dbName);
    //comprobamos si la conexion falla

    if (!$conn) {
        http_response_code(500);
        die("Error: " . mysqli_connect_error());
    }
    else{
        //echo"conectado";
    }
    
    return $conn;
}

