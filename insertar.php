<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $data = file_get_contents('php://input');
    echo $data;
    $jsonData=json_decode($data);
    $Medicion=$jsonData->{'Medicion'};;
    
    $query="INSERT INTO tabla (Medicion) VALUES('".$Medicion."')";
$resultado=$conn->query($query);
if($resultado==true){
    echo "Los datos se introducen de forma correcta";
}else{
    echo "Error al insertar datos";
}
}