<?php
$cadena = "Jorge es muy tonto, pero muy tonto eh, bastante tonto diria yo, que bastante tonto si es\nincluso se podria decir que es un poco payaso";
$prohibir = ["tonto","payaso"];
foreach($prohibir as $prohibido){
    $cadena = str_replace($prohibido, "*****", $cadena);
}
echo $cadena;
?>