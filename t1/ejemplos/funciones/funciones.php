<?php

function doble($x)
{   
    $x = 2*$x;
    return $x;
}
$numero = 10;
echo "\n";
echo $numero;

echo "\n";
echo doble($numero);

echo "\n";
echo $numero;

//se puede llamar antes de crear la funcion
// echo doble(6);

?>