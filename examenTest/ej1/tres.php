<?php
$mes = isset($_GET['mes'])? $_GET['mes'] : null;

$signo =isset($_GET['signo'])? $_GET['signo'] : null;


echo "Signo escogido: $signo <br/>\n" ;
echo "Mes escogido: $mes";