<?php
require_once '../../../utilBD.php';


function insertarProductos($productos){
    $bd = conectarMySQL();
    foreach($productos as $p){
        
            $sql = <<<SQL
insert into producto (nombre,precio)
values ('$p[0]',$p[1])
SQL;
            
            $bd->exec($sql);

    
        
    

        
    
}
}


insertarProductos([
    [
        'cocacola',
        1.2
    ],
    [
        'mejillones',
        3.23
    ],
    [
        'abrelatas',
        4.34
    ]
])?>
