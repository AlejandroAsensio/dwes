<?php
function conectar(){
require_once '../rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar(){
    R::close();
}

conectar();
echo 'Conectado'.PHP_EOL;

// $c = R::dispense('colegio');
// $c ->nombre = 'IES Rey Fernando VI';
// R::store($c);

// $a = R::dispense('alumno');
// $a->nombre = 'Pepe';

// $a->colegio=$c;
// R::store($a);

$a = R::dispense('alumno');
$a->nombre = 'Pepe';
R::store($a);
 
$c = R::dispense('colegio');
$c ->nombre = 'IES Rey Fernando VI';
$c->ownAlumnoList[]=$a;
// array_push($c->ownAlumnoList,$a);
R::store($c);


desconectar();
echo 'Desconectado'.PHP_EOL;

?>