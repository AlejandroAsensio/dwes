<?php
// $f1 = fopen('prueba.txt', 'r');
// $f2 = fopen('copia.txt', 'w');

// echo "Ficheros abiertos\n";

// // $linea1 = 'En un lugar de La Mancha ';
// // $linea2 = 'de cuyo nombre no quiero acordarme ';
// // $linea3 = 'no ha mucho que vivia un hidalgo ';

// // fputs($f,$linea3);

// while (! feof($f1)) {
//     $linea = fgets($f1);
    
    
    
//     fputs($f2, implode('<b>un</b>',explode('un',$linea)));
//     // echo "$linea\n";
// }

// fclose($f1);
// fclose($f2);
// echo "Ficheros cerrados\n";
$lineas = <<<QUIJOTE
En un lugar de La Mancha
de cuyo nombre no quiero acordarme
no ha mucho que vivía un hidalgo
de los de lanza en astillero
QUIJOTE;
file_put_contents('quijote.txt', $lineas);

// $lectura = file_get_contents('quijote.txt');
// echo $lectura;

?>