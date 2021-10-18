// obtenerTodasLasMediciones --> [mediciones]


<?php
    require_once 'conexion.php';
    $data = file_get_contents('php://input');
    echo $data;
    $jsonData=json_decode($data);

    $query="SELECT * from tabla";
    
    $resultado=$conn->query($query);

    $info = array();

    foreach($resultado as $row){
        $info[] = $row;
    }
    
    if($resultado==true){
    echo json_encode($info);
}else{
    echo "Error al obtener datos";
}
?>