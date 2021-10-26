<?php
require_once '../../../utilBD.php';


function insertarProductos($productos){
    $bd = conectarMySQL();
    foreach($productos as $p){
       
//         $sql = <<<SQL
//             insert into producto (nombre,precio)
//             values ('$nombre',$precio)
// SQL;
//         $sql = <<<SQL
//             insert into producto (nombre,precio)
//             values (?,?)
// SQL;
        $sql = <<<SQL
            insert into producto (nombre,precio)
            values (:nombre,:precio)
SQL;
//         $bd->exec($sql);
    $sentenciaPreparada = $bd->prepare($sql);
    $sentenciaPreparada->bindParam(':nombre',$p[0]);
    $sentenciaPreparada->bindParam(':precio',$p[1]);
    $sentenciaPreparada->execute();
    }
}
?>
