<?php
function conectar(){
    require_once '../rb.php';
    R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar(){
    R::close();
}


conectar();

$pais = isset($_GET['pais'])? $_GET['pais']:null;
    
if($pais!=null){
    $p = R::dispense('pais');
    $p->nombre = $pais;
    R::store($p);
    
    desconectar();
    header('Location:listaPaises.php');
}

?>