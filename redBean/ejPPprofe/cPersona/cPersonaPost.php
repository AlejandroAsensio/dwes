<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre'])? $_POST['nombre'] : 'John Doe';
$idPaisN = isset($_POST['idPaisN'])? $_POST['idPaisN'] : null;
$idPaisV = isset($_POST['idPaisV'])? $_POST['idPaisV'] : null;
$idAficiones = isset($_POST['idAficiones'])? $_POST['idAficiones'] : [];

conectar();
$persona = R::dispense('persona');
$persona->nombre = $nombre;
$persona->nace = R::load('pais',$idPaisN);
$persona->vive = R::load('pais', $idPaisV);
foreach ($idAficiones as $idAficion){
   $persona->sharedAficionList[] = R::load('aficion',$idAficion);
}

R::store($persona);
desconectar();

header('Location:../rPersona/rPersonaGet.php');
?>
