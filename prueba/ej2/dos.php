<?php

session_start();
require_once '../ej1/uno.php';

$sustantivos = isset($_SESSION['sustantivos'])?$_SESSION['sustantivos']:null;

if(isset($_SESSION['sustantivos'])){
    echo <<<HTML
   <table border="1">
        <tr>
            <th>Original</th>
            <th>Raíz</th>
            <th>Combinaciones</th>
        </tr>
HTML;
    foreach($sustantivos as $sustantivo){
        echo "<tr>";
        echo "<td>".$sustantivo."</td>";
    echo "<td>".sacarRaiz($sustantivo)."</td>";
    echo "<td>".combinaciones(sacarRaiz($sustantivo))."</td>";
    echo "</tr>";       
    }
    echo "</table>";
      
}

?>