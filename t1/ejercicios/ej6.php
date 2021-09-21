<?php
$nombre = "qwef";
while  ($nombre !="fin"){
    echo "Nombre?\n";
    fscanf(STDIN,"%s\n",$nombre);
    if($nombre!= "fin"){
    
    echo "Edad de $nombre?";
    fscanf(STDIN,"%d\n",$edad);
    $ppl[$nombre] = $edad;
    }
}
foreach($ppl as $k => $v){
    echo "$k($v), ";
}

?>