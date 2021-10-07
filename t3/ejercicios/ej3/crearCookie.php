<?php
$nombre = isset($_GET['nombre'])? $_GET['nombre']:null;
$contenido = isset($_GET['contenido'])? $_GET['contenido']:null;
$nivel = isset($_GET['nivel'])? $_GET['nivel']:null;

if($nombre!=null && $contenido != null && $nombre!=null){
    $rutaBase = pathinfo($_SERVER['REQUEST_URI'])['dirname'];
    if($nivel==0){
        setcookie($nombre,$contenido,0,$rutaBase.'/');
    }
    else if($nivel==1){
        setcookie($nombre,$contenido,0,$rutaBase.'/uno/');
    }
    else if($nivel==2){
        setcookie($nombre,$contenido,0,$rutaBase.'/uno/dos/');
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
<h1>Cookie <?= $nombre?></h1>