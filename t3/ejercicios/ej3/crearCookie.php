<?php
$nombre = isset($_COOKIE['nombre'])? $_COOKIE['nombre']:null;
$contenido = isset($_COOKIE['contenido'])? $_COOKIE['contenido']:null;
$nivel = isset($_COOKIE['nivel'])? $_COOKIE['nivel']:null;

if($nombre!=null && $contenido != null && $nombre!=null){
    if($nivel==0){
        setcookie($nombre,$contenido,'/');
    }
    else if($nivel==1){
        setcookie($nombre,$contenido,'/uno/');
    }
    else if($nivel==2){
        setcookie($nombre,$contenido,'/uno/dos/');
    }
}
else{
    if ($nombre==null) {
        echo "El nombre no puede ser nulo<br/>";
    }
    
    if ($contenido==null) {
        echo "El contenido no puede ser nulo<br/>";
    }
    
    if ($nivel==null) {
        echo "El nivel no puede ser nulo<br/>";
    }
    
}
?>
<h1>Cookie<?= $nombre?></h1>