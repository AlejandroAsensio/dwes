<?php
echo "Año: \n";
fscanf(STDIN, "%d\n", $a);
echo "Mes: \n";
fscanf(STDIN, "%d\n", $m);
echo "Dia: \n";
fscanf(STDIN, "%d\n", $d);

$fa = time();
$faux = strtotime("1971-1-1");

$fi = strtotime("$a-$m-$d") - $faux;//TODO
$ds = $fa - $fi;

$años = (int) ($ds / 31536000);
$resto = $ds % 31536000;

$meses = (int) ($resto / 2592000);
$resto = $resto % 2592000;

$dias = (int) ($resto / 86400);
$resto = $resto % 86400;

$horas = (int) ($resto / 3600);
$resto = $resto % 3600;

$minutos = (int) ($resto / 60);
$resto = $resto % 60;

echo "Han transcurrido  $años años $meses meses 
$dias dias $horas horas $minutos minutos y $resto segundos
 desde la fecha indicada";
?>
