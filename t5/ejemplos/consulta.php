<?php
require_once '../../utilBD.php';
$bd = conectarMySQL();
$sql = <<<SQL
select * 
from persona
SQL;
$filas = $bd->query($sql);
foreach ($filas as $fila){
    echo "ID: ".$fila['id'].", Nombre: ".$fila['nombre']."<br/>\n";
    
}