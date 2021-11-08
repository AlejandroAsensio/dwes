<?php
function conectar(){
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar(){
    R::close();
}


$nombre = isset($_GET['nombre'])? $_GET['nombre']:null;
$pais = isset($_GET['pais'])? $_GET['pais']:null;

if($nombre != null){
    conectar();
    $per = R::dispense('persona');
    $per->nombre = $nombre;
    $p = R::dispense('pais');
    $p = R::getCell("select id from pais where nombre = '$pais' ");//TODO
    $per->pais=$p;
    R::store($per);
    
    desconectar();
    
}

?>