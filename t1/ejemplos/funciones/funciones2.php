<?php
$n = "hola";

// function f($x){
//     $x = 30;
//     echo $x;
// }
// f($n);
// function soy ($como = "listo"){
//     echo "soy $como";
// }
// soy();
// soy($n);

function mayor ($edad = 10){
    return $edad>=18 ? "MAYOR" : "MENOR";
}
echo mayor(50);
?>