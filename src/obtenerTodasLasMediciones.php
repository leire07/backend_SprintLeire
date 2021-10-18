// obtenerTodasLasMediciones --> [mediciones]


<?php
    require_once 'conexion.php';
    $data = file_get_contents('php://input');
    echo $data;
    $jsonData=json_decode($data);

    //cogemos todos los datos que hay en la tabla
    $query="SELECT * from tabla";
    
    $resultado=$conn->query($query);

    //metemos la información en un array
    $info = array();

    //for que recorre la lista
    foreach($resultado as $row){
        $info[] = $row;
    }
    
    if($resultado==true){
        // si todo va bien, pasamos un array con la información
    echo json_encode($info);
}else{
    echo "Error al obtener datos";
}
?>