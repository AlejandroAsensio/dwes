<?php
$baraja = [
    'as',
    'dos',
    'tres',
    'cuatro',
    'cinco',
    'seis',
    'siete',
    'sota',
    'caballo',
    'rey'
];

echo "Introduce un numero";
fscanf(STDIN, "%d\n", $n);

for ($i = 0; $i < $n; $i ++) {

    echo $baraja[$i % 10] . " ";
}
?>

