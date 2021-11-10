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
    
    $p = R::findOne('pais',"nombre=$pais");//TODO
    $pp = R::load('pais',$p );
    $per->pais=$pp;
    R::store($per);
    
    desconectar();
    
}

?>