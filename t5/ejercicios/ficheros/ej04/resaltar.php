<?php

$color = isset($_GET['color'])? $_GET['color'] : null;
    
// $articulo = file_get_contents('../ej01/articulo.txt');
$negro = isset($_GET['negrita'])? $_GET['negrita'] : null;

$sub = isset($_GET['sub'])? $_GET['sub'] : null;
    $na = "";
    $nc = "";
    $ua = "";
    $uc = "";
if($negro!=null){
    $na = "<b>";
        $nc = "</b>";
}
if($sub!=null){
    $ua = "<u>";
    $uc = "</u>";
}


$f = fopen('../ej01/articulo.txt','r');
$texto = "";
while(!feof($f)){
    $lineas = fgets($f);
    $linea = explode(' ',$lineas);
    foreach($linea as $p){
        if($p == $_GET['p']){
            
            $texto.=" <font color='$color'>$na $ua $p $uc $nc</font> ";
        }
        else{
            $texto.="$p ";
        }
    }
    $texto.="<br/>";
}

echo $texto;
?>

