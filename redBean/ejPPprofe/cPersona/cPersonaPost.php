<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre'])? $_POST['nombre'] : 'John Doe';
$idPais = isset($_POST['idPais'])? $_POST['idPais'] : null;
conectar();

$persona = R::dispense('persona');
$persona->nombre = $nombre;
$persona->pais = R::load('pais',$idPais);
R::store($persona);
desconectar();

header('Location:../rPersona/rPersonaGet.php');
?>
