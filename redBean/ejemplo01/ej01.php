<?php
function conectar(){
require_once '../rb.php';
R::setup('mysql:host=localhost;dbname=test', 'root', '');
}

function desconectar(){
    R::close();
}

//======================

conectar();
echo 'Conectado'.PHP_EOL;

// //crea un objeto persistente de esa clase
// $p = R::dispense('persona');
// // $p ->nombre = 'Nuevo';
// // $p ->apellido = 'García';    
// // $p ->telefono = '918765432';
// $p->nombre = 'Dos';
// $p -> fNacimiento = '2011-11-24';
// // $p -> apellido = 'López';
// // $p['telefono'] = '918765431';
// $p->tonto = true;


// $p = R::load('persona',4);
// echo $p->nombre.PHP_EOL;
// echo $p->apellido.PHP_EOL;
// $p->profesion = 'Deportista';
// $p->telefono = '919875642';


// R::store($p);

// $p = R::load('persona',5);
// R::trash($p);

// $personas = R::findAll('persona');

// foreach($personas as $persona){
//         echo 'Nombre: '.$persona['nombre'].PHP_EOL;
//         echo 'Apellido: '.$persona['apellido'].PHP_EOL;
//        echo "==============================\n";
// }
// foreach($personas as $persona){
//     echo 'Nombre: '.$persona->nombre.PHP_EOL;
//     echo 'Apellido: '.$persona->apellido.PHP_EOL;
//     echo "==============================\n";
// }

// $apellido = 'García';
// $personas = R::find('persona',"apellido ='$apellido'");

// foreach($personas as $persona){
//         echo 'Nombre: '.$persona['nombre'].PHP_EOL;
//         echo 'Apellido: '.$persona['apellido'].PHP_EOL;
//        echo "==============================\n";
// }

// $apellido = 'García';
// $nombre = 'Pepe';
// $personas = R::find('persona',"nombre=? and apellido =?",[$nombre,$apellido]);

// foreach($personas as $persona){
//     echo 'Nombre: '.$persona['nombre'].PHP_EOL;
//     echo 'Apellido: '.$persona['apellido'].PHP_EOL;
//     echo "==============================\n";
// }

// $apellido = 'García';
// $nombre = 'Pepe';
// $personas = R::find('persona',"nombre=:nom and apellido =:ape",[':ape' =>$apellido,':nom'=>$nombre]);

// foreach($personas as $persona){
//     echo 'Nombre: '.$persona['nombre'].PHP_EOL;
//     echo 'Apellido: '.$persona['apellido'].PHP_EOL;
//     echo "==============================\n";
// }

$sql = <<<SQL
select count(*) as nump
from persona
where apellido is not null
SQL;

// $filas = R::getAll($sql);

// foreach ($filas as $fila){
//     echo $fila['nump'].PHP_EOL;
// }
$resultado = R::getCell($sql);

echo $resultado.PHP_EOL;

desconectar();
echo 'Desconectado'.PHP_EOL;

?>