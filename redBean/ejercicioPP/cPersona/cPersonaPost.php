<?php
require_once '../bd/bdh.php';
$nombre = isset($_POST['nombre'])? $_POST['nombre'] : 'John Doe';
$idPaisN = isset($_POST['idPaisN'])? $_POST['idPaisN'] : null;
$idPaisV = isset($_POST['idPaisV'])? $_POST['idPaisV'] : null;
// $idAficiones = isset($_POST['idAficiones'])? $_POST['idAficiones'] : [];
$idAficionesGusta = isset($_POST['idAficionesGusta'])? $_POST['idAficionesGusta'] : [];
$idAficionesOdio = isset($_POST['idAficionesOdio'])? $_POST['idAficionesOdio'] : [];    
conectar();
$persona = R::dispense('persona');
$persona->nombre = $nombre;
$persona->nace = R::load('pais',$idPaisN);
$persona->vive = R::load('pais', $idPaisV);
// foreach ($idAficiones as $idAficion){
//    $persona->sharedAficionList[] = R::load('aficion',$idAficion);
// }
    foreach ($idAficionesGusta as $idAficionGusta){
        $aficionGusta = R::load('aficion',$idAficionGusta);
        $gusta = R::dispense('gusta');
        $gusta->aficion = $aficionGusta;
        $gusta->persona = $persona;
        R::store($gusta);
     }
     
     foreach ($idAficionesOdio as $idAficionOdio){
         $aficionOdio = R::load('aficion',$idAficionOdio);
         $odio = R::dispense('odio');
         $odio->aficion = $aficionOdio;
         $odio->persona = $persona;
         R::store($odio);
     }

R::store($persona);
desconectar();

header('Location:../rPersona/rPersonaGet.php');
?>
