<?php
// $articulo = file_get_contents('../ej01/articulo.txt');

$f = fopen('../ej01/articulo.txt','r');
$texto = "";
while(!feof($f)){
    $lineas = fgets($f);
    $linea = explode(' ',$lineas);
    foreach($linea as $p){
        if($p == $_GET['p']){
            $texto.="<b><u>$p</u></b> ";
        }
        else{
            $texto.="$p ";
        }
    }
    $texto.="<br/>";
}

echo $texto;
?>

