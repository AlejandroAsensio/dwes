<?php
$f = file_get_contents('quijote.txt','r');

$lineas = explode("\n", $f);
$n = 1;
foreach($lineas as $linea){
    echo "$n: $linea\n";
    $n++;
}