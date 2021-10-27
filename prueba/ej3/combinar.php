<?php
require_once '../ej1/uno.php';

$sustantivo = isset($_GET['nombre'])? $_GET['nombre']:null;

if($sustantivo!=null){
    echo combinaciones(sacarRaiz($sustantivo));
}


?>