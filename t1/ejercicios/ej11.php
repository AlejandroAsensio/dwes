<?php
$cadena="Alberto:Garay:913334455//Ana:Garcia:914445566";
$sep = explode("//",$cadena);
foreach($sep as $p){
    $sep2 = explode(":",$p);
    echo "Nombre: $sep2[0]\n
Apellido: $sep2[1]\n
Telefono: $sep2[2]\n------------------------\n------------------------\n";
}
?>