<?php

function operacion($pal, $sum, $mult)
{
    switch ($pal) {
        case "sumar":
            echo "La suma de los numeros es $sum";
            break;
        case "multiplicar":
            echo "La multiplicacion de los numeros es $mult";
            break;
        default:
            echo "error";
            break;
    }
}
$sum = 0;
$mult = 1;
$n = 100;

while ($n != 0) {
    echo 'Introduce n: ';
    fscanf(STDIN, "%d\n", $n);
    if ($n != 0) {
        $sum += $n;
        $mult *= $n;
    }
}
echo "Que operacion quieres hacer";
fscanf(STDIN, "%s\n", $p);
operacion($p, $sum, $mult);
?>