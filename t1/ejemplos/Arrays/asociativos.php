<?php

// $a [10]=100;
// $a [20]=200;
// $a [30]='Pepe';
// $a ['pepe'] = 100;
// $a ['pepe'] = -5;


// foreach ($a as $k=> $v){
//     echo "($k)$v ";
// }

$colorF['pepe'] = "azul";
$colorF['maria'] = "rosa";

echo $colorF['pepe'];
echo " --- ";
$nombre = "maria";
echo $colorF[$nombre];

?>