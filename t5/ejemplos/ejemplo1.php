<?php
require_once '../../utilBD.php';
$bd = conectarMySQL();
$update = <<<SQL
update persona 
set nombre='Mari Carmen' 
where nombre='ana'
SQL;
$sql = <<<SQL
insert into persona(id,nombre)
values(4,'ana')
SQL;
$borrar = <<<SQL
delete from persona
where id=3
SQL;
try {
    $bd->exec($update);
    echo "Personas modificadas";
} catch (Exception $e) {
    echo "Ooh";
}
// try {
//     $bd->exec($sql);
//     echo "Persona creada";
// } catch (Exception $e) {
//     echo "ID duplicado";
// }

// $bd->exec($borrar);
// echo "Personas borradas";

?>