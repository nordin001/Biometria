 <?php
/**
 * Noureddine Tallal
 * 
 * Proyecto Medio ambiente
 * ------------Handling the request----------------------
 * 
 */

include './logica.php';
$_METODO = $_SERVER['REQUEST_METHOD'];


if($_METODO=='POST'){//si es la sentencia POST hazme esto
    $data = file_get_contents('php://input');
    $jsonData=json_decode($data); // Decodificamos los datos
    $Medicion=$jsonData->{'Medicion'}; // Vamos almacenando en cada variable los datos que llegan de la base de datos
    $TipoSensor=$jsonData->{'TipoSensor'};
    $Latitud=$jsonData->{'Latitud'};
    $Longitud=$jsonData->{'Longitud'};
echo guardarMedida($Medicion,$TipoSensor,$Latitud,$Longitud);

}elseif($_METODO=='GET'){
    echo obtenerMedida();
}

//Si la petición es de metodo POST

?>
