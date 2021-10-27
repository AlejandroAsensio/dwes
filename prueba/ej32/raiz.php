<?php
require_once '../ej1/uno.php';

$sustantivo = isset($_POST['nombre'])? $_POST['nombre']:null;

if($sustantivo!=null){
    echo sacarRaiz($sustantivo);
}


?>